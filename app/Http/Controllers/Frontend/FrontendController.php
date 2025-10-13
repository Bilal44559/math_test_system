<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\EnrollmentCreatedMail;
use App\Models\Enrollment;
use App\Models\Transaction;
use App\Models\PaymentSetting;
use App\Models\EnrollmentToken;
use App\Models\Mcq;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Carbon\Carbon;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function eligibility()
    {
        return view('frontend.eligibility');
    }
    public function enroll()
    {
        return view('frontend.enroll');
    }
    public function payment()
    {
        $paymentSetting = PaymentSetting::first();
        if (!$paymentSetting) {
            return redirect()->back()->with('error', 'Payment settings not found.');
        }
        return view('frontend.payment', compact('paymentSetting'));
    }
    public function refunds()
    {
        return view('frontend.refunds');
    }
    public function syllabus()
    {
        return view('frontend.syllabus');
    }
    public function terms()
    {
        return view('frontend.terms');
    }

    public function initiateEnrollmentPayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'age_years' => 'nullable|numeric|min:1',
            'age_months' => 'nullable|numeric|min:1|max:12',
            'gender' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
            'guardian_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $validator->validated();
        session(['enrollment_data' => $data]);
        return redirect()->route('payment');
    }

    public function processPayment(Request $request)
    {
        $total = floatval($request->total ?? 0);
        if (!session()->has('enrollment_data')) {
            return redirect()->route('frontend.enroll')->with('error', 'Session expired. Please try again.');
        }

        $data = session('enrollment_data');
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => intval($total * 100),
                'currency' => 'cad',
                'payment_method' => $request->payment_method_id,
                'confirm' => true,
                'automatic_payment_methods' => [
                    'enabled' => true,
                    'allow_redirects' => 'never',
                ],
                'description' => 'Enrollment Payment - TM Math Academy',
                'receipt_email' => $data['email'],
            ]);

            if ($paymentIntent->status === 'requires_action' &&
                $paymentIntent->next_action->type === 'use_stripe_sdk') {
                return response()->json([
                    'requires_action' => true,
                    'payment_intent_client_secret' => $paymentIntent->client_secret,
                ]);
            } elseif ($paymentIntent->status === 'succeeded') {
                $rawPassword = Str::random(10);
                $user = User::where('email', $data['email'])->first();
                if ($user) {
                    $user->update([
                        'name' => $data['full_name'],
                        'password' => Hash::make($rawPassword),
                        'status' => 1,
                    ]);
                } else {
                    $user = User::create([
                        'email' => $data['email'],
                        'name' => $data['full_name'],
                        'password' => Hash::make($rawPassword),
                        'status' => 1,
                        'role' => 'student',
                    ]);
                }
                $enrollment = Enrollment::create(array_merge($data, [
                    'user_id' => $user->id,
                ]));

                Transaction::create([
                    'enrollment_id' => $enrollment->id,
                    'stripe_payment_id' => $paymentIntent->id,
                    'stripe_payment_method' => $paymentIntent->payment_method,
                    'amount' => $paymentIntent->amount,
                    'currency' => $paymentIntent->currency,
                    'status' => $paymentIntent->status,
                    'description' => $paymentIntent->description,
                    'receipt_email' => $paymentIntent->receipt_email,
                    'stripe_response' => $paymentIntent->toArray(),
                ]);

                $payload = json_encode([
                    'email' => $user->email,
                    'password' => $rawPassword,
                    'enrollment_id' => $enrollment->id,
                ]);

                $token = Crypt::encryptString($payload);
                $link = route('enroll.test-start', ['token' => $token]);

                EnrollmentToken::create([
                    'enrollment_id' => $enrollment->id,
                    'token' => $token,
                    'expires_at' => now()->addHours(3),
                ]);


                Mail::to($user->email)->send(new EnrollmentCreatedMail($user->email, $rawPassword, $link, $enrollment));

                session()->forget('enrollment_data');

                return redirect()->route('enroll')->with('success', 'Payment successful! Enrollment completed.');
            }

            return back()->with('error', 'Payment could not be completed.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function testStart(Request $request, $token)
    {
        $tokenData = EnrollmentToken::where('token', $token)->first();

        if (!$tokenData || $tokenData->used || Carbon::parse($tokenData->expires_at)->isPast()) {
            abort(400, 'Invalid or expired token.');
        }

        $decrypted = Crypt::decryptString($token);
        $data = json_decode($decrypted, true);

        $tokenData->update(['used' => true]);

        return redirect()->route('student.login')->with([
            'email' => $data['email'],
            'password' => $data['password']
        ]);
    }

    public function studentLoginPage()
    {
        return view('student.login');
    }

    public function studentLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            session(['level' => 1]);
            return redirect()->route('attempt.index')->with('success', 'Welcome! Your test is ready.');
        }
        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    public function questions(Request $request)
    {
        $level = session('level', 1);
        $user = Auth::user();

        // Determine question range based on level
        $start = ($level - 1) * 15 + 1;
        $end = $level * 15;

        $questions = Mcq::whereBetween('id', [$start, $end])
            ->where('status', 1)
            ->with('options')
            ->get();

        if ($questions->isEmpty()) {
            return view('student.test-finish', ['message' => 'No questions found.']);
        }

        return view('student.attempt', compact('questions', 'level'));
    }

    public function submit(Request $request)
    {
        $user = Auth::user();
        $level = session('level', 1);

        $answers = $request->input('answers', []);
        $correctCount = 0;

        // Create attempt record
        $attempt = Attempt::create([
            'user_id' => $user->id,
            'level' => $level,
            'total_questions' => count($answers),
        ]);

        foreach ($answers as $mcqId => $optionId) {
            $option = \App\Models\Option::find($optionId);
            $isCorrect = $option && $option->is_correct == 1;

            if ($isCorrect) {
                $correctCount++;
            }

            Answer::create([
                'attempt_id' => $attempt->id,
                'mcq_id' => $mcqId,
                'selected_option_id' => $optionId,
                'is_correct' => $isCorrect,
            ]);
        }

        $attempt->update([
            'correct_count' => $correctCount,
            'status' => $correctCount >= 9 ? 'passed' : 'failed',
        ]);

        // Level logic
        if ($correctCount >= 9) {
            if ($level < 3) {
                session(['level' => $level + 1]);
                return redirect()->route('attempt.index')
                    ->with('success', 'Good job! Continue to the next set of questions.');
            } else {
                session()->forget('level');
                return view('student.congratulations', ['correctCount' => $correctCount]);
            }
        } else {
            session()->forget('level');
            return view('student.test-finish', ['message' => 'You did not clear this level. Check your email for feedback.']);
        }
    }
}

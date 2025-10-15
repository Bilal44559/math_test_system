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
use App\Models\Attempt;
use App\Models\Answer;
use App\Models\Option;
use App\Mail\TestResultMail;

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

    public function thanks()
    {
        return view('frontend.thanks');
    }

    public function initiateEnrollmentPayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'age_years' => 'required|numeric|min:1',
            'age_months' => 'required|numeric|min:1|max:12',
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
            return redirect()->route('enroll')->with('error', 'Session expired. Please try again.');
        }

        $data = session('enrollment_data');
        $existingEnrollment = Enrollment::where('email', $data['email'])->first();
        if ($existingEnrollment) {
            return redirect()->route('enroll')->with('error', 'An enrollment already exists for this email.');
        }
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
                if (!$user) {
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

                return redirect()->route('thanks');
            }

            return back()->with('error', 'Payment could not be completed.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function testStart(Request $request, $token)
    {
        $tokenData = EnrollmentToken::where('token', $token)->first();
        if (!$tokenData) {
            return view('frontend.token-expired')->with('message', 'Invalid token.');
        }
        if ($tokenData->used) {
            return view('frontend.token-expired')->with('message', 'This token has already been used. Please enroll again.');
        }
        if (Carbon::parse($tokenData->expires_at)->isPast()) {
            return view('frontend.token-expired')->with('message', 'Your token has expired. Please create a new enrollment.');
        }

        try {
            $decrypted = Crypt::decryptString($token);
            $data = json_decode($decrypted, true);
            session([
                'token_enrollment_id' => $tokenData->enrollment_id,
                'token_value' => $token,
                'student_email' => $data['email'],
                'student_password' => $data['password']
            ]);

            return redirect()->route('student.login')->with([
                'email' => $data['email'],
                'password' => $data['password']
            ]);
        } catch (\Exception $e) {
            return view('frontend.token-expired')->with('message', 'Invalid or tampered token.');
        }
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
            $user = Auth::user();
            $alreadyAttempted = Attempt::where('user_id', $user->id)->exists();

            if (session()->has('token_value')) {
                EnrollmentToken::where('token', session('token_value'))->update([
                    'used' => true,
                    'used_at' => now(),
                ]);
                session()->forget(['token_value', 'token_enrollment_id']);
            }

            if ($alreadyAttempted) {
                Auth::logout();
                return redirect()->route('test.already')
                    ->with('error', 'You have already attempted the test.');
            }

            session(['level' => 1]);
            return redirect()->route('attempt.index')
                ->with('success', 'Welcome! Your test is ready.');
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    public function alreadyAttempted(){
        return view('student.already-attempted');
    }

    public function questions(Request $request)
    {
        $user = Auth::user();

        $completedAllLevels = Attempt::where('user_id', $user->id)
            ->where('status', 'passed')
            ->count() >= 3;

        if ($completedAllLevels) {
            Auth::logout();
            return redirect()->route('test.already')
                ->with('error', 'You have already completed all test levels.');
        }

        // Each level = 15 questions
        $level = session('level', 1);
        $limit = 15;
        $offset = ($level - 1) * $limit;

        $questions = Mcq::where('status', 1)
            ->orderBy('id', 'asc')
            ->skip($offset)
            ->take($limit)
            ->with('options')
            ->get();

        if ($questions->isEmpty()) {
            return view('student.test-finish', ['message' => 'No questions found.']);
        }

        return view('student.attempt', compact('questions', 'level'));
    }


    public function submitQuestions(Request $request)
    {
        $user = Auth::user();
        $level = session('level', 1);

        $answers = $request->input('answers', []);
        $correctCount = 0;

        $attempt = Attempt::create([
            'user_id' => $user->id,
            'level' => $level,
            'total_questions' => count($answers),
        ]);

        foreach ($answers as $mcqId => $optionId) {
            $option = Option::find($optionId);
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
            'incorrect_count' => count($answers) - $correctCount,
            'status' => $correctCount >= 9 ? 'passed' : 'failed',
        ]);

        Mail::to($user->email)->send(new TestResultMail($user, $attempt));

        if ($correctCount >= 9) {
            if ($level < 3) {
                session(['level' => $level + 1]);
                return redirect()->route('attempt.index')
                    ->with('success', 'Good job! Continue to the next questions.');
            } else {
                session()->forget('level');
                return view('student.congratulations', [
                    'correctCount' => $correctCount,
                    'total' => count($answers)
                ]);
            }
        } else {
            session()->forget('level');
            return view('student.test-finish', [
                'message' => 'You did not clear this level. Check your email for feedback.'
            ]);
        }
    }
}

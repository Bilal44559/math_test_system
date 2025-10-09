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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Checkout\Session as StripeSession;

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
        try {
            $decrypted = Crypt::decryptString($token);
            $data = json_decode($decrypted, true);

            return view('enrollments.activation', [
                'email' => $data['email'] ?? null,
                'password' => $data['password'] ?? null,
                'enrollment_id' => $data['enrollment_id'] ?? null,
            ]);
        } catch (\Throwable $e) {
            abort(400, 'Invalid or expired token.');
        }
    }

}

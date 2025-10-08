<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\EnrollmentCreatedMail;
use App\Models\Enrollment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Stripe\Stripe;
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
        return view('frontend.payment');
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
        'age_years' => 'nullable|numeric',
        'age_months' => 'nullable|numeric',
        'gender' => 'nullable|string|max:255',
        'grade' => 'nullable|string|max:255',
        'guardian_name' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:255',
        'postal_code' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = $validator->validated();

    // Store enrollment data in session temporarily
    session(['enrollment_data' => $data]);

    // Create Stripe Checkout session
    Stripe::setApiKey(env('STRIPE_SECRET'));

    $checkoutSession = StripeSession::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'cad',
                'unit_amount' => 32500, // CA$325 = 32500 cents
                'product_data' => [
                    'name' => 'Enrollment Payment - TM Math Academy',
                ],
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'customer_email' => $data['email'],
        'success_url' => route('enroll.payment.success') . '?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => route('enroll.payment.cancel'),
    ]);

    return redirect($checkoutSession->url);
}

public function handlePaymentSuccess(Request $request)
{
    $sessionId = $request->get('session_id');
    if (!$sessionId || !session()->has('enrollment_data')) {
        return redirect()->route('frontend.enroll')->with('error', 'Invalid session.');
    }

    Stripe::setApiKey(env('STRIPE_SECRET'));
    $session = \Stripe\Checkout\Session::retrieve($sessionId);

    if (!$session || $session->payment_status !== 'paid') {
        return redirect()->route('frontend.enroll')->with('error', 'Payment not successful.');
    }

    $data = session('enrollment_data');

    // Clean postal code
    if (!empty($data['postal_code'])) {
        $data['postal_code'] = strtoupper(str_replace(' ', '', $data['postal_code']));
    }

    // Create user
    $rawPassword = Str::random(10);
    $hashedPassword = Hash::make($rawPassword);

    $user = User::firstOrCreate(
        ['email' => $data['email']],
        [
            'name' => $data['full_name'],
            'password' => $hashedPassword,
        ]
    );

    // Save enrollment
    $enrollment = Enrollment::create(array_merge($data, [
        'user_id' => $user->id,
    ]));

    // Generate token for test link
    $payload = json_encode([
        'email' => $user->email,
        'password' => $rawPassword,
        'enrollment_id' => $enrollment->id,
    ]);

    $token = Crypt::encryptString($payload);
    $link = route('enroll.test-start', ['token' => $token]);

    // Send email
    Mail::to($user->email)->send(new EnrollmentCreatedMail($user->email, $rawPassword, $link, $enrollment));

    // Clear session
    session()->forget('enrollment_data');

    return redirect()->route('enroll')->with('success', 'Enrollment successful. Check your email.');
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

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\User;
use App\Mail\SendOtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Exception;


class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    public function newSentOtp(Request $request)
    {
        try {
            $request->validate(['email' => 'required|email|exists:users,email']);

            $user = User::where('email', $request->email)->first();
            $otp = rand(100000, 999999);
            $expiresAt = Carbon::now()->addMinutes(5);

            $user->otp = $otp;
            $user->otp_expires_at = $expiresAt;
            $user->save();

            Mail::to($user->email)->send(new SendOtpMail($otp));

            Session::put('otp_email', $user->email);
            Session::put('otp_expires_at', $expiresAt);

            return redirect()->route('auth.verifyOtp.form')
                ->with('success', 'An OTP has been sent to your email address.');
        } catch (ValidationException $e) {
            Log::error('Error sending OTP again: ' . $e->errors());
            // Handle validation exceptions
            // return back()->withErrors($e->errors())->withInput();

            return redirect()->route('auth.verifyOtp.form')
                ->with('error', 'Something went wrong, please try again later.');
        } catch (Exception $e) {
            // Log the error and show a generic message
            Log::error('Error sending OTP: ' . $e->getMessage());

            return redirect()->route('auth.verifyOtp.form')
                ->with('error', 'Something went wrong, please try again later.');
        }
    }

    public function showVerifyOtpForm()
    {
        if (!Session::has('otp_email') || !Session::has('otp_expires_at')) {
            return redirect()->route('auth.change-password')
                ->withErrors('Please request a password reset first.');
        }

        $expiresAt = Carbon::parse(Session::get('otp_expires_at'));
        $remainingSeconds = max(0, Carbon::now()->diffInSeconds($expiresAt));

        return view('auth.passwords.confirm', [
            'email' => Session::get('otp_email'),
            'remainingSeconds' => $remainingSeconds
        ]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'otp' => 'required|numeric|digits:6',
        ]);

        if ($request->email !== Session::get('otp_email')) {
            return back()->withErrors(['otp' => 'An unexpected error occurred. Please try again.']);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || $user->otp !== $request->otp) {
            return back()->withErrors(['otp' => 'The entered OTP is invalid.']);
        }

        if (Carbon::now()->greaterThan($user->otp_expires_at)) {
            return back()->withErrors(['otp' => 'The OTP has expired. Please request a new one.']);
        }

        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        Session::forget(['otp_email', 'otp_expires_at']);
        Session::put('password_reset_email', $user->email);

        return redirect()->route('auth.password.reset.form');
    }

    public function resendOtp(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);
        return $this->newSentOtp($request);
    }

    public function showResetForm()
    {
        if (!Session::has('password_reset_email')) {
            return redirect()->route('auth.change-password')->withErrors('Your session has expired. Please try again.');
        }

        return view('auth.passwords.reset', [
            'email' => Session::get('password_reset_email')
        ]);
    }

    public function changePasswordUpdate(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        if (!Session::has('password_reset_email')) {
            return redirect()->route('auth.change-password')->withErrors('Your session has expired. Please try again.');
        }

        $user = User::where('email', Session::get('password_reset_email'))->first();
        if (!$user) {
            return redirect()->route('auth.change-password')->withErrors('User not found.');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        Session::forget('password_reset_email');

        return redirect()->route('login')->with('success', 'Password changed successfully. You can now log in.');
    }
}

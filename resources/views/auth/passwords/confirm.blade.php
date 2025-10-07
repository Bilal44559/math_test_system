@extends('layouts.auth')

@section('content')
<main class="main-content main-content-bg mt-0">
    <div class="page-header min-vh-100">
        <div class="mask bg-gradient"></div>
        <div class="container">
            <div class="authentication-wrapper authentication-basic row my-5">
                <div class="authentication-inner col-lg-6 mx-auto">
                    <div class="card shadow-sm rounded border-0 px-4">
                        <div class="card-body p-4">
                            <h5 class="mb-2 text-center fw-bold">OTP Verification 🔒</h5>
                            <p class="mb-4 text-center text-sm">
                                An OTP has been sent to <strong>{{ $email }}</strong>. <br>
                                Please enter it below.
                            </p>

                            {{-- Success Message --}}
                            @if (session('success'))
                            <div class="alert alert-success text-center" role="alert">
                                {{ session('success') }}
                            </div>
                            @endif

                            <form id="otpForm" method="POST" action="{{ route('auth.verifyOtp') }}">
                                @csrf
                                <input type="hidden" name="email" value="{{ $email }}">

                                <div class="mb-4">
                                    <h6 for="otp" class="text-center w-100">OTP Code</h6>
                                    <input type="text" id="otp"
                                        class="form-control form-control-lg text-center fs-3 py-2 @error('otp') is-invalid @enderror"
                                        name="otp" placeholder="------" autofocus maxlength="6" inputmode="numeric"
                                        pattern="[0-9]*" autocomplete="one-time-code" />
                                    @error('otp')
                                    <div class="invalid-feedback d-block text-center">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div id="timer" class="mb-3 text-muted text-center fs-6 fw-semibold">
                                    {{ gmdate("i:s", (int)$remainingSeconds) }}
                                </div>

                                <div class="mb-3 d-grid">
                                    <button type="submit" class="btn btn-theme-primary">
                                        Verify OTP
                                    </button>
                                </div>
                            </form>

                            <div class="text-center">
                                <p class="mb-1 text-sm">Didn't receive the code?</p>
                                <form id="resendForm" method="POST" action="{{ route('auth.resendOtp') }}"
                                    class="d-inline">
                                    @csrf
                                    <input type="hidden" name="email" value="{{ $email }}">
                                    <button id="resendBtn" type="submit" class="btn btn-link p-0" disabled>
                                        Resend OTP
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /OTP Verification -->
                </div>
            </div>
        </div>
    </div>
</main>



<script>
let countdown = {
    {
        $remainingSeconds
    }
};
const timerElement = document.getElementById('timer');
const resendButton = document.getElementById('resendBtn');

function startTimer() {
    const interval = setInterval(() => {
        let minutes = Math.floor(countdown / 60);
        let seconds = Math.floor(countdown % 60);

        timerElement.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

        if (countdown <= 0) {
            clearInterval(interval);
            resendButton.disabled = false;
            timerElement.textContent = 'OTP expired. You can resend it now.';
        }

        countdown--;
    }, 1000);
}

startTimer();
</script>

@endsection
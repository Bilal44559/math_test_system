@extends('frontend.layouts.app')

@section('title', 'Thank You')

@section('content')
<section class="container my-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">Thank You for Enrolling!</h2>
        <p class="text-secondary">Your enrollment at <strong>TM Academy</strong> has been completed successfully.</p>
    </div>

    <div class="d-flex justify-content-center">
        <div class="card shadow-sm border-0 rounded-4 p-4 p-md-5" style="max-width: 700px; width: 100%;">
            <div class="card-body text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120" fill="none" style="margin-bottom: 25px;">
                    <circle cx="60" cy="60" r="60" fill="#E6F4FF"/>
                    <circle cx="60" cy="60" r="50" fill="#007BFF" fill-opacity="0.15"/>
                    <path d="M40 61L54 75L80 45" stroke="#007BFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <h4 class="fw-semibold text-success mb-3">Payment Successful ðŸŽ‰</h4>
                <p class="text-secondary mb-4">
                   A confirmation email has been sent to student’s email address with login credentials and next steps.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <!--<a href="{{ $link }}" target="_blank" class="btn btn-primary rounded-pill px-5 py-2">-->
                    <!--    Go to Questionnaire-->
                    <!--</a>-->
                    <a href="{{ route('home') }}" class="btn btn-outline-primary rounded-pill px-5 py-2">
                        Go to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

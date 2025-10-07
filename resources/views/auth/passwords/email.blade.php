@extends('layouts.auth')

@section('content')

<main class="main-content main-content-bg mt-0">
    <div class="page-header min-vh-100">
        <div class="mask bg-gradient"></div>
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-md-6">
                    <div class="card px-4">
                        <div class="card-header text-center">
                            <h5>
                                <!-- {{ __('Enter Email') }} -->
                                Reset Password
                            </h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('auth.newSentOtp') }}">
                                @csrf
                                <div class="d-flex flex-column align-items-start justify-content-start gap-2">
                                    <h6 for="email">{{ __('Enter Email') }}</h6>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="col-md-6 mx-auto">
                                        <button type="submit" class="btn btn-theme-primary w-100">
                                            {{ __('Send') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
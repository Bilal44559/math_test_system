@extends('layouts.auth')

@section('content')
<main class="main-content main-content-bg mt-0">
    <div class="page-header min-vh-100">
        <div class="mask bg-gradient"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <h5 class="card-header">{{ __('Change Password') }}</h5>
                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <form method="POST" action="{{ route('auth.change-password-update') }}">
                                @csrf

                                <div class="row mb-3">
                                    <h6 for="password">{{ __('New Password') }}</h6>
                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h6 for="password-confirm">
                                        {{ __('Confirm Password') }}</h6>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 mx-auto">
                                        <button type="submit" class="btn btn-theme-primary">
                                            {{ __('Change Password') }}
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
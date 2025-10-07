@extends('layouts.auth')

@section('content')
<main class="main-content main-content-bg mt-0">
    <div class="page-header min-vh-100">
        <div class="mask bg-gradient"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="card border-0 mb-0">
                        <div class="card-header bg-transparent">
                            <h5 class="text-dark text-center mt-2 mb-3">Sign in</h5>
                        </div>
                        <div class="card-body px-lg-5 pt-0">
                            <form method="POST" action="{{ route('login') }}" role="form" class="text-start">
                                @csrf
                                <div class="mb-3">
                                    <input type="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" name="email" placeholder="Email" aria-label="Email"
                                        autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Password" autocomplete="current-password" aria-label="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox"
                                        {{ old('remember') ? 'checked' : '' }} name="remember" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>

                                <!-- Forgot Password -->
                                <div class="text-end mt-2">
                                    <a href="{{ route('password.request') }}" class="text-sm text-black">Forgot
                                        Password?</a>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-theme-primary w-100 my-4 mb-2">Sign in</button>
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
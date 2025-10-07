<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="logo.jpg" alt="Logo" width="45" height="45" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('syllabus') }}">Syllabus</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('eligibility') }}">Eligibility</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('refunds') }}">Refunds</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('terms') }}">Terms of Use</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                </ul>
            </div>
            <a href="{{ route('enroll') }}" class="btn btn-enroll" id="enrollBtn">Enroll</a>

        </div>
    </nav>


    @yield('content')


    <footer>
        @yield('footer')
    </footer>

</body>

</html>

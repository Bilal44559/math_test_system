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
    <style>
  @media (max-width: 991.98px) {
  .navbar .btn-enroll {
    position: absolute !important;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 5;
  }

  .navbar-collapse {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background-color: var(--bs-primary);
    z-index: 1;
  }

  .navbar-collapse.show {
    position: absolute;
  }
}

    </style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
      <img src="{{ asset('build/images/logo.jpg') }}" alt="Logo" width="45" height="45" class="me-2">
    </a>

    <!-- Enroll button (centered on mobile) -->
    <a href="{{ route('enroll') }}" 
       class="btn btn-enroll position-absolute top-50 start-50 translate-middle d-lg-none"
       id="enrollBtn">Enroll</a>

    <!-- Toggler (right side) -->
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Enroll button (desktop view) -->
    <a href="{{ route('enroll') }}"
       class="btn btn-enroll order-1 order-lg-3 d-none d-lg-inline-block"
       id="enrollBtnDesktop">Enroll</a>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse order-lg-1 w-50 mt-2 mt-lg-0" id="navbarNav">
      <ul class="navbar-nav gap-2 mx-auto p-3">
        <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('syllabus') }}">Syllabus</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('eligibility') }}">Eligibility</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('refunds') }}">Refunds</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('terms') }}">Terms of Use</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Instructor</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact us</a></li>
      </ul>
    </div>

  </div>
</nav>






    @yield('content')


    <footer>
        ©
        <script>
            document.write(new Date().getFullYear())
        </script>,
        Math Skills for School Success
        @yield('footer')
    </footer>
    
    <script>
  document.addEventListener("click", function (event) {
    const navbar = document.querySelector(".navbar-collapse");
    const toggler = document.querySelector(".navbar-toggler");

    
    if (navbar.classList.contains("show") &&
        !navbar.contains(event.target) &&
        !toggler.contains(event.target)) {
      const bsCollapse = bootstrap.Collapse.getInstance(navbar);
      bsCollapse.hide();
    }
  });
</script>


</body>

</html>

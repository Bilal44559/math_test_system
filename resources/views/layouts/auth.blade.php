<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/assets/img/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/img/favicon-16x16.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/assets/img/apple-touch-icon.png') }}" />
    <title>
        Math Skills for School Success
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('backend/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('backend/assets/css/argon-dashboard.css?v=2.0.5') }}" rel="stylesheet" />
    <style>
        .btn {
            font-weight: 400;
            border-radius: 8px;
            padding: 6px 24px;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none;
            font-size: 13px;
            text-transform: uppercase;
            margin: 0;
        }

        .btn-theme-secondary {
            background-color: $white;
            color: black;
            border: none;

            &:hover,
            &:focus {
                background-color: $white;
                color: black;
                transform: translateY(0) !important;
                box-shadow: 0 1px 2px rgba(50, 50, 93, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08) !important;
            }
        }

        .btn-theme-primary {
            background-color: rgba(0, 0, 0, 0.75);
            color: #fff;
            border: none;

            &:hover,
            &:focus {
                background-color: black;
                color: #fff;
                transform: translateY(0) !important;
                box-shadow: 0 1px 2px rgba(50, 50, 93, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08) !important;
            }
        }

        .bg-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top left, #2b1b47, transparent),
                radial-gradient(circle at top right, #075e5e, transparent),
                #1a1a1a;
            z-index: -1;
        }
    </style>
</head>

<body class="">
    @yield('content')
    <!--   Core JS Files   -->
    <script src="{{ asset('backend/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <!-- Kanban scripts -->
    <script src="{{ asset('backend/assets/js/plugins/dragula/dragula.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/jkanban/jkanban.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('backend/assets/js/argon-dashboard.min.js?v=2.0.5') }}"></script>
</body>

</html>

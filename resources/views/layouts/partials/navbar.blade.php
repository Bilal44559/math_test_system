    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg" id="navbarBlur" data-scroll="false">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a href="{{ url('/') }}" target="_blank" class="navbar-brand">
                <img class="navbar-brand-img" src="{{ asset('backend/assets/img/logo.png') }}"
                    alt="Math Skills for School Success" />
                <span class="ms-1 font-weight-bold  text-white">Math Skills for School Success </span>
            </a>
        </div>
        <div class="container-fluid pb-1 pt-4 px-3">
            <nav aria-label="breadcrumb " class="iv-breadcrumb">

            </nav>
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ms-2">
                <a href="javascript:;" class="nav-link p-0">

                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M4 5C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H4ZM7 12C7 11.4477 7.44772 11 8 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H8C7.44772 13 7 12.5523 7 12ZM13 18C13 17.4477 13.4477 17 14 17H20C20.5523 17 21 17.4477 21 18C21 18.5523 20.5523 19 20 19H14C13.4477 19 13 18.5523 13 18Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="position-relative">

                    </div>
                </div>
                <ul class="navbar-nav justify-content-end">

                    <li class="nav-item d-flex align-items-center position-relative">
                        <a class="text-white font-weight-bold px-0" href="javascript:void(0)" id="userDropdown"
                            role="button">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                            <i class="fa-solid fa-angle-down me-sm-1"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end user-dropdown" id="accountDropdownMenu"
                            style="display:none;">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.change-password-admin') }}">
                                    <i class="fa fa-key me-2"></i> Change Password
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out-alt me-2"></i> Sign Out
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <meta name="app-base" content="{{ url('/') }}">
    <script>
        $(document).ready(function() {


            // ✅ Account dropdown open/close (independent)
            $(document).ready(function() {
                // Toggle dropdown when clicking on Account
                $('#userDropdown').on('click', function(e) {
                    e.stopPropagation(); // prevent bubbling
                    $('#accountDropdownMenu').toggle(); // show/hide
                });

                // Close dropdown when clicking outside
                $(document).on('click', function(event) {
                    if (!$(event.target).closest('#userDropdown, #accountDropdownMenu').length) {
                        $('#accountDropdownMenu').hide();
                    }
                });
            });

        });
    </script>

<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg" id="navbarBlur" data-scroll="false">
    <div class="sidenav-header">
        <!-- Close icon (shows only on mobile) -->
        <!--<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-8 position-absolute end-0 top-0 d-xl-none"-->
        <!--    aria-hidden="true" id="iconSidenav"></i>-->

        <a href="{{ url('/') }}" target="_blank" class="navbar-brand">
            <img class="navbar-brand-img" src="{{ asset('backend/assets/img/logo.png') }}"
                alt="Math Skills for School Success" />
            <span class="ms-1 font-weight-bold text-white">Math Skills for School Success</span>
        </a>
    </div>

    <div class="container-fluid pb-1 pt-4 px-3">
        <nav aria-label="breadcrumb" class="iv-breadcrumb"></nav>

        <!-- ✅ Hamburger Button (Visible on Mobile) -->
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-none d-block ms-2">
            <a href="javascript:;" class="nav-link p-0" id="mobileSidenavToggle">
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M4 5C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H4ZM7 12C7 11.4477 7.44772 11 8 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H8C7.44772 13 7 12.5523 7 12ZM13 18C13 17.4477 13.4477 17 14 17H20C20.5523 17 21 17.4477 21 18C21 18.5523 20.5523 19 20 19H14C13.4477 19 13 18.5523 13 18Z"
                        fill="white" />
                </svg>
            </a>
        </div>

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>

            <ul class="navbar-nav justify-content-end">
                <li class="nav-item d-flex align-items-center position-relative">
                    <a class="text-white font-weight-bold px-0" href="javascript:void(0)" id="userDropdown" role="button">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                        <i class="fa-solid fa-angle-down me-sm-1"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end user-dropdown" id="accountDropdownMenu"
                        style="display:none;">
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

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>

<!-- ✅ JS Logic for Dropdown + Sidebar Toggle -->
<script>
$(document).ready(function () {
    // User dropdown toggle
    $('#userDropdown').on('click', function (e) {
        e.stopPropagation();
        $('#accountDropdownMenu').toggle();
    });

    $(document).on('click', function (event) {
        if (!$(event.target).closest('#userDropdown, #accountDropdownMenu').length) {
            $('#accountDropdownMenu').hide();
        }
    });

    // ✅ Sidebar toggle for mobile
    const sidenav = $('#sidenav-main');
    const overlay = $('<div id="sidenav-overlay"></div>').appendTo('body').hide();

    $('#mobileSidenavToggle').on('click', function (e) {
        e.preventDefault();
        sidenav.toggleClass('show-sidenav');
        overlay.fadeToggle(200);
    });

    // Close icon inside sidenav
    $('#iconSidenav').on('click', function () {
        sidenav.removeClass('show-sidenav');
        overlay.fadeOut(200);
    });

    // Click overlay to close
    overlay.on('click', function () {
        sidenav.removeClass('show-sidenav');
        overlay.fadeOut(200);
    });
});
</script>

<!-- ✅ Sidebar animation CSS -->
<style>
#sidenav-main {
    transition: all 0.3s ease-in-out;
}

@media (max-width: 1199px) {
    #sidenav-main {
        position: fixed;
        top: 0;
        left: -260px;
        width: 260px;
        height: 100%;
        background: #fff;
        z-index: 1050;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    #sidenav-main.show-sidenav {
        left: 0;
    }

    #sidenav-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.3);
        z-index: 1049;
    }

    #iconSidenav {
        display: block !important;
        cursor: pointer;
    }
}
</style>

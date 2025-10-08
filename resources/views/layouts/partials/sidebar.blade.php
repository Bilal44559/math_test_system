<aside class="sidenav navbar navbar-vertical navbar-expand-xs p-0" id="sidenav-main">


    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link @if (request()->routeIs('admin.dashboard')) active @endif">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-house text-black text-sm "></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>


            @can('view_permissions')
                <li class="nav-item">
                    <a class="nav-link @if (request()->routeIs('admin.permissions.*')) active @endif"
                        href="{{ route('admin.permissions.index') }}">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-house text-black text-sm "></i>
                        </div>
                        <span class="sidenav-normal nav-link-text text-black"> Permissions <b class="caret"></b></span>
                    </a>
                </li>
            @endcan


            @can('view_roles')
                <li class="nav-item">
                    <a class="nav-link @if (request()->routeIs('admin.roles.*')) active @endif"
                        href="{{ route('admin.roles.index') }}">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-house text-black text-sm "></i>
                        </div>
                        <span class="sidenav-normal nav-link-text text-black"> Roles <b class="caret"></b></span>
                    </a>
                </li>
            @endcan

            @can('users')
                <li class="nav-item">
                    <a class="nav-link @if (request()->routeIs('admin.users.*')) active @endif"
                        href="{{ route('admin.users.index') }}">
                        <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-house text-black text-sm "></i>
                        </div>
                        <span class="sidenav-normal nav-link-text text-black"> Users <b class="caret"></b></span>
                    </a>
                </li>
            @endcan

        </ul>
    </div>
</aside>

<div class="sticky">
    <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
        <div class="main-sidebar-header main-container-1 active">
            <div class="sidemenu-logo">
                <a class="main-logo" href="index.html">
                    <img src="" class="header-brand-img desktop-logo" alt="logo">
                    <img src="" class="header-brand-img icon-logo" alt="logo">
                    <img src="" class="header-brand-img desktop-logo theme-logo" alt="logo">
                    <img src="" class="header-brand-img icon-logo theme-logo" alt="logo">
                </a>
            </div>
            <div class="main-sidebar-body main-body-1">
                <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                <ul class="menu-nav nav">
                    <li class="nav-header"><span class="nav-label">Dashboard</span></li>
                    <li class="nav-item {{ (request()->routeIs('dashboard.school')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard.school') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-home sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item {{ (request()->routeIs('school-upload')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('school-upload') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-school sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">School Facility</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="javascript:void(0)">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-school sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">School Facility (Gallery)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-book sidemenu-icon menu-icon"></i>
                            <span class="sidemenu-label">E-Book</span>
                        </a>
                    </li>
                </ul>
                <div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
            </div>
        </div>
    </div>
</div>
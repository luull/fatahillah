<div class="sidebar-wrapper sidebar-theme">

    <nav id="compactSidebar">

        <div class="theme-logo">
            <a href="/dashboard">
                <img src="{{ asset('templates/admin/assets/img/90x90.jpg')}}" class="navbar-logo" alt="logo">
            </a>
        </div>

        <ul class="menu-categories">
            <li class="menu menu-single {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" data-active="{{ Request::is('dashboard') ? 'true' : '' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Dashboard</span></div>
            </li>
            <li class="menu menu-single {{ Request::is('configuration') ? 'active' : '' }}">
                <a href="/configuration" data-active="{{ Request::is('configuration') ? 'true' : '' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i data-feather="settings"></i>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Configuration</span></div>
            </li>
        </ul>

        <div class="sidebar-bottom-actions">

            <div class="dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('templates/admin/assets/img/90x90.jpg')}}" class="img-fluid" alt="avatar">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="dropdown-inner">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="{{ asset('templates/admin/assets/img/90x90.jpg')}}" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5>{{ session('admin_data')->username }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Change Password</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </nav>

    <div id="compact_submenuSidebar" class="submenu-sidebar">

        <div class="submenu" id="dashboard">
            <ul class="submenu-list" data-parent-element="#dashboard">
                <li class="active">
                    <a href="index.html"> Analytics </a>
                </li>
                <li>
                    <a href="index2.html"> Sales </a>
                </li>
            </ul>
        </div>

    </div>

</div>

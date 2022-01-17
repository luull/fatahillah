<div class="sidebar-wrapper sidebar-theme">

    <nav id="compactSidebar">

        <div class="theme-logo">
            <a href="/admin/dashboard">
                <img src="{{ asset(session('config')->logo)}}" class="navbar-logo" alt="logo">
            </a>
        </div>

        <ul class="menu-categories">
            <li class="menu menu-single {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="/admin/dashboard" data-active="{{ Request::is('admin/dashboard') ? 'true' : '' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Dashboard</span></div>
            </li>
            <li class="menu {{ Request::is('admin/about','admin/teacher','admin/sarana') ? 'active' : '' }}">
                <a href="#about" data-active="{{ Request::is('admin/about','admin/teacher','admin/sarana') ? 'true' : 'false' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i data-feather="layout"></i>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Profil</span></div>
            </li>
            <li class="menu menu-single {{ Request::is('admin/banner') ? 'active' : '' }}">
                <a href="/admin/banner" data-active="{{ Request::is('admin/banner') ? 'true' : '' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i data-feather="airplay"></i>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Banner</span></div>
            </li>
            <li class="menu {{ Request::is('admin/news','admin/event','admin/program','admin/curricular','admin/osis','admin/achievement','admin/curriculum') ? 'active' : '' }}">
                <a href="#news" data-active="{{ Request::is('admin/news','admin/event','admin/program','admin/curricular','admin/osis','admin/achievement','admin/curriculum') ? 'true' : 'false' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i data-feather="align-center"></i>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Konten</span></div>
            </li>

            <li class="menu menu-single {{ Request::is('admin/logo') ? 'active' : '' }}">
                <a href="/admin/logo" data-active="{{ Request::is('admin/logo') ? 'true' : '' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i data-feather="award"></i>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Logo</span></div>
            </li>
            <li class="menu menu-single {{ Request::is('admin/photo') ? 'active' : '' }}">
                <a href="/admin/photo" data-active="{{ Request::is('admin/photo') ? 'true' : '' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i data-feather="image"></i>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Foto</span></div>
            </li>
            <li class="menu menu-single {{ Request::is('admin/video') ? 'active' : '' }}">
                <a href="/admin/video" data-active="{{ Request::is('admin/video') ? 'true' : '' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i data-feather="video"></i>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Video</span></div>
            </li>

            @if (session('admin_data')->level == 1)
            <li class="menu menu-single {{ Request::is('admin/user') ? 'active' : '' }}">
                <a href="/admin/user" data-active="{{ Request::is('admin/user') ? 'true' : '' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i data-feather="users"></i>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Manajemen Pengguna</span></div>
            </li>
            <li class="menu menu-single {{ Request::is('admin/service') ? 'active' : '' }}">
                <a href="/admin/service" data-active="{{ Request::is('admin/service') ? 'true' : '' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i data-feather="thumbs-up"></i>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Layanan Pengaduan</span></div>
            </li>
            <li class="menu menu-single {{ Request::is('/admin/configuration') ? 'active' : '' }}">
                <a href="/admin/configuration" data-active="{{ Request::is('/admin/configuration') ? 'true' : '' }}" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i data-feather="settings"></i>
                        </div>
                    </div>
                </a>
                <div class="tooltip"><span>Konfigurasi</span></div>
            </li>
            @endif
        </ul>

        <div class="sidebar-bottom-actions">

            <div class="dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('default-user.jpeg')}}"class="img-fluid" alt="avatar">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="dropdown-inner">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="{{ asset('default-user.jpeg')}}"class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5>{{ session('admin_data')->username }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="/admin/changepass">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Ubah Kata sandi</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="/logout">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Keluar</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </nav>

    <div id="compact_submenuSidebar" class="submenu-sidebar">

        <div class="submenu" id="about">
            <div class="menu-title">
                <h3>Profil</h3>
            </div>
            <ul class="submenu-list" data-parent-element="#about">
                <li class="{{ Request::is('admin/about') ? 'active' : '' }}">
                    <a href="/admin/about">Profil </a>
                </li>
                <li class="{{ Request::is('admin/sarana') ? 'active' : '' }}">
                    <a href="/admin/sarana">Sarana dan Prasarana </a>
                </li>
                <li class="{{ Request::is('admin/teacher') ? 'active' : '' }}">
                    <a href="/admin/teacher">Manajemen Pimpinan</a>
                </li>
            </ul>
        </div>
        <div class="submenu" id="news">
            <div class="menu-title">
                <h3>Content</h3>
            </div>
            <ul class="submenu-list" data-parent-element="#news">
                <li class="{{ Request::is('admin/news') ? 'active' : '' }}">
                    <a href="/admin/news">Berita</a>
                </li>
                <li class="{{ Request::is('admin/event') ? 'active' : '' }}">
                    <a href="/admin/event">Acara</a>
                </li>
                <li class="{{ Request::is('admin/program') ? 'active' : '' }}">
                    <a href="/admin/program">Program</a>
                </li>
                <li class="{{ Request::is('admin/curricular') ? 'active' : '' }}">
                    <a href="/admin/curricular">Kurikuler</a>
                </li>
                <li class="{{ Request::is('admin/osis') ? 'active' : '' }}">
                    <a href="/admin/osis">Osis</a>
                </li>
                <li class="{{ Request::is('admin/achievement') ? 'active' : '' }}">
                    <a href="/admin/achievement">Prestasi</a>
                </li>
                <li class="{{ Request::is('admin/curriculum') ? 'active' : '' }}">
                    <a href="/admin/curriculum">Kurikulum</a>
                </li>
            </ul>
        </div>

    </div>

</div>

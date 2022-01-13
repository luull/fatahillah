  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">{{session('config')->email}}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{session('config')->kontak}}</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://api.whatsapp.com/send?phone={{ session('config')->wa }}" target="_blank" class="twitter"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.facebook.com/{{session('config')->fb}}" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/{{session('config')->ig}}" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
     <a href="/" class="logo"><img src="{{ asset(session('config')->logo)}}" alt=""> <small>{{session('config')->name}}</small></a>

      <nav id="navbar" class="navbar">
        <ul>
            <li>
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
            </li>
            <li>
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}"  href="/about">Profil</a>
            </li>
            <li>
                <a class="nav-link {{ Request::is('viewprogram') ? 'active' : '' }}"  href="/viewprogram">Program</a>
            </li>
            <li class="dropdown"><a href="#"><span>Kesiswaan</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><i class="lni-angle-double-right right-arrow"></i><a class="{{ Request::is('viewcurricular') ? 'active' : '' }}" href="/viewcurricular">Kurikuler</a></li>
                    <li><i class="lni-angle-double-right right-arrow"></i><a class="{{ Request::is('viewosis') ? 'active' : '' }}" href="/viewosis">Osis</a></li>
                    <li><i class="lni-angle-double-right right-arrow"></i><a class="{{ Request::is('viewachievement') ? 'active' : '' }}" href="/viewachievement">Prestasi</a></li>
                </ul>
              </li>
            <li>
                <a class="nav-link {{ Request::is('viewevent') ? 'active' : '' }}"  href="/viewevent">Event</a>
            </li>
            <li>
                <a class="nav-link {{ Request::is('viewnews') ? 'active' : '' }}"  href="/viewnews">News</a>
            </li>

          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><i class="lni-angle-double-right right-arrow"></i><a class="{{ Request::is('viewphoto') ? 'active' : '' }}" href="/viewphoto">Photo</a></li>
                <li><i class="lni-angle-double-right right-arrow"></i><a class="{{ Request::is('viewvideo') ? 'active' : '' }}" href="/viewvideo">Video</a></li>
            </ul>
          </li>
          <li>
            <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact </a>
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


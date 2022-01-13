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
            <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><i class="lni-angle-double-right right-arrow"></i><a class="{{ Request::is('about') ? 'active' : '' }}" href="/about">Profil</a></li>
                    <li><i class="lni-angle-double-right right-arrow"></i><a href="/about#visi">Visi</a></li>
                    <li><i class="lni-angle-double-right right-arrow"></i><a href="/about#misi">Misi</a></li>
                    <li><i class="lni-angle-double-right right-arrow"></i><a href="/about#pimpinan">Struktur Kepemimpinan</a></li>
                    <li><i class="lni-angle-double-right right-arrow"></i><a href="/about#cards">Staff</a></li>
                    <li><i class="lni-angle-double-right right-arrow"></i><a href="/about#sarana">Sarana dan Prasarana</a></li>
                </ul>
              </li>
            {{-- <li>
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}"  href="/about">Profil</a>
            </li> --}}
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
                <a class="nav-link {{ Request::is('viewcurriculum') ? 'active' : '' }}"  href="/viewcurriculum">Kurikulum</a>
            </li>
            <li>
                <a class="nav-link {{ Request::is('viewevent') ? 'active' : '' }}"  href="/viewevent">Acara</a>
            </li>
            <li>
                <a class="nav-link {{ Request::is('viewnews') ? 'active' : '' }}"  href="/viewnews">Berita</a>
            </li>

          <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><i class="lni-angle-double-right right-arrow"></i><a class="{{ Request::is('viewphoto') ? 'active' : '' }}" href="/viewphoto">Foto</a></li>
                <li><i class="lni-angle-double-right right-arrow"></i><a class="{{ Request::is('viewvideo') ? 'active' : '' }}" href="/viewvideo">Video</a></li>
            </ul>
          </li>
          <li>
            <a class="nav-link {{ Request::is('service') ? 'active' : '' }}" href="/service">Pengaduan </a>
        </li>
          <li>
            <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Kontak </a>
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


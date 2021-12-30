<div class="header-area">
    <div class="container">
        <div class="row upper-nav">
            <div class="col-3 nav-icon pt-3">
                <ul class="social-icons-simple text-left">
                    <li><a href="javascript:void(0)" class="facebook-bg-hvr"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)" class="twitter-bg-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="javascript:void(0)" class="instagram-bg-hvr"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="col-6 text-center nav-logo pt-3">
                <a href="index-corporate-executive.html" class="navbar-brand logo-white"><img src="{{ asset('logo-light.png')}}" alt="img"></a>
                <a href="index-corporate-executive.html" class="navbar-brand logo-dark"><img src="{{ asset(session('logo'))}}" alt="img"></a>
            </div>

            <div class="col-3 nav-utility text-right d-flex justify-content-end align-items-center pt-3">
                <div class="manage-icons d-none d-md-block">
                    <a href="javascript:void(0);" class="d-flex justify-content-end white-trans-btn-and-green text-white">Get Started </a>
                 </div>
            </div>

            <div class="col-12 nav-mega">
                <header class="site-header" id="header">
                    <nav class="navbar navbar-expand-md  static-nav">
                        <div class="container position-relative megamenu-custom">
                            <a class="navbar-brand center-brand" href="index-corporate-executive.html">
                                <img src="{{ asset(session('logo'))}}" alt="logo" class="logo-scrolled">
                            </a>
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav ml-auto mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index-corporate-executive.html">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index-corporate-executive.html">ABOUT US</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index-corporate-executive.html">AGENDA</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index-corporate-executive.html">BERITA</a>
                                    </li>

                                    <li class="nav-item dropdown position-relative">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GALLERY</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="corporate-executive/standard-blog.html">PHOTO</a></li>
                                                <li><i class="lni-angle-double-right right-arrow"></i><a class="dropdown-item" href="corporate-executive/detail-blog.html">VIDEO</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact-sec">CONTACT </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--side menu open button-->
                        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn d-lg-none d-md-block" id="sidemenu_toggle">
                            <span></span> <span></span> <span></span>
                        </a>
                    </nav>

                    <!-- side menu -->
                    <div class="side-menu opacity-0 gradient-bg hidden">
                        <div class="inner-wrapper">
                            <a href="index-corporate-executive.html"><img src="corporate-executive/img/logo.png" alt="img"></a>
                            <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
                            <nav class="side-nav w-100">
                                <ul class="navbar-nav">

                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="index-corporate-executive.html"> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages1">
                                            Features <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <div id="sideNavPages1" class="collapse sideNavPages">

                                            <h5 class="sub-title">1. Features</h5>
                                            <ul class="navbar-nav mt-2">
                                                <li class="nav-item"><a class="nav-link" href="#our-support">Our Support</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#facts">Our Stats</a></li>
                                                <li class="nav-item" ><a class="nav-link" href="#testimonial-sec">Testimonial</a></li>
                                            </ul>

                                            <h5 class="sub-title">2. Others</h5>
                                            <ul class="navbar-nav mt-2">
                                                <li class="nav-item"><a class="nav-link scroll" href="#services-section">Services</a></li>
                                                <li class="nav-item"><a class="nav-link scroll" href="#portfolio-section">Portfolio</a></li>
                                                <li class="nav-item" ><a class="nav-link scroll" href="#pricing-sec">Pricing</a></li>
                                            </ul>

                                            <h5 class="sub-title">3. Sections</h5>
                                            <ul class="navbar-nav mt-2">
                                                <li class="nav-item"><a class="nav-link scroll" href="#speaker-sec">Team</a></li>
                                                <li class="nav-item"><a class="nav-link scroll" href="#testimonial-sec">Reviews</a></li>
                                                <li class="nav-item" ><a class="nav-link" href="#our-support">Support</a></li>
                                            </ul>

                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages3">
                                            Blog <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <div id="sideNavPages3" class="collapse sideNavPages">
                                            <ul class="navbar-nav mt-2">
                                                <li class="nav-item"><a class="nav-link" href="corporate-executive/standard-blog.html">Blog Layout 1</a></li>
                                                <li class="nav-item"><a class="nav-link" href="corporate-executive/detail-blog.html">Blog Layout 2</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="#services-section">Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="#portfolio-section">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#map">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="side-footer w-100">
                                <ul class="social-icons-simple white top40">
                                    <li><a class="facebook-bg-hvr"  href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter-bg-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="instagram-bg-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                                <p class="whitecolor">&copy; <span id="year"></span> Megaone Template. Made With Love by ThemesIndustry</p>
                            </div>
                        </div>
                    </div>
                    <div id="close_side_menu" class="tooltip"></div>
                    <!-- End side menu -->
                </header>
            </div>
        </div>
    </div>
</div>

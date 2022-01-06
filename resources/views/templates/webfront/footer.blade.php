
  <footer id="footer" class="mt-5" >

    <div class="footer-top">
      <div class="container">
        <div class="row">

            <div class="col-lg-5 col-md-6 footer-contact" data-aos="fade-right" data-aos-delay="100">
                <h3> {{ session('config')->name}}</h3>
                <p>
                    {{ session('config')->alamat}}
                </p>

            </div>
            <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-bottom" data-aos-delay="100">
                <h4>Layanan</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="/about"> About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/event"> Event</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/news"> News</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/photo"> Photo</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/video"> Video</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/contact"> Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-left" data-aos-delay="100">
                <h4>Kontak</h4>
                <ul>
                    <li><a href="tel:blabla">Kontak : {{ session('config')->kontak}}</a></li>
                    <li><a href="mailto:blabla"> Email : {{ session('config')->email}}</a></li>
                    <li><a href="https://api.whatsapp.com/send?phone={{ session('config')->wa }}" target="blank" href="#"> Whatsapp : {{ session('config')->wa }}</a></li>
                </ul>
            </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ session('config')->name}}</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer>

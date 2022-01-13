
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
                    <li><i class="bx bx-chevron-right"></i> <a href="/about"> Profil</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/viewprogram"> Program</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/viewcurriculum"> Kurikulum</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/service"> Pengaduan</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/contact"> Kontak</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-left" data-aos-delay="100">
                <h4>Kontak</h4>
                <ul>
                    <li><a href="tel:{{session('config')->kontak}}">Kontak : {{ session('config')->kontak}}</a></li>
                    <li><a href="mailto:{{session('config')->email}}"> Email : {{ session('config')->email}}</a></li>
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

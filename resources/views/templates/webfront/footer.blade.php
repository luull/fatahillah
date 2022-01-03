<footer id="footer" class="mt-5">
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
                        <li><i class="fa fa-angle-right"></i> <a href="/profil"> Profil</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="/bisnis"> Bisnis</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="/produk"> Produk</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="/kartunama/blabla"> Kartu Nama</a></li>
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

            <div class="row">

              <div class="col-md-12">
                <div class="copyright-wrap d-md-flex py-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="me-md-auto text-center text-md-start">
                        <div class="credits">
                            &copy; Copyright {{ session('config')->name}} Powered by <a href="#"> BPB</a>
                        </div>
                    </div>
                    <div class="social-links ml-auto pt-3 pt-md-0">
                        <a href="http://facebook.com/{{ session('config')->fb}}" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://instagram.com/{{ session('config')->ig}}" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
              </div>

            </div>
        </div>
    </div>

</footer>

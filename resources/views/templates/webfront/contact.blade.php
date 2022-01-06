@extends('templates.webfront.master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Contact</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li>Contact</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <h3><span>Contact Us</span></h3>
        <p>{{$configuration->kontak}}</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>{{$configuration->alamat}}</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>{{$configuration->email}}</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>{{$configuration->wa}}</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-12 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7614311101443!2d107.03753631395583!3d-6.424690295351672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69965ac34c0f21%3A0xef519b4f14cf74e4!2sSMK%20Fatahillah%20Cileungsi!5e0!3m2!1sid!2sid!4v1641459036035!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

      </div>

    </div>
  </section>
  @endsection

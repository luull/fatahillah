@extends('templates.webfront.master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Kontak</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li>Kontak</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Kontak</h2>
        <h3><span>Kontak kami</span></h3>
        <p>{{$configuration->kontak}}</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Alamat</h3>
            <p>{{$configuration->alamat}}</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>{{$configuration->email}}</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>No Telp</h3>
            <p>{{$configuration->wa}}</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-12 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb={{$configuration->embedmaps}}" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

      </div>

    </div>
  </section>
  @endsection

@extends('templates.webfront.master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Layanan Pengaduan</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li>Layanan Pengaduan</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6">
            @if (session('message'))
            <div class="alert {{ session('color') }} alert-dismissible fade show">
               {{ session('message') }}</div>
            @endif
            {{-- <a href="{{ url('auth/google') }}" class="btn btn-success mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M11.99 13.9v-3.72h9.36c.14.63.25 1.22.25 2.05c0 5.71-3.83 9.77-9.6 9.77c-5.52 0-10-4.48-10-10S6.48 2 12 2c2.7 0 4.96.99 6.69 2.61l-2.84 2.76c-.72-.68-1.98-1.48-3.85-1.48c-3.31 0-6.01 2.75-6.01 6.12s2.7 6.12 6.01 6.12c3.83 0 5.24-2.65 5.5-4.22h-5.51v-.01z" fill="currentColor" fill-rule="nonzero"/></svg>
                <span class="brand-name">Login with Google</span>
            </a> --}}
        <form action="{{ route('create-service') }}" method="POST" enctype="multipart/form-data" class="php-email-form">
            @csrf
            @if (session('user-session')!=null)
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" value="{{session('user-session')->name}}" class="form-control" id="name" placeholder="Your Name" required readonly>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" value="{{session('user-session')->email}}" name="email" id="email" placeholder="Your Email" required readonly>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul Pengaduan" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Isi Pengaduan" required></textarea>
            </div>
            @else
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required disabled>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required disabled>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul Pengaduan" disabled>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Isi Pengaduan" required disabled></textarea>
            </div>
            @endif
            {{-- <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> --}}
            <div class="text-center">
                @if (session('user-session')!=null)
                <button type="submit">Kirim</button>
                @else
                <a href="{{ url('auth/google') }}" class="btn btn-success mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M11.99 13.9v-3.72h9.36c.14.63.25 1.22.25 2.05c0 5.71-3.83 9.77-9.6 9.77c-5.52 0-10-4.48-10-10S6.48 2 12 2c2.7 0 4.96.99 6.69 2.61l-2.84 2.76c-.72-.68-1.98-1.48-3.85-1.48c-3.31 0-6.01 2.75-6.01 6.12s2.7 6.12 6.01 6.12c3.83 0 5.24-2.65 5.5-4.22h-5.51v-.01z" fill="currentColor" fill-rule="nonzero"/></svg>
                    <span class="brand-name">Masuk dengan Google</span>
                </a>
                @endif
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
  @endsection

@extends('templates.webfront.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Foto</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Foto</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

        <div class="blog-body mt-5 mb-5">
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">

                  <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($photo as $p )
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <img src="{{asset($p->image)}}" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4>{{$p->title}}</h4>
                        <p>{{$p->category}}</p>
                        <a href="{{asset($p->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                      </div>
                    </div>
                    @endforeach

                  </div>

                </div>
              </section>
        </div>

@stop

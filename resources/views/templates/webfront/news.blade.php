@extends('templates.webfront.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>News</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>News</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
<div class="about_content mt-5">

    <div class="standalone-area">
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

              <div class="row justify-content-center">
                @foreach ($news as $n )
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <a href="/detailnews/{{$n->id}}">
                  <div class="member">
                    <div class="member-img">
                      <img src="{{ asset($n->image)}}" style="width:100%;height: 280px !important;" class="img-fluid" alt="">

                    </div>
                    <div class="member-info">
                      <h4>{{$n->title}}</h4>
                      <span>{!! Str::limit($n->body, 200,'...') !!}</span>
                     <hr>
                     <p><i class="bi bi-calendar"></i> {{date('d-m-Y', strtotime($n->date_created))}} | {{$n->created_by}}</p>
                    </div>
                  </div>
                </a>
                </div>
                @endforeach

              </div>

            </div>
          </section>
    </div>
</div>
@stop

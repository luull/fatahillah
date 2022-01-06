@extends('templates.webfront.master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>About</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>About</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->
<div class="about_content mt-5">
        <div class="container">

            <div class="row standalone-row align-items-start">
                <div class="col-lg-4">

                        <img src="{{asset($about->image)}}" class="img-fluid" alt="image">

                </div>
                <div class="col-lg-8">

                        <h2 class="gradient-text1 pb-3">{{$about->title}}</h2>
                        <p>{!!$about->body!!}</p>
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Vission</b></p>
                                <p>{!! $about->vission !!}</p>
                            </div>
                            <div class="col-md-6">
                                <p><b>Mission</b></p>
                                <p>{!! $about->mission !!}</p>
                            </div>
                        </div>

                </div>
            </div>
        </div>
</div>
@stop

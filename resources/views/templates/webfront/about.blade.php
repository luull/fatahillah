@extends('templates.webfront.master')
@section('content')
<div class="paralax-section-slide-data" style="background-image:url({{ asset($banner->image)}})">
    <div class="overlay-banner"></div>
</div>
<div class="about_content">

    <div class="standalone-area">
        <div class="container">

            <div class="row standalone-row align-items-start">
                <div class="col-lg-4">
                    <div class="blog-image wow hover-effect fadeInLeft">
                        <img src="{{asset($about->image)}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="d-inline-block">
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
    </div>
</div>
@stop

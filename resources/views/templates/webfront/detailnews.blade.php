@extends('templates.webfront.master')
@section('content')
<div class="paralax-section-slide-data" style="background-image:url({{ asset($banner->image)}})">
    <div class="overlay-banner"></div>
</div>
<div class="blog-body">
    <div class="container blog-container">

            <div class="row standalone-row align-items-start">

                <div class="col-lg-4">
                    <div class="blog-image wow hover-effect fadeInLeft">
                        <img src="{{asset($news->image)}}" alt="image">
                    </div>
                </div>
                <div class="col-lg-8">
                    <article class="blog-minimal">
                        <div class="post-details alt-font text-center text-lg-left">
                            {{date('d-m-Y', strtotime($news->date_created))}}<span class="post-date"></span> <span class="post-separator">|</span>
                            <span class="post-author">
                                    By <a href="#">{{$news->created_by}}</a>
                                </span>
                            <span class="post-separator">|</span>

                        </div>

                        <h2 class="post-title-minimal text-center text-lg-left">
                            <a href="#" rel="bookmark">{{$news->title}}</a>
                        </h2>

                        <div class="post-content text-center text-lg-left">
                            <p>{!!$news->body!!}</p>

                        </div>
                    </article>

                </div>
            </div>
        </div>
</div>
@endsection

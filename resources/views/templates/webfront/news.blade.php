@extends('templates.webfront.master')
@section('content')
<div class="paralax-section-slide-data" style="background-image:url({{ asset($banner->image)}})">
    <div class="overlay-banner"></div>
</div>
<div class="about_content">

    <div class="standalone-area">
        <div class="blog-body">
            <div class="container blog-container">
                <div class="row justify-content-center">
                    @foreach ($news as $n )

                    <div class="col-md-4 col-lg-4">
                        <article class="blog-classic">
                            <div class="post-thumbnail">
                                <div class="about-image hover-effect">
                                    <img src="{{ asset($n->image)}}" style="width:100%:height:280px !Important;" alt="this is a post">
                                </div>
                            </div>
                            <h2 class="post-title text-center text-lg-left">
                                <a href="#" rel="bookmark">{{$n->title}}</a>
                            </h2>
                            <div class="post-details alt-font text-center text-lg-left">
                                <b>{{date('d-m-Y', strtotime($n->date_created))}}</b><span class="post-date"></span> <span class="post-separator">|</span>
                                <span class="post-author">
                                    By <a href="#">{{$n->created_by}}</a>
                                </span>
                                <span class="post-separator">|</span>



                            </div>
                            <div class="post-content text-center text-lg-left">

                                <p>{!! Str::limit($n->body, 200,'...') !!}</p>

                                <a class="btn green-and-blue" href="/detailnews/{{$n->id}}">Read More</a>

                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop

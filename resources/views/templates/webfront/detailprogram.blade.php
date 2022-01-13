@extends('templates.webfront.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Detail program</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/viewprogram">program</a></li>
          <li>Detail program</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
<div class="blog-body mt-5">
    <div class="container blog-container">

            <div class="row standalone-row align-items-start">

                <div class="col-lg-4">
                    <div class="blog-image wow hover-effect fadeInLeft">
                        <img src="{{asset($program->image)}}" class="img-fluid" alt="image">
                    </div>
                </div>
                <div class="col-lg-8">
                    <article class="blog-minimal">
                        <div class="post-details alt-font text-lg-left">
                            {{date('d-m-Y', strtotime($program->date_created))}}<span class="post-date"></span> <span class="post-separator">|</span>
                            <span class="post-author">
                                    Oleh <a href="#">{{$program->created_by}}</a>
                                </span>
                            <span class="post-separator">|</span>

                        </div>
<hr>
                        <h2 class="post-title-minimal text-lg-left">
                            <a href="#" rel="bookmark">{{$program->title}}</a>
                        </h2>

                        <div class="post-content text-lg-left">
                            <p>{!!$program->body!!}</p>

                        </div>
                    </article>

                </div>
            </div>
        </div>
</div>
@endsection

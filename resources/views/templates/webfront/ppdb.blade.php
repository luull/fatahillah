@extends('templates.webfront.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>PPDB</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>PPDB</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
<div class="blog-body mt-5">
    <div class="container blog-container">

            <div class="row standalone-row align-items-start">
                <div class="col-lg-12">
                    <div class="container">
                   <div class="row justify-content-center">
                       <div class="col-md-10">
                        <article class="blog-minimal mb-5">
                            <h2 class="post-title-minimal text-center">
                                {{$ppdb->title}}
                            </h2>

                            <div class="post-content text-center">
                                <p>{!!$ppdb->body!!}</p>

                            </div>
                        </article>
                       </div>
                   </div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('brosur.svg')}}" style="width: 290px;" class="img-fluid mb-5" alt="">
                                <a class="btn btn-warning mb-3" style="width:100%;background-color:#f08c25;color:#fff;border-radius:5px;" href="{{$ppdb->brosur}}" download> Brosur <i class="bi bi-download" style="float: right"></i> </a>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('formulir.svg')}}" style="width: 250px;" class="img-fluid" alt="">
                                <a class="btn btn-warning" style="width:100%;background-color:#f08c25;color:#fff;border-radius:5px;" href="{{$ppdb->formulir}}" download> Formulir <i class="bi bi-download" style="float: right"></i> </a>
                            </div>
                        </div>
                        <div class="post-details alt-font text-center mt-5">
                            {{date('d-m-Y', strtotime($ppdb->date_created))}}<span class="post-date"></span> <span class="post-separator">|</span>
                            <span class="post-author">
                                    Oleh <a href="#">{{$ppdb->created_by}}</a>
                                </span>
                            <span class="post-separator">|</span>

                        </div>
                   </div>

                </div>
            </div>
        </div>
</div>
@endsection

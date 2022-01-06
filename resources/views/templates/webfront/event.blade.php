@extends('templates.webfront.master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Event</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li>Event</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->
<div class="about_content mt-5">

    <div class="standalone-area">
        <div class="blog-body">
            <div class="container blog-container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        @foreach ( $event as $e )

                        <div class="card-media">
                            <!-- media container -->
                            <div class="card-media-object-container">
                                <div class="card-media-object" style="background-image: url({{ asset($e->image)}});"></div>

                            </div>
                            <!-- body container -->
                            <div class="card-media-body">
                                <div class="card-media-body-top">
                                    <?php $newDateTime = date('h:i A', strtotime($e->time)); ?>
                                    <span class="subtle"> {{only_day($e->date)}} {{only_month($e->date)}} {{only_date($e->date)}} , {{$newDateTime}}</span>

                                </div>
                                <span class="card-media-body-heading">{{$e->title}}</span>
                                <div class="card-media-body-supporting-bottom">
                                    <span class="card-media-body-supporting-bottom-text subtle u-float-right">{{$e->created_by}}</span>
                                </div>
                                <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                                    <a href="/detailevent/{{$e->id}}"class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW DETAIL</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

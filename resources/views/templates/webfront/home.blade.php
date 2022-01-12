@extends('templates.webfront.master')
@section('content')
{{-- <div class="slider">
    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="slider-shop" data-source="gallery" style="background:rgba(255,255,255,0);padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
            <ul>
                @foreach ( $banner as $b )
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <!-- SLIDE  -->
                <li data-index="rs-{{$b->id}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/100x50_44515-slider-bg-3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide {{$b->id}}" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                        <img src="{{ asset($b->image)}}"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" alt="slider-image" data-no-retina>
                    <div class="layer-overlay"></div>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-3"
                         id="slide-3-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-12','-12','-12','-12']"
                         data-fontsize="['60','60','50','40']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 16px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:'Poppins', sans-serif;">{{$b->title}}</div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                         id="slide-3-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['45','45','45','45']"
                         data-fontsize="['18','18','16','16']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 7; white-space: nowrap; font-size: 18px; line-height: 22px; font-weight: 400; color: #eaeaef; font-family:'Poppins', sans-serif;">{{$b->description}} </div>

                    <div class="tp-caption rev-btn  rs-parallaxlevel-2"
                         id="slide-3-layer-4"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['112','112','103','100']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-responsive="off"
                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":280,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 11; max-width:960px; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;"><a href="#about" class="btn blue-and-white-slider slider-btn"> READ MORE</a>
                    </div>

                </li>

                @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div></div>
    </div><!-- END REVOLUTION SLIDER -->
</div> --}}
@foreach ( $banner as $b )
<section id="hero" style="background-image: url({{asset($b->image)}})" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>{{$b->title}} <br> <span>{{$b->description}}</span></h1>
    </div>
  </section>
  @endforeach

  <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

          <div class="row justify-content-between">

              @foreach ($logo as $l)
              <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                  <img src="{{$l->image}}" class="img-fluid" alt="">
                </div>
                @endforeach

            </div>

        </div>
    </section>
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About</h2>
        <h3>Our <span>About Us</span></h3>

      </div>

      <div class="row">
        <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
          <img src="{{ asset($about->image)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 pt-4 pt-lg-0 content d-flex flex-column justify-content-start" data-aos="fade-up" data-aos-delay="100">
          <h3>{{$about->title}}</h3>
          <p class="fst-italic">
            {!! Str::limit($about->body, 400,'...') !!}
          </p>
          <div class="row">
            <div class="col-md-4">
                <a href="/about" class="btn btn-custom scrollto">View Detail</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>News</h2>
        <h3>Our <span>News</span></h3>

      </div>

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

<div class="service-section pt-5 pb-5" id="event">
        <div class="container blog-container">
            <div class="row justify-content-center">
                <div class="section-title">
                    <h2>Event</h2>
                    <h3>Check our <span>Event</span></h3>

                  </div>

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
                                <a href="/detailevent/{{$e->id}}" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW DETAIL</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</div>

 </div>
 <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Photo</h2>
        <h3>Check our <span>Photo</span></h3>

      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach ($photo as $p )
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="{{asset($p->image)}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{$p->title}}</h4>
            <p>{{$p->category}}</p>
            <a href="{{asset($p->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        @endforeach

      </div>

    </div>
  </section>
<div class="portfolio-section pt-5" id="video">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Video</h2>
                <h3>Check our <span>Video</span></h3>

              </div>

        </div>
    </div>
    <div class="galery">
        <div class="container">
            <div class="col-sm-12 col-md-12 ">
                <div class="row justify-content-center">

                    @foreach ($video as $v)
                    <div class="col-md-6 col-lg-4 py-4" data-aos="zoom-in" data-aos-delay="100" id="t-{{$v->id}}">
                        <div class="gallery-container">
                            <img src="https://img.youtube.com/vi/{{$v->link}}/0.jpg" class="img-fluid youtube" alt="" id="{{$v->link}}" style="cursor:pointer" alt="">

                            <div class="overlay">
                                <p class="text p-2">
                                    <span id="ket-{{$v->link}}">{{$v->title}}</span><br>
                                    <span>{{$v->category}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-video" tabindex="-1" aria-labelledby="modal-fotoLabel" aria-hidden="true" ">
    <div class=" modal-dialog">
        <div class="modal-content" style="background:transparent !important;border:none !important;color:#fff !important;">
            <div class="modal-header" style="border:none !important;padding:0px !important;">
                <h5 class="modal-title" id="modal_title"></h5>
            </div>
            <div class="modal-body" id="modal-body">
                <div class="container">
                    <div id="img"></div>
                    <p id="ket"></p>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="ym_id">
                <button type="button" class="btn btn-danger" id="close">Tutup</button>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')

<script type="text/javascript">
    $(function() {
        $(".youtube").click(function() {
            var id = $(this).attr('id');
            $("#ym_id").val(id);
            // var url="https://www.youtube.com/embed/" + id + "?rel=0&amp;showinfo=0";
            var mbed = '<iframe id="videoPlayer" class="videoPlayer" style="overflow: hidden !important;width:100% !important;min-height:250px !important;" src="https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
            var ket = $("#ket-" + id).html();
            $("#modal-body").html(mbed);
            $("#modal_title").html(ket)
            $('#modal-video').modal('toggle')

        })
        $("#btnStop").click(function() {
            pausevideo();
            $('#modal-video').modal('toggle');
        })

        $("#close").click(function() {

            var id = $("#ym_id").val();
            // var url="https://www.youtube.com/embed/" + id + "?rel=0&amp;showinfo=0";
            var mbed = '<iframe id="videoPlayer" class="videoPlayer" style="width:auto ;height:auto;min-width:475px; min-height:315px;overflow:auto" src="https://www.youtube.com/embed/' + id + '?autoplay=0&rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';

            var ket = $("#ket-" + id).html();
            $("#modal-body").html(mbed);
            $('#modal-video').modal('toggle');

        })

    })
</script>
@endsection

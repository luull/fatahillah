@extends('templates.webfront.master')
@section('content')
<div class="slider">
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

                         style="z-index: 11; max-width:960px; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Poppins;"><a href="#our-support" class="btn blue-and-white-slider slider-btn"> READ MORE</a>
                    </div>

                </li>

                @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div></div>
    </div><!-- END REVOLUTION SLIDER -->
</div>
<div class="service-section" id="services-section" style="background-color: #fafafa !important;">
    <div class="container">
        <div class="row">
            <div class="col-12 heading text-center">
                <span class="title">About Us</span>
                <h3 class="text-center">{{$about->title}}</h3>
                <p class="w-75">{!! Str::limit($about->body, 200,'...') !!}</p>
                <a href="/about" class="btn green-and-blue mt-5 mb-5" href="javascript:void(0)">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
<div class="service-section" id="services-section">
    <div class="blog-body">
        <div class="container blog-container">
            <div class="row justify-content-center">
                <div class="col-12 mb-4 heading text-center">
                    <span class="title">News </span>
                    <h3 class="text-center">News Section</h3>
                </div>
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
<div class="service-section" id="services-section" style="background-color: #fafafa !important;">
        <div class="container blog-container">
            <div class="row justify-content-center">
                <div class="col-12 mb-4 heading text-center">
                    <span class="title">Event </span>
                    <h3 class="text-center">Event Section</h3>
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
<div class="portfolio-section" id="portfolio-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="title text-center">Our Photo</h3>
                <h2 class="sub-heading text-center">Photo Section</h2>
            </div>
        </div>
    </div>
   <div class="container mt-4">
    <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat">
        @foreach ($photo as $p )
        <div class="cbp-item ">
            <a href="{{asset($p->image)}}" class="cbp-caption cbp-lightbox" data-title="{{$p->title}}">
                <div class="cbp-caption-defaultWrap">
                    <img alt=""  src="{{asset($p->image)}}" >
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">{{$p->title}}</div>
                            <!--                            <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>-->
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
   </div>
</div>
<div class="portfolio-section" id="portfolio-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="title text-center">Our Video</h3>
                <h2 class="sub-heading text-center">Video Section</h2>
            </div>
        </div>
    </div>
    <div class="section-bg galery">
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
            var mbed = '<iframe id="videoPlayer" class="videoPlayer" style="overflow: hidden !important;min-height:250px !important;" src="https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
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

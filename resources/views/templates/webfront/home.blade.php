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
<div class="service-section" id="services-section">
    <div class="container">
        <div class="row">
            <div class="col-12 heading text-center">
                <span class="title">About Us</span>
                <h3 class="text-center">{{$about->title}}</h3>
                <p class="w-75">{!!$about->body!!}</p>
            </div>
            <button class="btn btn-warning">Lihat Selengkapnya</button>
        </div>
    </div>
</div>
@endsection

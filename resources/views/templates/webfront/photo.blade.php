@extends('templates.webfront.master')
@section('content')
<div class="paralax-section-slide-data" style="background-image:url({{ asset($banner->image)}})">
    <div class="overlay-banner"></div>
</div>

        <div class="blog-body mb-5">
            <div class="portfolio-section" id="portfolio-section">

               <div class="container">
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
        </div>

@stop

@extends('templates.webfront.master')
@section('content')
<div class="paralax-section-slide-data" style="background-image:url({{ asset($banner->image)}})">
    <div class="overlay-banner"></div>
</div>
        <div class="blog-body mb-5">
            <div class="portfolio-section" id="portfolio-section">

                <div class="container">
                    <div class="col-sm-12 col-md-12 ">
                        <div class="row justify-content-center">

                            @foreach ($video as $v)
                            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100" id="t-{{$v->id}}">
                                <div class="gallery-container">
                                    <img src="https://img.youtube.com/vi/{{$v->link}}/0.jpg" class="img-fluid youtube" alt="" id="{{$v->link}}" style="cursor:pointer" alt="">

                                    <div class="overlay">
                                        <p class="text p-2">
                                            <span id="ket-{{$v->link}}">{{$v->judul}}</span><br>
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
@stop
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

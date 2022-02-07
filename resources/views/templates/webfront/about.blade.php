@extends('templates.webfront.master')
@section('content')
<style>
    /* ==== Cards using Bootstrap === */

#cards .card {
    border-radius: 20px;
    min-height: 100%;
}

#cards .heading-border {
    position: absolute;
    width: 100%;
    top: 60%;
}

#cards .card .user-picture img {
    position: absolute;
    top: -20%;
    right: 10%;
    background: #f8f9fa!important;
    padding: 10px;
}

#cards .card .user-content .user-name {
    margin-right: 150px;
}
</style>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Profil</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Profil</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->
<div class="about_content mt-5">
        <div class="container">

            <div class="row standalone-row align-items-start">
                <div class="col-lg-4">

                        <img src="{{asset($about->image)}}" class="img-fluid" alt="image">

                </div>
                <div class="col-lg-8">

                        <h2 class="gradient-text1 pb-3">{{$about->title}}</h2>
                        <p>{!!$about->body!!}</p>
                        <div class="row">
                            <div class="col-md-6" id="visi">
                                <p><b>Visi</b></p>
                                <p>{!! $about->vission !!}</p>
                            </div>
                            <div class="col-md-6" id="misi">
                                <p><b>Misi</b></p>
                                <p>{!! $about->mission !!}</p>
                            </div>
                        </div>

                </div>
                <div class="col-md-12">
                    <section id="pimpinan" class="team">
                        <div class="container" data-aos="fade-up">

                          <div class="section-title mb-3">
                            <h3>Struktur <span>Kepemimpinan</span></h3>
                          </div>

                          <div class="row justify-content-center">
                            @foreach ($teacher as $t )
                            @if($t->category == 'Pimpinan')
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="{{ asset($t->image)}}" class="img-fluid" alt="">

                                    </div>
                                    <div class="member-info">
                                        <h4>{{$t->name}}</h4>
                                        <span>{{$t->title}}</span>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                          </div>
                        </div>
                    </section>
                </div>

                <div class="col-md-12">
                    <section id="cards" class="team">
                        <div class="container py-2">
                            <div class="section-title mb-3">
                                <h3>Struktur <span>Staff</span></h3>
                              </div>

                              <div class="row justify-content-center">
                                @foreach ($teacher as $t )
                                @if($t->category == 'Staff')
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                    <div class="member">
                                        <div class="member-img">
                                            <img src="{{ asset($t->image)}}" class="img-fluid" alt="">

                                        </div>
                                        <div class="member-info">
                                            <h4>{{$t->name}}</h4>
                                            <span>{{$t->title}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                              </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12">
                    <section id="sarana" class="team">
                        <div class="container" data-aos="fade-up">

                          <div class="section-title mb-3">
                            <h3>Sarana dan <span>Prasarana</span></h3>
                          </div>
                          <div class="row justify-content-center">
                              <div class="col-md-12">
                                  {!!$about->sarana!!}
                              </div>
                          </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
</div>
@stop

@extends('templates.admin.master')
@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-12 mb-5">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Konfigurasi</span></li>
            </ol>
        </nav>
    </div>
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area py-4 px-4 br-6">
           <div class="container">
            <form action="{{ route('update-config') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session('message'))
                <div class="alert {{ session('color') }} alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button> {{ session('message') }}</div>
                @endif
                <input type="text" value="{{$data->id}}" name="id" hidden>
                <div class="row">
                    <div class="col-md-4">
                        <label>Logo</label>
                        @if($data->logo != null)
                        <span class="text-danger">* batas ukuran 2mb</span>
                        <hr>
                        <img src="{{ asset($data->logo)}}" class="img-fluid" alt="">
                        <input type="file" class="form-control" name="logo">
                        <input type="text" value="{{$data->logo}}" name="default" hidden>
                        @error('logo')
                        <br>
                        <div class="text-danger mt-1">Gambar tidak sesuai dengan ketentuan</div>
                        @enderror
                        @else
                        <span class="text-danger">* batas ukuran 2mb</span>
                        <hr>
                        <img src="{{ asset('default-image.png')}}" class="img-fluid" alt="">
                        <input type="file" class="form-control" name="logo">
                        @error('logo')
                        <br>
                        <div class="text-danger mt-1">Gambar tidak sesuai dengan ketentuan</div>
                        @enderror
                        @endif
                    </div>
                    <div class="col-md-8">
                        <hr class="mt-5">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="{{$data->name}}" name="name">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat">{{$data->alamat}}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="{{$data->email}}" name="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Kontak</label>
                                    <input type="text" class="form-control" value="{{$data->kontak}}" name="kontak">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Whatsapp</label>
                                    <input type="text" class="form-control" value="{{$data->wa}}" name="wa">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Facebook</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">https://facebook.com/</span>
                                    </div>
                                    <input type="text" class="form-control" value="{{$data->fb}}" name="fb">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Instagram</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">https://instagram.com/</span>
                                    </div>
                                    <input type="text" class="form-control" value="{{$data->ig}}" name="ig">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Maps</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">src =</span>
                                    </div>
                                    <input type="text" name="embedmaps" class="form-control" value="{{$data->embedmaps}}" aria-describedby="basic-addon1">
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                        <button type="submit" class="btn btn-success btn-block">Simpan</button>
                    </div>
                </div>
            </form>
           </div>
        </div>
    </div>
</div>
@endsection

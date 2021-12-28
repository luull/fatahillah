@extends('templates.admin.master')
@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-12 mb-5">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>About</span></li>
            </ol>
        </nav>
    </div>
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area py-4 px-4 br-6">
           <div class="container">
            <form action="{{ route('update-about') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session('message'))
                <div class="alert {{ session('color') }} alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button> {{ session('message') }}</div>
                @endif
                <input type="text" value="{{$data->id}}" name="id" hidden>
                <div class="row">
                    <div class="col-md-4">
                        <label>Image</label>
                        @if($data->image != null)
                        <span class="text-danger">* max size 2mb</span>
                        <hr>
                        <img src="{{ asset($data->image)}}" class="img-fluid" alt="">
                        <input type="file" class="form-control" name="image">
                        <input type="text" value="{{$data->image}}" name="default" hidden>
                        @error('image')
                        <br>
                        <div class="text-danger mt-1">The Image does not match the Requirements</div>
                        @enderror
                        @else
                        <span class="text-danger">* max size 2mb</span>
                        <hr>
                        <img src="{{ asset('default-image.png')}}" class="img-fluid" alt="">
                        <input type="file" class="form-control" name="image">
                        @error('image')
                        <br>
                        <div class="text-danger mt-1">The Image does not match the Requirements</div>
                        @enderror
                        @endif
                    </div>
                    <div class="col-md-8">
                        <hr class="mt-5">
                        <div class="form-group">
                            <label>Body</label>
                            <textarea id="body" class="form-control" name="body" rows="10" cols="50">{!! $data->body !!}</textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vission</label>
                                    <textarea id="vission" class="form-control" name="vission" rows="6" cols="30">{!! $data->vission !!}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mission</label>
                                    <textarea id="mission" class="form-control" name="mission" rows="6" cols="30">{!! $data->mission !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-success btn-block" type="submit">Save</button>
                    </div>
                </div>
            </form>
           </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
   var body = document.getElementById("body");
     CKEDITOR.replace(body,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
<script>
   var vission = document.getElementById("vission");
     CKEDITOR.replace(vission,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
<script>
   var mission = document.getElementById("mission");
     CKEDITOR.replace(mission,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@stop

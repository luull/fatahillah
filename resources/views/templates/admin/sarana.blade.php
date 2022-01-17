@extends('templates.admin.master')
@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-12 mb-5">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Sarana dan Prasarana</span></li>
            </ol>
        </nav>
    </div>
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area py-4 px-4 br-6">
           <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <form action="{{ route('upload-file') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Upload</label>
                                    <span class="text-danger">* batas ukuran 2mb</span>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" name="image">
                                        <div class="input-group-append">
                                        <button class="btn btn-success" type="submit" id="button-addon2">Upload</button>
                                        </div>
                                        @error('image')
                                        <br>
                                        <div class="text-danger mt-1">Gambar tidak sesuai dengan ketentuan</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <hr>
            <form action="{{ route('update-sarana') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session('message'))
                <div class="alert {{ session('color') }} alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button> {{ session('message') }}</div>
                @endif
                <input type="text" value="{{$data->id}}" name="id" hidden>
                <div class="row">
                    <div class="col-md-12">
                        <hr class="mt-5">
                        <div class="form-group">
                            <label>Sarana Prasarana</label>
                            <textarea id="sarana" class="form-control" name="sarana" rows="10" cols="50">{!! $data->sarana !!}</textarea>
                        </div>
                        <hr>
                        <button class="btn btn-success btn-block" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
           </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    CKEDITOR.replace('sarana', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserBrowseUrl: "{{asset('/admin/file_browse?path=images')}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@stop

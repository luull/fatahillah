@extends('templates.admin.master')
@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-12 mb-5">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Kegiatan</span></li>
            </ol>
        </nav>
    </div>
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        @if (session('message'))
        <div class="alert {{ session('color') }} alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button> {{ session('message') }}</div>
        @endif
        <div class="widget-content widget-content-area py-4 px-4 br-6">
           <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <form action="{{ route('upload-file-event') }}" method="POST" enctype="multipart/form-data">
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
               <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#addModal">Tambah</button>
                  <table id="dt-table" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tgl</th>
                                <th>Jam</th>
                                <th>Tgl dibuat</th>
                                <th>Pembuat</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            @foreach ($data as $d )

                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$d->title}}</td>
                                <td>{{$d->date}}</td>
                                <td>{{$d->time}}</td>
                                <td>{{$d->date_created}}</td>
                                <td>{{$d->created_by}}</td>
                                <td><img src="{{ asset($d->image) }}" style="max-height: 70px;" alt=""></td>
                                <td>
                                    <a href="#" class="edit" id="e-{{$d->id}}" alt="Edit"><i data-feather="edit"></i></a>
                                    <a href="/admin/event/delete/{{$d->id}}" alt="Delete"><i data-feather="trash" class="text-danger"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                  </table>
           </div>
        </div>
    </div>
</div>
<!-- Modal Add-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i data-feather="close"></i>
                </button>
            </div>
            <form action="{{ route('create-event') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tgl</label>
                                <input type="date" class="form-control" name="date">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Jam</label>
                                <input type="time" class="form-control" name="time">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Isi</label>
                                <textarea id="body" class="form-control" name="body" rows="10" cols="50"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Gambar</label>
                            <span class="text-danger">* batas ukuran 2mb</span>
                            <input type="file" class="form-control" name="image">
                            @error('image')
                            <br>
                            <div class="text-danger mt-1">Gambar tidak sesuai dengan ketentuan</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal edit-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Ubah Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i data-feather="close"></i>
                </button>
            </div>
            <form action="{{ route('update-event') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="text" name="id" id="edit_id" hidden>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" id="edit_title" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tgl</label>
                                <input type="date" id="edit_date" class="form-control" name="date">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Jam</label>
                                <input type="time" id="edit_time" class="form-control" name="time">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Isi</label>
                                <textarea id="editbody" class="form-control edit_body" name="body" rows="10" cols="50"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Gambar</label>
                                <span class="text-danger">* batas ukuran 2mb</span>
                                <br><img src="" class="img img-thumbnail" id="image_view" style="max-width:200px">
                                <br><input type="text" class="form-control input-default" id="image_edit" name="default" hidden>

                                <input type="file" class="form-control input-default" name="image">
                                @error('image')
                                <br>
                                <div class="text-danger mt-1">Gambar tidak sesuai dengan ketentuan</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    CKEDITOR.replace('body', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserBrowseUrl: "{{asset('/admin/file_browse_event?path=upload/event')}}",
        filebrowserUploadMethod: 'form'
    });
</script>
<script >
    $(document).ready(function(){
       $("#dt-table").on("click", ".edit", function() {
            var idnya=$(this).attr('id').split('-');
            var id=idnya[1];

           var url="<?PHP echo env('APP_URL');?>/";

            $.ajax({
                type:'get',
                method:'get',
                url:'/admin/event/find/'  + id ,
                data:'_token = <?php echo csrf_token() ?>'   ,
                success:function(hsl) {
                   if (hsl.error){
                       alert(hsl.message);
                   } else{
                    $("#image_view").show();
                    $("#image_view").attr('src',url + hsl.image);
                    $("#image_edit").val(hsl.image);
                    $("#edit_id").val(hsl.id);
                    $("#edit_title").val(hsl.title);
                    $("#edit_date").val(hsl.date);
                    $("#edit_time").val(hsl.time);
                    $("textarea.edit_body").val(hsl.body);
                    $("#editModal").modal();
                    var editbody = document.getElementById("editbody");
                        CKEDITOR.replace(editbody,{
                        language:'en-gb'
                    });
                    CKEDITOR.config.allowedContent = true;
                   }
                }
            });
        });
    });
</script>
@stop

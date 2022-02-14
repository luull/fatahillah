@extends('templates.admin.master')
@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-12 mb-5">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Manajemen Pengguna</span></li>
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
               <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#addModal">Tambah</button>
                  <table id="dt-table" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tingkat</th>
                                <th>Tgl dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            @foreach ($data as $d )

                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$d->username}}</td>
                                <td>{{$d->level}}</td>
                                <td>{{$d->date_created}}</td>
                                <td>
                                    <a href="#" class="edit" id="e-{{$d->id}}" alt="Edit"><i data-feather="edit"></i></a>
                                    <a href="/admin/user/delete/{{$d->id}}" alt="Delete"><i data-feather="trash" class="text-danger"></i></a>
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
                <h5 class="modal-title" id="addModalLabel">Tambah Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i data-feather="close"></i>
                </button>
            </div>
            <form action="{{ route('create-user') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Kata sandi</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tingkat</label>
                                <br>
                                <select name="level" class="form-control" id="">
                                    <option value="0">Admin</option>
                                    <option value="1">Super Admin</option>
                                </select>
                            </div>
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
                <h5 class="modal-title" id="editModalLabel">Tambah Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i data-feather="close"></i>
                </button>
            </div>
            <form action="{{ route('update-user') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="text" name="id" id="edit_id" hidden>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" id="edit_username" class="form-control" name="username">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tingkat</label>
                                <br>
                                <select name="level" id="edit_level" class="form-control" id="">
                                    <option id="edit_level" value="0">Admin</option>
                                    <option id="edit_level" value="1">Super Admin</option>
                                </select>
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
<script >
    $(document).ready(function(){
       $("#dt-table").on("click", ".edit", function() {
            var idnya=$(this).attr('id').split('-');
            var id=idnya[1];

           var url="<?PHP echo env('APP_URL');?>/";

            $.ajax({
                type:'get',
                method:'get',
                url:'/admin/user/find/'  + id ,
                data:'_token = <?php echo csrf_token() ?>'   ,
                success:function(hsl) {
                   if (hsl.error){
                       alert(hsl.message);
                   } else{
                    $("#edit_id").val(hsl.id);
                    $("#edit_username").val(hsl.username);
                    $("#edit_level").val(hsl.level);
                    $("#editModal").modal();
                   }
                }
            });
        });
    });
</script>
@stop

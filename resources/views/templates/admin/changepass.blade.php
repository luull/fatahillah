@extends('templates.admin.master')
@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-12 mb-5">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Ubah kata sandi</span></li>
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
                        <form class="text-left" action="{{ route('change-password') }}" method="POST" >
                            @csrf
                            <div class="form">

                                <div id="password-field" class="field-wrapper input mb-3">
                                    <div class="d-flex justify-content-between">
                                        <label for="old_password">Kata sandi lama</label>

                                    </div>

                                    <input id="old_password" name="old_password" type="password" class="form-control" placeholder="Old Password">

                                </div>
                                <div id="password-field" class="field-wrapper input mb-3">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">Kata sandi baru</label>
                                    </div>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="New Password">

                                </div>
                                <div id="password-field" class="field-wrapper input mb-3">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">Konfirmasi Kata sandi baru</label>
                                    </div>

                                    <input id="password1" name="password1" type="password" class="form-control" placeholder="Confirm New Password">

                                </div>
                                <div class="d-sm-flex justify-content-between mb-3">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Simpan</button>
                                    </div>
                                </div>


                            </div>
                        </form>

            </div>
        </div>
    </div>
</div>
@endsection

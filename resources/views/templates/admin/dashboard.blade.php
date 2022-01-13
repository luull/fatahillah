@extends('templates.admin.master')
@section('content')
<div class="row layout-top-spacing">

    <div class="col-xl-12 col-lg-12 col-12 mb-5">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Dashboard</span></li>
            </ol>
        </nav>
    </div>
    <div class="col-xl-8 col-lg-7 col-12">
        @if (session('message'))
        <div class="alert {{ session('color') }} alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button> {{ session('message') }}</div>
        @endif
        <div class="row">
            <div class="col-md-4">

                <img src="{{asset('default-user.jpeg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">

                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Selamat datang {{session('admin_data')->username}}!</h4>
                    <p class="text-white">Selamat datang di menu {{session('admin_data')->level == 0 ? 'Admin' : 'Super Admin'}}</p>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layout')

@section('content')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('template.navbar')
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center"
        style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="display-2 text-white">Hello {{ $user->nama }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-4 order-xl-2">
                <div class="card card-profile">
                    <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img id="modal-preview" src="../assets/img/theme/team-4.jpg" class="rounded-circle" width="140" height="140">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body pt-0 mt-5">
                        <div class="text-center mt-5">
                            <form id="form-edit-petugas" name="form-edit-petugas" method="post" enctype="multipart/form-data">
                            <input lang="en" class="btn btn-sm btn-primary" id="image" type="file" name="image"
                                accept="image/*" onchange="readURL(this);">
                        </div>
                    </div>
                            
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Edit Profile </h3>
                            </div>
                            <div class="col-4 text-right">
                                <button type="submit" id="tombol-edit-petugas" class="btn btn-sm btn-primary">Ubah</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <input type="hidden" name="id_petugas" value="{{ Session::get('id_petugas') }}">
                            <h6 class="heading-small text-muted mb-4">Informasi User</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email</label>
                                            <input type="email" id="input-email" name="email" class="form-control" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="nama">Nama</label>
                                            <input type="text" id="nama" name="nama" class="form-control" value="{{ $user->nama }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Contact information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-city">ID Petugas</label>
                                            <input type="text" id="input-city" class="form-control" value="{{ Session::get('id_petugas') }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Level</label>
                                            <input type="text" id="input-country" class="form-control" value="{{ Session::get('level') }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Tanggal Terdaftar</label>
                                            <input type="number" id="input-postal-code" class="form-control" value="{{ Session::get('id_petugas') }}" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <!-- Description -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('template.footer')

        @endsection

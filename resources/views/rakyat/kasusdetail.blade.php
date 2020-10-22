@extends('layout')

@section('content')

<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('template.navbar')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-default pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-12  text-center">
                        <h6 class="h2 text-white d-inline-block mb-0">Layanan Aspirasi dan Pengaduan Online Rakyat</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid ">
        <div class="row">
            <div class="col-xl-8 offset-2">
                <div class="card-body shadow-lg">
                    <div class="container pt-5">
                        <div class="row h-100 align-items-center">
                            <div class="col-10 offset-1 bg-light shadow-lg">
                                <div class="d-flex bd-highlight">
                                    <div class="p-2 flex-shrink-1 bd-highlight"><img
                                            src="{{ asset('/assets/img/theme/team-4.jpg') }}" width="55" height="55"
                                            class="rounded-circle m-4"></div>
                                    <div class="p-2 w-100 bd-highlight mt-4">
                                        <p>
                                            <a href="#"> {{ Session::get('nama') }} </a>
                                            <i class="fa fa-globe pl-4 text-muted"><small> Website </small></i>
                                            <small class="float-right">{{ $detail->tanggal_pengaduan }}</small>
                                        </p>
                                        <p class="pt-1 text-muted">ID Pengaduan : # {{ $detail->id_pengaduan }} </p>
                                        <h2 class="pt-3">{{ $detail->judul }}</h2>
                                        <p class="pt-2">{{ $detail->isi_laporan }}</p>
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-link " id="nav-home-tab" data-toggle="tab"
                                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                                    aria-selected="true"><i class="fa fa-comments text-muted">
                                                        Comments</i></a>

                                                <a class="nav-link" id="nav-profile-tab" data-toggle="modal"
                                                    data-target="#modalhapuscase" href="#nav-profile" role="tab"
                                                    aria-controls="nav-profile" aria-selected="false"><i
                                                        class="fa fa-trash text-muted"> Delete Case</i></a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade" id="nav-home" role="tabpanel"
                                                aria-labelledby="nav-home-tab">

                                                <div class="d-flex bd-highlight" style="background-color;">
                                                    <div class="p-2 w-100 bd-highlight">
                                                        <p><strong></strong></p>
                                                        <p> </p>
                                                    </div>
                                                    <div class="p-2 flex-shrink-1 bd-highlight">
                                                        <p class="text-center"><small></small></p>
                                                    </div>
                                                </div>
                                                <hr>

                                                <form class="mb-5" method="POST" action="">
                                                    <div>
                                                        <input type="hidden" value="" name="id">
                                                        <input type="hidden" value="" name="levelkomen">
                                                        <input type="hidden" name="nama" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="isikomen" rows="3"
                                                            name="isikomen" placeholder="Your Comment..."
                                                            style="resize: none;"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn" btn-lg btn-block"
                                                        style="background-color;">Comment</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('template.footer')
    </div>
</div>


@endsection

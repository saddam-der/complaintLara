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
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Pengaduan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Aspirasi</a>
                        </li>
                    </ul>
                    <hr>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                            aria-labelledby="tabs-icons-text-1-tab">
                            <form id="form-pengaduan">
                                <input type="hidden" name="jenis" value="pengaduan">
                                <div class="form-group">
                                    <input class="form-control" name="judul" type="text" placeholder="Tulis Judul Laporan*">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="isi" placeholder="Tulis Isi Laporan*" rows="4"
                                        style="resize: none;"></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="asal" placeholder="Tulis Kota Asal*">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <select class="form-control" name="kategori">
                                            <option hidden>Buka Ini Untuk Memilih Kategori</option>
                                            <option>Kesehatan</option>
                                            <option>Pendidikan</option>
                                            <option>Listrik</option>
                                            <option>Lingkungan Hidup</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input" id="customFileLang"
                                                    lang="en">
                                                <label class="custom-file-label" for="customFileLang">Select
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mt-5">
                                            <button type="submit"
                                                class="btn btn-primary float-right mt-5">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                            aria-labelledby="tabs-icons-text-2-tab">
                            <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex
                                squid.
                                Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                apparel,
                                butcher voluptate nisi qui.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @include('template.footer')
    </div>
</div>


@endsection

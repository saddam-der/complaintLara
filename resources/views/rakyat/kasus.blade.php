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
                        <h6 class="h2 text-white d-inline-block mb-0">Layanan Aspirasi dan Pengaduan Online Rakyat </h6>
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
                    <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                    href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                    aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Pending</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                    href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                    aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Proses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab"
                                    href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3"
                                    aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Selesai</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-1-tab">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($kasus as $item)
                                            @if($item->status == "pending")
                                            <tr>
                                                <th scope="row">{{ $item->id_pengaduan }}</th>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->kategori }}</td>
                                                <td>{{ $item->tanggal_pengaduan }}</td>
                                                <td><a href="{{ url("rakyat/detail/$item->id_pengaduan") }}">Detail</a></td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-2-tab">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($kasus as $item)
                                            @if($item->status == "proses")
                                            <tr>
                                                <th scope="row">{{ $item->id_pengaduan }}</th>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->kategori }}</td>
                                                <td>{{ $item->tanggal_pengaduan }}</td>
                                                <td><a href="{{ url("rakyat/detail/$item->id_pengaduan") }}">Detail</a></td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-3-tab">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($kasus as $item)
                                            @if($item->status == "selesai")
                                            <tr>
                                                <th scope="row">{{ $item->id_pengaduan }}</th>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->kategori }}</td>
                                                <td>{{ $item->tanggal_pengaduan }}</td>
                                                <td><a href="{{ url("rakyat/detail/$item->id_pengaduan") }}">Detail</a></td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
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

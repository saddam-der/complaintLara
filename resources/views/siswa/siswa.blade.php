@extends('layout')

@section('content')
<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('template.navbar')
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div id="response"></div>
                        <div class="d-flex bd-highlight">
                            <div class=" w-100 bd-highlight">
                                <a type="button" href="javascript:void(0)" class="btn btn-primary" id="tombol-tambah">
                                    Tambah Siswa
                                </a>
                            </div>
                            <div class=" flex-shrink-1 bd-highlight">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="fa fa-search"></i></span>
                                        </div>
                                        <input id="searchbox" type="text" class="form-control" placeholder="Cari"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="data_users_side" width="100%">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">NISN</th>
                                    <th scope="col" class="sort" data-sort="budget">Nama</th>
                                    <th scope="col" class="sort" data-sort="status">Jenis Kelamin</th>
                                    <th scope="col" class="sort" data-sort="status">Jurusan</th>
                                    <th scope="col" class="sort" data-sort="status">agama</th>
                                    <th scope="col" class="sort" data-sort="completion">Nomer HP</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <div id="pagi">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal  -->
        <div class="modal fade" id="tambah-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-judul"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="form-tambah-edit" name="form-tambah-edit" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="nisn" id="nisn">

                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input name="nama" id="nama" class="form-control" placeholder="Nama" type="text"
                                        value="">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-active-40"></i></span>
                                    </div>
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                        <option hidden>Jenis Kelamin</option>
                                        <option value="Laki laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-settings"></i></span>
                                    </div>
                                    <select class="form-control" name="jurusan" id="jurusan">
                                        <option hidden>Jurusan</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Multimedia">Multimedia</option>
                                        <option value="Teknik Jaringan Dasar">Teknik Jaringan Dasar</option>
                                        <option value="Broadcast">Broadcast</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-compass-04"></i></span>
                                    </div>
                                    <input name="agama" id="agama" class="form-control" placeholder="Agama" type="text"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                    </div>
                                    <input name="nohp" id="nohp" class="form-control" placeholder="Nomer HP" type="text"
                                        pattern="[0-9]+" maxlength="5">
                                </div>
                            </div>
                            <div class="d-flex flex-row bd-highlight mb-3">
                                <div class="p-2 bd-highlight">
                                    <img id="modal-preview" src="https://via.placeholder.com/150" alt="Preview"
                                        class="form-group hidden" width="100" height="100">
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div class="custom-file">
                                        <input lang="en" class="custom-file-input" id="image" type="file" name="image"
                                            accept="image/*" onchange="readURL(this);">
                                        <input type="hidden" name="hidden_image" id="hidden_image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" value="create" class="btn btn-primary" id="tombol-simpan">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('template.footer')
    </div>
</div>
@endsection

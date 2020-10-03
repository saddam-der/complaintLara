// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });
// $(document).ready(function () {
//     $('#data_users_side').DataTable({
//         processing: true,
//         serverSide: true,
//         dom: '<ip>',
//         pagingType: "simple",
//         oLanguage: {
//             "sInfo": "Ada _TOTAL_ siswa, yang ditampilkan  _END_ siswa",
//             oPaginate: {
//                 sNext: '<i class="page-item fas fa-angle-right" ></i>',
//                 sPrevious: '<i class="page-item fas fa-angle-left" ></i>'
//             }
//         },
//         ajax: "/users_server_side",
//         columns: [{
//                 data: 'nisn',
//                 name: 'nisn',
//             },
//             {
//                 data: 'nama',
//                 name: 'nama',
//             },
//             {
//                 data: 'jenis_kelamin',
//                 name: 'jenis_kelamin',
//                 searchable: false,
//             },
//             {
//                 data: 'jurusan',
//                 name: 'jurusan',
//             },
//             {
//                 data: 'agama',
//                 name: 'agama',
//             },
//             {
//                 data: 'nohp',
//                 name: 'nohp',
//                 orderable: false,
//                 searchable: false
//             },
            
//             {
//                 data: 'action',
//                 name: 'action',
//                 orderable: false,
//                 searchable: false
//             }
//         ]
//     });

//     var dataTable = $('#data_users_side').dataTable();
//     $("#searchbox").keyup(function () {
//         dataTable.fnFilter(this.value);
//     });
// });

// function readURL(input, id) {
//     id = id || '#modal-preview';
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function (e) {
//             $(id).attr('src', e.target.result);
//         };
//         reader.readAsDataURL(input.files[0]);
//         $('#modal-preview').removeClass('hidden');
//         $('#start').hide();
//     }
// }


// $('body').on('submit', '#form-tambah-edit', function (e) {
//     e.preventDefault();
//     var actionType = $('#btn-save').val();
//     $('#btn-save').html('Sending..');
//     var formData = new FormData(this);
//     $.ajax({
//         type: 'POST',
//         url:  "{{ route('siswa.store')}}",
//         data: formData,
//         cache: false,
//         contentType: false,
//         processData: false,
//         success: (data) => {
//             $('#form-tambah-edit').trigger("reset");
//             $('#tambah-modal').modal('hide');
//             $('#btn-save').html('Save Changes');
//             var oTable = $('#data_users_side').dataTable();
//             oTable.fnDraw(false);
//         },
//         error: function (data) {
//             console.log('Error:', data);
//             $('#btn-save').html('Save Changes');
//         }
//     });
// });

// $(document).ready(function () {
//     /*  When user click add user button */
//     $('#tombol-tambah').click(function () {
//         $('#tombol-simpan').val("create-siswa");
//         $('#nisn').val('');
//         $('#form-tambah-edit').trigger("reset");
//         $('#modal-judul').html("Tambah Siswa");
//         $('#tambah-modal').modal('show');
//         $('#modal-preview').attr('src', 'https://via.placeholder.com/150');
//     });
//     /* When click edit user */
//     $('body').on('click', '.edit-product', function () {
//         var nisan = $(this).data('id');
//         $.get('siswa/' + nisan + '/edit', function (data) {
//             $('#modal-judul').html("Edit Siswa");
//             $('#tombol-simpan').val("edit-product");
//             $('#tambah-modal').modal('show');

//             $('#nisn').val(data.nisn);
//             $('#nama').val(data.nama);
//             $('#jenis_kelamin').val(data.jenis_kelamin);
//             $('#jurusan').val(data.jurusan);
//             $('#agama').val(data.agama);
//             $('#nohp').val(data.nohp);
//             $('#modal-preview').attr('alt', 'No image available');
//             if (data.image) {
//                 $('#modal-preview').attr('src', 'img/siswa/' + data.image);
//                 $('#hidden_image').attr('src', 'img/siswa/' + data.image);
//             }
//         })
//     });

//     $('body').on('click', '#delete-product', function () {
//         var nisn = $(this).data("id");
//         if (confirm("Are You sure want to delete !")) {
//             $.ajax({
//                 type: "get",
//                 url: "siswa/delete/" + nisn,
//                 success: function (data) {
//                     var oTable = $('#data_users_side').dataTable();
//                     oTable.fnDraw(false);
//                 },
//                 error: function (data) {
//                     console.log('Error:', data);
//                 }
//             });
//         }
//     });
// });
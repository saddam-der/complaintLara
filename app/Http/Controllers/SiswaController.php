<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\siswa;




class SiswaController extends Controller
{
    //
    public function getAllUserServerSide()
    {
        $data = siswa::get();
        return Datatables::of($data)
            // ->editColumn("created_at", function ($data) {
            //     return date("m/d/Y", strtotime($data->created_at));
            // })
            ->addColumn('action', function ($data) {
                // $edit = '<a href="#edit-' . $data->nisn . '" class="btn btn-xs btn-primary">Edit</a>';
                $coba = '<div class="dropdown"> <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false"> <i class="fas fa-ellipsis-v"></i> </a> 
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item edit-product" href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->nisn . '">EDIT</a>
                        <a class="dropdown-item " id="delete-product" href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->nisn . '">DELETE</a>
                        </div>
                    </div>';

                return $coba;
            })
            ->make(true);
    }

    public function index()
    {
        $siswa = siswa::all();

        return view('siswa/siswa', compact('siswa'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $nisn = $request->nisn;
        $details = [
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jurusan' => $request->jurusan,
            'agama' => $request->agama,
            // 'alamat' => $request->alamat,
            'nohp' => $request->nohp,
        ];

        if ($files = $request->file('image')) {
            //delete old file
            \File::delete('img/siswa/' . $request->hidden_image);

            //insert new file
            $destinationPath = 'img/siswa/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $details['image'] = "$profileImage";
        }

        $product   =   Siswa::updateOrCreate(['nisn' => $nisn], $details);

        return response()->json($product);
    }

    public function edit($nisn)
    {
        $where = array('nisn' => $nisn);
        $product  = Siswa::where($where)->first();

        return response()->json($product);
    }

    public function destroy($nisn)
    {
        $data = Siswa::where('nisn', $nisn)->first(['image']);
        \File::delete('img/siswa/' . $data->image);
        $product = Siswa::where('nisn', $nisn)->delete();

        return response()->json($product);
    }
}

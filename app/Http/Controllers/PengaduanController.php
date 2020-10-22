<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengaduanController extends Controller
{
    //
    public function nanya(Request $request)
    {        
        $details = [
            'tanggal_pengaduan' => date("Y-m-d"),
            'nik' => Session::get('id_user'),
            'jenis' => $request->jenis,
            'judul' => $request->judul,
            'isi_laporan' => $request->isi,
            'kota' => $request->asal,
            'kategori' => $request->kategori,
            'status' => "pending"
        ];

        if ($files = $request->file('file')) {
            $destinationPath = 'img/pengaduan/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $details['file'] = "$profileImage";
        }

        $data = pengaduan::Create($details);
        return response()->json($data);
    }
}

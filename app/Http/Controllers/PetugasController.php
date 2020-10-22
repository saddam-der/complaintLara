<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    //
    public function index()
    {
        
    }

    public function beranda()
    {
        return view('petugas.dashboard');
    }

    public function profile()
    {
        $user = Petugas::where('id_petugas', session::get('id_petugas'))->first();;
        return view('petugas/profile' , compact('user'));
    }

    public function store(Request $request)
    {
        // request()->validate([
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $id_petugas = $request->id_petugas;

        $details = [
            'nama' => $request->nama,
            'email' => $request->email,
        ];

        if ($files = $request->file('foto')) {
            $destinationPath = 'img/profile/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $details['foto'] = "$profileImage";
        }

        $data = Petugas::updateOrCreate(['id_petugas' => $id_petugas], $details);
        return response()->json($data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class RakyatController extends Controller
{
    //
    public function index()
    {
        return view('rakyat.dashboard');
    }

    public function profile()
    {
        $user = User::where('id_user', session::get('id_user'))->first();
        return view('rakyat.profile', compact('user'));
    }

    public function kasusku()
    {
        $kasus = pengaduan::where('nik', session::get('id_user'))->get();
        return view('rakyat.kasus', compact('kasus'));
    }

    public function detailkasus($id_pengaduan)
    {
        $detail = pengaduan::find($id_pengaduan);
        return view('rakyat.kasusdetail', compact('detail'));
    }
}

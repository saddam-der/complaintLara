<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Petugas;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('auth/login');
    }

    public function check(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = Petugas::where('email', $email)->first();
        $user = User::where('email', $email)->first();

        if (Auth::guard('petugas')->attempt(['email' => $email, 'password' => $password])) {
            Session::put('id_petugas', $data->id_petugas);
            Session::put('level', $data->level);
            Session::put('is_online', TRUE);
            return redirect()->route('beranda.petugas')
                    ->with('alert', "Berhasil masuk sebagai level $data->level.");
            
        } elseif (Auth::guard('user')->attempt(['email' => $email, 'password' => $password])) {
            Session::put('id_user', $user->id_user);
            Session::put('nama', $user->nama);
            Session::put('email', $user->email);
            Session::put('is_online', TRUE);
            return redirect()->route('beranda.rakyat')
                    ->with('alert', "Berhasil masuk sebagai level .");
        } else {
            return redirect()->back()
                ->with('alert', 'Nama Pengguna atau Kata Sandi yang anda masukan tidak asdcocok.');
        }
    }

    public function logout(Request $request)
    {
        if (Auth::guard('petugas')->check()) {
            $request->session()->flush();
        } elseif (Auth::guard('user')->check()) {
            $request->session()->flush();
        }
        return redirect()->route('login');
    }
}

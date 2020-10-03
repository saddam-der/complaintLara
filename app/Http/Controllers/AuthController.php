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
            Session::put('nama', $data->nama);
            Session::put('email', $data->email);
            Session::put('level', $data->level);
            Session::put('is_online', TRUE);
            return redirect('siswa')
                    ->with('alert', "Berhasil masuk sebagai level $data->level.");
            
        } elseif (Auth::guard('user')->attempt(['email' => $email, 'password' => $password])) {

            Session::put('id_user', $user->id_user);
            Session::put('nama', $user->nama);
            Session::put('email', $user->email);
            Session::put('is_online', TRUE);
            return redirect('siswa')
                    ->with('alert', "Berhasil masuk sebagai level .")
                    ->with('type', 'success');
        } else {
            return redirect()->back()
                ->with('alert', 'Nama Pengguna atau Kata Sandi yang anda masukan tidak asdcocok.');
        }

        // if (Auth::guard('user')) {
        //     $data = user::where('email', $email)->first();

        //     if ($data && Hash::check($password, $data->password)) {
        //         Session::put('user_id', $data->id);
        //         Session::put('name', $data->name);
        //         Session::put('email', $data->email);
        //         Session::put('is_online', TRUE);
        //         return redirect()->route('asd')
        //             ->with('alert', "Berhasil masuk sebagai level $data->level.")
        //             ->with('type', 'success');
        //     } else {
        //         return redirect()->back()
        //             ->with('alert', 'Nama Pengguna atau Kata Sandi yang anda masukan tidak coaaaaaacok.')
        //             ->with('type', 'danger');
        //     }
        // }

        //     $data = User::where('username', $email)->first();
        // if ($data && Hash::check($password, $data->password)) {
        //     Session::put('user_id', $data->id);
        //     Session::put('name', $data->name);
        //     Session::put('username', $data->username);
        //     Session::put('level', $data->level);
        //     Session::put('is_online', TRUE);
        //     return redirect()->route('dashboard')
        //         ->with('alert', "Berhasil masuk sebagai level $data->level.")
        //         ->with('type', 'success');
         
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

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RakyatController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/dashboard', function () {
//     return view('petugas/dashboard');
// });

// Route::get('/beranda', function () {
//     return view('rakyat/dashboard');
// });



// Route::get('/profile', function () {
//     return view('petugas/profile');
// });

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'check'])->name('auth.check');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.destroy');

Route::middleware('is.online')->group(function(){
    Route::middleware('is.admin')->group(function(){
        Route::get('/admin/dashboard', [PetugasController::class, 'beranda'])->name('beranda.petugas');
        Route::get('/siswa', [SiswaController::class, 'index']);
        Route::resource('/siswa', SiswaController::class);
        Route::get('siswa/delete/{nisn}', [SiswaController::class, 'destroy']);
        Route::get('/users_server_side', [SiswaController::class, 'getAllUserServerSide']);
        Route::get('/admin/profile', [PetugasController::class, 'profile'])->name('profile.petugas');
        Route::resource('/profile', PetugasController::class);
    });
    
    // Route::middleware('is.admin')->group(function(){
    // });
    Route::get('/rakyat/dashboard', [RakyatController::class, 'index'])->name('beranda.rakyat');
    Route::get('/rakyat/profile', [RakyatController::class, 'profile'])->name('profile.rakyat');
    Route::get('/rakyat/kasusku', [RakyatController::class, 'kasusku'])->name('kasus.rakyat');
    Route::get('/rakyat/detail/{id_pengaduan}', [RakyatController::class, 'detailkasus'])->name('detail.rakyat');

    Route::post('/pengaduan', [PengaduanController::class, 'nanya'])->name('rakyat.nanya');
    
});
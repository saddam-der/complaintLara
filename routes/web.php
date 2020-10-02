<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PetugasController;
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

Route::get('/dashboard', function () {
    return view('petugas/dashboard');
});

// Route::get('/profile', function () {
//     return view('petugas/profile');
// });

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'check'])->name('auth.check');
Route::delete('/', [AuthController::class, 'logout'])->name('auth.destroy');

Route::middleware('is.online')->group(function(){
    Route::group(['middeware' => ['auth:user,petugas']], function () {
        Route::get('/siswa', [SiswaController::class, 'index']);
        Route::resource('/siswa', SiswaController::class);
        Route::get('siswa/delete/{nisn}', [SiswaController::class, 'destroy']);
        Route::get('/users_server_side', [SiswaController::class, 'getAllUserServerSide']);

        Route::get('/profile', [PetugasController::class, 'index']);
        Route::resource('/profile', PetugasController::class);
    });
});
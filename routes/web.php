<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
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

Route::get('/', function () {
    if (Auth::guest()) {
        return redirect()->route('login');
    } else {
        return redirect()->route('home.index');
    }
});
// auth
Route::get('/auth/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'authenticate'])->name('auth.login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => ['auth', 'verified']], function () {
    Route::post('/kelas/naik', 'KelasController@naik')->name('kelas.naik');
    Route::resource('home', 'HomeController');
    Route::resource('profile', 'ProfileController');
    Route::resource('guru', 'GuruController');
    Route::resource('kelas', 'KelasController');
    Route::resource('mapel', 'MapelController');
    Route::resource('siswa', 'SiswaController');
    Route::resource('jadwal', 'JadwalController');
});








// Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);

// Route::get('/logout', [LoginController::class, 'logout'])->middleware('guest');

// // Page Admin + List Menu
// Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
// Route::get('/guru', [AdminController::class, 'manage_users'])->name('manageusers');
// // Route::get('/siswa', [AdminController::class, 'manage_users'])->name('manageusers');
// Route::get('/kelas', [AdminController::class, 'manage_kelas'])->name('managekelas');
// Route::get('/manage_pelajaran', [AdminController::class, 'manage_pelajaran'])->name('managepelajaran');
// Route::get('/manage_nilai', [AdminController::class, 'manage_nilai'])->name('managenilai');
// Route::get('/manage_users', function () {
//     return view('admin/manage_users', [
//         'title' => 'Manajemen Users'
//     ]);
// });

// Route::get('/manage_kelas', function () {
//     return view('manage_kelas', [
//         'title' => 'Manajemen Kelas'
//     ]);
// });

// Route::get('/manage_pelajaran', function () {
//     return view('manage_pelajaran', [
//         'title' => 'Manajemen Pembelajaran'
//     ]);
// });

// Route::get('/manage_nilai', function () {
//     return view('manage_nilai', [
//         'title' => 'Manajemen Nilai'
//     ]);
// });

// Route::get('/manage_diskusi', function () {
//     return view('admin.manage_diskusi', [
//         'title' => 'Manajemen Diskusi'
//     ]);
// });

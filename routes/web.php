<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\UserRole;

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

// Page Login
Route::get('/login', function () {
    return view('login', [
        'title' => 'Login Page'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout'])->middleware('guest');

// Page Admin + List Menu
Route::get('/admin', [AdminController::class, 'index'])->name('dashboardadmin');
Route::get('/guru', [AdminController::class, 'manage_users'])->name('manageusers');
// Route::get('/siswa', [AdminController::class, 'manage_users'])->name('manageusers');
Route::get('/kelas', [AdminController::class, 'manage_kelas'])->name('managekelas');
Route::get('/manage_pelajaran', [AdminController::class, 'manage_pelajaran'])->name('managepelajaran');
Route::get('/manage_nilai', [AdminController::class, 'manage_nilai'])->name('managenilai');
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

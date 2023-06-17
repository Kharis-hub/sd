<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view(
            'login.index',
            [
                'title' => 'Login'
            ]
        );
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'nipnis' => 'required',
            'password' => 'required'
        ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard');
        // }

        // return back()->with('loginError', 'Login Gagal.!');

        $nipnis = $request->nipnis;
        $password = $request->password;

        // Mengecek NIP Atau NIK Di Data Guru 
        $user = Guru::where('nip', $nipnis)->orWhere('nik', $nipnis)->first();
        // Jika NIP Atau NIK Terdaftar
        if ($user) {
            // Jika NIP Atau NIK Aktif
            if ($user->is_active == '1') {
                // Cek Apakah Password Benar
                if ($password == $user->password) {
                    session()->put('id', $user->id);
                    session()->put('nama', $user->nama);
                    session()->put('nip', $user->nip);
                    session()->put('nik', $user->nik);
                    session()->put('role_id', $user->role_id);
                    return redirect('user');
                } else {
                    return back()->with('loginError', 'Password Salah.!');
                }
            } else {
                return back()->with('loginError', 'NIP Ini Tidak Aktif.!');
            }
        } else {
            // Mengecek NIS Di Data Siswa
            $user = Siswa::where('nis', $nipnis)->first();
            // Jika NIS Terdaftar
            if ($user) {
                // Jika NIS Aktif
                if ($user->is_active == '1') {
                    // Cek Apakah Password Benar
                    if ($password == $user->password) {
                        session()->put('id', $user->id);
                        session()->put('nama', $user->nama);
                        session()->put('nis', $user->nis);
                        session()->put('role_id', $user->role_id);
                        return redirect('user');
                    } else {
                        return back()->with('loginError', 'Password Salah.!');
                    }
                } else {
                    return back()->with('loginError', 'NIS Ini Tidak Aktif.!');
                }
            } else {
                // Mengecek Username ADMIN Di User
                if ($nipnis == 'admin') {
                    $user = User::find(1);
                    // Jika Username ADMIN Aktif
                    if ($user->is_active == '1') {
                        // Cek Apakah Passwor Benar
                        if ($password == $user->password) {
                            session()->put('id', $user->id);
                            session()->put('nama', $user->nama);
                            session()->put('role_id', $user->role_id);
                            return redirect('admin');
                        } else {
                            return back()->with('loginError', 'Password Salah.!');
                        }
                    } else {
                        return back()->with('loginError', 'Administrator Tidak Aktif.!');
                    }
                } else {
                    return back()->with('loginError', 'NIP / NIS / NIK Belum Pernah Didaftarkan.!');
                }
            }
        }
    }

    public function logout()
    {
        session()->forget('id');
        session()->forget('nama');
        session()->forget('nip');
        session()->forget('nik');
        session()->forget('nis');
        session()->forget('role_id');

        return redirect('/login')->with('loginError', 'Anda Berhasil Logout...!');
    }
}

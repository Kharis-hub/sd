<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Siswa;

class AdminController extends Controller
{
    public function index()
    {
        $title = "Dashboard Admin";
        return view('admin.index', [
            'title' => $title
        ]);
    }

    // ============================================================================================================================================== //
    //                                                                 Manage Users (Guru Dan Siswa)
    // ============================================================================================================================================== //

    public function manage_users()
    {
        $title = "Manajemen Users";

        $guru = Guru::get();
        $siswa = Siswa::get();
        return view('admin.manage_users', compact('guru', 'siswa', 'title'));
    }

    public function guru()
    {
        // $title = "Data Guru";

        // $guru = Guru::get();
        // return view('admin.manage_users', compact('guru', 'title'));

        // $user = User::where('id', $id)->first();
        // $guru = Sekolah_model::getDataGuru();
        // $gurumapel = Sekolah_model::getGuruByMapel();
        // $mapel = Sekolah_model::getMapel();
        // $role = DB::table('user_role')->get();
        /*
        return view('admin.manage_users', [

            $validator = Validator::make(request()->all(), [
                'nip' => 'required',
                'nik' => 'required',
                'nama' => 'required',
                'jekel' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'agama' => 'required',
                'alamat' => 'required',
                'kelas.*' => 'required',
                'password1' => ['required', 'min:4', 'same:password2'],
                'role_id' => 'required',
            ], [
                'password1.same' => 'Password Tidak Sesuai.!',
                'password1.min' => 'Password Terlalu Pendek.!'
            ]);

            if ($validator->fails()) {
                return view('sekolah.guru', $data)->withErrors($validator);
            } else {
                $kelas = implode(',', request()->input('kelas'));
                $id_namamapel = request()->input('role_id') == 3 ? request()->input('id_namamapel') : NULL;
                $data = [
                    'id_namamapel' => $id_namamapel,
                    'nip' => request()->input('nip'),
                    'nik' => request()->input('nik'),
                    'nama' => request()->input('nama'),
                    'jekel' => request()->input('jekel'),
                    'tempat_lahir' => request()->input('tempat_lahir'),
                    'tgl_lahir' => request()->input('tgl_lahir'),
                    'agama' => request()->input('agama'),
                    'alamat' => request()->input('alamat'),
                    'kelas' => $kelas,
                    'image' => 'default.jpg',
                    'password' => request()->input('password1'),
                    'role_id' => request()->input('role_id'),
                    'is_active' => 1
                ];
                DB::table('tb_guru')->insert($data);
                session()->flash('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
                return redirect('sekolah/guru');
            }
        ]);
        */
    }


    // ============================================================================================================================================== //
    //                                                                 Manage Kelas
    // ============================================================================================================================================== //


    public function manage_kelas()
    {
        $title = "Manajemen Kelas";
        return view('admin.manage_kelas', [
            'title' => $title
        ]);
    }

    public function manage_pelajaran()
    {
        $title = "Manajemen Pelajaran";
        return view('admin.manage_pelajaran', [
            'title' => $title
        ]);
    }

    public function manage_nilai()
    {
        $title = "Manajemen Nilai";
        return view('admin.manage_nilai', [
            'title' => $title
        ]);
    }

    public function manage_diskusi()
    {
        $title = "Manajemen Diskusi";
        return view('admin.manage_diskusi', [
            'title' => $title
        ]);
    }
}

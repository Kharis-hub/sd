<?php

namespace App\Http\Controllers;

use App\Http\Requests\Siswa\StoreSiswaRequest;
use App\Http\Requests\Siswa\UpdateSiswaRequest;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Siswa";
        $siswa = Siswa::all();

        return view('admin.siswa.index', [
            'title' => $title,
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Siswa";
        $kelas = Kelas::all();

        return view('admin.siswa.create', [
            'title' => $title,
            'kelas'=> $kelas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiswaRequest $request)
    {
        $siswa = Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'jekel' => $request->jekel,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'kelas' => $request->kelas,
            'tahun_masuk' => $request->tahun_masuk,
            'image' => 'default.jpg',
            'is_active' => true,
        ]);

        $user = User::create([
            'name' => $request->nama,
            'username' => $request->nis,
            'password' => Hash::make($request->password),
            "role_id"=> 4,
            "person_id"=> $siswa->id,
        ]);

        return redirect()->route('siswa.index')->with('success', 'siswa successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        $title = "Edit Siswa";
        $kelas = Kelas::all();

        return view('admin.siswa.edit', [
            'title' => $title,
            'siswa' => $siswa,
            'kelas' => $kelas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {
        $user = User::where('person_id', $siswa->id)->where('role_id', 4)->first();
        if ($request->password == null) {
            $user->update([
                'name' => $request->nama,
                'username' => $request->nis,
            ]);
        }else{
            $user->update([
                'name' => $request->nama,
                'username' => $request->nis,
                'password' => Hash::make($request->password),
            ]);
        }
        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success','siswa has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        $user = User::where('person_id', $siswa->id)->where('role_id', 4)->first();
        $user->delete();
        return redirect()->route('siswa.index')->with('success','siswa has been deleted');
    }
}

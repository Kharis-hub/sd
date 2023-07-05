<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kelas\StoreKelasRequest;
use App\Http\Requests\Kelas\UpdateKelasRequest;
use App\Http\Requests\KelasRequest;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Kelas";
        $kelas = Kelas::all();

        return view('admin.kelas.index', [
            'title' => $title,
            'kelas' => $kelas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Kelas";

        return view('admin.kelas.create', [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKelasRequest $request)
    {
        Kelas::create($request->all());

        return redirect()->route('kelas.index')->with('success', 'kelas successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kela)
    {
        $siswa = Siswa::where('kelas', $kela->kelas)->get();
        return view('admin.kelas.show', [
            'title' => "Daftar Siswa kelas " . $kela->kelas,
            'kelas' => $kela,
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kela)
    {
        $title = "Edit Kelas";

        return view('admin.kelas.edit', [
            'title' => $title,
            'kelas' => $kela
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKelasRequest $request, Kelas $kela)
    {
        $kela->update($request->all());

        return redirect()->route('kelas.index')->with('success','kelas has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kela)
    {


        $kela->delete();
        return redirect()->route('kelas.index')->with('success','kelas has been deleted');

    }


    public function naik(Request $request)
    {
        $naik = $request->naik;
		foreach ($naik as $item)
		{
            $siswa = Siswa::where('id', $item)->first();
            $siswa->update([
                'kelas' => $siswa->kelas + 1
            ]);
		}
        return redirect()->route('kelas.index')->with('success','kelas has been updated');
    }
}

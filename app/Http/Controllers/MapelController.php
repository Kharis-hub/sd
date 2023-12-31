<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mapel\StoreMapelRequest;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Mata Pelajaran";
        $mapel = Mapel::paginate(10);

        return view('admin.mapel.index', [
            'title' => $title,
            'mapel' => $mapel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Mata Pelajaran";
        $kelas = Kelas::all();

        return view('admin.mapel.create', [
            'title' => $title,
            'kelas' => $kelas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMapelRequest $request)
    {
        Mapel::create($request->all());

        return redirect()->route('mapel.index')->with('success', 'mapel successfully created');
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
    public function edit(Mapel $mapel)
    {
        $title = "Edit Mapel";
        $kelas = Kelas::all();

        return view('admin.mapel.edit', [
            'title' => $title,
            'mapel' => $mapel,
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
    public function update(Request $request, Mapel $mapel)
    {
        $mapel->update($request->all());

        return redirect()->route('mapel.index')->with('success','mapel has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mapel $mapel)
    {
        $mapel->delete();
        return redirect()->route('mapel.index')->with('success','mapel has been deleted');
    }
}

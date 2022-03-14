<?php

namespace App\Http\Controllers;

use App\Models\Colaboration;
use Illuminate\Http\Request;

class ColaborationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colaborations = Colaboration::all();
        return view('colaborationReaserch.index', ['colaborations' => $colaborations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colaborationReaserch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:100',
            'instansi' => 'required|max:100',
            'negara' => 'required|max:100',
            'gambar' => 'required|file|image|max:1000'
        ]);
        $extGambar = $request->gambar->getClientOriginalExtension();
        $pathGambar = "colaboration-".time().".".$extGambar;
        $pathStore = $request->gambar->move(public_path('gambar-colaboration'), $pathGambar);
        $colaboration = new Colaboration();
        $colaboration->nama = $validateData['nama'];
        $colaboration->instansi = $validateData['instansi'];
        $colaboration->negara = $validateData['negara'];
        $colaboration->gambar = $pathGambar;
        $colaboration->save();

        return redirect()->route('colaboration.index')->with('pesan', "Colaboration Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colaboration  $colaboration
     * @return \Illuminate\Http\Response
     */
    public function show(Colaboration $colaboration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colaboration  $colaboration
     * @return \Illuminate\Http\Response
     */
    public function edit(Colaboration $colaboration)
    {
        return view('colaborationReaserch.edit', ['colaboration' => $colaboration]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Colaboration  $colaboration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colaboration $colaboration)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:100',
            'instansi' => 'required|max:100',
            'negara' => 'required|max:100',
            'gambar' => 'required|file|image|max:1000'
        ]);
        $pathGambar = $colaboration->gambar;
        $pathStore = $request->gambar->move(public_path('gambar-colaboration'), $pathGambar);
        $colaboration = Colaboration::find($colaboration->id);
        $colaboration->nama = $validateData['nama'];
        $colaboration->instansi = $validateData['instansi'];
        $colaboration->negara = $validateData['negara'];
        $colaboration->gambar = $pathGambar;
        $colaboration->save();

        return redirect()->route('colaboration.index')->with('pesan', "Colaboration Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colaboration  $colaboration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colaboration $colaboration)
    {
        $colaboration->delete();
        return redirect()->route('colaboration.index')->with('pesan', "Colaboration Berhasil Dihapus");
    }
}

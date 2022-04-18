<?php

namespace App\Http\Controllers;

use App\Models\GambarProfil;
use Illuminate\Http\Request;

class GambarProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambarProfils = GambarProfil::all();
        return view('profil.gambar.index', ['gambarProfils' => $gambarProfils]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.gambar.create');
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
            'judul' => 'required|max:100',
            'gambar' => 'required|file|image|max:1000'
        ]);
        $extGambar = $request->gambar->getClientOriginalExtension();
        $pathGambar = "gambar-profil".time().".".$extGambar;
        $pathStore = $request->gambar->move(public_path('gambar-profil'), $pathGambar);

        $gambarProfil = new GambarProfil();
        $gambarProfil->judul = $validateData['judul'];
        $gambarProfil->gambar = $pathGambar;
        $gambarProfil->save();

        return redirect()->route('profilGambar.index')->with('pesan', "Gambar Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GambarProfil  $gambarProfil
     * @return \Illuminate\Http\Response
     */
    public function show(GambarProfil $gambarProfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GambarProfil  $gambarProfil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gambarProfil = GambarProfil::find($id);
        return view('profil.gambar.edit', ['gambarProfil' => $gambarProfil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GambarProfil  $gambarProfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gambarProfil = GambarProfil::find($id);
        $validateData = $request->validate([
            'judul' => 'required|max:100',
            'gambar' => 'required|file|image|max:1000'
        ]);

        $pathGambar = $gambarProfil->gambar;
        $pathStore = $request->gambar->move(public_path('gambar-profil'), $pathGambar);

        $gambarProfil = GambarProfil::find($gambarProfil->id);
        $gambarProfil->judul = $validateData['judul'];
        $gambarProfil->gambar = $pathGambar;
        $gambarProfil->save();

        return redirect()->route('profilGambar.index')->with('pesan', "Gambar Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GambarProfil  $gambarProfil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambarProfil = GambarProfil::find($id);
        $gambarProfil->delete();
        return redirect()->route('profilGambar.index')->with('pesan', "Gambar Berhasil Dihapus");
    }
}

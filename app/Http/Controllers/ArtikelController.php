<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikel.index', ['artikels' => $artikels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create');
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
            'isi' => 'required',
            'gambar' => 'required|file|image|max:1000'
        ]);
        $extGambar = $request->gambar->getClientOriginalExtension();
        $pathGambar = "artikel-".time().".".$extGambar;
        $pathStore = $request->gambar->move(public_path('gambar-artikel'), $pathGambar);
        $artikel = new Artikel();
        $artikel->judul = $validateData['judul'];
        $artikel->isi = $validateData['isi'];
        $artikel->gambar = $pathGambar;
        $artikel->save();

        return redirect()->route('artikel.create')->with('pesan', "Artikel Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        return view('artikel.show', ['artikel' => $artikel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        return view('artikel.edit', ['artikel' => $artikel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:100',
            'isi' => 'required',
            'gambar' => 'required|file|image|max:1000'
        ]);

        $pathGambar = $artikel->gambar;
        $pathStore = $request->gambar->move(public_path('gambar-artikel'), $pathGambar);
        $artikel = Artikel::find($artikel->id);
        $artikel->judul = $validateData['judul'];
        $artikel->isi = $validateData['isi'];
        $artikel->gambar = $pathGambar;
        $artikel->save();
        return redirect('/artikel/'.$artikel->id)->with('pesan', "Artikel Berhasil Diganti");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('artikel.index')->with('pesan', "Artikel Berhasil Dihapus");
    }
}

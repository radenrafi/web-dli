<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanans = layanan::all();
        return view('layanan.index', ['layanans' => $layanans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layanan.create');
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
            'gambar' => 'required|file|image|max:1000',
            'link' => 'required'
        ]);

        $extGambar = $request->gambar->getClientOriginalExtension();
        $pathGambar = "logo-research-".time().".".$extGambar;
        $pathStore = $request->gambar->move(public_path('gambar-layanan'), $pathGambar);

        $layanan = new layanan();
        $layanan->nama = $validateData['nama'];
        $layanan->gambar = $pathGambar;
        $layanan->link = $validateData['link'];
        $layanan->save();

        return redirect()->route('layanan.index')->with('pesan', "Layanan Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(layanan $layanan)
    {
        return view('layanan.edit', ['layanan' => $layanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, layanan $layanan)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:100',
            'gambar' => 'required|file|image|max:1000',
            'link' => 'required'
        ]);

        $pathGambar = $layanan->gambar;
        $pathStore = $request->gambar->move(public_path('gambar-layanan'), $pathGambar);

        $layanan = layanan::find($layanan->id);
        $layanan->nama = $validateData['nama'];
        $layanan->gambar = $pathGambar;
        $layanan->link = $validateData['link'];
        $layanan->save();

        return redirect()->route('layanan.index')->with('pesan', "Layanan Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('layanan.index')->with('pesan', "Layanan Berhasil Dihapus");
    }
}

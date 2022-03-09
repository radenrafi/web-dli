<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roadmaps = Roadmap::all();
        return view('roadmap.index', ['roadmaps' => $roadmaps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roadmap.create');
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
            'gambar' => 'required|file|image|max:1000',
            'tahun' => 'required|max:11',
            'isi' => 'required'
        ]);
        $extGambar = $request->gambar->getClientOriginalExtension();
        $pathGambar = "roadmap-".time().".".$extGambar;
        $pathStore = $request->gambar->move(public_path('gambar-roadmap'), $pathGambar);
        $roadmap = new Roadmap();
        $roadmap->tahun = $validateData['tahun'];
        $roadmap->isi = $validateData['isi'];
        $roadmap->gambar = $pathGambar;
        $roadmap->save();

        return redirect()->route('roadmap.index')->with('pesan', "Roadmap Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function show(Roadmap $roadmap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function edit(Roadmap $roadmap)
    {
        return view('roadmap.edit', ['roadmap' => $roadmap]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roadmap $roadmap)
    {
        $validateData = $request->validate([
            'gambar' => 'required|file|image|max:1000',
            'tahun' => 'required|max:11',
            'isi' => 'required'
        ]);
        $pathGambar = $roadmap->gambar;
        $pathStore = $request->gambar->move(public_path('gambar-roadmap'), $pathGambar);
        $roadmap = Roadmap::find($roadmap->id);
        $roadmap->tahun = $validateData['tahun'];
        $roadmap->isi = $validateData['isi'];
        $roadmap->gambar = $pathGambar;
        $roadmap->save();
        return redirect('/admin/roadmap')->with('pesan', "Roadmap Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roadmap $roadmap)
    {
        //
    }
}

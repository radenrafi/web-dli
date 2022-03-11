<?php

namespace App\Http\Controllers;

use App\Models\TopResearch;
use Illuminate\Http\Request;

class TopResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topResearchs = TopResearch::all();
        return view('topResearch.index', ['topResearchs' => $topResearchs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('topResearch.create');
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
            'singkatan' => 'required|max:6',
            'subJudul' => 'required|max:100',
            'isi' => 'required',
            'gambar' => 'required|file|image|max:1000'
        ]);
        $extGambar = $request->gambar->getClientOriginalExtension();
        $pathGambar = "topResearch-".time().".".$extGambar;
        $pathStore = $request->gambar->move(public_path('gambar-topResearch'), $pathGambar);
        $topResearch = new TopResearch();
        $topResearch->judul = $validateData['judul'];
        $topResearch->singkatan = $validateData['singkatan'];
        $topResearch->subJudul = $validateData['subJudul'];
        $topResearch->isi = $validateData['isi'];
        $topResearch->gambar = $pathGambar;
        $topResearch->save();

        return redirect()->route('topResearch.index')->with('pesan', "Top Research Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TopResearch  $topResearch
     * @return \Illuminate\Http\Response
     */
    public function show(TopResearch $topResearch)
    {
        return view('topResearch.show', ['topResearch' => $topResearch,]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopResearch  $topResearch
     * @return \Illuminate\Http\Response
     */
    public function edit(TopResearch $topResearch)
    {
        return view('topResearch.edit', ['topResearch' => $topResearch]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TopResearch  $topResearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopResearch $topResearch)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:100',
            'singkatan' => 'required|max:6',
            'subJudul' => 'required|max:100',
            'isi' => 'required',
            'gambar' => 'required|file|image|max:1000'
        ]);
        $pathGambar = $topResearch->gambar;
        $pathStore = $request->gambar->move(public_path('gambar-topResearch'), $pathGambar);
        $topResearch = TopResearch::find($topResearch->id);
        $topResearch->judul = $validateData['judul'];
        $topResearch->singkatan = $validateData['singkatan'];
        $topResearch->subJudul = $validateData['subJudul'];
        $topResearch->isi = $validateData['isi'];
        $topResearch->gambar = $pathGambar;
        $topResearch->save();

        return redirect()->route('topResearch.index')->with('pesan', "Top Research Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopResearch  $topResearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopResearch $topResearch)
    {
        $topResearch->delete();
        return redirect()->route('topResearch.index')->with('pesan', "Top Research Berhasil Dihapus");
    }
}

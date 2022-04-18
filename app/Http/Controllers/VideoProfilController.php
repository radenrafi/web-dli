<?php

namespace App\Http\Controllers;

use App\Models\VideoProfil;
use Illuminate\Http\Request;

class VideoProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videoProfils = VideoProfil::all();
        return view('profil.video.index', ['videoProfils' => $videoProfils]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.video.create');
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
            'link' => 'required'
        ]);

        $videoProfil = new VideoProfil();
        $videoProfil->judul = $validateData['judul'];
        $videoProfil->link = $validateData['link'];
        $videoProfil->save();

        return redirect()->route('profilVideo.index')->with('pesan', "Video Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideoProfil  $videoProfil
     * @return \Illuminate\Http\Response
     */
    public function show(VideoProfil $videoProfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoProfil  $videoProfil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videoProfil = VideoProfil::find($id);
        return view('profil.video.edit', ['videoProfil' => $videoProfil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VideoProfil  $videoProfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:100',
            'link' => 'required'
        ]);

        $videoProfil = VideoProfil::find($id);
        $videoProfil->judul = $validateData['judul'];
        $videoProfil->link = $validateData['link'];
        $videoProfil->save();

        return redirect()->route('profilVideo.index')->with('pesan', "Video Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideoProfil  $videoProfil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videoProfil = VideoProfil::find($id);
        $videoProfil->delete();
        return redirect()->route('profilVideo.index')->with('pesan', "Video Berhasil Dihapus");
    }
}

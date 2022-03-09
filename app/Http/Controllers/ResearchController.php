<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researchs = Research::all();
        return view('research.index', ['researchs' => $researchs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('research.create');
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
            'logo' => 'required|file|image|max:1000'
        ]);

        $extLogo = $request->logo->getClientOriginalExtension();
        $pathLogo = "logo-research-".time().".".$extLogo;
        $pathStore = $request->logo->move(public_path('gambar-research'), $pathLogo);
        $research = new Research();
        $research->nama = $validateData['nama'];
        $research->logo = $pathLogo;
        $research->save();
        return redirect()->route('research.index')->with('pesan', "Research Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function show(Research $research)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function edit(Research $research)
    {
        return view('research.edit', ['research' => $research]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Research $research)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:100',
            'logo' => 'required|file|image|max:1000'
        ]);
        $pathLogo = $research->logo;
        $pathStore = $request->logo->move(public_path('gambar-research'), $pathLogo);
        $research = Research::find($research->id);
        $research->nama = $validateData['nama'];
        $research->logo = $pathLogo;
        $research->save();

        return redirect('/admin/research')->with('pesan', "Research Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function destroy(Research $research)
    {
        $research->delete();
        return redirect()->route('research.index')->with('pesan', "Research Berhasil Dihapus");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\About;
use App\Models\Colaboration;
use App\Models\Research;
use App\Models\Roadmap;
use App\Models\Target;
use App\Models\TopResearch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function welcome()
    {
        $abouts = About::latest()->limit(1)->get();
        $targets = Target::all();
        $artikels = Artikel::latest()->limit(2)->get();
        $researchs = Research::latest()->limit(3)->get();
        $roadmaps = Roadmap::all();
        $topResearchs = TopResearch::all();
        $colaborations = Colaboration::all();
        return view('welcome', [
            'abouts' => $abouts,
            'artikels' => $artikels,
            'targets' => $targets,
            'researchs' => $researchs,
            'roadmaps' => $roadmaps,
            'topResearchs' => $topResearchs,
            'colaborations' => $colaborations
        ]);
    }
    public function index()
    {
        return view('home');
    }
    public function indexArtikel()
    {
        $artikels = Artikel::all();
        $populars = Artikel::limit(5)->orderBy('klik', 'desc')->get();
        return view('artikel.indexUser', ['artikels' => $artikels, 'populars' => $populars]);
    }
    public function kategoriArtikel($kategori)
    {
        if ($kategori == 'teknologi') {
            $artikels = Artikel::where('kategori', '=', 'Teknologi')->get();
            $populars = Artikel::limit(5)->orderBy('klik', 'desc')->get();
            return view('artikel.indexUser', ['artikels' => $artikels, 'populars' => $populars]);
        } elseif ($kategori == 'edukasi') {
            $artikels = Artikel::where('kategori', '=', 'Edukasi')->get();
            $populars = Artikel::limit(5)->orderBy('klik', 'desc')->get();
            return view('artikel.indexUser', ['artikels' => $artikels, 'populars' => $populars]);
        } elseif ($kategori == 'startup') {
            $artikels = Artikel::where('kategori', '=', 'Startup')->get();
            $populars = Artikel::limit(5)->orderBy('klik', 'desc')->get();
            return view('artikel.indexUser', ['artikels' => $artikels, 'populars' => $populars]);
        } elseif ($kategori == 'produk') {
            $artikels = Artikel::where('kategori', '=', 'Produk')->get();
            $populars = Artikel::limit(5)->orderBy('klik', 'desc')->get();
            return view('artikel.indexUser', ['artikels' => $artikels, 'populars' => $populars]);
        } elseif ($kategori == 'event') {
            $artikels = Artikel::where('kategori', '=', 'Event')->get();
            $populars = Artikel::limit(5)->orderBy('klik', 'desc')->get();
            return view('artikel.indexUser', ['artikels' => $artikels, 'populars' => $populars]);
        } elseif ($kategori == 'promosi') {
            $artikels = Artikel::where('kategori', '=', 'Promosi')->get();
            $populars = Artikel::limit(5)->orderBy('klik', 'desc')->get();
            return view('artikel.indexUser', ['artikels' => $artikels, 'populars' => $populars]);
        } elseif ($kategori == 'marketing') {
            $artikels = Artikel::where('kategori', '=', 'Marketing')->get();
            $populars = Artikel::limit(5)->orderBy('klik', 'desc')->get();
            return view('artikel.indexUser', ['artikels' => $artikels, 'populars' => $populars]);
        } else {
            $artikels = Artikel::all();
            $populars = Artikel::limit(5)->orderBy('klik', 'desc')->get();
            return view('artikel.indexUser', ['artikels' => $artikels, 'populars' => $populars]);
        }

    }
    public function showArtikel($id)
    {
        $artikel = Artikel::find($id);
        $artikel->klik++;
        $artikel->save();
        $result = Artikel::find($id);
        $tanggal = $result->created_at->isoFormat('D MMMM Y');
        $populars = Artikel::limit(5)->orderBy('klik', 'desc')->get();
        return view('artikel.show', ['artikel' => $result, 'tanggal' => $tanggal, 'populars' => $populars]);
    }
    public function showTopResearch($id)
    {
        $topResearch = TopResearch::find($id);
        return view('topResearch.show', ['topResearch' => $topResearch]);
    }
    public function roadmap()
    {
        $roadmaps = Roadmap::all();
        return view('roadmap.detailRoadmap', ['roadmaps' => $roadmaps]);
    }
}

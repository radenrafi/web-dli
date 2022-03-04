<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\About;
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
        $abouts = About::latest()->limit(3)->get();
        return view('welcome', ['abouts' => $abouts]);
    }
    public function index()
    {
        return view('home');
    }
    public function indexArtikel()
    {
        $artikels = Artikel::all();
        return view('artikel.indexUser', ['artikels' => $artikels]);
    }

    public function showArtikel($id)
    {
        $result = Artikel::find($id);
        $tanggal = $result->created_at->isoFormat('D MMMM Y');
        return view('artikel.show', ['artikel' => $result, 'tanggal' => $tanggal]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
            'logo' => 'required|file|image|max:1000',
            'nama' => 'required|max:100',
            'desc' => 'required',
            'baseline' => 'required',
            'target1' => 'required',
            'target2' => 'required',
            'target3' => 'required',
            'enviroment' => 'required',
            'gambar' => 'file|image|max:1000',
            'url' => ''
        ]);
        $extLogo = $request->logo->getClientOriginalExtension();
        $pathLogo = "logo-".time().".".$extLogo;
        $pathStore = $request->logo->move(public_path('gambar-product/logo'), $pathLogo);
        if (isset($validateData['gambar'])) {
            $extGambar = $request->gambar->getClientOriginalExtension();
            $pathGambar = "gambar-".time().".".$extGambar;
            $pathStore = $request->gambar->move(public_path('gambar-product/pendukung'), $pathGambar);
        }
        $product = new Product();
        $product->logo = $pathLogo;
        $product->nama = $validateData['nama'];
        $product->desc = $validateData['desc'];
        $product->baseline = $validateData['baseline'];
        $product->target1 = $validateData['target1'];
        $product->target2 = $validateData['target2'];
        $product->target3 = $validateData['target3'];
        $product->environment = $validateData['enviroment'];
        if (isset($validateData['gambar'])) {
            $product->gambar = $pathGambar;
        }
        if (isset($validateData['url'])) {
            $product->url = $validateData['url'];
        }
        $product->save();
        return redirect()->route('product.index')->with('pesan', "Product Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validateData = $request->validate([
            'logo' => 'required|file|image|max:1000',
            'nama' => 'required|max:100',
            'desc' => 'required',
            'baseline' => 'required',
            'target1' => 'required',
            'target2' => 'required',
            'target3' => 'required',
            'enviroment' => 'required',
            'gambar' => 'file|image|max:1000',
            'url' => ''
        ]);
        $pathLogo = $product->logo;
        $pathStore = $request->logo->move(public_path('gambar-product/logo'), $pathLogo);
        if (isset($validateData['gambar'])) {
            if (isset($product->gambar)) {
                $pathGambar = $product->gambar;
                $pathStore = $request->gambar->move(public_path('gambar-product/pendukung'), $pathGambar);
            } else {
                $extGambar = $request->gambar->getClientOriginalExtension();
                $pathGambar = "gambar-".time().".".$extGambar;
                $pathStore = $request->gambar->move(public_path('gambar-product/pendukung'), $pathGambar);
            }
        }
        $product = Product::find($product->id);
        $product->logo = $pathLogo;
        $product->nama = $validateData['nama'];
        $product->desc = $validateData['desc'];
        $product->baseline = $validateData['baseline'];
        $product->target1 = $validateData['target1'];
        $product->target2 = $validateData['target2'];
        $product->target3 = $validateData['target3'];
        $product->environment = $validateData['enviroment'];
        if (isset($validateData['gambar'])) {
            $product->gambar = $pathGambar;
        }
        if (isset($validateData['url'])) {
            $product->url = $validateData['url'];
        }
        $product->save();
        return redirect()->route('product.index')->with('pesan', "Product Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('pesan', "Product Berhasil Dihapus");
    }
}

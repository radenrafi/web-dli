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
            'nama' => 'required|max:100',
            'gambar' => 'file|image|max:1000',
            'link' => 'required'
        ]);

        $extGambar = $request->gambar->getClientOriginalExtension();
        $pathGambar = "gambar-".time().".".$extGambar;
        $pathStore = $request->gambar->move(public_path('gambar-product'), $pathGambar);

        $product = new Product();
        $product->nama = $validateData['nama'];
        $product->gambar = $pathGambar;
        $product->link = $validateData['link'];
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
            'nama' => 'required|max:100',
            'gambar' => 'file|image|max:1000',
            'link' => 'required'
        ]);

        $pathGambar = $product->gambar;
        $pathStore = $request->gambar->move(public_path('gambar-product'), $pathGambar);

        $product = Product::find($product->id);
        $product->nama = $validateData['nama'];
        $product->gambar = $pathGambar;
        $product->link = $validateData['link'];
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

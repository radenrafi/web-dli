@extends('layouts.admin')

@section('title', 'Product')

@section('content')
<main class="container">
    <h3 class="text-center">Product</h3>
    <form action="{{url('/admin/product/'.$product->id)}}" method="POST" enctype="multipart/form-data" class="form">
        @method('PATCH')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{old('nama') ?? $product->nama}}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar') ?? $product->gambar}}">
            @error('gambar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="link">Website</label>
            <input type="url" class="form-control @error('link') is-invalid @enderror" name="link" id="link" value="{{old('link') ?? $product->link}}">
            @error('url')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3" value="submit">Edit</button>
        @csrf
    </form>
</main>
@endsection

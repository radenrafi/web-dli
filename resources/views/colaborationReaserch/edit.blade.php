@extends('layouts.admin')

@section('title', 'Edit Colaboration Riset')

@section('content')
<main class="container">
    <h3 class="text-center">Colaboration Risearcher</h3>
    <form action="#" method="POST" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="gambar">Foto</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar') ?? $colaboration->gambar}}">
            @error('gambar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{old('nama') ?? $colaboration->nama}}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="asal">Asal</label>
            <input type="text" class="form-control @error('asal') is-invalid @enderror" name="asal" id="asal" value="{{old('asal') ?? $colaboration->asal}}">
            @error('asal')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary mt-3" value="submit">Edit</button>
        @csrf
    </form>
</main>
@endsection

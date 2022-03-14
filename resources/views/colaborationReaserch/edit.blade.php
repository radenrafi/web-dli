@extends('layouts.admin')

@section('title', 'Edit Colaboration Riset')

@section('content')
<main class="container">
    <h3 class="text-center">Colaboration Risearcher</h3>
    <form action="{{url('/admin/colaboration/'.$colaboration->id)}}" method="POST" enctype="multipart/form-data" class="form">
        @method('PATCH')
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
            <label for="instansi">Instansi</label>
            <input type="text" class="form-control @error('instansi') is-invalid @enderror" name="instansi" id="instansi" value="{{old('instansi') ?? $colaboration->instansi}}">
            @error('instansi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="negara">Negara</label>
            <input type="text" class="form-control @error('negara') is-invalid @enderror" name="negara" id="negara" value="{{old('negara') ?? $colaboration->negara}}">
            @error('negara')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3" value="submit">Edit</button>
        @csrf
    </form>
</main>
@endsection

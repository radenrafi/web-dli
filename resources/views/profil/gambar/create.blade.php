@extends('layouts.admin')

@section('title', 'Tambah Gambar')

@section('content')
<main class="container">
    <h3 class="text-center">Tambah Gambar</h3>
    <form action="{{ url('/admin/profilGambar') }}" method="POST" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul')}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Gambar Artikel</label>
            <input type="file" class="form-control  @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar')}}">
            @error('gambar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3" value="submit">Tambahkan</button>
        @csrf
    </form>
</main>
@endsection

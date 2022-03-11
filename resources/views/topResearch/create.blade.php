@extends('layouts.admin')

@section('content')
<main class="container">
    <h3 class="text-center">Top Reasearch</h3>
    <form action="{{ url('/admin/topResearch') }}" method="POST" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar')}}">
            @error('gambar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul')}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="singkatan">Singkatan</label>
            <input type="text" class="form-control @error('singkatan') is-invalid @enderror" name="singkatan" id="singkatan" value="{{old('singkatan')}}">
            @error('singkatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="subJudul">Sub Judul</label>
            <input type="text" class="form-control @error('subJudul') is-invalid @enderror" name="subJudul" id="subJudul" value="{{old('subJudul')}}">
            @error('subJudul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" cols="30" rows="3" class="form-control"> {{old('isi')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5 mt-3" value="submit">Submit</button>
        @csrf
    </form>
</main>
@endsection

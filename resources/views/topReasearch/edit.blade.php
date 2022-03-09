@extends('layouts.admin')

@section('content')
<main class="container">
    <h3 class="text-center">Top Reasearch</h3>
    <form action="#" method="POST" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar') ?? $topReseach->gambar}}">
            @error('gambar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul') ?? $topReseach->judul}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" cols="30" rows="3" class="form-control"> {{old('isi') ?? $topReseach->isi}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5 mt-3" value="submit">Submit</button>
        @csrf
    </form>
</main>
@endsection

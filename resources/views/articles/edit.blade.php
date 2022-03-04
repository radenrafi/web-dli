@extends('layouts.app')

@section('content')
<main class="container">
    <h3 class="text-center">ARTICLE</h3>
    <form action="#" method="post">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul') ?? $artikel->judul}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Gambar Artikel</label>
            <input type="file" class="form-control  @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar') ?? $artikel->gambar}}">
            @error('gambar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <p><i>Nb: Judul tidak perlu dituliskan lagi</i></p>
            <textarea name="isi" id="editor" cols="30" rows="40" class="form-control"> {{old('isi') ?? $artikel->isi}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-5 mt-2" value="submit">Submit</button>
    </form>
</main>

@endsection

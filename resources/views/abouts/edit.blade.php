@extends('layouts.admin')

@section('content')
<main class="container">
    <h3 class="text-center">About</h3>
    <form action="#" method="POST" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="judul">Judul About</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul') ?? $artikel->judul}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="isi">Isi About</label>
            <textarea name="isi" id="editor" cols="30" rows="3" class="form-control"> {{old('isi') ?? $artikel->isi}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5   " value="submit">Submit</button>
        @csrf
    </form>
</main>
@endsection

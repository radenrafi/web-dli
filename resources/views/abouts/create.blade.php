@extends('layouts.admin')

@section('content')
<main class="container">
    <h3>About</h3>
    <form action="#" method="POST" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="judul">Judul About</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul')}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="isi">Isi About</label>
            <textarea name="isi" id="isi" cols="30" rows="3" class="form-control"> {{old('isi')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5 mt-2" value="submit">Submit</button>
        @csrf
    </form>
</main>
@endsection

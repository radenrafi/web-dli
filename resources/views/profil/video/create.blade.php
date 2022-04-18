@extends('layouts.admin')

@section('title', 'Tambah Video')

@section('content')
<main class="container">
    <h3 class="text-center">Tambah Video</h3>
    <form action="{{ url('/admin/profilVideo') }}" method="POST" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul')}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="url" class="form-control  @error('link') is-invalid @enderror" name="link" id="link" value="{{old('link')}}">
            @error('link')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3" value="submit">Tambahkan</button>
        @csrf
    </form>
</main>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="text-center">Tambah Layanan</h3>
    <form action="{{ url('/admin/layanan') }}" method="POST" enctype="multipart/form-data" class="form">
        {{--  Begin form research  --}}
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{old('nama')}}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control  @error('logo') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar')}}">
            @error('gambar')
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
        {{--  ending form research  --}}
        <button type="submit" class="btn btn-primary mt-3" value="submit">Tambah</button>
        @csrf
    </form>
</div>
@endsection

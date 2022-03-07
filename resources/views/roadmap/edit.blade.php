@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="text-center">Roadmap</h3>
    <form action="{{ url('/admin/artikel') }}" method="POST" enctype="multipart/form-data" class="form">

        {{--  Begin form roadmap  --}}
        <div class="form-group">
            <label for="judul">Judul</label>
            {{--  <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul') ?? $roadmap->judul}}">  --}}
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul')}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    {{--  <input type="file" class="form-control  @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar') ?? $roadmap->gambar}}">  --}}
                    <input type="file" class="form-control  @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar')}}">
                    @error('gambar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="isi">Deskripsi</label>
            {{--  <textarea name="isi" id="isi" cols="30" rows="3" class="form-control"> {{old('isi') ?? $roadmap->deskripsi}}</textarea>  --}}
            <textarea name="isi" id="isi" cols="30" rows="3" class="form-control"> {{old('isi')}}</textarea>
        </div>

        {{--  ending form roadmap  --}}
        <button type="submit" class="btn btn-primary mt-3" value="submit">Submit</button>
        @csrf
    </form>
</div>
@endsection

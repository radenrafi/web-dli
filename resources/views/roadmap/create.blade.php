@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="text-center">Roadmap</h3>
    <form action="{{ url('/admin/roadmap') }}" method="POST" enctype="multipart/form-data" class="form">
        {{--  Begin form roadmap  --}}
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
            <div class="col">
                <div class="form-group">
                    <label for="tahun">Jangka Tahun</label>
                    <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" id="tahun" value="{{old('tahun')}}">
                    @error('tahun')
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

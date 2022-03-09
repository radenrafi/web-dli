@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="text-center">Reasearch</h3>
    <form action="{{ url('/admin/artikel') }}" method="POST" enctype="multipart/form-data" class="form">
        {{--  Begin form research  --}}
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul')}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="gambar1">Gambar 1</label>
                    <input type="file" class="form-control  @error('gambar1') is-invalid @enderror" name="gambar1" id="gambar1" value="{{old('gambar1')}}">
                    @error('gambar1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="gambar2">Gambar 2</label>
                    <input type="file" class="form-control  @error('gambar2') is-invalid @enderror" name="gambar2" id="gambar2" value="{{old('gambar2')}}">
                    @error('gambar2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="gambar3">Gambar 3</label>
                    <input type="file" class="form-control  @error('gambar3') is-invalid @enderror" name="gambar3" id="gambar3" value="{{old('gambar3')}}">
                    @error('gambar3')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>


        {{--  ending form research  --}}
        <button type="submit" class="btn btn-primary mt-3" value="submit">Submit</button>
        @csrf
    </form>
</div>
@endsection

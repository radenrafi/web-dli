@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="text-center">Reasearch</h3>
    <form action="{{ url('/admin/research') }}" method="POST" enctype="multipart/form-data" class="form">
        {{--  Begin form research  --}}
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{old('nama')}}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control  @error('logo') is-invalid @enderror" name="logo" id="logo" value="{{old('logo')}}">
                    @error('logo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        {{--  ending form research  --}}
        <button type="submit" class="btn btn-primary mt-3" value="submit">Tambah</button>
        @csrf
    </form>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="text-center">Reasearch</h3>
    <form action="{{ url('/admin/artikel') }}" method="POST" enctype="multipart/form-data" class="form">
        {{--  <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul')}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="gambar">Gambar Artikel</label>
                    <input type="file" class="form-control  @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar')}}">
                    @error('gambar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-select" name="kategori" id="kategori">
                        <option selected>-- Pilih Kategori --</option>
                        <option value="Teknologi"
                            {{ old('kategori') == 'Teknologi' ? 'selected' : ''}}>
                            Teknologi
                        </option>
                        <option value="Edukasi"
                            {{ old('kategori') == 'Edukasi' ? 'selected' : ''}}>
                            Edukasi
                        </option>
                        <option value="Startup"
                            {{ old('kategori') == 'Startup' ? 'selected' : ''}}>
                            Startup
                        </option>
                        <option value="Produk"
                            {{ old('kategori') == 'Produk' ? 'selected' : ''}}>
                            Produk
                        </option>
                        <option value="Event"
                            {{ old('kategori') == 'Event' ? 'selected' : ''}}>
                            Event
                        </option>
                        <option value="Promosi"
                            {{ old('kategori') == 'Promosi' ? 'selected' : ''}}>
                            Promosi
                        </option>
                        <option value="Marketing"
                            {{ old('kategori') == 'Marketing' ? 'selected' : ''}}>
                            Marketing
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" rows="40" cols="30" class="form-control">{{old('isi')}}</textarea>
        </div>  --}}


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
        <button type="submit" class="btn btn-primary mt-3" value="submit">Daftar</button>
        @csrf
    </form>
</div>
@endsection

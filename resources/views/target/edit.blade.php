@extends('layouts.admin')

@section('content')
<main class="container">
    <h3>Target</h3>
    <form action="{{url('/admin/target/'.$target->id)}}" method="POST" enctype="multipart/form-data" class="form">
        @method('PATCH')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul') ?? $target->judul}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="isi">Isi Target</label>
            <textarea name="isi" id="isi" cols="30" rows="3" class="form-control"> {{old('isi') ?? $target->isi}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5" value="submit">Submit</button>
        @csrf
    </form>
</main>
@endsection

@extends('layouts.admin')

@section('content')
<main class="container">
    <h3>Target</h3>
    <form action="#" method="POST" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="target">Judul Target</label>
            <input type="text" class="form-control @error('target') is-invalid @enderror" name="target" id="target" value="{{old('target')}}">
            {{-- untuk biar bisa fitur edit --}}
            {{-- <input type="text" class="form-control @error('target') is-invalid @enderror" name="target" id="target" value="{{old('target') ?? $artikel->target}}"> --}}
            @error('target')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="isi">Isi Target</label>
            <p><i>Nb: Judul tidak perlu dituliskan lagi</i></p>
            {{-- untuk biar bisa fitur edit --}}
            {{-- <textarea name="isi" id="editor" cols="30" rows="3" class="form-control"> {{old('isi') ?? $artikel->isi}}</textarea> --}}
            <textarea name="isi" id="editor" cols="30" rows="3" class="form-control"> {{old('isi')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5 mt-3" value="submit">Submit</button>
        @csrf
    </form>
</main>
@endsection

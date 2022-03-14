@extends('layouts.admin')

@section('title', 'Contact')

@section('content')
<main class="container">
    <h3 class="text-center">Contact</h3>
    <form action="{{ url('/admin/contact/'.$contact->id) }}" method="POST" enctype="multipart/form-data" class="form">
        @method('PATCH')
        <div class="form-group">
            <label for="nomor">Nomor Kontak</label>
            <input type="text" class="form-control @error('nomor') is-invalid @enderror" name="nomor" id="nomor" value="{{old('nomor') ?? $contact->nomor}}">
            @error('nomor')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{old('email') ?? $contact->email}}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" value="{{old('alamat')}}">
            @error('alamat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3" value="submit">Submit</button>
        @csrf
    </form>
</main>
@endsection

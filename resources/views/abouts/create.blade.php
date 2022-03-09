@extends('layouts.admin')

@section('content')
<main class="container">
    <h3 class="text-center">About</h3>
    <form action="{{ url('/admin/about') }}" method="POST" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="isi">Isi About</label>
            <textarea name="isi" id="isi" cols="30" rows="3" class="form-control"> {{old('isi')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5 mt-2" value="submit">Submit</button>
        @csrf
    </form>
</main>
@endsection

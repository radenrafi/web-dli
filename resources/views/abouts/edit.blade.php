@extends('layouts.admin')

@section('content')
<main class="container">
    <h3 class="text-center">Profile</h3>
    <form action="{{url('/admin/about/'.$about->id)}}" method="POST" enctype="multipart/form-data" class="form">
        @method('PATCH')
        <div class="form-group">
            <label for="isi">Isi Profile</label>
            <textarea name="isi" id="isi" cols="30" rows="3" class="form-control"> {{old('isi') ?? $about->isi}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5" value="submit">Submit</button>
        @csrf
    </form>
</main>
@endsection

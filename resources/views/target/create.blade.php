@extends('layouts.admin')

@section('content')
<main class="container">
    <h3>Target</h3>
    <form action="{{ url('/admin/target') }}" method="POST" enctype="multipart/form-data" class="form">
        <div class="form-group">
            <label for="isi">Isi Target</label>
            <textarea name="isi" id="isi" cols="30" rows="3" class="form-control"> {{old('isi')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5 mt-2" value="submit">Submit</button>
        @csrf
    </form>
</main>
@endsection

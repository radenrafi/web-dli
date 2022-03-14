@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="text-center">Roadmap</h3>
    @foreach ($roadmaps as $roadmap)
        <a href="{{ url('/admin/roadmap/'.$roadmap->id.'/edit') }}" class="btn btn-primary justify-items-center d-grid gap-2 col-6 mx-auto" role="button">Edit</a>
        <img style="width: 100%; height: auto" src="{{ asset('/gambar-roadmap/'.$roadmap->gambar)}}" alt="">
        <p>{{ $roadmap->tahun }}</p>
        {!! $roadmap->isi !!}
    @endforeach
</div>
@endsection

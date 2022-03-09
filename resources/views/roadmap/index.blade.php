@extends('layouts.admin')

@section('content')
<div class="container">
    <h3 class="text-center">Roadmap</h3>
    @foreach ($roadmaps as $roadmap)
        <img src="{{ asset('/gambar-roadmap/'.$roadmap->gambar)}}" alt="">
        <p>{{ $roadmap->tahun }}</p>
        {!! $roadmap->isi !!}
        <a href="{{ url('/admin/roadmap/'.$roadmap->id.'/edit') }}" class="btn btn-primary justify-items-center" role="button">Edit</a>
    @endforeach
</div>
@endsection

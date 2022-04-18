@extends('layouts.admin')

@section('title', 'Video Profil')

@section('content')
<div class="container">
<h3 class="text-center">Video Profil</h3>
<div class="row justify-content-center">
    <div class="col-md-11">
        @if (session()->has('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('pesan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <a class="btn btn-primary" href="{{ url('/admin/profilVideo/create') }}" role="button">Buat Video</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Link</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($videoProfils as $videoProfil)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $videoProfil->judul }}</th>
                    <th>
                        <a href="{{ $videoProfil->link }}">{{ $videoProfil->link }}</a>
                    </th>
                    <th>
                        <a href="{{ url('/admin/profilVideo/'.$videoProfil->id.'/edit') }}" class="btn btn-primary justify-items-center" role="button">Edit</a>
                    </th>
                    <th>
                        <form action="{{ url('/admin/profilVideo/'.$videoProfil->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger justify-items-center">Hapus</button>
                        </form>
                    </th>
                </tr>
                @empty
                <div class="alert alert-success" role="alert">
                    Tidak ada data
                </div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>

@endsection

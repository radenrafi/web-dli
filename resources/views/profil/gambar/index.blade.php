@extends('layouts.admin')

@section('title', 'Gambar Profil')

@section('content')
<div class="container">
<h3 class="text-center">Gambar Profil</h3>
<div class="row justify-content-center">
    <div class="col-md-11">
        @if (session()->has('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('pesan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <a class="btn btn-primary" href="{{ url('/admin/profilGambar/create') }}" role="button">Buat Gambar</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($gambarProfils as $gambarProfil)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $gambarProfil->judul }}</th>
                    <th>
                        <img src="{{ asset('gambar-profil/'.$gambarProfil->gambar) }}" alt="">
                    </th>
                    <th>
                        <a href="{{ url('/admin/profilGambar/'.$gambarProfil->id.'/edit') }}" class="btn btn-primary justify-items-center" role="button">Edit</a>
                    </th>
                    <th>
                        <form action="{{ url('/admin/profilGambar/'.$gambarProfil->id) }}" method="POST">
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

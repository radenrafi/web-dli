@extends('layouts.admin')

@section('title', 'Artikel')

@section('content')
<div class="container">
<h3 class="text-center">Artikel</h3>
<div class="row justify-content-center">
    <div class="col-md-11">
        @if (session()->has('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('pesan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <a class="btn btn-primary" href="{{ url('/admin/artikel/create') }}" role="button">Buat Artikel</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal dibuat</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($artikels as $artikel)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th><a href="{{url('/admin/artikel/'.$artikel->id)}}">{{ $artikel->judul }}</a></th>
                    <th>{{ $artikel->kategori }}</th>
                    <th>{{ $artikel->created_at }}</th>
                    <th>
                        <a href="{{ url('/admin/artikel/'.$artikel->id.'/edit') }}" class="btn btn-primary justify-items-center" role="button">Edit</a>
                    </th>
                    <th>
                        <form action="{{ url('/admin/artikel/'.$artikel->id) }}" method="POST">
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

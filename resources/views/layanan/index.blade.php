@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            @if (session()->has('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('pesan') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <a class="btn btn-primary" href="{{ url('/admin/layanan/create') }}" role="button">Tambah Layanan</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Link</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($layanans as $layanan)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $layanan->nama }}</th>
                        <th>{{ $layanan->gambar }}</th>
                        <th>{{ $layanan->link }}</th>
                        <th>
                            <a href="{{ url('/admin/layanan/'.$layanan->id.'/edit') }}" class="btn btn-success justify-items-center" role="button">Edit</a>
                        </th>
                        <th>
                            <form action="{{ url('/admin/layanan/'.$layanan->id) }}" method="POST">
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

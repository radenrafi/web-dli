@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-primary" href="{{ url('/admin/about/create') }}" role="button">Tambah About</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Isi</th>
                        <th>Tanggal dibuat</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($abouts as $about)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $about->isi }}</th>
                        <th>{{ $about->created_at }}</th>
                        <th>
                            <a href="{{ url('/admin/about/'.$about->id.'/edit') }}" class="btn btn-success justify-items-center" role="button">Edit</a>
                        </th>
                        <th>
                            <form action="{{ url('/admin/about/'.$about->id) }}" method="POST">
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

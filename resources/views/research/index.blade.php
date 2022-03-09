@extends('layouts.admin')

@section('title', 'Research')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <a class="btn btn-primary" href="{{ url('/admin/research/create') }}" role="button">Tambah Research</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Tanggal diedit</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($researchs as $research)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{!! $research->nama !!}</th>
                        <th>{{ $research->updated_at }}</th>
                        <th>
                            <a href="{{ url('/admin/research/'.$research->id.'/edit') }}" class="btn btn-success justify-items-center" role="button">Edit</a>
                        </th>
                        <th>
                            <form action="{{ url('/admin/research/'.$research->id) }}" method="POST">
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

@extends('layouts.admin')

@section('title', 'Target')

@section('content')
<div class="container">
    <h3 class="text-center">Profile Target</h3>
    <div class="row justify-content-center">
        <div class="col-md-11">
            {{-- <a class="btn btn-primary" href="{{ url('/admin/target/create') }}" role="button">Tambah Target</a> --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Tanggal diedit</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($targets as $target)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $target->judul }}</th>
                        <th>{!! $target->isi !!}</th>
                        <th>{{ $target->updated_at }}</th>
                        <th>
                            <a href="{{ url('/admin/target/'.$target->id.'/edit') }}" class="btn btn-success justify-items-center" role="button">Edit</a>
                        </th>
                        <th>
                            <form action="{{ url('/admin/target/'.$target->id) }}" method="POST">
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

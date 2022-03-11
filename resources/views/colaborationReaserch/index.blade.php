@extends('layouts.admin')

@section('title', 'colaboration research')

@section('content')
<div class="container">
    <h3 class="text-center">Colaboration Reseach</h3>

    <div class="row justify-content-center">
        <div class="col-md-11">
            @if (session()->has('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('pesan') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <a class="btn btn-primary mb-2" href="{{ url('/admin/colaboration/create')}}" role="button">Tambah</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Instansi</th>
                        <th>Negara</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($colaborations as $colaboration)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $colaboration->nama }}</th>
                        <th>{{ $colaboration->instansi }}</th>
                        <th>{{ $colaboration->negara }}</th>
                        <th>
                            <a href="{{ url('/admin/colaboration/'.$colaboration->id.'/edit') }}" class="btn btn-primary justify-items-center" role="button">Edit</a>
                        </th>
                        <th>
                            <form action="{{ url('/admin/colaboration/'.$colaboration->id) }}" method="POST">
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

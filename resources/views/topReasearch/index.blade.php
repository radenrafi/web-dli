@extends('layouts.admin')

@section('title', 'Top Reasearch')

@section('content')
<div class="container">
    <h3 class="text-center">Top Reasearch</h3>

    <div class="row justify-content-center">
        <div class="col-md-11">
            @if (session()->has('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('pesan') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <a class="btn btn-primary mb-2" href="{{ url('/admin/tambahTopResearch') }}" role="button">Tambah</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Singkatan</th>
                        <th>Sub Judul</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th><a href="#">Judul</a></th>
                        <th>Singkatan</th>
                        <th>Sub Judul</th>
                        <th>
                            <a href="#" class="btn btn-primary justify-items-center" role="button">Edit</a>
                        </th>
                        <th>
                            <form action="#" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger justify-items-center">Hapus</button>
                            </form>
                        </th>
                    </tr>
                    {{--  @empty  --}}
                    <div class="alert alert-success" role="alert">
                        Tidak ada data
                    </div>
                    {{--  @endforelse  --}}
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
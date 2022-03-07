@extends('layouts.admin')

@section('title', 'About')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            {{-- <a class="btn btn-primary" href="{{ url('/admin/about/create') }}" role="button">Tambah About</a> --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Isi</th>
                        <th>Tanggal diedit</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($abouts as $about)
                    <tr>
                        <th>{!! $about->isi !!}</th>
                        <th>{{ $about->updated_at }}</th>
                        <th>
                            <a href="{{ url('/admin/about/'.$about->id.'/edit') }}" class="btn btn-success justify-items-center" role="button">Edit</a>
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

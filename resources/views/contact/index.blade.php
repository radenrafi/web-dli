@extends('layouts.admin')

@section('title', 'Contact')

@section('content')
<div class="container">
    <h3 class="text-center">Contact</h3>

    <div class="row justify-content-center">
        <div class="col-md-11">
            @if (session()->has('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('pesan') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            {{-- <a class="btn btn-primary mb-2" href="{{ url('admin/contact/create') }}" role="button">Tambah</a> --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                    <tr>
                        <th>{{ $contact->nomor }}</th>
                        <th>{{ $contact->email }}</th>
                        <th>{{ $contact->alamat }}</th>
                        <th>
                            <a href="{{ url('/admin/contact/'.$contact->id.'/edit') }}" class="btn btn-primary justify-items-center" role="button">Edit</a>
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

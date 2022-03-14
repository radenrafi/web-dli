@extends('layouts.admin')

@section('title', 'Pesan')

@section('content')
<div class="container">
<h3 class="text-center">Pesan</h3>
<div class="row justify-content-center">
    <div class="col-md-11">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($messages as $message)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $message->nama }}</th>
                    <th>{{ $message->email }}</th>
                    <th>{{ $message->pesan }}</th>
                    <th>{{ $message->created_at }}</th>
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

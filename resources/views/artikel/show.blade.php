<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <h1>{{ $artikel->judul }}</h1>
    <a href="{{ url('artikel/'.$artikel->id.'/edit') }}" class="btn btn-success mx-3 d-flex justify-items-center" role="button">Edit</a>
    <form action="{{ url('artikel/'.$artikel->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger d-flex justify-items-center">Hapus</button>
    </form>
    <img src="{{ asset("gambar-artikel/$artikel->gambar") }}" width="100px" alt="">
    <p>{{ $artikel->isi }}</p>
</body>
</html>

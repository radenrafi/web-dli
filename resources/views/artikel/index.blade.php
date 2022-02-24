<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel</title>
</head>
<body>
    <h1>Index Artikel</h1>
    @forelse ($artikels as $artikel)
        <div class="col card-konten">
            <div class="card h-100 card-artikel">
                {{-- <a href="{{url('/artikel/'.$artikel->id)}}">
                    <img src="{{ asset('gambar-artikel/'.$artikel->gambar) }}" class="card-img-artikel d-flex justify-content" width="345" alt="...">
                </a> --}}
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{url('/artikel/'.$artikel->id)}}">{{ $artikel->judul }}</a>
                    </h5>
                    {{-- <p class="card-text">{{ $artikel->isi }}</p> --}}
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-success" role="alert">
            Tidak ada data
        </div>
    @endforelse
</body>
</html>

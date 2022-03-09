<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Artikel</h1>
    <form action="{{url('/admin/artikel/'.$artikel->id)}}" method="POST" enctype="multipart/form-data" class="form">
        @method('PATCH')
        <div class="form-group">
            <label for="gambar">Gambar Artikel</label>
            <input type="file" class="form-control  @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar') ?? $artikel->gambar}}">
            @error('gambar')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="judul">Judul Artikel</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul') ?? $artikel->judul}}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="isi">Isi artikel</label>
            <textarea name="isi" id="isi" cols="30" rows="3" class="form-control"> {{old('isi') ?? $artikel->isi}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-4" value="submit">Submit</button>
        @csrf
    </form>
</body>
</html>

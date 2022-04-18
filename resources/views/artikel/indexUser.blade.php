@extends('layouts.canvas')

@section('content')
<div class="container">
    <div class="row article">
        <div class="col-md-8 article-column">
            {{--  begin recent post  --}}
            <h2 class="text-center article-big-title">RECENT POST</h2>
            <span class="section-line section"></span>
            {{--  begin article card  --}}
            <div class="card article-column-card">
                {{--  row article  --}}
                @forelse ($artikels as $artikel)
                <div class="row">
                    <div class="col-md-4">
                        <a href="#">
                            <img class="article-user-img" src="{{ asset("gambar-artikel/$artikel->gambar") }}" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-between article-user-header">
                        </div>
                        <div class="article-user-content">
                            <a href="{{ url('/artikel/'.$artikel->id) }}" class="article-user-title">
                                {{ $artikel->judul }}
                            </a>
                            <p class="article-user-desc">
                                {!! $artikel->deskripsi !!}
                            </p>
                        </div>

                        {{--  label  --}}
                        <div class="label">
                            <p class="article-user-label">{{ $artikel->kategori }}</p>
                        </div>

                    </div>
                    <span class="article-card-line"></span>
                </div>
                @empty

                @endforelse

                {{--  ending row article  --}}
            </div>
            {{--  ending article card  --}}
        </div>
        {{--  ending recent post  --}}

        <div class="col-6 col-md-4 article-column">
            {{--  begin label  --}}
            <h2 class="text-center article-big-title">LABEL</h2>
            <span class="section-line section"></span>

            <div class="label">
                <div class="row col"></div>
                <a href="{{ url('/artikel') }}" class="article-user-label">All</a>
                <a href="{{ url('/artikel/kategori/teknologi') }}" class="article-user-label">Teknologi</a>
                <a href="{{ url('/artikel/kategori/edukasi') }}" class="article-user-label">Edukasi</a>
                <a href="{{ url('/artikel/kategori/startup') }}" class="article-user-label">Startup</a>
                <a href="{{ url('/artikel/kategori/produk') }}" class="article-user-label">Produk</a>
                <a href="{{ url('/artikel/kategori/event') }}" class="article-user-label">Event</a>
                <a href="{{ url('/artikel/kategori/promosi') }}" class="article-user-label">Promosi</a>
                <a href="{{ url('/artikel/kategori/marketing') }}" class="article-user-label">Marketing</a>
            </div>
            {{--  ending label  --}}

            {{--  begin popular post  --}}
            <h2 class="mt-5 text-center article-big-title">POPULAR POST</h2>
            <span class="section-line section"></span>

            <div class="card article-popular-post">
                @foreach ($populars as $popular)
                <a href="{{ url('/artikel/'.$popular->id) }}" class="row article-pp-row">
                    <div class="col-md-3 col-sm-9">
                        <img class="article-popular-img" src="{{ asset("gambar-artikel/$artikel->gambar") }}" alt="">
                    </div>
                    <div class="col-md-9 col-sm-9 article-popular-title">
                        {{ $popular->judul }}
                    </div>
                </a>
                @endforeach
            </div>
            {{--  ending popular post  --}}
        </div>
    </div
</div>
@endsection


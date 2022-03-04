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
                    <div class="col-md-">
                        <a href="#">
                            <img class="article-user-img" src="{{ asset("gambar-artikel/$artikel->gambar") }}" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-between article-user-header">
                            {{-- <div class="col-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                  </svg>
                                Admin
                            </div> --}}
                            {{-- <div class="col-4">
                                <span class="article-user-header-date">{{ $artikel->created_at }}</span>
                            </div> --}}
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
                            <a href="#" class="article-user-label">{{ $artikel->kategori }}</a>
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
                <a href="#" class="article-user-label">Technologi</a>
                <a href="#" class="article-user-label">Education</a>
                <a href="#" class="article-user-label">Economic</a>
                <a href="#" class="article-user-label">Startup</a>
                <a href="#" class="article-user-label">Politic</a>
            </div>
            {{--  ending label  --}}

            {{--  begin popular post  --}}
            <h2 class="mt-5 text-center article-big-title">POPULAR POST</h2>
            <span class="section-line section"></span>

            <div class="card article-popular-post">
                <a href="#" class="row article-pp-row">
                    <div class="col-3">
                        <img class="article-popular-img" src="{{asset('img/bg.png')}}" alt="">
                    </div>
                    <div class="col-9 article-popular-title">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </a>

                <a href="#" class="row article-pp-row">
                    <div class="col-3">
                        <img class="article-popular-img" src="{{asset('img/bg.png')}}" alt="">
                    </div>
                    <div class="col-9 article-popular-title">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </a>

                <a href="#" class="row article-pp-row">
                    <div class="col-3">
                        <img class="article-popular-img" src="{{asset('img/bg.png')}}" alt="">
                    </div>
                    <div class="col-9 article-popular-title">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                </a>
            </div>
            {{--  ending popular post  --}}
        </div>
    </div
</div>
@endsection


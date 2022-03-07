  @extends('layouts.canvas')

  @section('content')
  <div class="container">
      <div class="row article">
          <div class="col-md-8 article-column">
              {{--  begin recent post  --}}
              <h2 class="text-center article-big-title">RECENT POST</h2>
              <span class="section-line section"></span>

              <h2 class="article-title">{{ $artikel->judul }}</h2>
              <div class="row justify-content-between article-info mb-4">
                  <div class="col-3">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                      admin
                  </div>
                  <div class="col-3">
                      <span class="article-info-date">
                          {{ $tanggal }}
                      </span>
                  </div>
              </div>

              {{--  begin article description  --}}
              <div class="content">
                  <div>
                      <img class="article-content-img" style="width: 400px; height:300px" src="{{asset('gambar-artikel/'.$artikel->gambar)}}" alt="">
                  </div>
                  <p class="article-content-txt">
                      {!! $artikel->isi !!}
                  </p>
              </div>
              {{--  ending article description  --}}
          </div>
          {{--  ending recent post  --}}

          <div class="col-6 col-md-4 article-column">
              {{--  begin label  --}}
              <h2 class="text-center article-big-title">LABEL</h2>
              <span class="section-line section"></span>

              <div class="label">
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
                    <div class="col-3">
                        <img class="article-popular-img" src="{{ asset("gambar-artikel/$artikel->gambar") }}" alt="">
                    </div>
                    <div class="col-9 article-popular-title">
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

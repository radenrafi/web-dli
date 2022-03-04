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

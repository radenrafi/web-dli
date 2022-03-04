<!-- BEGIN OF page cover -->
<div class="hh-cover page-cover">
  <!-- Particles as background - uncomment below to use particles/snow -->
  {{-- <div id="particles-js" class="cover-bg pos-abs full-size bg-color" data-bgcolor="rgba(2, 3, 10, 0.7)"></div> --}}
</div>
<!--END OF page cover -->

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

                <div class="row">
                    <div class="col-md-">
                        <a href="#">
                            <img class="article-user-img" src="{{asset('img/products/umoocs.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-between article-user-header">
                            <div class="col-4 ">
                            </div>
                            <div class="col-4">
                                <span class="article-user-header-date">Januari 18, 2022</span>
                            </div>
                        </div>
                        <div class="article-user-content">
                            <a href="#" class="article-user-title">
                                Ini adalah judul yang seharusnya ditulis bener
                            </a>
                            <p class="article-user-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ullam ad, saepe pariatur nisi eaque!</p>
                        </div>

                        {{--  label  --}}
                        <div class="label">
                            <a href="#" class="article-user-label">Technologi</a>
                            <a href="#" class="article-user-label">Edu</a>
                        </div>

                    </div>
                    <span class="article-card-line"></span>
                </div>

                <div class="row">
                    <div class="col-md-">
                        <a href="#">
                            <img class="article-user-img" src="{{asset('img/products/umoocs.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-between article-user-header">
                            <div class="col-4 ">
                            </div>
                            <div class="col-4">
                                <span class="article-user-header-date">Januari 18, 2022</span>
                            </div>
                        </div>
                        <div class="article-user-content">
                            <a href="#" class="article-user-title">
                                Ini adalah judul yang seharusnya ditulis bener
                            </a>
                            <p class="article-user-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ullam ad, saepe pariatur nisi eaque!</p>
                        </div>

                        {{--  label  --}}
                        <div class="label">
                            <a href="#" class="article-user-label">Technologi</a>
                            <a href="#" class="article-user-label">Edu</a>
                        </div>

                    </div>
                    <span class="article-card-line"></span>
                </div>

                <div class="row">
                    <div class="col-md-">
                        <a href="#">
                            <img class="article-user-img" src="{{asset('img/products/umoocs.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-between article-user-header">
                            <div class="col-4 ">
                            </div>
                            <div class="col-4">
                                <span class="article-user-header-date">Januari 18, 2022</span>
                            </div>
                        </div>
                        <div class="article-user-content">
                            <a href="#" class="article-user-title">
                                Ini adalah judul yang seharusnya ditulis bener
                            </a>
                            <p class="article-user-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ullam ad, saepe pariatur nisi eaque!</p>
                        </div>

                        {{--  label  --}}
                        <div class="label">
                            <a href="#" class="article-user-label">Technologi</a>
                            <a href="#" class="article-user-label">Edu</a>
                        </div>

                    </div>
                    <span class="article-card-line"></span>
                </div>

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


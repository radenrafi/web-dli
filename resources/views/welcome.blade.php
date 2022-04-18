<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

        <title>PUIPT DLI (Disruptive Learning Innovation) - Universitas Negeri Malang</title>

        <link rel="stylesheet" href="{{asset('/fonts/overpass/stylesheet.css')}}')">
        <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/pageloader.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/js/vendor/swiper.min.css')}}">
        <link rel="stylesheet" href="{{asset('/js/vendor/jquery.fullpage.min.css')}}">
        <link rel="stylesheet" href="{{asset('/js/vegas/vegas.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('/css/style-default.css')}}">
        <link rel="stylesheet" href="{{asset('/css/welcome.css')}}">

        <script src="{{asset('/js/vendor/modernizr-2.7.1.min.js')}}"></script>
    </head>


    <body id="menu" class="body-page">
        {{--  <!-- page-loader -->
        <div class="page-loader" id="page-loader">
          <div>
            <div class="icon ion-spin"></div>
            <p>loading</p>
          </div>
        </div>  --}}

        <!-- BEGIN OF site header Menu -->
        <header class="page-header navbar page-header-alpha scrolled-white menu-right topmenu-right">
          <!-- Begin of logo/brand -->
          <a class="navbar-brand" href="{{ url('/') }}">
            <span class="logo">
              <img class="light-logo" src="{{asset('/img/logo.png')}}" alt="Logo DLI">
            </span>
            <span class="text">
              <span class="line">PUIPT DLI</span>
              <span class="line sub">Universitas Negeri Malang</span>
            </span>
          </a>
          <!-- End of logo/brand -->

          <!-- begin of menu wrapper -->
          <div class="all-menu-wrapper" id="navbarMenu">
            <!-- Begin of sidebar nav menu params class: text-only / icon-only-->
            <nav class="navbar-sidebar ">
              <ul class="navbar-nav" id="qmenu">
                <li class="nav-item" data-menuanchor="home">
                  <a href="#home">
                    <i class="icon ion-home"></i>
                    <span class="txt">Home</span>
                  </a>
                </li>
                <li class="nav-item" data-menuanchor="about">
                    <a href="#about">
                      <i class="icon ion-information"></i>
                      <span class="txt">Profile</span>
                    </a>
                </li>
                <li class="nav-item" data-menuanchor="article">
                    <a href="#article">
                      <i class="icon ion-ios-book"></i>
                      <span class="txt">Article</span>
                    </a>
                </li>
                <li class="nav-item" data-menuanchor="research">
                  <a href="#research">
                    <i class="icon ion-ios-analytics-outline"></i>
                    <span class="txt">Research</span>
                  </a>
                </li>
                <li class="nav-item" data-menuanchor="roadmap">
                  <a href="#roadmap">
                    <i class="icon ion-flag"></i>
                    <span class="txt">Roadmap</span>
                  </a>
                </li>
                <li class="nav-item" data-menuanchor="organization">
                  <a href="#organization">
                    <i class="icon ion-ios-people-outline"></i>
                    <span class="txt">Organization</span>
                  </a>
                </li>
                <li class="nav-item" data-menuanchor="products">
                  <a href="#products">
                    <i class="icon ion-ios-lightbulb-outline"></i>
                    <span class="txt">Products</span>
                  </a>
                </li>
                <li class="nav-item" data-menuanchor="service">
                    <a href="#service">
                      <i class="icon ion-ios-paper-outline"></i>
                      <span class="txt">Service</span>
                    </a>
                </li>
                <li class="nav-item" data-menuanchor="contact">
                  <a href="#contact">
                    <i class="icon ion-ios-telephone-outline"></i>
                    <span class="txt">Contact</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- End of sidebar nav menu -->
          </div>
        </header>

        <!-- BEGIN OF page cover -->
        <div class="hh-cover page-cover">
          <!-- Particles as background - uncomment below to use particles/snow -->
          <div id="particles-js" class="cover-bg pos-abs full-size bg-color" data-bgcolor="rgba(2, 3, 10, 0.7)"></div>
        </div>
        <!--END OF page cover -->

        <!-- BEGIN OF page main content -->
        <main class="page-main page-fullpage main-anim" id="mainpage">

          <div class="section section-home fullscreen-md fp-auto-height-responsive main-home" data-section="home">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper">
              <!-- content -->
              <div class="section-content anim">
                <div class="row">
                  <div class="col-12 col-md-6 text-left">
                    <!-- title and description -->
                    <div class="title-desc">
                      <h1 class="display-4 display-title bordered anim-1">PUIPT DLI UM</h1>
                      <h5 class="anim-2">
                        Pusat Unggulan Ipteks Perguruan Tinggi <br>
                        <i>Disruptive Learning Innovation</i> <br>
                        Universitas Negeri Malang
                      </h5>
                    </div>

                    <!-- Action button -->
                    <div class="btns-action anim-3">
                      <a class="btn btn-outline-white btn-round" href="#about">
                        Get started
                      </a>
                    </div>
                  </div>

                  <!-- begin of right content -->
                  <div class="col-12 col-md-6 right-content hidden-sm center-vh">
                    <!-- content -->
                    <div class="section-content">
                      <!-- illustartion -->
                      <div class="illustr zoomout-1">
                        <img src="{{asset('/img/logo-home.png')}}" alt="Logo All">
                      </div>
                    </div>
                  </div>
                  <!-- end of right content -->
                </div>
              </div>

            </div>
            <!-- End of section wrapper -->
          </div>

        {{--  Begin of Profile  --}}
            <div class="section section-description fp-auto-height-responsive" data-section="about">
                <!-- Begin of section wrapper -->
                    <div class="section-wrapper center-vh dir-col anim">
                        <!-- title -->
                        <div class="section-title text-center">
                            <h5 class="title-bg">Profile</h5>
                            <h2 class="display-4 display-title anim-2">Profile</h2>
                        </div>

                        <!-- content -->
                        <div class="section-content reduced anim text-center">
                            <!-- title and description -->
                            <div class="title-desc anim-3">
                                @foreach ($abouts as $about)
                                {!! $about->isi !!}
                                @endforeach
                            </div>
                        </div>
                    </div>
                <!-- End of section wrapper -->
            </div>

            <div class="section section-description fp-auto-height-responsive">
                <!-- Begin of section wrapper -->
                    <div class="section-wrapper center-vh dir-col anim">
                        <!-- title -->
                        <div class="section-title text-center">
                            <h2 class="display-4 display-title anim-2">Video Profile</h2>
                        </div>

                        <!-- content -->
                        <div class="row d-flex justify-content-center m-4">
                            <div class="row-11 col-md-6">
                                <div class="col-md-12 d-flex align-items-center mb-5">
                                    <div class="card bg-dark">
                                        <iframe width="300" height="200" src="https://www.youtube.com/embed/rrvjYS-dxjg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-md-12 d-flex align-items-center mb-5">
                                    <div class="card bg-dark">
                                        <iframe width="300" height="200" src="https://www.youtube.com/embed/rrvjYS-dxjg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-11 col-md-6 d-flex align-items-center">
                                <div class="card bg-dark">
                                    <iframe width="300" height="200" src="https://www.youtube.com/embed/rrvjYS-dxjg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                <!-- End of section wrapper -->
            </div>

            <div class="section section-description fp-auto-height-responsive about">
                <!-- Begin of section wrapper -->
                <div class="section-wrapper center-vh dir-col anim">
                    {{--  title  --}}
                    <div class="section-title text-center">
                        <h2 class="display-4 display-title anim-2">DLI Office</h2>
                    </div>

                    <!--Controls-->
                    <div class="about-controls">
                        <a class="about-button" style="background-color:white; padding:1em; padding-left:1.2em; padding-right:1.2em; margin:2em; border-radius: 3em; box-shadow: 9px 9px 12px rgba(0, 0, 0, 0.25);" href="#multi-item-example" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="about-button" style="background-color:white; padding:1em; padding-left:1.3em; padding-right:1.3em; margin:2em; border-radius: 3em; box-shadow: 9px 9px 12px rgba(0, 0, 0, 0.25);" href="#multi-item-example" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                    <!--/.Controls-->

                    <div id="multi-item-example" class="carousel slide carousel-multi item" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example" data-slide-to="1"></li>
                            <li data-target="#multi-item-example" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner mt-4" role="listbox">

                            {{--  first slide  --}}
                            <div class="carousel-item active">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                            alt="Card image cap">
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                            alt="Card image cap">
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                            alt="Card image cap">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{--  /.first slide  --}}

                            {{--  second slide  --}}
                            <div class="carousel-item">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                            alt="Card image cap">
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                            alt="Card image cap">
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                            alt="Card image cap">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{--  /. second slide  --}}

                            {{--  third slide  --}}
                            <div class="carousel-item">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                            alt="Card image cap">
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                                            alt="Card image cap">
                                        </div>
                                    </div>

                                    <div class="col-md-4 clearfix d-none d-md-block">
                                        <div class="card mb-2">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                                            alt="Card image cap">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{--  /. third slide  --}}
                        </div>
                        {{--  /. slides  --}}

                    </div>
                </div>

                </div>
            </div>

            {{--  target  --}}
          @foreach ($targets as $target)
          <div class="section section-description fp-auto-height-responsive">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">Target</h5>
                <h3 class="display-4 display-title anim-2">{{ $target->judul }}</h3>
              </div>

              <!-- content -->
              <div class="section-content reduced anim text-center">
                <!-- title and description -->
                <div class="title-desc anim-3">
                    {!! $target->isi !!}
                </div>

              </div>

              <!-- Arrows scroll down/up -->
              <br>
              <br>
              <br>
              <footer class="px-2" style="border: 1px solid rgb(255, 255, 255); border-radius:.5em">
                <a class="down">
                  <span class="icon"></span>
                  <span class="txt">Target {{ $loop->iteration}}</span>
                </a>
              </footer>
            </div>
            <!-- End of section wrapper -->
          </div>
          @endforeach
          {{--  ./target  --}}
        {{--  Ends of Profile  --}}

          {{--  Begin of article  --}}
          <div class="section section-description fp-auto-height-responsive article" data-section="article">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center article-title">
                <h2 class="display-5 display-title anim-2">OUR LATEST ARTICLE</h2>
              </div>

              <!-- content -->
              <div class="section-content reduced anim text-center">
                <div class="row align-items-center article-row">
                    @forelse ($artikels as $artikel)
                    <div class="col-12 col-sm-8 col-md-5 mb-2 article-column">
                        <div class="card article-card h-100">
                            <img src="{{ asset("gambar-artikel/$artikel->gambar") }}" style="height:150px;" class="article-card-img" alt="...">
                            <div class="article-card-body">
                                <a href="{{ url('/artikel/'.$artikel->id) }}" class="article-card-title">{{ $artikel->judul }}</a>
                                <p class="article-card-text">{!! $artikel->deskripsi !!}</p>
                                <a href="{{ url('/artikel/'.$artikel->id) }}" class="article-link">Read more..</a>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse

                    {{--  button view all  --}}
                    <div class="col-12 col-8 col-md-2 article-button">
                        <a href="{{ url('/artikel') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                              </svg>
                            <br>
                            <span class="txt">View All</span>
                        </a>
                    </div>
                </div>
              </div>


            </div>
            <!-- End of section wrapper -->
          </div>
          {{--  End of article  --}}


          <div class="section section-description fp-auto-height-responsive " data-section="research">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">Research</h5>
              </div>

              <!-- content -->
              <div class="section-content anim text-center">
                <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
                <!-- begin of item -->
                <div class="item row justify-content-between">
                  <!-- img-frame-normal demo -->
                  @foreach ($researchs as $research)
                  <div class="col-12 col-sm-6 col-md-3 center-vh anim-2">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">

                              <img class="img" style="width: 8em; height:8em" src="{{asset('/gambar-research/'.$research->logo)}}" alt="Image">

                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>{{ $research->nama }}</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>

                <div class="item row justify-content-center my-5">
                  <div class="col-12 center-vh anim-3">
                    <h2 class="display-4 display-title">ONE-STOP LEARNING</h2>
                  </div>
                </div>

                <div class="item row justify-content-center">
                  <div class="col-12 col-sm-6 anim-4 py-4 px-5 border rounded">
                    <h3 class="display-title">Produk & Jasa</h3>
                    <h6>Platform Belajar, Media Belajar, Bahan Belajar, Game Edukasi, Training Teknologi Belajar, dll.</h6>
                  </div>
                </div>
                <!-- end of item -->
              </div>

              <!-- Arrows scroll down/up
                      <footer class="section-footer scrolldown">
                          <a class="down">
                              <span class="icon"></span>
                              <span class="txt">One Stop Learning</span>
                          </a>
                      </footer> -->
            </div>
            <!-- End of section wrapper -->
          </div>

          <div class="section section-description fp-auto-height-responsive " data-section="top_topics">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">Research</h5>
                <h2 class="display-title anim-2 mb-5">Top Research Topics</h2>
              </div>

              <!-- content -->
              <div class="section-content anim text-center">
                <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
                <!-- begin of item -->
                <div class="item row justify-content-between">
                  @foreach ($topResearchs as $topResearch)
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="{{ url('/topResearch/'.$topResearch->id)}}" title="{{ $topResearch->subJudul }} ({{ $topResearch->judul }})">
                              <img class="img" style="width: 8em; height:8em" src="{{asset('/gambar-topResearch/'.$topResearch->gambar) }}" alt="Image">
                            </a>
                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>{{ $topResearch->singkatan }}</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
              </div>
              </div>


              </footer>
            </div>
            <!-- End of section wrapper -->
          </div>

          <div class="section section-twoside fp-auto-height-responsive " data-section="roadmap">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper twoside">

              <!-- title -->
              @foreach ($roadmaps as $roadmap)
              <div class="section-title text-center ">
                <h5 class="title-bg">Roadmap</h5>
                <div class="title-abs mb-4">
                  <h2 class="display-title">Roadmap Riset DLI 3 Tahun ke Depan</h2>
                  <h5>({{ $roadmap->tahun }})</h5>
                </div>
              </div>
              <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
              <!-- begin of item -->
              <div class="item row justify-content-center">
                <div class="col-12">
                  <img src="{{asset('/gambar-roadmap/'.$roadmap->gambar)}}" class="img-fluid mt-5" alt="Gambar Roadmap DLI">
                </div>
              </div>
              @endforeach
              <!-- end of item -->
              <div class="text-center">

                <a class="btn btn-transp-arrow btn-outline btn-sm btn-primary btn-round" href="{{ url('/roadmap') }}">
                  <span class="icon arrow-right"></span>
                  <span class="text">View Detail</span>
                </a>
              </div>
            </div>
            <!-- End of section wrapper -->
          </div>

          <div class="section section-description fp-auto-height-responsive " data-section="organization">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">Organization</h5>
                <h2 class="display-title anim-2">Organisasi DLI</h2>
              </div>

              <!-- content -->
              <div class="section-content anim text-center">
                <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
                <!-- begin of item -->
                <div class="item row justify-content-center">
                  <div class="col-8 col-sm-6">
                    <img src="{{asset('/img/organization.png')}}" class="img-fluid" alt="Bagan Organisasi DLI">
                  </div>
                </div>
                <!-- end of item -->
              </div>

            </div>
            <!-- End of section wrapper -->
          </div>

          {{--  Begin of Researcher  --}}
          <div class="section section-description fp-auto-height-responsive " data-section="researcher">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">Researcher</h5>
                <h2 class="display-title anim-2 mb-5">Collaboration Researchers</h2>
              </div>
              <div class="row">
                  @foreach ($colaborations as $colaboration)
                  <div class="col-12 col-sm-6 col-md-4">
                    <div class="section-content anim text-center">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <img class="img" style="width: 8em; height:8em" src="{{asset('/gambar-colaboration/'.$colaboration->gambar )}}" alt="Foto {{ $colaboration->nama }}">
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h6>{{ $colaboration->nama }}</h6>
                                    <h6 class="small">({{ $colaboration->instansi }}, {{ $colaboration->negara }})</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  @endforeach
              </div>
            </div>
            <!-- End of section wrapper -->
          </div>
          {{--  Ending of Researcher  --}}

          {{--  Begin of Researcher  --}}
          <div class="section section-description fp-auto-height-responsive " data-section="sop_research">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">SOP</h5>
                <h2 class="display-title anim-2 mb-5">SOP Riset Unggulan DLI</h2>
              </div>

              <!-- content -->
              <div class="section-content anim text-center">
                <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
                <!-- begin of item -->
                <div class="item row justify-content-center">
                  <div class="col-12 col-sm-7">
                    <img src="{{asset('/img/sop.png')}}" class="img-fluid" alt="SOP Riset Unggulan DLI">
                  </div>
                </div>
                <!-- end of item -->
              </div>


            </div>
            <!-- End of section wrapper -->
          </div>
          {{--  Begin of Researcher  --}}

          {{--  Begin of Product  --}}
          <div class="section section-description fp-auto-height-responsive " data-section="products">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">Products</h5>
                <h2 class="display-title anim-2 mb-5">Produk Unggulan</h2>
              </div>

              <!-- content -->
                <div class="row">
                  <div class="col-12 col-md-4 mb-3">
                    <a href="https://idbookstore.id/">
                      <img class="img" style="width: 18em; height:24em; border:solid 3px white; box-shadow: 9px 9px 12px rgba(0, 0, 0, 0.25);" src="{{asset('gambar-artikel/artikel-1645678594.png')}}" alt="Logo">
                    </a>
                  </div>
                  <div class="col-12 col-md-4 mb-3">
                    <a href="http://umoocs.um.ac.id/">
                      <img class="img" style="width: 18em; height:24em; border:solid 3px white; box-shadow: 9px 9px 12px rgba(0, 0, 0, 0.25);" src="{{asset('gambar-artikel/artikel-1645678594.png')}}" alt="Logo">
                    </a>
                  </div>
                  <div class="col-12 col-md-4 mb-3">
                    <a href="#">
                      <img class="img" style="width: 18em; height:24em; border:solid 3px white; box-shadow: 9px 9px 12px rgba(0, 0, 0, 0.25);" src="{{asset('gambar-artikel/artikel-1645678594.png')}}" alt="Logo">
                    </a>
                  </div>
                </div>

            </div>
            <!-- End of section wrapper -->
          </div>
          {{--  Ends of Product  --}}

          {{--  Begin of Service  --}}
          <div class="section section-description fp-auto-height-responsive service-section" data-section="service">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">Service</h5>
                <h2 class="display-title anim-2 mb-5">Layanan DLI</h2>
              </div>

              {{--  Content  --}}
              <div class="row justify-content-center container">
                <a href="http://dli-eduventure.um.ac.id" class="col-12 col-sm-7 col-md-4 py-3 px-4 border rounded m-3" style="text-decoration:none; color:white">
                    <div class="images text-center">
                        <img class="img" style="width:10em; height:auto" src="{{asset('img/service/Logo_DLI_Eduventure_Warna.png')}}" alt="Foto">
                    </div>
                    <div class="text-body">
                        <p>
                            ini adalah penjelasan singkatnya
                        </p>
                    </div>
                </a>
                <a href="http://journal2.um.ac.id/index.php/jodli" class="col-12 col-sm-7 col-md-4 py-3 px-4 border rounded m-3" style="text-decoration:none; color:white">
                    <div class="images text-center">
                        <img class="img" style="width:10em; height:auto" src="{{asset('img/service/logo joldi.png')}}" alt="Foto">
                    </div>
                    <div class="text-body">
                        <p>
                            ini adalah penjelasan singkatnya
                        </p>
                    </div>
                </a>
                <a href="#" class="col-12 col-sm-7 col-md-4 py-3 px-4 border rounded m-3" style="text-decoration:none; color:white">
                    <div class="images text-center">
                        <img class="img" style="width:10em; height:auto" src="{{asset('img/service/logodli store.png')}}" alt="Foto">
                    </div>
                    <div class="text-body">
                        <p>
                            ini adalah penjelasan singkatnya
                        </p>
                    </div>
                </a>
              </div>

            </div>
          </div>
          {{--  Ending of Service  --}}

          {{--  Begin of Contact  --}}
          <div class="section section-contact fp-auto-height-responsive no-slide-arrows " data-section="contact">

            <!-- begin of information slide -->
            <div class="slide" id="information" data-anchor="information">
              <!-- Begin of slide section wrapper -->
              <div class="section-wrapper">
                <!-- title -->
                <div class="section-title text-center">
                  <h5 class="title-bg">Contact</h5>
                </div>

                <div class="row">
                  <div class="col-12 col-md-6">
                    <!-- content -->
                    <div class="section-content anim text-left">
                      <!-- title and description -->
                      @foreach ($contacts as $contact)
                      <div class="title-desc">
                        <div class="anim-2">
                          <h5>Customer Service</h5>
                          <h2 class="display-4 display-title">Contact</h2>
                          <p>For questions about our company and products found on our stores.</p>
                        </div>
                        <div class="address-container anim-3">

                          <div class="row">
                            <div class="col-12 col-md-12 col-lg-6">
                              <h4>Contact</h4>
                              <p>Call: {{ $contact->nomor }} (Admin)</p>
                              <p>Email: {{ $contact->email }}</p>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                              <h4>Address</h4>
                              <p>
                                {{ $contact->alamat }}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach

                      <!-- Action button -->
                      <div class="btns-action anim-4">
                        <a class="btn btn-outline-white btn-round" href="#contact/message">
                          <span class="txt">Send Message</span>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-6">

                  </div>
                </div>
              </div>
              <!-- End of slide section wrapper -->
            </div>
            <!-- end of information slide -->

            <!-- begin of message slide -->
            <div class="slide" id="message" data-anchor="message">
              <!-- Begin of slide section wrapper -->
              <div class="section-wrapper">
                <div class="row justify-content-between">
                  <div class="col-12 col-md-6 center-vh">
                    <!-- content -->
                    <div class="section-content anim text-left">
                      <!-- title and description -->
                      <div class="title-desc">
                        <div>
                          <h5>Customer Service</h5>
                          <h2 class="display-4 display-title">Email Us</h2>
                          <p>For questions about our company and products found on our stores.
                            Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis
                            dui. Fusce in urna sem.</p>
                        </div>
                      </div>

                      <!-- Action button -->
                      <div class="btns-action">
                        <a class="btn btn-outline-white btn-round" href="#contact/information">
                          <span class="txt">Information</span>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-5">
                    <!-- content -->
                    <div class="section-content anim text-left">
                      <!-- title and description -->
                      <div class="">
                        <div class="form-container form-container-card">
                          <!-- Message form container -->
                          <form class="form" method="POST" action="{{ url('/message') }}">
                            <div class="form-group">
                              <label for="nama">Name :</label>
                              <input id="nama" name="nama" type="text" placeholder=""
                                class="form-control-line form-success-clean" required>
                            </div>
                            <div class="form-group">
                              <label for="email">Email :</label>
                              <input id="email" type="email" placeholder="" name="email"
                                class="form-control-line form-success-clean" required>
                            </div>
                            <div class="form-group no-border">
                              <label for="pesan">Message</label>
                              <textarea id="pesan" placeholder="..." name="pesan"
                                class="form-control form-control-outline thick form-success-clean" required></textarea>
                            </div>
                            @if (session()->has('pesan'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('pesan') }}
                            </div>
                            @endif
                            <button type="submit" class="btn btn-normal btn-white btn-round btn-full email_b" value="submit">Send</button>
                            @csrf
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of slide section wrapper -->
            </div>
            <!-- end of message slide -->

          </div>
          {{--  Ending of Contact  --}}

        </main>

        <footer id="site-footer" class="page-footer">
          <!-- Left content -->
          <div class="footer-left">
            <p>
              <img src="{{asset('/img/logo um.png')}}" style="width:60px" alt="">
            </p>
          </div>

          <!-- Right content -->
          <div class="footer-right">
            <ul class="social">
              <li>
                <a href="https://www.facebook.com/pui.dli/" target="_blank">
                  <i class="icon fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/pui_dli/" target="_blank">
                  <i class="icon fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </footer>

        <!-- scripts -->
        <!-- All Javascript plugins goes here -->
        <script src="{{asset('/js/vendor/jquery-1.12.4.min.js')}}"></script>

        <!-- All vendor scripts -->
        <script src="{{asset('/js/vendor/scrolloverflow.min.js')}}"></script>
        <script src="{{asset('/js/vendor/all.js')}}"></script>
        <script src="{{asset('/js/particlejs/particles.min.js')}}"></script>

        <!-- Countdown script -->
        <script src="{{asset('/js/jquery.downCount.js')}}"></script>

        <!-- Form script -->
        <script src="{{asset('/js/form_script.js')}}"></script>

        <!-- Javascript main files -->
        <script src="{{asset('/js/main.js')}}"></script>

        <script src="{{asset('/js/particlejs/particles-init.js')}}"></script>

        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      </body>
</html>

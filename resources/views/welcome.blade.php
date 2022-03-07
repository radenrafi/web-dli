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
        <!-- page-loader -->
        <div class="page-loader" id="page-loader">
          <div>
            <div class="icon ion-spin"></div>
            <p>loading</p>
          </div>
        </div>

        <!-- BEGIN OF site header Menu -->
        <header class="page-header navbar page-header-alpha scrolled-white menu-right topmenu-right">
          <!-- Begin of menu icon toggler -->
          <button class="navbar-toggler site-menu-icon" id="navMenuIcon">
            <!-- Available class : menu-icon-dot / menu-icon-thick /menu-icon-random -->
            <span class="menu-icon menu-icon-random">
              <span class="bars">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
              </span>
            </span>
          </button>
          <!-- End of menu icon toggler -->

          <!-- Begin of logo/brand -->
          <a class="navbar-brand" href="http://dli.um.ac.id/">
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
            <!-- Begin of hamburger mainmenu menu -->
            <nav class="navbar-mainmenu">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://dli.um.ac.id/">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://dli-eduventure.um.ac.id/" target="_blank">Eduventure</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://journal2.um.ac.id/index.php/jodli" target="_blank">JODLI</a>
                </li>
              </ul>
            </nav>
            <!-- End of hamburger mainmenu menu -->

            <!-- Begin of sidebar nav menu params class: text-only / icon-only-->
            <nav class="navbar-sidebar ">
              <ul class="navbar-nav" id="qmenu">
                <li class="nav-item" data-menuanchor="home">
                  <a href="#home">
                    <i class="icon ion-home"></i>
                    <span class="txt">Home</span>
                  </a>
                </li>
                <li class="nav-item" data-menuanchor="article">
                    <a href="#article">
                      <i class="icon ion-ios-book"></i>
                      <span class="txt">Article</span>
                    </a>
                </li>
                <li class="nav-item" data-menuanchor="about">
                  <a href="#about">
                    <i class="icon ion-information"></i>
                    <span class="txt">About</span>
                  </a>
                </li>
                <li class="nav-item" data-menuanchor="target_ae">
                  <a href="#target_ae">
                    <i class="icon ion-checkmark-circled"></i>
                    <span class="txt">Target</span>
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
                        <img src="{{asset('/img/all-logo.png')}}" alt="Logo All">
                      </div>
                    </div>
                  </div>
                  <!-- end of right content -->
                </div>
              </div>


              <!-- Arrows scroll down/up -->
              <footer class="section-footer scrolldown">
                <a class="down">
                  <span class="icon"></span>
                  <span class="txt">Scroll Down</span>
                </a>
              </footer>
            </div>
            <!-- End of section wrapper -->
          </div>

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
                    <div class="col-8 col-md-5 article-column">
                        <div class="card article-card h-100">
                            <img src="{{ asset("gambar-artikel/$artikel->gambar") }}" class="article-card-img" alt="...">
                            <div class="article-card-body">
                                <h5 class="article-card-title">{{ $artikel->judul }}</h5>
                                <p class="article-card-text">{!! $artikel->deskripsi !!}</p>
                                <a href="{{ url('/artikel/'.$artikel->id) }}" class="article-link">Read more..</a>
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse

                    {{--  button view all  --}}
                    <div class="col-8 col-md-2 article-button">
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

              <!-- Arrows scroll down/up -->
              <footer class="section-footer scrolldown">
                <a class="down">
                  <span class="icon"></span>
                  <span class="txt">Article</span>
                </a>
              </footer>
            </div>
            <!-- End of section wrapper -->
          </div>
          {{--  End of article  --}}


          <div class="section section-description fp-auto-height-responsive" data-section="about">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">About</h5>
                <h2 class="display-4 display-title anim-2">PUIPT DLI UM</h2>
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

              <!-- Arrows scroll down/up -->
              <footer class="section-footer scrolldown">
                <a class="down">
                  <span class="icon"></span>
                  <span class="txt">Target</span>
                </a>
              </footer>
            </div>
            <!-- End of section wrapper -->
          </div>

          <div class="section section-description fp-auto-height-responsive" data-section="target_ae">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">Target</h5>
                <h3 class="display-4 display-title anim-2">Academic Excellence</h3>
              </div>

              <!-- content -->
              <div class="section-content reduced anim text-center">
                <!-- title and description -->
                <div class="title-desc anim-3">
                  <p>
                    Pengembangan Riset Kolaborasi Internasional untuk mencapai publikasi Jurnal Q1/Q2 dan jurnal nasional
                    akreditasi Sinta 1 atau 2 serta jurnal bereputasi Internasional (Scopus)
                  </p>
                  <p>
                    Memperoleh hibah riset nasional dan internasional
                  </p>
                  <p>
                    Paten dan HKI (Nasional dan Internasional) dengan produk riset untuk hilirisasi pada dunia industri
                  </p>
                  <p>
                    Menjadi rujukan dan pembicara ahli di Internasional conference/symposium di bidang smart edukasi
                  </p>
                </div>

              </div>

              <!-- Arrows scroll down/up -->
              <footer class="section-footer scrolldown">
                <a class="down">
                  <span class="icon"></span>
                  <span class="txt">Target</span>
                </a>
              </footer>
            </div>
            <!-- End of section wrapper -->
          </div>

          <div class="section section-description fp-auto-height-responsive" data-section="target_pbd">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">Target</h5>
                <h3 class="display-4 display-title anim-2">Product Business Development</h3>
              </div>

              <!-- content -->
              <div class="section-content reduced anim text-center">
                <!-- title and description -->
                <div class="title-desc anim-3">
                  <p>Pengembangan produk bisnis hasil riset unggulan DLI skala industri edukasi (industri belajar)</p>
                  <p>Menjalankan pusat bisnis yang berorientasi pada penggunaan secara massif produk industri belajar untuk
                    menciptakan ekosistem pembelajaran cerdas</p>
                  <p>Menguatkan income genarting Center of Excellence DLI menuju sustainability industri belajar UM</p>
                  <p>Memiliki smart commerce berbasis digital online (One Stop Learning) dan mendapatkan investor penyokong
                    pusat bisnis industri belajar ini.</p>

                </div>

              </div>

              <!-- Arrows scroll down/up -->
              <footer class="section-footer scrolldown">
                <a class="down">
                  <span class="icon"></span>
                  <span class="txt">Research</span>
                </a>
              </footer>
            </div>
            <!-- End of section wrapper -->
          </div>

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
                  <div class="col-12 col-sm-6 col-md-3 center-vh anim-2">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">

                              <img class="img" src="{{asset('/img/riset1.png')}}" alt="Image">

                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Personalized Learning</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh anim-2">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">

                              <img class="img" src="{{asset('/img/riset2.png')}}" alt="Image">

                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Ubiquitous Learning</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh anim-2">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">

                              <img class="img" src="{{asset('/img/riset3.png')}}" alt="Image">

                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Gamified Learning</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

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
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="topic/olai.html" title="Pembelajaran Daring (Online Learning-based Artificial Intelligence)">
                              <img class="img" src="{{asset('/img/topics1.png')}}" alt="Image">
                            </a>
                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>OLAI</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="topic/cclp.html" title="Platform Komunikasi (Chat-based Collaboration Learning Platform)">
                              <img class="img" src="{{asset('/img/topics2.png')}}" alt="Image">
                            </a>
                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>CCLP</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="topic/cebd.html" title="Pembelajaran Adaptif (Competency-based Education with Big Data)">
                              <img class="img" src="{{asset('/img/topics3.png')}}" alt="Image">
                            </a>
                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>CEBD</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="topic/fmla.html"
                              title="Inovasi Media Pembelajaran Baru (Future Media Learning-based Interactive Mobile, AR/VR, and Smart Sensor)">
                              <img class="img" src="{{asset('/img/topics4.png')}}" alt="Image">
                            </a>
                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>FMLA</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of item -->
              </div>

              <!-- Arrows scroll down/up -->
              <footer class="section-footer scrolldown">
                <a class="down">
                  <span class="icon"></span>
                  <span class="txt">Roadmap</span>
                </a>
              </footer>
            </div>
            <!-- End of section wrapper -->
          </div>

          <div class="section section-twoside fp-auto-height-responsive " data-section="roadmap">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper twoside">

              <!-- title -->
              <div class="section-title text-center ">
                <h5 class="title-bg">Roadmap</h5>
                <div class="title-abs">
                  <h2 class="display-title">Roadmap Riset DLI 3 Tahun ke Depan</h2>
                  <h5>(2021 - 2023)</h5>
                </div>
              </div>

              <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
              <!-- begin of item -->
              <div class="item row justify-content-center">
                <div class="col-12">
                  <img src="{{asset('/img/roadmap.png')}}" class="img-fluid" alt="Gambar Roadmap DLI">
                </div>
              </div>
              <!-- end of item -->
              <div class="text-center">

                <a class="btn btn-transp-arrow btn-outline btn-sm btn-primary btn-round" href="./detail-roadmap.html">
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

          <div class="section section-description fp-auto-height-responsive " data-section="researcher">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">Researcher</h5>
                <h2 class="display-title anim-2 mb-5">Collaboration Researchers</h2>
              </div>

              <!-- content -->
              <div class="section-content anim text-center">
                <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
                <!-- begin of item -->
                <div class="item row justify-content-between mb-5">
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <img class="img" src="{{asset('/img/researchers/arakawa.png')}}" alt="Foto Yutaka Arakawa">

                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Yutaka Arakawa</h6>
                            <h6 class="small">(Kyushu University, Japan)</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <img class="img" src="{{asset('/img/researchers/mark.png')}}" alt="Foto Mark Wong">
                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Mark Wong</h6>
                            <h6 class="small">(FX Media, Singapore)</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <img class="img" src="{{asset('/img/researchers/roslan.png')}}" alt="Foto Roslan">

                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Roslan bin Saub</h6>
                            <h6 class="small">(University Malaya, Malaysia)</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of item -->


                <!-- begin of item -->
                <div class="item row justify-content-between mb-5">
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <img class="img" src="{{asset('/img/researchers/gavin.png')}}" alt="Foto Gavin Brown">

                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Gavin Brown</h6>
                            <h6 class="small">(Auckland University, New Zealand)</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <img class="img" src="{{asset('/img/researchers/hirashima.png')}}" alt="Foto Tsukasa Hirashima">

                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Tsukasa Hirashima</h6>
                            <h6 class="small">(Hiroshima University, Japan)</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <img class="img" src="{{asset('/img/researchers/mazhar.png')}}" alt="Foto Mazhar Javed Awan">
                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Mazhar Javed Awan</h6>
                            <h6 class="small">(Lahore University, Pakistan)</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of item -->

                <!-- begin of item -->
                <div class="item row justify-content-between">
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <img class="img" src="{{asset('/img/researchers/assad.png')}}" alt="Foto Assad">
                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Rasha Assad</h6>
                            <h6 class="small">(King AbdulAziz University, Arab Saudi)</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <img class="img" src="{{asset('/img/researchers/weishen.png')}}" alt="Foto Weishen Wu">
                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Weishen Wu</h6>
                            <h6 class="small">(Da-Yeh University, Taiwan)</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <img class="img" src="{{asset('/img/researchers/fadhili.png')}}" alt="Foto Fadhili Yahaya">

                          </div>
                          <div class="legend text-center pos-abs">
                            <h6>Fadhili Yahaya</h6>
                            <h6 class="small">(Mara Technology University, Malaysia)</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                </div>
                <!-- end of item -->
              </div>

            </div>
            <!-- End of section wrapper -->
          </div>

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

              <!-- Arrows scroll down/up -->
              <footer class="section-footer scrolldown">
                <a class="down">
                  <span class="icon"></span>
                  <span class="txt">Products</span>
                </a>
              </footer>
            </div>
            <!-- End of section wrapper -->
          </div>

          <div class="section section-description fp-auto-height-responsive " data-section="products">
            <!-- Begin of section wrapper -->
            <div class="section-wrapper center-vh dir-col anim">
              <!-- title -->
              <div class="section-title text-center">
                <h5 class="title-bg">Products</h5>
                <h2 class="display-title anim-2 mb-5">Produk Unggulan</h2>
              </div>

              <!-- content -->
              <div class="section-content anim text-center">
                <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->
                <!-- begin of item -->
                <div class="item row justify-content-between mb-3">
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="./product/umoocs.html" title="Smart Moocs">
                              <img class="img" src="{{asset('/img/products/umoocs.png')}}" alt="Logo Umoocs">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="./product/idbookstore.html" title="Idbookstore">
                              <img class="img" src="{{asset('/img/products/idbookstore.png')}}" alt="Logo Idbookstore">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="./product/koolinera.html" title="Koolinera">
                              <img class="img" src="{{asset('/img/products/koolinera.png')}}" alt="Logo Koolinera">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of item -->
                <!-- begin of item -->
                <div class="item row justify-content-between mb-3">
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="./product/craftivity.html" title="Craftivity Game">
                              <img class="img" src="{{asset('/img/products/craftivity.png')}}" alt="Logo Craftivity">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="./product/vistalks.html" title="Vistalks">
                              <img class="img" src="{{asset('/img/products/vistalks.png')}}" alt="Logo Vistalks">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="./product/muse_akademi.html" title="Muse Akademi">
                              <img class="img" src="{{asset('/img/products/muse.png')}}" alt="Logo Muse Akademi">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of item -->
                <!-- begin of item -->
                <div class="item row justify-content-between mb-3">
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="./product/labird.html" title="La Bird">
                              <img class="img" src="{{asset('/img/products/labird.png')}}" alt="Logo La Bird">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="./product/medisain.html" title="Medisain">
                              <img class="img" src="{{asset('/img/products/medisain.png')}}" alt="Logo Medisain">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- img-frame-normal demo -->
                  <div class="col-12 col-sm-6 col-md-3 center-vh">
                    <div class="section-content anim translateUp">
                      <div class="images text-center">
                        <div class="img-avatar-alpha">
                          <div class="img-1 shadow">
                            <a href="./product/sensitif.html" title="Sensitif">
                              <img class="img" src="{{asset('/img/products/sensitif.png')}}" alt="Logo Sensitif">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of item -->
              </div>


            </div>
            <!-- End of section wrapper -->
          </div>

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
                              <p>Call: 0812-3376-4606 (Admin)</p>
                              <p>Email: dli@um.ac.id</p>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                              <h4>Address</h4>
                              <p>
                                B15 Building
                                <br>5 Semarang Street, Malang
                                <br>East Java, Indonesia
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>

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
                          <form class="send_message_form message form" method="post" action="#!" id="message_form">
                            <div class="form-group name">
                              <label for="mes-name">Name :</label>
                              <input id="mes-name" name="name" type="text" placeholder=""
                                class="form-control-line form-success-clean" required>
                            </div>
                            <div class="form-group email">
                              <label for="mes-email">Email :</label>
                              <input id="mes-email" type="email" placeholder="" name="email"
                                class="form-control-line form-success-clean" required>
                            </div>
                            <div class="form-group no-border">
                              <label for="mes-text">Message</label>
                              <textarea id="mes-text" placeholder="..." name="message"
                                class="form-control form-control-outline thick form-success-clean" required></textarea>

                              <div>
                                <p class="message-ok invisible form-text-feedback form-success-visible">
                                  Your message has been sent, thank you.</p>
                              </div>
                            </div>

                            <div class="btns">
                              <button id="submit-message" class="btn btn-normal btn-white btn-round btn-full email_b"
                                name="submit_message">
                                <span class="txt">Send</span>
                                <span class="arrow-icon"></span>
                              </button>
                            </div>
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

        </main>

        <footer id="site-footer" class="page-footer">
          <!-- Left content -->
          <div class="footer-left">
            <p>
              <img src="{{asset('/img/logoum.png')}}" style="width:60px" alt="">
              <img src="{{asset('/img/logo-um copy.png')}}" style="width:60px" alt="">
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
      </body>
</html>

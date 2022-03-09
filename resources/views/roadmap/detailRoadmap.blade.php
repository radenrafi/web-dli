<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

  <title>PUIPT DLI (Disruptive Learning Innovation) - Universitas Negeri Malang</title>

  <link rel="stylesheet" href="{{asset('/fonts/overpass/stylesheet.css')}}">
  <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">

  <link rel="stylesheet" href="{{asset('/css/pageloader.css')}}">

  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/js/vendor/swiper.min.css')}}">
  <link rel="stylesheet" href="{{asset('/js/vendor/jquery.fullpage.min.css')}}">
  <link rel="stylesheet" href="{{asset('/js/vegas/vegas.min.css')}}">

  <link rel="stylesheet" href="{{asset('/css/main.css')}}">

  <link rel="stylesheet" href="{{asset('/css/style-default.css')}}">

  <script src="{{asset('/js/vendor/modernizr-2.7.1.min.js')}}"></script>
</head>

<body id="menu" class="body-item">
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
      <!-- Begin of hamburger mainmenu menu -->
      <nav class="navbar-mainmenu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home
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
            <a href="{{ url('/') }}">
              <i class="icon ion-home"></i>
              <span class="txt">Home</span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="about">
            <a href="{{ url('/#about') }}">
              <i class="icon ion-information"></i>
              <span class="txt">About</span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="contact">
            <a href="{{ url('/#contact') }}">
              <i class="icon ion-ios-telephone-outline"></i>
              <span class="txt">Contact</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End of sidebar nav menu -->
    </div>
  </header>

  <!-- BEGIN OF page main content -->
  @foreach ($roadmaps as $roadmap)
  <main class="page-main page-fullpage main-anim" id="itempage">

    <!-- Begin of list two side 1 section -->
    <div class="section section-twoside fp-auto-height-responsive section-item" data-section="item-alpha">
      <div class="section-cover-tier mask-black" style="background-image:url('{{asset('/img/bg.png')}}')">
        <div class="cover-content">
          <div class="title-desc">
            <h2 class="display-4 display-title">Roadmap</h2>
            <p>Roadmap Riset DLI 3 Tahun ke Depan ({{ $roadmap->tahun }})</p>
          </div>
        </div>
      </div>
      <!-- Begin of section wrapper -->
      <div class="section-wrapper largewidth">

        <!-- text or illustration order are manipulated via Bootstrap order-md-1, order-md-2 class -->


        <!-- begin of item -->
        <div class="item row">
          <!-- margi reservation -->
          <div class="col-12 col-md-4">
          </div>

          <!-- begin of text content -->
          <div class="col-12 col-md-8 center-vh">
            <!-- content -->
            <div class="section-content anim scrollable">

              <div class="row justify-content-center">
                <!-- img-frame-normal demo -->
                <div class="col-12">
                    {{--  gambar yang diganti --}}
                  <img src="{{asset('/gambar-roadmap/'.$roadmap->gambar)}}" class="img-fluid" alt="Gambar Roadmap">
                </div>
                <div class="col-12 mt-3">
                    {{--  isinya isi deskripsi --}}
                    {!! $roadmap->isi !!}
                </div>
              </div>


            </div>
          </div>
          <!-- end of text content -->
        </div>
        <!-- end of item -->

      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of list two side 1 section -->

  </main>
  @endforeach

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

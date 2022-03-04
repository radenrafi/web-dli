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
        <link rel="stylesheet" href="{{asset('/css/article.css')}}">
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
          </div>
        </header>


        <!-- BEGIN OF page main content -->
       <main>
           @yield('content')
       </main>

        {{--  <footer id="site-footer" class="page-footer">
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
        </footer>  --}}

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


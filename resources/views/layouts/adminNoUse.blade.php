<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

        <title>DLI-Admin</title>

        <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/js/vendor/swiper.min.css')}}">
        <link rel="stylesheet" href="{{asset('/js/vendor/jquery.fullpage.min.css')}}">
        <link rel="stylesheet" href="{{asset('/js/vegas/vegas.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    </head>


    <body id="menu" class="body-page">
        <!-- BEGIN OF site header Menu -->
        <header class="page-header navbar page-header-alpha scrolled-white menu-right topmenu-right">

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
        </header>

        <!-- BEGIN OF page main content -->
       <main>
           @yield('content')
       </main>



      </body>
</html>

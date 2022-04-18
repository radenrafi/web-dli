<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DLI Admin</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{--  begin navbar atas  --}}
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    DLI Admin
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        {{--  ending navbar atas  --}}
        <!-- BEGIN OF site header Menu -->


        <main class="py-4">
            <div class="row">
                <div class="col-md-2">
                    <header class="page-header navbar page-header-alpha menu-right topmenu-right">
                        <!-- Begin of sidebar nav menu params class: text-only / icon-only-->
                        <nav class="navbar-sidebar">
                            <ul class="navbar-nav" id="qmenu">

                                <!-- Split dropend button -->
                                <li class="nav-item" data-menuanchor="about">
                                    <div class="btn-group dropend">
                                        <button type="button" class="btn p-0">
                                            <i class="icon ion-information bg-dark"></i>
                                            <span class="txt">Profile</span>
                                        </button>
                                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split px-4" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden">Toggle Dropright</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ url('/admin/about') }}">Information</a></li>
                                            <li><a class="dropdown-item" href="#">Video</a></li>
                                            <li><a class="dropdown-item" href="#">Office</a></li>
                                            <li><a class="dropdown-item" href="{{ url('/admin/target') }}">Target</a></li>
                                        </ul>
                                    </div>
                                </li>

                                {{--
                                <li class="nav-item" data-menuanchor="about">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="true">
                                            <i class="icon ion-information bg-dark"></i>
                                            <span class="txt">Profile</span>
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{ url('/admin/about') }}">Information</a></li>
                                            <li><a class="dropdown-item" href="#">Video</a></li>
                                            <li><a class="dropdown-item" href="#">Office</a></li>
                                            <li><a class="dropdown-item" href="{{ url('/admin/target') }}">Target</a></li>
                                        </ul>
                                    </div>
                                </li>
                                --}}

                                <li class="nav-item" data-menuanchor="article">
                                    <a href="{{ url('/admin/artikel') }}">
                                    <i class="icon ion-ios-book bg-dark"></i>
                                    <span class="txt">Article</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-menuanchor="research">
                                <a href="{{ url('/admin/research') }}">
                                    <i class="icon ion-ios-analytics-outline bg-dark"></i>
                                    <span class="txt">Research</span>
                                </a>
                                </li>
                                <li class="nav-item" data-menuanchor="topResearch">
                                    <a href="{{ url('/admin/topResearch') }}">
                                        <i class="icon ion-ios-star-outline bg-dark"></i>
                                        <span class="txt">Top Research</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-menuanchor="colaboration">
                                    <a href="{{ url('/admin/colaboration') }}">
                                        <i class="icon ion-ios-people-outline bg-dark"></i>
                                        <span class="txt">Colaboration Research</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-menuanchor="roadmap">
                                    <a href="{{ url('/admin/roadmap') }}">
                                        <i class="icon ion-flag bg-dark"></i>
                                        <span class="txt">Roadmap</span>
                                    </a>
                                </li>
                                </li>
                                <li class="nav-item" data-menuanchor="products">
                                    <a href="{{ url('/admin/product')}}">
                                        <i class="icon ion-ios-lightbulb-outline bg-dark"></i>
                                        <span class="txt">Products</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-menuanchor="service">
                                    <a href="">
                                        <i class="icon ion-ios-paper-outline bg-dark"></i>
                                        <span class="txt">Service</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-menuanchor="contact">
                                <a href="{{ url('/admin/contact')}}">
                                    <i class="icon ion-ios-telephone-outline bg-dark"></i>
                                    <span class="txt">Contact</span>
                                </a>
                                </li>
                                <li class="nav-item" data-menuanchor="contact">
                                <a href="{{ url('/admin/message')}}">
                                    <i class="icon ion-ios-email-outline bg-dark"></i>
                                    <span class="txt">Message</span>
                                </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End of sidebar nav menu -->
                        {{--  </div>  --}}
                    </header>
                </div>
                <div class="col-md-9">
                    @yield('content',
                    'Hai Admin, Semangat kerja ya!'
                    )
                </div>
            </div>
        </main>
    </div>

    {{-- js ckeditor --}}
    <script src="{{asset('js/ckeditor/build/ckeditor.js')}}"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#isi' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

</body>

</html>

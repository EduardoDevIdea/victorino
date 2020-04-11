<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/385c7d7d19.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
    
</head>
<style>
    .item-menu {
        font-size: 15pt;
        color: #B06F1A;
        text-decoration: none;
        font-weight: 900;
    }
    .item-menu:hover {
        text-decoration: underline white;
    }
    .menu {
        border-top: 4px solid  #B06F1A;
    }
    #app {
        background-color: #002B53;
    }
    .botao-responsive {
        color: white;
    }
    .py-4 {
        background-color: #001426;    
    }
</style>
<body>
    <div id="app">
        <div class="menu">
            <nav class="navbar navbar-expand-md  mwnu" style="background-color: #002B53;">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                       <img src="{{asset('images/victoriano_azul.png')}}" width="230px" height="120px" alt="">
                    </a>
                    <button class="navbar-toggler botao-responsive" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <i class="fas fa-bars fa-2x"></i>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
    
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link item-menu" href="#Sobre">Sobre Nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link item-menu" href="#Especialidades">Especialidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link item-menu" href="#Profissionais">Profissionais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link item-menu" href="#Espaco">O Espaço</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link item-menu" href="#Blog">Blog</a>
                            </li>
                            @guest
                                @if (Route::has('register'))
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style=" font-size: 15pt" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <a class="dropdown-item" href="{{url('home')}}">Painel</a>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>
        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>

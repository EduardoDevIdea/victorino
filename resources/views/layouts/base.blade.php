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
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  
    
</head>
<style>
    .item-menu {
        font-size: 15pt;
        color: #B06F1A;
        text-decoration: none;
        font-weight: 900;
    }
    .item-menu:hover {
        color:white;
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
        background-color: #000B15;    
    }
    .banner {
    background-color:  #002B53;
    top: 15px;
    height: 50%;
    }
    .banner img {
        height: 500px;
    }
    .carrosel-inner img {
        width: 100%;
        height: 10px;
    }
    .hero1 {
    background-image: url('../../images/foto1.jpeg');
    }
    .hero2 {
        background-image: url('../../images/foto3.jpg');
    }
    .hero3 {
        background-image: url('../../images/foto2.jpg');
    }
    .paralax {
        background-attachment: fixed;
        height: 60%;
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 250px;
    }
    #sobre {
        height: 100%;
        background: linear-gradient(1turn, #173E62,#002B53, #000B15);
        /* background-color: #000B15; */
        padding: 120px;
    }
    #especialidade {
        height: 100%;
        background: linear-gradient(1turn, #FFFFFF,#A2B1C0, #173E62);
        padding: 120px;
    }
    #espaço {
        height: 100%;
        background: #002B53;
        padding: 120px;
    }
    #Profissionais {
        height: 100%;
        background: #000B15;
        padding: 120px;
    }
    .text_info {
        color: #B06F1A;
        text-justify: left;
    }
    .separator {
        height: 1px;
        width: 100%;
        background-color: #B06F1A;
    }
    .section_text {
        padding-bottom: 50px;
    }
    .section_text h2{
        color: white;
        text-align: center;
    }
    .texts {
        float: right;
        width: 50%;
    }

    .space_photo {
        width: 100%;
        height: 100%;
    }
    .description{
        color: white;
        font-weight: bold;
        font-size: 12pt;
        letter-spacing: 1px;
    }
    .photo {
        float: left;
        width: 50%;
        padding: 30px;
    }
    .row {
        height: 60%;
    }
    .especialidades {
        width: 100%;
        background-color: white;
    }
   
    .photo {
        float: left;
        width: 50%;
        padding: 30px;
    }
   
    .link_info {
        color: #002B53;
        font-size: 12pt;
        font-weight: bolder;

    }
    .carrousel {
        display: inline-flex;
        overflow-x: scroll;
        width: 100%;
        border-radius: 10px;
    }
    .carrousel::-webkit-scrollbar { width:5px; background:#e3e0d6; } 
    .carrousel::-webkit-scrollbar-track { background: #002B53; }
    .carrousel::-webkit-scrollbar-thumb { border-radius:10px; background:#B06F1A; width: 10px; } 

    .carrousel-image {
        background-color: #002B53;
        padding: 30px;
        height: auto;
    }
    .carroulsel-item-image {
        background-color: #B06F1A;
        padding: 5px;
        cursor: pointer;
    }
    .profissionais{
        display: inline-flex;
        overflow: hidden;
        width: 100%;
        border-radius: 10px;
    }
    .main-container {
        position: relative;
        width: 250px;
        height: 320px;
    }
    .card-profissional {
        display: inline-flex;
        position: absolute;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        transition: all 0.5s ease;
    }
    .card-profissional:hover {
        transform: rotateY(180deg);
    }
    .front {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        background: #B06F1A;
        color: #000B15;
        border-radius: 5px;
    }
    .back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        background: #F5F5F5;
        color: #000B15;
        transform: rotateY(180deg);
        border-radius: 5px;
    }
    .content-profissional {
        padding: 10px;
        text-transform: uppercase;
    }
    .carousel-profissionais {
        background-color: #000B15;
        padding: 50px;
    }
    


    @media screen and (max-width: 983px) {
        .texts {
            width: 100%;
            padding: 33px;
        }
        .photo { 
            width: 100%;
            height: 80%;
        }
    } 
    @media screen and (max-width: 572px) {
        .texts {
            width: 100%;
        }
        .photo { 
            width: 100%;
            height: 80%;
        }
    } 
    @media screen and (max-width: 409px) {
       
        .photo { 
            width: 100%;
            height: 0%;
        }
    } 
    @media screen and (max-width: 424px) {
       
       .photo { 
           width: 100%;
           height: 50%;
       }
   }
  
</style>
<body>
    <div class="banner">
        <div class="space-banner">
            <div id="banner-home">
                {{-- Inicio Banner --}}
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('images/foto1.jpeg')}}" height="30%" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/foto2.jpg')}}" height="30%" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/foto3.jpg')}}" height="30%" alt="Terceiro Slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                    </div>
                </div>
                {{-- Fim banner --}}
            </div>
        </div>
    </div>
      
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
    <div class="content-site">
        <section id="sobre">

            <div class="container">
                <div>
                    <div class="row">
                        <div class="texts">
                            <div class="space filosofia">
                                <h4 class="text_info">Filosofia</h4>
                                <hr class="separator">
                                <p class="description">{{$about[0]->filosofia}}</p>
                            </div>
                            <div class="space funcionamento">
                                <h4 class="text_info">Funcionamento</h4>
                                <hr class="separator">
                                <p class="description">{{$about[0]->funcionamento}}</p>
                            </div>
                        </div>
                        <div class="photo">
                            <div class="space_photo image_owner">
                                <img src="{{asset($about[0]->img)}}" alt="" width="100%" height="100%">
                                <p style="text-align: center; color: white">{{$about[0]->legenda}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="hero1 paralax"></div>

        <section id="especialidade">

            <div class="container">
                <div>
                    <div class="row">
                        <div class="texts">
                           <img src="{{asset('images/logo-removebg-preview.png')}}" alt="">
                        </div>
                        <div class="photo">
                            <h4 style="color: black; font-weight: bold; text-align: center;">Especialidades</h4>
                            <div class="card">
                                @foreach ($specialty as $especialidade)
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item" style="padding:10px">
                                    <p>
                                        <a class="link_info" data-toggle="collapse" href="#description-{{$especialidade->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            {{$especialidade->nome}}
                                        </a>
                                    </p>
                                      <div class="collapse" id="description-{{$especialidade->id}}">
                                        <div class="card card-body">
                                          {{$especialidade->description}}
                                        </div>
                                      </div>
                                  </li>
                                </ul>
                                @endforeach
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="espaço">

            <div class="container">
                <div>
                    <h2 style="text-align:letf; color: #B06F1A; letter-spacing: 2px; font-weight: bold">Espaço</h2>
                    <hr style="background-color: #B06F1A">
                    <div class="row">
                        <div class="carrousel">
                            <div class="carrousel-image">
                                <div class="carroulsel-item-image">
                                    <a type="button"  data-toggle="modal" data-target="#exampleModal">
                                        <img src="{{asset('images/foto1.jpeg')}}" alt="" width="300px">
                                    </a>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="{{asset('images/foto1.jpeg')}}" alt="" width="100%" height="100%">
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carrousel-image">
                                <div class="carroulsel-item-image">
                                    <a type="button"  data-toggle="modal" data-target="#exampleModal">
                                        <img src="{{asset('images/foto1.jpeg')}}" alt="" width="300px">
                                    </a>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="{{asset('images/foto1.jpeg')}}" alt="" width="100%" height="100%">
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carrousel-image">
                                <div class="carroulsel-item-image">
                                    <a type="button"  data-toggle="modal" data-target="#exampleModal">
                                        <img src="{{asset('images/foto1.jpeg')}}" alt="" width="300px">
                                    </a>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="{{asset('images/foto1.jpeg')}}" alt="" width="100%" height="100%">
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carrousel-image">
                                <div class="carroulsel-item-image">
                                    <a type="button"  data-toggle="modal" data-target="#exampleModal">
                                        <img src="{{asset('images/foto1.jpeg')}}" alt="" width="300px">
                                    </a>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="{{asset('images/foto1.jpeg')}}" alt="" width="100%" height="100%">
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="hero2 paralax"></div>

        <section id="Profissionais">

            <div class="container">
                <div>
                    <h2 style="text-align:letf; color: #B06F1A; letter-spacing: 2px; font-weight: bold">Profissionais</h2>
                    <hr style="background-color: #B06F1A">
                    <div class="row profissionais">
                        <div class="carousel-profissionais">
                            <div class="main-container">
                                <div class="card-profissional">
                                    <div class="front">
                                        <img src="{{asset('images/doutor.jpg')}}" alt="" height="100%" width="100%">
                                    </div>
                                    <div class="back">
                                        <div class="content-profissional">
                                            <h4> <strong>Dra. Testina da Silva</strong></h4>
                                            <h5>Secretaria</h5>
                                            <h5>CROSP 10541225</h5>
                                            <div class="descricao-profissional">
                                                <p>Esta é uma breve explicação do cargo e função do profissional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-profissionais">
                            <div class="main-container">
                                <div class="card-profissional">
                                    <div class="front">
                                        <img src="{{asset('images/doutor.jpg')}}" alt="" height="100%" width="100%">
                                    </div>
                                    <div class="back">
                                        <div class="content-profissional">
                                            <h4> <strong>Dra. Testina da Silva</strong></h4>
                                            <h5>Secretaria</h5>
                                            <h5>CROSP 10541225</h5>
                                            <div class="descricao-profissional">
                                                <p>Esta é uma breve explicação do cargo e função do profissional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-profissionais">
                            <div class="main-container">
                                <div class="card-profissional">
                                    <div class="front">
                                        <img src="{{asset('images/doutor.jpg')}}" alt="" height="100%" width="100%">
                                    </div>
                                    <div class="back">
                                        <div class="content-profissional">
                                            <h4> <strong>Dra. Testina da Silva</strong></h4>
                                            <h5>Secretaria</h5>
                                            <h5>CROSP 10541225</h5>
                                            <div class="descricao-profissional">
                                                <p>Esta é uma breve explicação do cargo e função do profissional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-profissionais">
                            <div class="main-container">
                                <div class="card-profissional">
                                    <div class="front">
                                        <img src="{{asset('images/doutor.jpg')}}" alt="" height="100%" width="100%">
                                    </div>
                                    <div class="back">
                                        <div class="content-profissional">
                                            <h4> <strong>Dra. Testina da Silva</strong></h4>
                                            <h5>Secretaria</h5>
                                            <h5>CROSP 10541225</h5>
                                            <div class="descricao-profissional">
                                                <p>Esta é uma breve explicação do cargo e função do profissional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-profissionais">
                            <div class="main-container">
                                <div class="card-profissional">
                                    <div class="front">
                                        <img src="{{asset('images/doutor.jpg')}}" alt="" height="100%" width="100%">
                                    </div>
                                    <div class="back">
                                        <div class="content-profissional">
                                            <h4> <strong>Dra. Testina da Silva</strong></h4>
                                            <h5>Secretaria</h5>
                                            <h5>CROSP 10541225</h5>
                                            <div class="descricao-profissional">
                                                <p>Esta é uma breve explicação do cargo e função do profissional</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="hero3 paralax"></div>

        <section id="espaço">

            <div class="container">
                <div>
                    <h2 style="text-align:center; color: #FFFFFF">Contatos</h2>
                    <div class="row">
                        <h1 style="color: white">formas de contato e localização da clinica</h1>
                    </div>
                </div>
            </div>
        </section>
        <section id="espaço">

            <div class="container">
                <div>
                    <h2 style="text-align:center; color: #FFFFFF">footer</h2>
                    <div class="row">
                        footer
                    </div>
                </div>
            </div>
        </section>

  </div>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>


</body>
</html>

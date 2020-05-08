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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/site.css')}}">
</head>
<style>
   
    .load {
        background: #231F20;
        z-index: 1;
        position: absolute;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .lost {
        display: none;
    }
    .spin {
        border: 8px solid transparent;
        border-left:8px solid orange;
        height: 60px;
        width: 60px;
        border-radius: 60px; 
        animation: spin 1s linear infinite;
    }
  

    @keyframes spin {
        to {
            transform :rotate(360deg)
        }
    }
</style>
<body>
    <div class="load" id="load">
        <div class="spin"></div>
    </div>
    <div class="site lost" id="site">
        <div id="banner" class="banner">
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
            <div class="menu" id="menu">
                <nav class="navbar navbar-expand-md  menu_nave" style="background-color: #231F20;">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                           <img src="{{asset('images/Screenshot_2.png')}}" width="400px" height="220px" alt="">
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
                                    <a class="nav-link item-menu" href="#sobre">Sobre Nós</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link item-menu" href="#especialidade">Especialidades</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link item-menu" href="#espaco">O Espaço</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link item-menu" href="#profissionais">Profissionais</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link item-menu" href="#contato">Fale Conosco</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link item-menu" href="#">Blog</a>
                                </li>
                                @guest
                                    @if (Route::has('register'))
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle  item-menu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item item-menu" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            <a class="dropdown-item item-menu" href="{{url('home')}}">Painel</a>
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
                            <div class="text_about col-sm-7 col-xs-12">
                                <h3 class="filosofia">Filosofia</h3>
                                <hr class="separator">
                                <div class="description">
                                    <p> {{$about[0]->filosofia}} </p>
                                </div>
                                
                                <h3 class="funcionamento">Funcionamento</h3>
                                <hr class="separator">
                                <div class="description">
                                    <p>{{$about[0]->funcionamento}}</p>
                                </div>
                            </div>
                            <div class="photo_owner col-sm-5 col-xs-12">
                                <img src="/storage/{{ $about[0]->img }}" alt="" width="100%" height="auto">
                                <p style="text-align:center; color:white">{{$about[0]->legenda}}</p>
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
                            <div class="texts col-sm-6 col-xs-12">
                                <div class="photo_line text-center">
                                    <img src="{{asset('images/Screenshot_4.png')}}" whidth="100%" height="auto" alt="">
                                </div>
                                <div class="line"></div>
                            </div>
                            <div class="photo col-sm-6  col-xs-12">
                                <h4 class="text-especialidade">Especialidades</h4>
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
            <section id="espaco">
                <div class="container">
                    <div>
                        <h2 style="text-align:letf; color: #B06F1A; letter-spacing: 2px; font-weight: bold">Espaço</h2>
                        <hr style="background-color: #B06F1A">
                        <div class="row">
                            <div class="out_carrousel">
                                <div class="carrousel">
                                    @foreach ($space as $space_item)
                                        <div class="carrousel-image">
                                            <div class="carroulsel-item-image">
                                                <a type="button"  data-toggle="modal" data-target="openPhotoModal-{{$space_item->id}}">
                                                    <img src="storage/{{ $space_item->path }} " alt="" width="300px">
                                                </a>
                                            </div>
                                            <div class="modal fade" id="openPhotoModal-{{$space_item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img  src="/storage/{{ $space_item->path }}" alt="" width="100%" height="100%">
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                 
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <div class="hero2 paralax"></div>
    
            <section id="profissionais">
    
                <div class="container">
                    <div>
                        <h2 class="text-left" style="color: #B06F1A; letter-spacing: 2px; font-weight: bold">Corpo Clínico</h2>
                        <hr style="background-color: #B06F1A">
                        <div class="row profissionais">
                            @foreach ($doctor as $profissional)
                                <div class="carousel-profissionais">
                                    <div class="main-container">
                                        <div class="card-profissional">
                                            <div class="front">
                                                @if (!$profissional->img)
                                                    <p class="no-image">Sem <br> Imagem <br> Cadastrada</p>
                                                @endif
                                                <img src="storage/{{$profissional->img}}" alt="" height="100%" width="100%">
                                            </div>
                                            <div class="back">
                                                <div class="content-profissional text-center">
                                                    <h4> <strong>{{$profissional->nome}}</strong></h4>
                                                    <h5>{{$profissional->cargo}}</h5>
                                                    <h5>CROSP {{$profissional->registro}}</h5>
                                                    <div class="descricao-profissional">
                                                        <p>{{$profissional->sobre}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            
            <div class="hero3 paralax"></div>
    
            <section id="contato">
    
                <div class="container">
                    <h3>Fale Conosco</h3>
                    <hr style="background: #050923">
                    <div class="row ">
                        <div class="col-sm-6">
                            <div class="contact">
                                <div class="row">
                                    <div class="col-12">
                                        <h5><strong class="font-size: 15pt">Telefone</strong></h5>
                                        <p> <i class="fab fa-whatsapp"></i>  {{$contact[0]->wpp}}</p>
                                        <p > <i class="fas fa-phone-alt"></i>  {{$contact[0]->telefone1}}</p>
                                        <p > <i class="fas fa-phone-alt"></i>  {{$contact[0]->telefone2}}</p>
                                        <h5><strong class="font-size: 15pt">E-mail</strong></h5>
                                        <p > <i class="far fa-envelope"></i>  {{$contact[0]->email}}</p>
                                        <h5><strong class="font-size: 15pt">Endereço</strong></h5>
                                        <p ><i class="fas fa-map-marker-alt"></i>  {{$contact[0]->endereco}}</p>
                                        <h5><strong class="font-size: 15pt">Mídias Sociais</strong></h5>
                                        <div class="midias">
                                            <a class="insta" style="" href="{{$contact[0]->instagram}}">
                                                <i class="fab fa-instagram fa-3x" style="color: white; "></i>
                                            </a>
                                            <a href="{{$contact[0]->twitter}}">
                                                <i class="fab fa-twitter fa-3x" style="color: #00acee"></i>
                                            </a>
                                           <a href="{{$contact[0]->facebook}}">
                                                <i class="fab fa-facebook-f fa-3x" style="color: blue"></i>
                                           </a>    
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d3889.7809383101317!2d-38.28593993517921!3d-12.857420790930849!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-12.8581632!2d-38.2828544!4m5!1s0x7163e51da0c34fb%3A0x4d0fe4d61f5d6691!2sresidencial%20vivendas%20do%20joanes!3m2!1d-12.8569756!2d-38.284717199999996!5e0!3m2!1spt-BR!2sbr!4v1587440076603!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </section>
            <section id="footer">
    
                <div class="container">
                    <div class="footer_information text-center">
                        <div class="row">
                            <div class="col-sm-6  col-xs-12 text-center">
                                <img src="{{asset('images/Screenshot_2.png')}}" alt="" width="80%">    
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <p>Menu</p>
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link item-menu" href="#sobre">Sobre Nós</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link item-menu" href="#especialidade">Especialidades</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link item-menu" href="#espaco">O Espaço</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link item-menu" href="#profissionais">Profissionais</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link item-menu" href="#contato">Contato</a>
                                    </li>
                                </div>    
                                <a class="nav-link item-menu" href="#banner"><i class="fas fa-arrow-up" style="color: white; cursor:pointer"></i></a>
                               
                        </div>
                    </div>
                    <hr style="background:white">
                    <div class="row">
                        
                        <div class="col-sm-6 col-xr-12">
                            <p style="color: white">© Copyright 2020 - <?php echo date('Y') ?> Victoriano Odontologia Especializada </p>
                        </div>
                        <div class="col-sm-6 col-xr-12 text-center">
                            <p style="color: white">Desenvolvido por </p>
                        </div>
                    </div>
                </div>
            </section>
      </div>
        
    </div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
      $(document).ready(function(){
        let scroll_link = $('.nav-link');
        scroll_link.click(function(e){
            e.preventDefault();
            let url = $('body').find($(this).attr('href')).offset().top;
            $('html, body').animate({
            scrollTop : url
            },700);
            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');
            return false;	
        });
    });

    window.onload = () => {
        const site = document.getElementById('site')
        const load = document.getElementById('load')

        site.classList.remove('lost')
        load.classList.add('lost')

        

    }




  </script>
</body>
</html>

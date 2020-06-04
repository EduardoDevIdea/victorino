<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <title>Victoriano - Odontologia Especializada</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{asset('images/favicon-.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/site.css')}}"> --}}
    
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <style>
    .-nav-link:hover {
      color: #B06F1A;
    }
    .sumir {
      display: none;
    }
    .carousel-wrap {
      margin: 90px auto;
      padding: 0 5%;
      width: 100%;
    }

/* fix blank or flashing items on carousel */
  .owl-carousel .item {
    position: relative;
    z-index: 100; 
    -webkit-backface-visibility: hidden; 
    padding: 50px;
  }

  /* end fix */
  .owl-nav > div {
    margin-top: -26px;
    position: absolute;
    top: 50%;
    color: #cdcbcd;
  }

  .owl-nav i {
    font-size: 52px;
  }

  .owl-nav .owl-prev {
    left: -50px;
    cursor: pointer;
  }

  .owl-nav .owl-next {
    right: -50px;
    cursor: pointer;
  }
   
  </style>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Carregando...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header" id="home">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel"> 
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a href="#home"><img class="brand-logo-light" src="{{asset('storage/'.$logo_inicio[0]->path)}}" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#sobre">Quem Somos</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#especialidades">Especialidades</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#espaco">Espaço</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#profissionais">Profissionais</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#blog">Blog</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#contato">Contatos</a>
                      </li>
                        @guest
                          
                        @else
                            <li class="rd-nav-item dropdown">
                                <a id="navbarDropdown" class="rd-nav-link dropdown-toggle" href="#"  style="color: white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ url('/home') }}">
                                      Voltar ao Painel
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section section-lg section-main-bunner section-main-bunner-filter text-center" >
        <div class="main-bunner-img" style="background-image: url('storage/{{$bg_img[0]->path}}'); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <h1 class="box-default-title">Bem Vindo</h1>
              <div class="box-default-decor"></div>
              <p class="big box-default-text">Victoriano Odontologia Especializada</p>
            </div>
          </div>
        </div>
      </section>
      <div class="bg-gray-1">
       
        <div id="sobre" style="padding: 80px 0 0 0">
          <section class="section section-lg section-inset-1 bg-gray-1 pt-lg-0">
            <div class="container">
              <div class="row row-50 justify-content-xl-between align-items-lg-center" style="padding: 30px; margin-top: 50px;">
                <div class="col-lg-6 wow fadeInLeft">
                  <div class="box-image"><img class="box-image-static" src="storage/{{$about[0]->img}}" alt="" width="580px" height="520px"/>
                    <h6 style="text-align: center; padding: 10px;">{{$about[0]->legenda}}</h6>
                  </div>
                </div>
                <div class="col-lg-6 col-xl-5 wow fadeInRight">
                  <h2>Quem Somos</h2>
                  <p>{!! $about[0]->sobre_clinica !!}</p>
                  <p>
                    <a class="btn btn-primary" id="mais" onclick="aparecer()" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Veja mais
                    </a>
                    <a class="btn btn-primary sumir" id="menos" onclick="sumir()" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      Veja menos
                    </a>
                  </p>
                  <div class="collapse" id="collapseExample">
                    <div class="card card-body" >
                      {!! $about[0]->informacao_geral !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
      <!-- Especialidades -->
      <div id="especialidades" style="padding: 80px 0 0 0; ">
        <section class="section section-lg bg-default">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-9 col-lg-7 wow-outer">
                <div class="wow slideInDown">
                  <h2>Especialidaes</h2>
                  <p class="text-opacity-0" style="color: black">Confira aqui nossos principais serviços prestados.</p>
                </div>
              </div>
            </div>
            <div class="row row-20 row-lg-30">
              @if (count($especialidade) == 0)
                  <h4 style="text-align: center; width: 100%;">Nenhuma especialidae encontrada</h4>
              @else
              @foreach ($especialidade as $item_especialidade)
              <div class="col-md-6 col-lg-4 wow-outer">
                <div class="wow fadeInUp">
                  <div class="product-featured">
                    <div class="product-featured-caption">
                      <div class="text" style="display: inline-flex">
                        <h4><a class="product-featured-title" href="#"></a></h4>
                        <p>
                          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1{{$item_especialidade->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                            {{$item_especialidade->nome}}
                          </a>
                        </p>
                      </div>
                      <div class="collapse" id="collapseExample1{{$item_especialidade->id}}">
                        <div class="card card-body" style="border: none; color: black">
                          {!! $item_especialidade->description !!}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                  @endforeach
                  </div>

              @endif
                </div>
        </section>

      </div>
      <hr>
      <div id="espaco" style="padding: 80px 0 0 0">
        <section class="section" >
          <div class="row justify-content-center text-center" style="margin-top: 80px;">
            <div class="col-md-9 col-lg-7 wow-outer">
              <div class="wow slideInDown">
                <h2>Espaço</h2>
                <p class="text-opacity-20" style="color:black">Ambiente preparado e controlado para te receber da melhor maneira possivel</p>
              </div>
            </div>
          </div>
          <div class="row isotope-wrap" >
            <!-- Espaço -->
            <div class="col-lg-12">
              <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group" data-lg-thumbnail="false">
                <div class="row no-gutters row-condensed">
                  @if (count($espaco) == 0)
                      <h4 style="text-align: center; width: 100%" >Nenhuma foto encontrada</h4>
                  @else
                  @foreach ($espaco as $item_space)
                    <div class="col-12 col-sm-6 col-md-4 isotope-item wow-outer" data-filter="*">
                      <div class="wow slideInDown">
                        <div class="gallery-item-classic"><img src="storage/{{$item_space->path}}" alt="" style="width: 100%; height: 300px; padding: 25px;"  />
                          <div class="gallery-item-classic-caption"><a href="storage/{{$item_space->path}}" data-lightgallery="item">zoom</a></div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                  @endif
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <hr>
      <div id="profissionais" style="padding:150px 0 0 0">
        <section class="section" >
          <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 wow-outer">
              <div class="wow slideInDown">
                <h3>Profissionais</h3>
                <p class="text-opacity-20" style="color:black">Sempre preparados para realizar o melhor atendimento possível!</p>
              </div>
            </div>
          </div>
          <div class="row isotope-wrap">
            <!-- Profissionais -->
            <div class="col-lg-12">
              <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group" data-lg-thumbnail="false">
                <div class="row no-gutters row-condensed">
                  @if (count($profi) == 0)
                      <h4 style="text-align: center; width: 100%">Nenhum Profissional encontrado</h4>
                  @else
                  @foreach ($profi as $item_profi)
                    <div class="col-12 col-md-4 isotope-item wow-outer" data-filter="Category 3" style="padding: 25px; text-align:center" >
                    <div class="wow slideInDown" style="max-width: 100%;">
                      <div class="gallery-item-classic"><img src="storage/{{$item_profi->img}}" style="width: 280px; height: 300px;"/>
                        <div class="gallery-item-classic-caption"><a href="storage/{{$item_profi->img}}" data-lightgallery="item">zoom</a></div>
                      </div>
                      <div class="post-corporate-text" style>
                        <div style="padding: 0 120px 0 120px; text-align: left">
                          <h4>{{$item_profi->nome}}</h4>
                          <p style="margin-top: 10px">{{$item_profi->cargo}} </p>
                          <p style="margin: 0">{{$item_profi->atividade}}</p>
                          <p style="margin: 0">Registro {{$item_profi->registro}}</p>
                        </div>
                        <div style="padding: 5px 120px 0 120px; text-align:justify">
                          <p>{!! $item_profi->sobre !!}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                    @endforeach
                  @endif
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div id="blog" style="padding: 80px 0 50px 0">
        <section class="section-lg bg-default">
          <div class="container wow-outer">
            <h2 class="text-center wow slideInDown">Blog</h2>
            <!-- Owl Carousel-->
            @if (count($post) == 0)
              <h4 style="text-align: center;width:100%; margin-top: 50px">Nenhuma publicação encontrada</h4>
            @else
            <div class="carousel-wrap">
            <div class="owl-carousel wow fadeInUp" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
              @foreach ($post as $item_post)
                <div class="post-corporate" style="padding: 0 50px 0 50px">
                  <a class="badge" href="#" style="margin-bottom: 6px">{{$item_post->created_at->format('d/m/Y')}}</a>
                  <img src="{{asset('storage/'.$item_post->img)}}" alt="" style="width: 250px; height:180px">
                  <h4 class="post-corporate-title"><a href="{{route('blog', ['id' =>  $item_post->id  ])}}">{{$item_post->titulo}}</a></h4>
                  <div class="post-corporate-text">
                    <p>{{$item_post->subtitulo}}</p>
                  </div><a class="post-corporate-link" href="{{route('blog', ['id' =>  $item_post->id  ])}}">Leia Mais<span class="icon linearicons-arrow-right"></span></a>
                </div>
              @endforeach
              @endif
            </div>
            </div>
            
          </div>
        </section>
  
      </div>
      <div id="contato" style="padding: 200px 0 0 0">
        <section class="section section-lg section-inset-1 bg-gray-1 pt-lg-0" >
          <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">
              <div class="col-lg-6 wow fadeInLeft">
                <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d3889.7809383101317!2d-38.28593993517921!3d-12.857420790930849!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-12.8581632!2d-38.2828544!4m5!1s0x7163e51da0c34fb%3A0x4d0fe4d61f5d6691!2sresidencial%20vivendas%20do%20joanes!3m2!1d-12.8569756!2d-38.284717199999996!5e0!3m2!1spt-BR!2sbr!4v1587440076603!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
              <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <h2>Fale Conosco</h2>
                <p>Entre em contato com a gente para agendar suas consultas</p>
                @if (count($contact) == 0)
                    <h4>Nenhuma forma de contato cadastrada</h4>
                @else
                @foreach ($contact as $item_contact)
                 <div class="card card-body" style="border: none;">
                   <h5>Telefones</h5>
                   {{$item_contact->telefone1}}
                   <br>
                   {{$item_contact->telefone2}}
                 </div> 
                 <div class="card card-body" style="border: none">
                   <h5>WhatsApp</h5>
                   {{$item_contact->wpp}}
                 </div>
                 <div class="card card-body" style="border: none">
                   <h5>Email</h5>
                   {{$item_contact->email}}
                 </div>
                 <div class="card card-body" style="border: none">
                   <h5>Endereço</h5>
                   {{$item_contact->endereco}}
                 </div>
                 <div class="card card-body" style="border: none">
                   <h5>Mídias sociais</h5>
                   <div class="col-12">
                     <ul class="social-list">
                       <li style="margin-top: 0"><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook"  target="__blank" href="{{$item_contact->facebook}}"></a></li>
                       <li  style="margin-top: 0"><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" target="__blank"href="{{$item_contact->instagram}}"></a></li>
                       <li style="margin-top: 0"><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter"  target="__blank" href="{{$item_contact->twitter}}"></a></li>
                     </ul>
                   </div>
                 </div>
                @endforeach
                @endif
              </div>
            </div>
          </div>
        </section>
      </div>
     
      <!-- Page Footer-->
      <footer class="section footer-minimal context-dark">
        <div class="container wow-outer">
          <div class="wow fadeIn">
            <div class="row row-60">
              <div class="col-12"><a href="index.html"><img src="images/logo-default1-140x57.png" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
              <div class="col-12">
                <ul class="footer-minimal-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Home</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#sobre">Sobre Nós</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#especialidades">Especialidades</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#espaco">Espaço</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#profissionais">Profissionais</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#blog">Blog</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#contato">Contato</a>
                  </li>
                </ul>
              </div>
              <div class="col-12">
                <ul class="social-list">
                  @foreach ($contact as $item)
                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" target="__blank" href="{{$item->facebook}}"></a></li>
                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" target="__blank" href="{{$item->instagram}}"></a></li>
                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" target="__blank" href="{{$item->twitter}}"></a></li>
                  @endforeach
                </ul>
              </div>
            </div>
            <p class="rights"><span>&copy;&nbsp; </span><span>&nbsp;</span><span>Victoriano</span><span>.&nbsp;</span><span>Todos os direitos reservados 2020 - <?php echo date('Y')?></span><span>&nbsp;</span><a href="#"></a>. Desenvolvido  &nbsp;por&nbsp;<a href="#">.</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{asset('js/core.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

    <script>
      const mais = document.getElementById('mais')
      const menos = document.getElementById('menos')

      function aparecer() {
        mais.classList.add('sumir')
        menos.classList.remove('sumir')
      }

      function sumir() {
        mais.classList.remove('sumir')
        menos.classList.add('sumir')
      }

        
        $('.owl-carousel').owlCarousel({
          margin: 10,
          nav: true,
          navText: [
            "<i class=''></i>",
            "<i class=''></i>"
          ],
          autoplay: true,
          autoplayHoverPause: true,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            1000: {
              items: 3
            }
          }
      })
    </script>
    
  </body>
</html>
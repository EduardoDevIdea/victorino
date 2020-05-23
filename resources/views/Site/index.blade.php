<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <title>Victoriano - Odontologia Especializada</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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
  </style>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
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
                  <div class="rd-navbar-brand"><a href="#home"><img class="brand-logo-light" src="{{asset('images/Screenshot_4-removebg-preview.png')}}" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#sobre">Sobre Nós</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#especialidades">Especialidades</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#espaco">Espaço</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#profissionais">Corpo Clinico</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#contato">Contato</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#blog">Blog</a>
                      </li>
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
       
        <section class="section section-lg section-inset-1 bg-gray-1 pt-lg-0" id="sobre">
          <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center" style="padding: 30px; margin-top: 50px;">
              <div class="col-lg-6 wow fadeInLeft">
                <div class="box-image"><img class="box-image-static" src="storage/{{$about[0]->img}}" alt="" width="483" height="327"/><img class="box-image-position" src="images/home-3-2-341x391.png" alt="" width="341" height="391" style="margin-top: 100px;"/>
                </div>
              </div>
              <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <h2>Sobre Nós</h2>
                <p>{!! $about[0]->legenda !!}</p>
                <p>
                  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Veja mais
                  </a>
                </p>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body" style="border: none">
                    <h4>Filosofia</h4>
                    {!! $about[0]->filosofia !!}
                  </div>
                  <div class="card card-body" style="border: none">
                    <h4>Funcionamento</h4>
                    {!! $about[0]->funcionamento !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Especialidades -->
      <section class="section section-lg bg-default" id="especialidades">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 wow-outer" style="margin-top: 80px;">
              <div class="wow slideInDown">
                <h2>Especialidaes</h2>
                <p class="text-opacity-80">Confira aqui nossos pricipais serviços prestados</p>
              </div>
            </div>
          </div>
          <div class="row row-20 row-lg-30">
            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow fadeInUp">
                <div class="product-featured">
                  @foreach ($especialidade as $item_especialidade)
                    <div class="product-featured-caption">
                      <h4><a class="product-featured-title" href="#">{{$item_especialidade->nome}}</a></h4>
                      <p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                          Leia Sobre
                        </a>
                      </p>
                      <div class="collapse" id="collapseExample1">
                        <div class="card card-body" style="border: none">
                          {!! $item_especialidade->description !!}
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
      <hr>
      <section class="section" id="espaco">
        <div class="row justify-content-center text-center" style="margin-top: 80px;">
          <div class="col-md-9 col-lg-7 wow-outer">
            <div class="wow slideInDown">
              <h2>Espaço</h2>
              <p class="text-opacity-80">Ambiente preparado e controlado para te receber da melhor maneira possivel</p>
            </div>
          </div>
        </div>
        <div class="row isotope-wrap" >
          <!-- Espaço -->
          <div class="col-lg-12">
            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group" data-lg-thumbnail="false">
              <div class="row no-gutters row-condensed">
                @foreach ($espaco as $item_space)
                  <div class="col-12 col-sm-6 col-md-4 isotope-item wow-outer" data-filter="*">
                    <div class="wow slideInDown">
                      <div class="gallery-item-classic"><img src="storage/{{$item_space->path}}" alt="" width="640" height="429"/>
                        <div class="gallery-item-classic-caption"><a href="storage/{{$item_space->path}}" data-lightgallery="item">zoom</a></div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <section class="section" id="profissionais">
        <div class="row justify-content-center text-center" style="margin-top: 80px;">
          <div class="col-md-9 col-lg-7 wow-outer">
            <div class="wow slideInDown">
              <h2>Corpo Clínico</h2>
              <p class="text-opacity-80">Sempre preparados para realizar o melhor atendimento possível!</p>
            </div>
          </div>
        </div>
        <div class="row isotope-wrap" >
          <!-- Profissionais -->
          <div class="col-lg-12">
            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group" data-lg-thumbnail="false">
              <div class="row no-gutters row-condensed">
                @foreach ($profi as $item_profi)
                  <div class="col-12 col-md-4 isotope-item wow-outer" data-filter="Category 3">
                  <div class="wow slideInDown">
                    <div class="gallery-item-classic"><img src="storage/{{$item_profi->img}}" alt="" width="640" height="429"/>
                      <div class="post-corporate-text" style="margin-left: 80px;">
                        <p>Nome: {{$item_profi->nome}}</p>
                        <p>Cargo: {{$item_profi->cargo}} </p>
                        <p>Atividade: {{$item_profi->atividade}}</p>
                        <p>Registro: {{$item_profi->registro}}</p>
                        <p>Sobre: {!! $item_profi->sobre !!}</p>
                      </div>
                      <div class="gallery-item-classic-caption"><a href="storage/{{$item_profi->img}}" data-lightgallery="item">zoom</a></div>
                    </div>
                  </div>
                </div>
                  @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg section-inset-1 bg-gray-1 pt-lg-0" id="contato">
        <div class="container">
          <div class="row row-50 justify-content-xl-between align-items-lg-center" style="margin-top: 50px;">
            <div class="col-lg-6 wow fadeInLeft">
              <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d3889.7809383101317!2d-38.28593993517921!3d-12.857420790930849!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-12.8581632!2d-38.2828544!4m5!1s0x7163e51da0c34fb%3A0x4d0fe4d61f5d6691!2sresidencial%20vivendas%20do%20joanes!3m2!1d-12.8569756!2d-38.284717199999996!5e0!3m2!1spt-BR!2sbr!4v1587440076603!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-6 col-xl-5 wow fadeInRight">
              <h2>Fale Conosco</h2>
              <p>Entre em contato com a gente para agendar suas consultas</p>
              <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#contact" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Formas de contato
                </a>
              </p>
              <div class="collapse" id="contact">
                <div class="card card-body" style="border: none">
                  <h4>Telefones</h4>
                  {{$contact[0]->telefone1}}
                  <br>
                  {{$contact[0]->telefone2}}
                </div>
                <div class="card card-body" style="border: none">
                  <h4>WhatsApp</h4>
                  {{$contact[0]->wpp}}
                </div>
                <div class="card card-body" style="border: none">
                  <h4>Email</h4>
                  {{$contact[0]->email}}
                </div>
                <div class="card card-body" style="border: none">
                  <h4>Endereço</h4>
                  {{$contact[0]->endereco}}
                </div>
                <div class="card card-body" style="border: none">
                  <h4>Mídias sociais</h4>
                  <div class="col-12">
                    <ul class="social-list">
                      <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" target="__blank" href="{{$contact[0]->facebook}}"></a></li>
                      <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" target="__blank"href="{{$contact[0]->instagram}}"></a></li>
                      <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter"target="__blank" href="{{$contact[0]->twitter}}"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-lg bg-default">
        <div class="container wow-outer" id="blog">
          <h2 class="text-center wow slideInDown">Artigos do Blog</h2>
          <!-- Owl Carousel-->
          <div class="owl-carousel wow fadeInUp" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
            @foreach ($post as $item_post)
              <div class="post-corporate"><a class="badge" href="#">{{$item_post->created_at->format('d/m/Y')}}</a>
                <h4 class="post-corporate-title"><a href="#">{{$item_post->titulo}}</a></h4>
                <div class="post-corporate-text">
                  <p>{{$item_post->subtitulo}}</p>
                </div><a class="post-corporate-link" href="{{route('blog', ['id' =>  $item_post->id  ])}}">Leia Mais<span class="icon linearicons-arrow-right"></span></a>
              </div>
            @endforeach
      
          </div>
        </div>
      </section>
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
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#profissionais">Corpo Clinico</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#contato">Contato</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#blog">Blog</a>
                  </li>
                </ul>
              </div>
              <div class="col-12">
                <ul class="social-list">
                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" target="__blank" href="{{$contact[0]->facebook}}"></a></li>
                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" target="__blank" href="{{$contact[0]->instagram}}"></a></li>
                    <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" target="__blank" href="{{$contact[0]->twitter}}"></a></li>
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
  </body>
</html>
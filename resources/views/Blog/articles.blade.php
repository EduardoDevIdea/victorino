<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <title>Victoriano - {{$article->titulo}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
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
      <header class="section page-header">
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
                  <div class="rd-navbar-brand"><a href="index.html"><img class="brand-logo-light" src="{{asset('images/Screenshot_4-removebg-preview.png')}}" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="footer-minimal-nav">
                        <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/#home')}}">Home</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/#sobre')}}">Sobre Nós</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/#especialidades')}}">Especialidades</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="{{url("/#espaco")}}">Espaço</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/#profissionais')}}">Corpo Clinico</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/#blog')}}">Blog</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/#contato')}}">Contato</a>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="section section-lg section-main-bunner section-main-bunner-filter text-center" >
        <div class="main-bunner-img" style="background-image: url('storage/{{$bg_img[0]->path}}'); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <h2 class="box-default-title">{{$article->titulo}}</h2>
              <div class="box-default-decor"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Base typography -->
      <section class="section section-lg bg-default" style="background-color: #e5e5e5">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse justify-content-xl-between">
            <div class="col-xl-4">
              <div class="block-bordered-left">
                <div class="row row-40">
                  <img src="storage/{{$about[0]->img}}" alt="">
                  
                </div>
              </div>
            </div>
            <div class="col-xl-7">
              <ul class="list-xxl heading-list">
                <hr>
                <li>
                  <h4>{{$article->subtitulo}}</h4>
                  <p>{!! $article->texto !!}</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
     
      <footer class="section footer-minimal context-dark">
        <div class="container wow-outer">
          <div class="wow fadeIn">
            <div class="row row-60">
              <div class="col-12"><a href="index.html"><img src="images/logo-default1-140x57.png" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
              <div class="col-12">
                <ul class="footer-minimal-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="{{url('/#home')}}">Home</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/#sobre')}}">Sobre Nós</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/#especialidades')}}">Especialidades</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{url("/#espaco")}}">Espaço</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/#profissionais')}}">Corpo Clinico</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/#blog')}}">Blog</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{url('/#contato')}}">Contato</a>
                  </li>
                </ul>
              </div>
              <div class="col-12">
                <ul class="social-list">
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li>
                </ul>
              </div>
            </div>
            <p class="rights"><span>&copy;&nbsp; </span><span>&nbsp;</span><span>Victoriano</span><span>.&nbsp;</span><span>Todos os direitos res
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{asset('js/core.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>
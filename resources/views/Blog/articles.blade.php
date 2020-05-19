<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Victoriano Odontologia Especializada</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/site.css')}}">
</head>
<style>
    .post {
        margin-top:130px;
        margin-bottom: 130px;
    }
    .post_iamge {
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }
    .post_title {
        text-align: center;
    }
</style>
<body>
    
    <div class="menu" id="menu">
        <nav class="navbar navbar-expand-md  menu_nave" style="background-color: #231F20;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('images/Screenshot_2.png')}}" width="200px" height="110px" alt="">
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
                            <a class="nav-link item-menu" href="">Sobre Nós</a>
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
                            <a class="nav-link item-menu" href="#Blog">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="post">
                <div class="post_image">
                    <img src="{{$article->id}}/storage/{{$article->img}}" />
                </div>
                <div class="post_title">
                    <h1>{{$article->titulo}}</h1>
                    <h4>{{$article->subtitulo}}</h4>

                </div>
                <div class="post_text">
                    <p>{!! $article->texto !!}</p>

                </div>
            </div>
        </div>
        <a href="{{url('/blog')}}" class="btn btn-info" style="margin-bottom: 80px; color: white">Voltar as postagens</a>
    </div>

    <section id="footer">
        <div class="container">
            <div class="footer_information text-center">
                <div class="row">
                    <div class="col-sm-6  col-xs-12 text-center">
                        <img src="{{asset('images/Screenshot_2.png')}}" alt="" width="80%">    
                    </div>
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
</body>
</html>

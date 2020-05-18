<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Victoriano - Odontologia Especializada</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/site.css')}}">
    <style>
        .post {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            justify-items: center
        }
        .post .card {
            margin: 25px;
            border: none;
        }
        .serch_post {
            float: right;
            height: 80px;
        }
        .pagination {
            margin-top: 1000px;
        }
        .menu {
            margin-bottom: 150px;
        }
        #footer {
            margin-top: 150px;
        }
    </style>
</head>
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
        <div class="serch_post">
            <input type="text" placeholder="Buscar Artigo">
            <img src="https://img.icons8.com/cotton/64/000000/detective.png"/>
        </div>
       <div class="row">
           <div class="col-6">
               @foreach ($posts as $blog_post)

                <div class="post">
                    <div class="card" style="width: 18rem; height:20rem">
                        <img class="card-img-top" src="storage/{{$blog_post->img}}" width="100%" height="150px">
                        <div class="card-body">
                            <h4 class="card-title" style="font-weight: bold">{{$blog_post->titulo}}</h4>
                            <p class="card-text">{{$blog_post->subtitulo}}</p>
                        </div>
                        <a href="{{url('')}}" class="btn btn-primary">Ler artigo</a>
                    </div>
                    </div> 
                </div>

               @endforeach
               {{ $posts->links() }}
       </div>
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
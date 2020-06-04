<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-.png')}}">
    <title>Victoriano - @yield('title') </title>
    <link href="{{asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
    
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>
<style>
    .sumir {
        display: none;
    }
    .logo_vic {
        position: absolute;
        top: 0;
        left: 15px;
        width: 210px;
        text-align: center;
    }
    @media (min-width: 576px) {
        .navbar-header {
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }
        .logo_vic {
            width: 150px;
            text-align: center;

        }
    }
</style>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <b class="logo-icon p-l-10">
                        <img id="icon" src="{{asset('images/logo_remove_white.png')}}" alt="homepage" class="light-logo sumir" width="50px;"/>
                    </b>
                    <span class="logo-text">
                        <a href="{{ url('/') }}">
                            <img id="extense_logo" src="{{asset('images/logo_nova.png')}}" alt="homepage" class="light-logo text-center logo_vic" />
                        </a>
                    </span>
                    {{-- <a class="navbar-brand" href="index.html">
                        <b class="logo-icon p-l-10">
                            
                        </b>
                    </a> --}}
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a id="menu_hamburger" class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" onclick="esconder_menu()" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a id="menu_arrow" class="nav-link sidebartoggler waves-effect waves-light sumir" href="javascript:void(0)" onclick="aparecer_menu()" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">Criar Novo <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if( Auth::user()->type == "master" ||  Auth::user()->type == "admin")
                                    <a class="dropdown-item" href="{{url('/user/create')}}">Usuario</a>
                                @endif
                                <a class="dropdown-item" href="{{url('/especialidade/create')}}">Especialidades</a>
                                <a class="dropdown-item" href="{{url('/profissional/create')}}">Profissionais</a>
                                <a class="dropdown-item" href="{{url('/post/create')}}">Publicação</a>
                               
                            </div>
                        </li>
                       
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle fa-2x"></i>
                                <small><strong>Meu Perfil</strong></small>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="{{ route('user.index') }}"><i class="fas fa-user-cog fa-lg mr-1"></i></i>Configurações</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="return confirm('Deseja realmente sair?');"><i class="fa fa-power-off m-r-5 m-l-5"></i> Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('home')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                        @if( Auth::user()->type == "master" ||  Auth::user()->type == "admin")
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('user.list') }}" aria-expanded="false">
                                    <i class="mdi mdi-account-multiple-plus"></i>
                                    <span class="hide-menu">Usuários</span>
                                </a>
                            </li>
                        @endif

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('sobre.index') }}" aria-expanded="false">
                                <i class="mdi mdi-border-color"></i>
                                <span class="hide-menu">Quem Somos</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('image.index') }}" aria-expanded="false">
                                <i class="mdi mdi-camera-enhance"></i>
                                <span class="hide-menu">Imagens</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('especialidade.index') }}" aria-expanded="false">
                            <i class="mdi mdi-check-circle size"></i>
                                <span class="hide-menu">Especialidades</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('profissional.index') }}" aria-expanded="false">
                                <i class="mdi mdi-account-box"></i>
                                <span class="hide-menu">Profissionais</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('photo.index') }}" aria-expanded="false">
                            <i class="mdi mdi-arrow-all"></i>
                                <span class="hide-menu">O espaço</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('post.index') }}" aria-expanded="false">
                            <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Blog</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('contact.index') }}" aria-expanded="false">
                            <i class="mdi mdi-relative-scale"></i>
                                <span class="hide-menu">Contatos</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                 @yield('content')
            </div>
            <footer class="footer text-center">
                Todos os direitos reservados Victoriano Odontologia Especializada  2020 - <?php echo date('Y')?>.
            </footer>
        </div>
    </div>

    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <script src="{{asset('dist/js/waves.js')}}"></script>
    <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('dist/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/chart/chart-page-init.js')}}"></script>
    <script src="{{asset('https://kit.fontawesome.com/829d5c5582.js')}}" crossorigin="anonymous"></script>

    <script>
        const icon = document.getElementById('icon')
        const extense = document.getElementById('extense_logo')
        const arrow = document.getElementById('menu_arrow')
        const hamburger = document.getElementById('menu_hamburger')

        function esconder_menu() {
            icon.classList.remove('sumir')
            extense.classList.add('sumir')
            arrow.classList.remove('sumir')
            hamburger.classList.add('sumir')
        }
        function aparecer_menu() {
            icon.classList.add('sumir')
            extense.classList.remove('sumir')
            arrow.classList.add('sumir')
            hamburger.classList.remove('sumir')
        }
    </script>

</body>

</html>
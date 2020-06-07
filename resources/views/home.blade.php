@extends('base_home')
@section('title', 'Dashboard')
@section('content')
    <style>
        .card_post{
            display: inline-flex;
            justify-content: flex-start;
            width: 49%;
            padding-right: 10px;
        } 
        .card_post .card {
            width: 100%;
        }
        .card_prof {
            display: inline-flex;
            justify-content: flex-end;
            width: 50%;
            padding-left: 10px;
        }
        .card_prof .card {
            width: 100%;
        }
        .comment-footer {
            display: inline-flex;
            justify-content: flex-start;
            align-items: center;
        }
        .comment-footer a {
            margin: 5px;
        }
        .button_publi {
            display: inline-flex;
            justify-content: flex-end;

        }
        .button_prof {
            display: inline-flex;
            justify-content: flex-end;
        }
        @media screen and (max-width: 768px) {
            .card_post{
            width: 100%;
            } 
            .card_prof {
            width: 100%;
            }
        }
        @media screen and (max-width: 576px) {
            .card_post{
            width: 100%;
            } 
            .card_prof {
            width: 100%;
            }

        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center" style="padding: 0 0 50px 0">
                <h2 class="page-title">Dashboard</h2>
            </div>
        </div>
    </div>

    <div class="row">
        @if( Auth::user()->type == "master" ||  Auth::user()->type == "admin")
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="{{url('/user/list')}}">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-account-multiple-plus"></i></h1>
                        <h6 class="text-white">Úsuarios</h6>
                    </div>
                </a>
            </div>
        </div>
        @endif
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <a href="{{url('/sobre')}}">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-border-color"></i></h1>
                        <h6 class="text-white">Quem Somos</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="{{url('image')}}">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-camera-enhance"></i></h1>
                        <h6 class="text-white">Imagens</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="{{url('/especialidade')}}">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-check-circle"></i></h1>
                        <h6 class="text-white">Especialidades</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="{{url('/profissional')}}">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-account-box"></i></h1>
                        <h6 class="text-white">Profissionais</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="{{url('/photo')}}">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                        <h6 class="text-white">O Espaço</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <a href="{{url('/post')}}">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                        <h6 class="text-white">Blog</h6>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <a href="{{url('/contact')}}">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                        <h6 class="text-white">Contato</h6>
                    </div>
                </a>
            </div>
        </div>
    
    </div>


        <div class="card_post">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ultimas publicações</h4>
                </div>
                @if (count($posts) == 0)
                    <div class="container">
                        <p>Nenhuma publicação encontrada</p>
                    </div>
                @else
                    @foreach ($posts as $item_post)
                        <div class="comment-widgets scrollable">
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2"><img src="storage/{{$item_post->img}}" alt="user" style="width: 100px; heigth: 100px;"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium"><strong>{{$item_post->titulo}}</strong></h6>
                                    <span class="m-b-15 d-block">{{$item_post->subtitulo}} </span>
                                    <span class="text-muted float-right">{{$item_post->created_at->format('M d , Y')}}</span> 
                                    <div class="comment-footer">
                                        <a type="button" class="btn btn-cyan btn-sm" href="{{ route('post.edit', ['post' => $item_post->id ]) }}" style="color:white">Editar</a>
                                        <a type="button" class="btn btn-danger btn-sm" onclick="del_publi({{$item_post->id}})" style="color: white">Deletar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="row button_publi" style="display: inline-flex;">
                    <div class="button">
                        <a href="{{url('/post')}}" class="btn btn-info">Mais publicações</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card_prof">
            <div class="card" style="height: 100%">
                <div class="card-body">
                    <h4 class="card-title">Profissionais</h4>
                </div>
                <div class="comment-widgets scrollable">
                    <!-- Comment Row -->
                    @if (count($profi) == 0)
                        <div class="container">
                            <p>Nenhum Profissional cadastrado</p>
                        </div>
                    @else
                        @foreach ($profi as $item_profi)
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2"><img src="storage/{{$item_profi->img}}" alt="user" style="width: 100px; heigth: 100px;"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium"><strong>{{$item_profi->nome}}</strong></h6>
                                    <span class="m-b-15 d-block">{!! $item_profi->sobre !!} </span>
                                    <div class="comment-footer" style="display: inline-flex">
                                        <a type="button" class="btn btn-cyan btn-sm" href="{{ route('profissional.edit', ['profissional' => $item_profi->id ]) }}">Editar</a>
                                        <a type="button" class="btn btn-danger btn-sm" onclick="del_profi({{$item_profi->id}})" style="color: white">Deletar</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                
                </div>
                <div class="row button_prof">
                    <div class="button">
                        <a href="{{url('/profissional')}}" class="btn btn-info">Todos os profissionais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        function del_profi(id) {
            Swal.fire({
                title: "Deletar Profissional ?!",
                text: "Você não poderá reverter essa ação!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Cancelar",
                confirmButtonText: "Deletar"
            }).then(async (result) => {
                if (result.value) {
                    var url = "{{ url('/profissional') }}"
                    var  response = await fetch(url + `/${id}/delete`)
                    window.location.reload()
                    
                }
            })
           
        }
    </script>

    <script>
       function del_publi(id) {
            Swal.fire({
                title: "Deletar publicação?!",
                text: "Você não poderá reverter essa ação!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Cancelar",
                confirmButtonText: "Deletar"
            }).then(async (result) => {
                if (result.value) {
                    var url = "{{ url('/post') }}"
                    var  response = await fetch(url + `/${id}/delete`)
                    window.location.reload()
                    
                }
            })
           
        }
</script>


@endsection
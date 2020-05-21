@extends('base_home')
@section('content')
<div class="row">

    <div class="col-md-6 col-lg-2 col-xlg-3">
        <div class="card card-hover">
            <a href="{{url('/user/list')}}">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-account-multiple-plus"></i></h1>
                    <h6 class="text-white">Usuarios</h6>
                </div>
            </a>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-4 col-xlg-3">
        <div class="card card-hover">
            <a href="{{url('/sobre')}}">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-border-color"></i></h1>
                    <h6 class="text-white">Sobre nós</h6>
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
            <a href="{{url('/profissionais')}}">
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



<div class="row">

    <div class="col-lg-6">
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ultimas postagens</h4>
            </div>
            @foreach ($posts as $item_post)
                
            @endforeach
            <div class="comment-widgets scrollable">
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="p-2"><img src="storage/{{$item_post->img}}" alt="user" width="50" class="rounded-circle"></div>
                    <div class="comment-text w-100">
                        <h6 class="font-medium">{{$item_post->titulo}}</h6>
                        <span class="m-b-15 d-block">{{$item_post->subtitulo}} </span>
                        <div class="comment-footer">
                            <span class="text-muted float-right">{{$item_post->created_at->format('M d , Y')}}</span> 
                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Profissionais</h4>
            </div>
            <div class="comment-widgets scrollable">
                <!-- Comment Row -->
                @foreach ($profi as $item_profi)
                    <div class="d-flex flex-row comment-row m-t-0">
                        <div class="p-2"><img src="storage/{{$item_profi->img}}" alt="user" width="50" class="rounded-circle"></div>
                        <div class="comment-text w-100">
                            <h6 class="font-medium">{{$item_profi->nome}}</h6>
                            <span class="m-b-15 d-block">{{$item_profi->sobre}} </span>
                            <div class="comment-footer">
                                <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                            </div>
                        </div>
                    </div>
                @endforeach
               
            </div>
        </div>
    </div>
</div>

</div>
@endsection
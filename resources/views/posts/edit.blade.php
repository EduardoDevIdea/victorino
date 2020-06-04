@extends('base_home')
@section('title', 'Editar Publicação')

@if(session('erroImg'))
    <script>
        window.alert("{{ session('erroImg') }}");
    </script>
@endif


@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block" style="padding: 0">
            <h2 class="page-title">Editar Publicação</h2>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/post')}}">Publicações</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Editar Publicação</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

    <div class="container mt-4">

        <form  action="{{ route('post.update', ['post' => $post->id ]) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $post->titulo }}">
            </div>

            <div class="form-group">
                <label for="subtitulo">Subtítulo</label>
                <input type="text" name="subtitulo" id="subtitulo" class="form-control" value="{{ $post->subtitulo }}">
            </div>

            <div class="mb-4">
                <img src="/storage/{{ $post->img }}" alt="" width="350px"><br><br>
                <p>
                    <a class="btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                     Alterar Foto
                    </a>
                    <br>
                    <small class="text-left"><strong>Dimensões ideais: 1920 largura x 1080 altura</strong></small>
                  </p>
                  <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <input type="file" name="img" id="img">
                    </div>
                  </div>
                
            </div>

            <div class="form-group">
                <label for="texto">Texto</label>
                <!-- Configuração de id e name para textarea de acordo com tutorial de instalação do Editor de texto (CKEditor) --> 
                <textarea class="form-control" id="texto" name="texto">{!! $post->texto !!} </textarea>
            </div>

            <input type="submit" value="Atualizar" class="btn btn-primary">
                             
        </form>

    </div>

    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'texto', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            uiColor: '#9AB8F3',
        });
    </script>


@endsection
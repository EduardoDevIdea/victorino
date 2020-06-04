@extends('base_home')
@section('title', 'Criar Publicação')

@if(session('erroImg'))
    <script>
        window.alert("{{ session('erroImg') }}");
    </script>
@endif


@section('content')
<style>
    .required_class {
        display: none;
    }
</style>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block" style="padding: 0">
            <h2 class="page-title">Nova publicação</h2>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/post')}}">Publicações</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nova Publicação</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


    <div class="container mt-4">

        <form action="{{ route('post.store') }}"  method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="subtitulo">Subtítulo</label>
                <input type="text" name="subtitulo" id="subtitulo" class="form-control">
            </div>

            <div class="mb-4">
                <label for="img">Imagem<small style="color: red;"> *Imagem principal</small></label> <br>
                <input type="file" name="img" id="img" required>
                <br>
                <small class="text-left"><strong>Dimensões ideais: 1920 largura x 1080 altura</strong></small>
            </div>

            <div class="form-group">
                <label for="texto">Texto</label>
                <!-- Configuração de id e name para textarea de acordo com tutorial de instalação do Editor de texto (CKEditor) --> 
                <span class="required_class" id="required" style= "color: red" >Preencha este campo.</span>
                <textarea class="form-control" id="texto" name="texto" required></textarea>
            </div>

            <input type="submit" value="Publicar" class="btn btn-primary">
                             
        </form>

    </div>

    <!-- Script para rodar o editor de texto CKEditor -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
         const span = document.getElementById('required')
        CKEDITOR.replace( 'texto', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            uiColor: '#9AB8F3',
        });
        $("form").submit( function(e) {
            var required_var = CKEDITOR.instances['texto'].getData().replace(/<[^>]*>/gi, '').length;
            if( !required_var ) {
                span.classList.remove('required_class')
                window.setInterval(function(){ required_text(); }, 3000);
                e.preventDefault();
            }
        });

        function required_text() {
            span.classList.add('required_class')
        }
    </script>

@endsection
@extends('home')


@if(session('erroImg'))
    <script>
        window.alert("{{ session('erroImg') }}");
    </script>
@endif


@section('content')

    <h2>Editar publicação</h2>

    <div class="container">

        <form action="{{ route('post.update', ['post' => $post->id ]) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row border border-dark">
            
                <div class="col border border-dark">

                    <div class="row mb-4">
                        <strong>Título</strong><input type="text" name="titulo" value="{{ $post->titulo }}"><br>
                    </div>

                    <div class="row mb-4">
                        <strong>Subtítulo</strong> <input type="text" name="subtitulo" value="{{ $post->subtitulo }}"><br>
                    </div>

                    <div class="row">
                        <strong>Texto</strong><br> <textarea name="texto" cols="30" rows="10">{{ $post->texto }}</textarea>
                    </div>

                </div>

                <div class="col">

                    <div class="row">
                        <img src="/storage/{{ $post->img }}" style="width: 300px; height: 150px;" >
                    </div>

                    <div class="col">
                        <strong>Alterar Imagem >>></strong> <input type="file" name="img">
                    </div>    

                </div>
            
            </div>

            <div class="row mt-4">
                <input type="submit" value="Atualizar"> <br>
                <button>
                    <a href="{{ route('post.destroy', ['post' => $post->id]) }}" onclick = "return confirm('Tem certeza que deseja excluir a publicação?');">
                        Excluir
                    </a>
                </button>
            </div>

        </form>

    </div>

@endsection
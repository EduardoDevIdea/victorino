@extends('home')


@if(session('erroImg'))
    <script>
        window.alert("{{ session('erroImg') }}");
    </script>
@endif


@section('content')

    <h1>Nova Publicação</h1>

    <div class="container">

        <form action="{{ route('post.store') }}"  method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row border border-dark">
            
                <div class="col border border-dark">

                    <div class="row mb-4">
                        <strong>Título</strong><input type="text" name="titulo"><br>
                    </div>

                    <div class="row mb-4">
                        <strong>Subtítulo</strong> <input type="text" name="subtitulo"><br>
                    </div>

                    <div class="row">
                        <strong>Texto</strong><br> <textarea name="texto" cols="30" rows="10"></textarea>
                    </div>

                </div>

                <div class="col">
                    <strong>Imagem >>></strong> <input type="file" name="img">
                </div>
            
            </div>

            <div class="row mt-4">
                <input type="submit" value="Publicar">
            </div>

        </form>

    </div>

@endsection
@extends('home')

@if(session('store'))
    <script>
        window.alert("{{ session('store') }}");
    </script>
@endif

@if(session('update'))
    <script>
        window.alert("{{ session('update') }}");
    </script>
@endif

@if(session('delete'))
    <script>
        window.alert("{{ session('delete') }}");
    </script>
@endif


@section('content')

    <h1>Blog</h1>

    <button><a href="{{ route('post.create') }}">Nova Publicação</a></button>

    @if($posts)
    
        @foreach($posts as $post)

            <div class="container">

                <hr>

                <div class="row">

                    <div class="col">
                        <img src="/storage/{{ $post->img }}" style="width: 200px; height: 125px;">
                    </div>

                    <div class="col">
                        <h3>{{ $post->titulo }}</h3>
                    </div>

                    <div class="col">
                        <button><a href="{{ route('post.edit', ['post' => $post->id ]) }}">Editar</a></button> <br>
                        <button>
                            <a href="{{ route('post.destroy', ['post' => $post->id]) }}" onclick = "return confirm('Tem certeza que deseja excluir a publicação?');">
                                Excluir
                            </a>
                        </button>
                    </div>

                </div>

            </div>

        @endforeach    

    @endif

@endsection
@extends('base_home')


@if(session('store'))
    <script>
        Swal.fire({
        icon: 'success',
        title: "Postagem publicada com sucesso",
        showConfirmButton: false,
        })
    </script>
@endif

@if(session('update'))
<script>
    Swal.fire({
    icon: 'success',
    title: "Postagem editada com sucesso",
    showConfirmButton: false,
    })
</script>
@endif

@if(session('delete'))
    <script>
        window.alert("{{ session('delete') }}");
    </script>
@endif


@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h2 class="page-title">Imagens</h2>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection
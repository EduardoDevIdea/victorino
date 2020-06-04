@extends('base_home')
@section('title', 'Blog')

@if(session('store'))
    <script>
        Swal.fire({
        icon: 'success',
        title: "Postagem publicada com sucesso",
        showConfirmButton: false,
        timer: 1500
        })
    </script>
@endif

@if(session('update'))
<script>
    Swal.fire({
    icon: 'success',
    title: "Postagem editada com sucesso",
    showConfirmButton: false,
    timer: 1500
    })
</script>
@endif

@if(session('delete'))
    <script>
        window.alert("{{ session('delete') }}");
    </script>
@endif


@section('content')
<style>
    .page-breadcrumb {
        padding: 0 0 50px 0;
    }
    .add_post {
        margin-bottom: 50px; 
    }
</style>

<div class="container">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block" style="padding: 0">
                <h1 class="page-title">Blog</h1>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <div class="no_post text-center" style="justify-content: center; align-itens:center">
        @if (count($posts) == 0)
            <h4>Nenhuma publicação disponível</h4>
        @endif
    </div>
    @if($posts)
    <div class="col-md-4" style="padding: 0">
        <a class="add_post btn btn-info" href="{{ route('post.create') }}">Nova Publicação</a>
    </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4">
                    <div class="card" style="width: 18rem; height: 25rem">
                        <img src="/storage/{{ $post->img }}" height="200px;">

                        <div class="card-body" style="overflow: hidden; overflow-y: scroll">
                            <h5 class="card-title"><h3>{{ $post->titulo }}</h3></h5>
                            <p class="card-text">{{$post->subtitulo}}</p>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <a class="btn btn-secondary" href="{{ route('post.edit', ['post' => $post->id ]) }}">Editar</a>
                            <a class="btn btn-danger"  onclick = "apagar({{$post->id}})" style="color:white">
                                Excluir
                            </a>
                        </div>
                </div>
            </div>
            @endforeach    
        </div>
    @endif
    {{ $posts->links() }}
   
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
       function apagar(id) {
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
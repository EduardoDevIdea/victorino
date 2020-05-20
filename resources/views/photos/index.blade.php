@extends('home')


@if(session('store'))
    <script>
        window.alert("{{ session('store') }}");
    </script>
@endif

@if(session('erroImg'))
    <script>
        window.alert("{{ session('erroImg') }}");
    </script>
@endif

@if(session('limite'))
    <script>
        window.alert("{{ session('limite') }}");
    </script>
@endif


@section('content')

    @include('photos.create') <!-- Modal para Adicinar foto -->

    <div class="container">

        <div class="row mb-5">
            <h1>Galeria de fotos</h1>
        </div>

        @if($qtd < 8) <!-- Se o limite de 8 fotos não foi atingido, exibe botão para adicionar foto -->

            <div class="row">
                <!-- BOTAO DISPARA MODAL --> <!-- Modal é o arquivo 'photos.create' -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                    Nova Foto
                </button>
                <!-- FIM BOTAO -->
            </div>

            Máximo: 8 <br>
            {{ $qtd }} fotos salvas, até o momento.

        @else
            <h3>Limite de 8 fotos atingido. Edite ou exclua para adicionar nova foto.</h3>
        @endif    

        <!-- Div Fotos-->
        <div class="container mt-4">
        
            <div class="row my-5">

                @foreach($photos as $photo)

                    <div class="col-3 ">

                        <div class="row">
                            <img src="/storage/{{ $photo->path }}" style="width: 230px; height: 150px;">
                        </div>

                        <div class="row mb-5 d-flex justify-content-center align-items-center">
                            <a href="{{ route('photo.edit', ['photo' => $photo->id ]) }}" class="btn btn-secondary btn-sm mr-3">
                                Editar
                            </a>    
                            <a href="{{ route('photo.destroy', ['photo' => $photo->id]) }}" onclick="return confirm('Tem certeza que deseja excluir a foto?');">
                                <i class="fas fa-trash-alt fa-lg" style="color: red;"></i>
                            </a>
                        </div>

                    </div>

                @endforeach
               
            </div>
        
        </div>
        <!-- Fim Div Fotos -->

    </div>

    

@endsection
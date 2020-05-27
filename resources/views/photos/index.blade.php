@extends('base_home')


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

    <!-- CARD -->
    <div class="card text-center">

        <!-- CARD HEADER-->
        <div class="card-header" style="font-size: 20px">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><strong>Galeria de fotos</strong></a>
                </li>
            </ul>
        </div>
        <!-- END CARD HEADER-->

        <!-- CARD BODY -->
        <div class="card-body m-2" style="font-size: 15px">

            @include('photos.create') <!-- Modal para adicinar foto -->

            <!-- VERIFICAÇÃO - se limite de 8 fotos foi atingido, não aparece botão para adicionar foto -->
                @if($qtd < 8) 

                    <div class="row">
                        <div class="col text-left">
                            <!-- BOTAO DISPARA MODAL --> <!-- Modal é o arquivo 'photos.create' -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                                Nova Foto
                            </button>
                            <!-- FIM BOTAO -->
                            <span class="ml-2">Máximo: 8.</span>
                        </div>
                    </div>

                @else
                <h3>Limite de 8 fotos atingido. Altere a foto ou exclua para adicionar nova.</h3>
                @endif    
            <!--END VERIFICAÇÃO -->

            <!-- Div Fotos-->
            <div class="container mt-4">
        
                <div class="row my-5">

                    @foreach($photos as $photo)

                        <div class="col-3 ">

                            <div class="row">
                                <img src="/storage/{{ $photo->path }}" style="width: 230px; height: 150px;">
                            </div>

                            <div class="row mb-5 d-flex justify-content-center align-items-center">

                                @include('photos.edit') <!-- Modal para alterar foto -->

                                <!-- BOTAO DISPARA MODAL --> <!-- Modal é o arquivo 'photos.create' -->
                                <a href="{{ route('photo.edit', ['photo' => $photo->id ]) }}"  data-toggle="modal" data-target="#update" class="btn btn-secondary btn-sm mr-3" title="Alterar foto">
                                    Alterar
                                </a>
                                <!-- FIM BOTAO -->
    
                                <a href="{{ route('photo.destroy', ['photo' => $photo->id]) }}" onclick="return confirm('Tem certeza que deseja excluir a foto?');" title="Excluir foto">
                                    <i class="fas fa-trash-alt fa-lg" style="color: red;"></i>
                                </a>
                            </div>

                        </div>

                    @endforeach
                
                </div>
    
            </div>
            <!-- Fim Div Fotos -->

        </div>
        <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->



@endsection



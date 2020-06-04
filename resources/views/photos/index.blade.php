@extends('base_home')

@section('title', 'O espaço')
@section('content')


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    @if(session('store'))
        <script>
            Swal.fire({
            icon: 'success',
            title: "{{ session('store') }}",
            showConfirmButton: false,
            timer: 1500
            })
        </script>
    @endif

    @if(session('update'))
        <script>
            Swal.fire({
            icon: 'success',
            title: "{{ session('update') }}",
            showConfirmButton: false,
            timer: 1500
            })
        </script>
    @endif

    @if(session('erroImg'))
        <script>
            Swal.fire({
            icon: 'danger',
            title: "{{ session('erroImg') }}",
            showConfirmButton: false,
            timer: 1500
            })
        </script>
    @endif


    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title">Espaço</h2>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Espaço</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
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
                @if($qtd < 9) 

                    <div class="row">
                        <div class="col text-left">
                            <!-- BOTAO DISPARA MODAL --> <!-- Modal é o arquivo 'photos.create' -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#create">
                                Nova Foto
                            </button>
                            <!-- FIM BOTAO -->
                            <span class="ml-2">Máximo: 9.</span>
                            <br>
                            <small class="text-left">Dimensões ideais: 1221 largura x 814 altura</small>
                        </div>
                    </div>

                @else
                <h3>Limite de 9 fotos atingido. Altere a foto ou exclua para adicionar nova.</h3>
                @endif    
            <!--END VERIFICAÇÃO -->

            <!-- Div Fotos-->
            <div class="container mt-4">
        
                <div class="row my-5">

                    @foreach($photos as $photo)

                        <div class="col-4">

                            <div class="row">
                                <img src="/storage/{{ $photo->path }}" style="width: 300px; height: 150px;">
                            </div>

                            <div class="row mb-5 d-flex justify-content-center align-items-center">

                                @include('photos.edit') <!-- Modal para alterar foto -->

                                <!-- BOTAO DISPARA MODAL --> <!-- Modal é o arquivo 'photos.create' -->
                                <a href="{{ route('photo.edit', ['photo' => $photo->id ]) }}"  data-toggle="modal" data-target="#update{{$photo->id}}" class="btn btn-secondary btn-sm mr-3" title="Alterar foto">
                                    Alterar
                                </a>
                                <!-- FIM BOTAO -->
    
                                <button class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Excluir">
                                    <a  onclick="apagar({{$photo->id}})" >
                                        <i class="fas fa-trash-alt" style="color: red"></i> <!-- icone -->
                                    </a>
                                </button>
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

    <!-- sweetalert script -->
    <script>
        function apagar(id) {
                Swal.fire({
                    title: "Deletar Imagem ?!",
                    text: "Você não poderá reverter essa ação!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Cancelar",
                    confirmButtonText: "Deletar"
                }).then(async (result) => {
                    if (result.value) {
                    var url = "{{ url('/photo') }}"
                        var  response = await fetch(url + `/${id}/delete`)
                        window.location.reload()
                        
                    }
                })
            
            }
    </script>
    <!-- End sweetalert script-->

@endsection



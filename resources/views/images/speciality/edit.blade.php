@extends('images.index')

@if(session('store'))
    <script>
        window.alert("{{ store('update') }}");
    </script>
@endif

@if(session('erroStore'))
    <script>
        window.alert("{{ erroStore('erroUpdate') }}");
    </script>
@endif

@if(session('update'))
    <script>
        window.alert("{{ session('update') }}");
    </script>
@endif

@if(session('erroUpdate'))
    <script>
        window.alert("{{ session('erroUpdate') }}");
    </script>
@endif

@section('form')

    <div class="container">

        <div class="row my-4">
            <h2><strong>Especialidade</strong></h2>
        </div>
        
        <form action="{{ route('image.update', ['image' => $image->id ]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="speciality" value="1">

            <div class="row my-4 ">

                <div class="col-6">
                    <img src="/storage/{{ $image->path }}" style="width: 450px; height: 200px"> <br><br>
                    <p><strong>Alterar >>></strong> <input type="file" name="img"></p>
                </div>

                <div class="col-6">
                    *A imagem selecionada aparecerá como plano de fundo na seção Especialidades do site.
                </div>

            </div>

            <div class="row my-3 w-50">
                <input type="submit" class="btn btn-success mx-auto" value="Atualizar" style="width: 50%;">
            </div>

        </form>
    </div>

@endsection
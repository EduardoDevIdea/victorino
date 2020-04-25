@extends('images.index')

@section('form')

    @if(session('erro'))
        <script>
            window.alert("{{ session('erro') }}");
        </script>
    @endif

    <div class="container">

        <div class="row my-4">
            <h2><strong>Especialidade</strong></h2>
        </div>
        
        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="speciality" value="1">

            <div class="row my-4 ">

                <div class="col-6">
                    <p><strong>Imagem</strong> <input type="file" name="img"></p>
                </div>

                <div class="col-6 border border-dark rounded">
                    *A imagem selecionada aparecerá como plano de fundo na seção Especialidades do site.
                </div>

            </div>

            <div class="row my-5 w-50">
                <input type="submit" class="btn btn-success mx-auto" value="Atualizar" style="width: 50%;">
            </div>

        </form>
    </div>

@endsection
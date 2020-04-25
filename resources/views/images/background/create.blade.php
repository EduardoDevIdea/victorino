@extends('images.index')

@if(session('erros'))
    <script>
        window.alert("{{ session('erros') }}");
    </script>
@endif

@section('form')

    <div class="container">

        <div class="row my-4">
            <h2><strong>Background</strong></h2>
        </div>
        
        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="background" value="1">

            <div class="row my-4 ">
                <div class="col-6">
                    <p><strong>Imagem 1</strong> <input type="file" name="bkg1"></p>
                
                    <p><strong>Imagem 2</strong> <input type="file" name="bkg2"></p>
                    
                    <p><strong>Imagem 3</strong> <input type="file" name="bkg3"></p>
                </div>
                <div class="col-6 border border-dark rounded">
                    *As imagens selecionadas serão exibidas como plano de fundo do site em suas respectivas posições
                    e aparecerão à medida que navegar verticalmente pelo site.
                </div>
            </div>
        

            <div class="row my-5 w-50">
                <input type="submit" class="btn btn-success mx-auto" value="Atualizar" style="width: 50%;">
            </div>
        </form>
        
    </div>

@endsection
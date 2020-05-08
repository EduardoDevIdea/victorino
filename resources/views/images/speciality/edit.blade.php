@extends('images.index')

@section('form')

    <div class="row my-4">
        <h2><strong>Especialidade</strong></h2>
    </div>

    <div class="card pt-3" style="width: 490px;">

        <img src="/storage/{{ $image->path }}" class="mx-auto" style="width: 450px; height: 200px;">
    
        <div class="card-header">
            <strong>Alterar Imagem da Seção Especialidade</strong>
        </div>

        <div class="card-body">
            <form action="{{ route('image.update', ['image' => $image->id ]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden"  name="speciality" value="1">
                
                <p class="card-text">
                    <input type="file" name="img" required>
                </p>

                <input type="submit" value="Salvar" class="btn btn-primary">
                
                <a href="#">Voltar</a>
            </form>
        </div>
    </div>

@endsection

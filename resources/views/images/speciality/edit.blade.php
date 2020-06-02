@extends('images.index')

@section('form')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h2 class="page-title">Imagens</h2>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item" aria-current="page">Imagens</li>
                        <li class="breadcrumb-item" aria-current="page">Especialidades</li>
                        <li class="breadcrumb-item active" aria-current="page">Editar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
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

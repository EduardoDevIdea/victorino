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
                        <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
    <div class="container">

        <div class="row my-5">
            <h2><strong>Especialidade</strong></h2>
        </div>
        
        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="speciality" value="1">

            <div class="row mt-5 ">

                <div class="col-6">
                    <p><strong>Imagem</strong> <input type="file" name="img"></p>
                </div>

                <div class="col-6 border border-dark rounded">
                    *A imagem selecionada aparecerá como plano de fundo na seção Especialidades do site.
                </div>

            </div>

            <div class="row mt-3 w-50">
                <input type="submit" class="btn btn-success mx-auto" value="Salvar" style="width: 30%;">
            </div>

        </form>
    </div>

@endsection
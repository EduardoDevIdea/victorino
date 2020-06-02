@extends('base_home')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h2 class="page-title">Especialidades</h2>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item " aria-current="page">Especialidades</li>
                        <li class="breadcrumb-item active" aria-current="page">Editar</li>
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
                    <a class="nav-link" href="{{ route('especialidade.index') }}" title="Listar especialiades">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('especialidade.create') }}"title="Cadastrar especialidade">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#" title="Editar especialidade">Editar</a>
                </li>     
            </ul>
        </div>
        <!-- END CARD HEADER-->

        <!-- CARD BODY -->
        <div class="card-body" style="font-size: 15px">

            <form action="{{ route('especialidade.update', ['especialidade' => $especialidade->id]) }}" method="POST">
                @csrf
                @method('PUT')
                    
                <h3 class="card-title"><strong>Editar Especialidade</strong></h3>
                
                <div class="form-group row mt-3">
                    <label for="nome" class="col-sm-3 text-right control-label col-form-label"><strong>Nome da especialidade</strong></label>
                    <div class="col-sm-9">
                        <input type="text" name="nome" value="{{ $especialidade->nome }}" class="form-control" id="fname" required autofocus>
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label"><strong>Descrição</strong></label>
                    <div class="col-sm-9">                                  
                        <textarea id="description" name="description" class="form-control" cols="70" rows="10">{{$especialidade->description}}</textarea>
                    </div>
                </div>

                <div class="border-top">
                    <div class="card-body">
                        <input type="submit" value="Salvar" class="btn btn-primary">
                    </div>
                </div>
                
            </form>

        </div>
        <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->

    <!-- CKEditor Scripts - Editor de texto-->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'description', {
            uiColor: '#9AB8F3',
        });
    </script>
    <!-- End CKEditor Scripts -->

@endsection

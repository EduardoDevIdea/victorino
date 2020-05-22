@extends('base_home')

@section('content')

   <!-- CARD -->
    <div class="card text-center">

        <!-- CARD HEADER-->
        <div class="card-header" style="font-size: 20px">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('especialidade.index') }}">Especialidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('especialidade.create') }}">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="far fa-edit"></i></a>
                </li>     
            </ul>
        </div>
        <!-- END CARD HEADER-->

        <!-- CARD BODY -->
        <div class="card-body m-4" style="font-size: 15px">

            <form action="{{ route('especialidade.update', ['especialidade' => $especialidade->id]) }}" method="POST">
                @csrf
                @method('PUT')
                    
                <h3 class="card-title"><strong>Editar Especialidade</strong></h3>
                
                <div class="form-group row mt-5">
                    <label for="nome" class="col-sm-3 text-right control-label col-form-label"><strong>Nome da especialidade</strong></label>
                    <div class="col-sm-9">
                        <input type="text" name="nome" value="{{ $especialidade->nome }}" class="form-control" id="fname" required autofocus>
                    </div>
                </div>
                    
                <div class="form-group row">
                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label"><strong>Descrição</strong></label>
                    <div class="col-sm-9">                                  
                        <textarea name="description" class="form-control" cols="70" rows="10">{{$especialidade->description}}</textarea>
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
@endsection

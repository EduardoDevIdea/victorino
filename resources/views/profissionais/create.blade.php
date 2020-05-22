@extends('base_home')

    @if(session('erroImg'))
      <script>
         window.alert("{{ session('erroImg') }}");
      </script>
   @endif

@section('content')

    <!-- CARD -->
    <div class="card text-center">

        <!-- CARD HEADER-->
        <div class="card-header" style="font-size: 20px">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profissional.index') }}">Profissionais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('profissional.create') }}">Cadastrar</a>
                </li>      
            </ul>
        </div>
        <!-- END CARD HEADER-->

        <!-- CARD BODY -->
        <div class="card-body m-4" style="font-size: 15px"> 
            
            <h3 class="mb-5"><strong>Cadastrar profissional</strong></h3>

            <form action="{{ route('profissional.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <!-- Coluna esquerda -->
                    <div class="col">

                        <div class="form-group row">
                            <label for="nome" class="col-sm-3 text-right control-label col-form-label">Nome</label>
                            <div class="col-sm-9">
                                <input type="text" name="nome" id="nome"  class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cargo" class="col-sm-3 text-right control-label col-form-label">Cargo</label>
                            <div class="col-sm-9">
                                <input type="text" name="cargo" id="cargo"  class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="atividade" class="col-sm-3 text-right control-label col-form-label">Atividade</label>
                            <div class="col-sm-9">
                                <input type="text" name="atividade" id="atividade"  class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="registro" class="col-sm-3 text-right control-label col-form-label">Registro</label>
                            <div class="col-sm-9">
                                <input type="text" name="registro" id="registro"  class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sobre" class="col-sm-3 text-right control-label col-form-label">Sobre</label>
                            <div class="col-sm-9">
                                <textarea name="sobre" id="sobre" class="form-control" cols="80" rows="10"></textarea>
                            </div>
                        </div>

                    </div>
                    <!-- Fim Coluna Esquerda -->

                    <!-- Coluna Direita -->
                    <div class="col ml-5">
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <p class="text-left"><strong>Foto do profissional</strong></p>
                                <input type="file" name="img" value="Escolher Imagem" required><br>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Coluna Direita -->
                </div>
                    
                    
                    <div class="form-group row">
                        <div class="col-sm-9">
                            <input type="submit" class="btn btn-success" value="Salvar">
                        </div>
                    </div>
                    
            </form>
                
        </div>
        <!-- END CARD BODY -->

    </div>
    <!-- END CARD -->

@endsection



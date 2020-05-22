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
                    <a class="nav-link active" href="{{ route('especialidade.create') }}">Cadastrar</a>
                </li>      
            </ul>
        </div>
        <!-- END CARD HEADER-->

        <!-- CARD BODY -->
        <div class="card-body" style="font-size: 15px">
        
            <form action="{{ route('especialidade.store') }}" method="POST" class="form-horizontal">
                @csrf
                    
                <div class="card-body">
                
                    <h3 class="card-title"><strong>Nova Especialidade</strong></h3>
                    
                    <div class="form-group row mt-3">
                        <label for="nome" class="col-sm-3 text-right control-label col-form-label">Nome da especialidade</label>
                        <div class="col-sm-9">
                            <input type="text" name="nome" value="{{ old('nome') }}" class="form-control" id="fname" required autofocus>
                            @error('nome')
                                <small class="form-text text-muted ml-1">
                                    <span style="color:red;">
                                        {{ $message }}
                                    </span>
                                </small>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Descrição</label>
                        <div class="col-sm-9">                                  
                            <textarea  id="description" name="description" class="form-control"></textarea>
                            @error('description')
                                <small class="form-text text-muted ml-1">
                                    <span style="color:red;">
                                        {{ $message }}
                                    </span>
                                </small>
                            @enderror
                        </div>
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

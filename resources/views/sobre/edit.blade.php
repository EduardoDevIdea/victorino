@extends('base_home')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        @if(session('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Dados atualizados com sucesso',
                showConfirmButton: false,
            })
        </script>
    @endif      

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title">Sobre Nós</h2>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Sobre</li>
                            <li class="breadcrumb-item active" aria-current="page">Editar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    <div class="card">
        <div class="card-body wizard-content">
            <form id="example-form" action="{{ route('sobre.update', ['sobre' => $sobre->id]) }}" method="POST" enctype="multipart/form-data" class="m-t-40">
                @csrf
                @method('PUT')

                <div>
                    <section>
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                              Informações de texto
                            </a>
                        </p>
                      
                        <div class="row">
                            <div class="col-6">
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <label for="legenda"><strong>Sobre a clinica</strong></label>
                                        <textarea  id="legenda" name="legenda" class="required form-control mb-4"  value="">{{ $sobre->legenda }}</textarea>
                                        
                                        <label for="Filosofia"><strong>Filosofia *</strong></label>
                                        <textarea id="Filosofia" name="filosofia" class="required form-control mb-4" cols="80" rows="5">{{ $sobre->filosofia }}</textarea>
                                        
                                        <label for="funcionamento"><strong>Funcionamento *</strong></label>
                                        <textarea id="funcionamento" name="funcionamento" class="required form-control mb-4" cols="80" rows="5">{{ $sobre->funcionamento }}</textarea>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-6">
                                <img src="storage/{{ $sobre->img }}" style="width: 400px; height:400px"> <br>
                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                      Alterar Imagem
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample1">
                                    <input id="imagem" type="file" name="img" class="required">
                                </div>
                                
                            </div>
                        </div>
                        
                        
                         
                        
                        <p><input type="submit" value="Atualizar" class="btn btn-primary"></p>

                    </section>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'funcionamento', {
            uiColor: '#9AB8F3',
        });
        CKEDITOR.replace( 'filosofia', {
            uiColor: '#9AB8F3',
        });
        CKEDITOR.replace( 'legenda', {
            uiColor: '#9AB8F3',
        });
    </script>
@endsection

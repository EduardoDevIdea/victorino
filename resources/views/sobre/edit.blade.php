@extends('base_home')
@section('title', 'Quem Somos')
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
                <h2 class="page-title">Quem Somos</h2>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Quem Somos</li>
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
                      
                        <div class="row">
                            <div class="col-6">
                                    <div class="card card-body">
                                        
                                        <label for="sobre_clinica" style="font-size: 20px;">Sobre a clínica</label>
                                        <textarea id="sobre_clinica" name="sobre_clinica" class="required form-control mb-4" cols="80" rows="5">{{ $sobre->sobre_clinica }}</textarea>
                                        
                                        <label for="informacao_geral" class="mt-3" style="font-size: 20px;">Informações Gerais</label>
                                        <textarea id="informacao_geral" name="informacao_geral" class="required form-control mb-4" cols="80" rows="5">{{ $sobre->informacao_geral }}</textarea>
                                        
                                    </div>
                            </div>
                            <div class="col-6">
                                <img src="storage/{{ $sobre->img }}" class="mt-5" style="width: 400px; height:400px"> <br>
                                <label for="legenda" class="mt-3" style="font-size: 20px;">Legenda</label>
                                <input  id="legenda" name="legenda" class="required form-control mb-4" style="border: 1px solid;" value="{{ $sobre->legenda }}">
                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                      Alterar Imagem
                                    </a> <br>
                                    <small>Dimensões ideais: 225 largura x 225 altura</small>
                                </p>
                                <div class="collapse" id="collapseExample1">
                                    <input id="imagem" type="file" name="img" class="required">
                                </div>
                                
                            </div>
                        </div>
                        
                        <p class="ml-3"><input type="submit" value="Atualizar" class="btn btn-primary btn-lg"></p>

                    </section>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'informacao_geral', {
            uiColor: '#9AB8F3',
        });
        CKEDITOR.replace( 'sobre_clinica', {
            uiColor: '#9AB8F3',
        });
    </script>
@endsection


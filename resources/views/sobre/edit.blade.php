@extends('base_home')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        @if(session('update'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Dados atualizados com sucesso',
                showConfirmButton: false,
                timer: 2500,
                timerProgressBar: true,
                onBeforeOpen: () => {
                    Swal.showLoading()
                }
            })
        </script>
    @endif      

    <div class="card">
        <div class="card-body wizard-content">

            <strong><h3 class="card-title">Sobre nós</h3></strong>
            
            <h6 class="card-subtitle"></h6>

            <form id="example-form" action="{{ route('sobre.update', ['sobre' => $sobre->id]) }}" method="POST" enctype="multipart/form-data" class="m-t-40">
                @csrf
                @method('PUT')

                <div>
                    <section>
                
                        <label for="Filosofia"><strong>Filosofia *</strong></label>
                        <textarea id="Filosofia" name="filosofia" class="required form-control mb-4" cols="80" rows="5">{{ $sobre->filosofia }}</textarea>
                        
                        <label for="funcionamento"><strong>Funcionamento *</strong></label>
                        <textarea id="funcionamento" name="funcionamento" class="required form-control mb-4" cols="80" rows="5">{{ $sobre->funcionamento }}</textarea>
                        
                        <label for="confirm">Imagem atual</label>
                        <img src="storage/{{ $sobre->img }}" style="width: 200px; height:200px"> <br>
                        <br><input id="imagem" type="file" name="img" class="required">
                        <p><small style="color: red;">Altera a imagem que irá acompanhar o texto</small></p>
                         
                        <label for="legenda"><strong>Legenda da imagem *</strong></label>
                        <input  id="legenda" type="text" name="legenda" class="required" value="{{ $sobre->legenda }}">
                        
                        <p><input type="submit" value="Atualizar" class="btn btn-primary"></p>

                    </section>
                </div>
            </form>
        </div>
    </div>

@endsection

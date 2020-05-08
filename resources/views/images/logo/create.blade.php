@extends('images.index')


@section('form')

    @if(blank($image))
        <h4>Ainda não existe logomarca cadastrada.</h4>
        <h4>Adicione uma logomarca clicando no botão abaixo.</h4>
    @endif

    <!-- Botão dispara Modal -->
    <button type="button" class="btn btn-secondary mt-3 mb-4" data-toggle="modal" data-target="#create" style="width: 30%;">
        Adicionar Logo
    </button>
    <!-- Fim Botão dispara Modal -->

    <!-- MODAL Adiciona Foto -->
    <div class="modal fade" id="create" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Adicionar logo</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                </div>

                <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="logo" value="1">

                    <div class="modal-body">
                        <input type="file" name="img" required>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Salvar">
                        <button type="button"class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- FIM MODAL -->
@endsection
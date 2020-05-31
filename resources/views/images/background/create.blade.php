@extends('images.index')


@section('form')


    <div class="container text-center">

        <h5>Adicione uma imagem de background para o site</h5>

        <!-- Botão dispara Modal -->
        <button type="button" class="btn btn-secondary mt-3 mb-4" data-toggle="modal" data-target="#create" style="width: 30%;">
            Adicionar Background
        </button>
        <br>
        <small><strong>Dê preferência a uma imagem que combine com o site</strong></small>
        <!-- Fim Botão dispara Modal -->

    </div>

    <!-- MODAL Adiciona Foto -->
    <div class="modal fade" id="create" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Adicionar Background</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                </div>

                <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="background" value="1">

                    <div class="modal-body">
                        <input type="file" name="bkg1" required>
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
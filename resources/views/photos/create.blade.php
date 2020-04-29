
<!-- Arquivo é adicionado quando botão "Nova foto" é acionado na view "photos.index" -->

<!-- MODAL Adiciona Foto -->
<div class="modal fade" id="create" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Adicionar Foto</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                </div>

                <form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                            <input type="file" name="img">
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
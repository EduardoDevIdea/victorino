
<!-- Arquivo é adicionado quando botão "Alterar" é acionado na view "photos.index" -->

<!-- MODAL Atualiza Foto -->
<div class="modal fade" id="update" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Alterar foto</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>x</span>
                    </button>
                </div>

                <form action="{{ route('photo.update', ['photo' => $photo->id ]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                            <input type="file" name="img" required>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Atualizar">
                        <button type="button"class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- FIM MODAL -->
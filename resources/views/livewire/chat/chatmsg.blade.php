@include('layouts.theme.styles3')

<div wire:ignore.self class="modal fade whatsapp-modal" id="theModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- Contenido del modal -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="form-group">
                            <label>Mensaje</label>
                            <textarea rows="6" wire:model.lazy="nombre" class="form-control" placeholder="ej: Requerimiento de personal"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="CreatePermission()" class="btn btn-dark">
                    <i class="bi bi-send-check-fill"></i> Enviar
                </button>
            </div>
        </div>
    </div>
</div>


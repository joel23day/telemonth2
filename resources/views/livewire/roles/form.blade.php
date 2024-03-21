<div wire:ignore.self class="modal fade" id="theModal" tabindex="-1"
   role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-dark">
          <h5 class="modal-title text-white">
            <b>{{$componentName}}</b> | {{$selected_id > 0 ? 'EDITAR' : 'CREAR'}}
          </h5>
            <h6 class="text-center text-warning" wire:loading>POR FAVOR ESPERE</h6>
        </div>
        <div class="modal-body">

            <div class="row">
                <div class="col-sm-12">
                    <div class="input-group">
                        <div class="input group-preprend">
                            <span class="input-group-text">
                                <span class="bi bi-pen-fill">

                                </span>
                            </span>
                        </div>
                        <input type="text" wire:model.lazy="roleName" class="form-control" placeholder="Ej: Admin"
                        maxlength="255">
                    </div>
                    @error('roleName') <span class="text-danger er">{{$message}}</span> @enderror
                </div>

                <div class="col-sm-6 mt-3">
                    <div class="form-group custom-file">
                        <input type="file" class="custom-file-input form-control" wire:model="image" accept="image/
                        x-png, image/gif, image/jpeg">
                        <label class="custon-file-label"> {{$image}}</label>
                        @error('image') <span class="text-danger er">{{$message}}</span> @enderror
                    </div>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button type="button" wire:click.prevent="resetUI()" class="btn btn-dark close-btn text-info" data-dismiss="modal">CERRAR</button>

            @if($selected_id <1)
            <button type="button" wire:click.prevent="CreateRole()" class="btn btn-dark close-modal">
              GUARDAR</button>
              @else
              <button type="button" wire:click.prevent="UpdateRole()" class="btn btn-dark close-modal">
                  ACTUALIZAR</button>
              @endif

        </div>
      </div>
      </div>
      </div>

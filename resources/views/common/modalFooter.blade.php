<div class="modal-footer">
    <button type="button" wire:click.prevent="resetUI()" class="btn btn-danger close-btn text-info" data-dismiss="modal">CERRAR</button>

    @if($selected_id <1)
    <button type="button" wire:click.prevent="Store()" class="btn btn-primary close-modal">
      GUARDAR</button>
      @else
      <button type="button" wire:click.prevent="Update()" class="btn btn-info close-modal">
          ACTUALIZAR</button>
      @endif

</div>
</div>
</div>
</div>

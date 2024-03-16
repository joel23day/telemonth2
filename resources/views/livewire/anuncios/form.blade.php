@include('common.modalHeader')


<div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" wire:model.lazy="nombre" class="form-control" placeholder="ej: Laravel 8">
            @error('nombre') <span class="text-danger er">{{ $message}}</span> @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label>Descripcion</label>
            <input type="text" wire:model.lazy="descripcion" class="form-control" placeholder="ej: En este curso aprenderas...">
            @error('descripcion') <span class="text-danger er">{{ $message}}</span> @enderror
        </div>
    </div>



    <div class="col-sm-12 col-md-8">
        <div class="form-group custom-file" style="padding: 10px;">
            <input type="file" class="custom-file-input form-control" wire:model="image"
            accept="image/x-png, image/gif, image/jpeg">
            <label class="custom-file-label">Imagen {{$image}}</label>
            @error('image') <span class="text-danger er">{{$message}}</span> @enderror
        </div>
        </div>

@include('common.modalFooter')

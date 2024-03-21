@include('common.modalHeader')


<div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" wire:model.lazy="nombre" class="form-control" placeholder="ej: Requerimiento de personal">
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


    <div class="col-sm-12 col-md-4">
        <div class="form-group" style="padding: 10px;">
            <label>Estado</label>
            <select wire:model.lazy="status" class="form-control">
               <option value="Elegir" selected>Elegir</option>
               <option value="ACTIVE" selected>Activo</option>
               <option value="LOCKED" selected>Bloqueado</option>
            </select>
            @error('status') <span class="text-danger er">{{$message}}</span> @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label>Fecha de Inicio</label>
            <input type="date" wire:model.lazy="fecha_inicio" class="form-control" placeholder="18-09-2023">
            @error('fecha_inicio') <span class="text-danger er">{{ $message}}</span> @enderror
        </div>
    </div>

    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label>Fecha de Finalizacion</label>
            <input type="date" wire:model.lazy="fecha_fin" class="form-control" placeholder="ej: 18-10-2023">
            @error('fecha_fin') <span class="text-danger er">{{ $message}}</span> @enderror
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

@include('common.modalHeader')
<div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group" style="padding: 10px;">
            <label>Nombre</label>
            <input type="text" wire:model.lazy="name"
            class="form-control" placeholder="ej: Joel Copa" >
            @error('name') <span class="text-danger er">{{$message}}</span> @enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-8">
        <div class="form-group" style="padding: 10px;">
            <label>Telefono</label>
            <input type="text" wire:model.lazy="phone"
            class="form-control" placeholder="ej: 72087599" maxlength="10">
            @error('phone') <span class="text-danger er">{{$message}}</span> @enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group" style="padding: 10px;">
            <label>Email</label>
            <input type="text" wire:model.lazy="email"
            class="form-control" placeholder="ej: peluza123@gmail.com" >
            @error('email') <span class="text-danger er">{{$message}}</span> @enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group" style="padding: 10px;">
            <label>Contraseña</label>
            <input type="password" wire:model.lazy="password"
            class="form-control">
            @error('password') <span class="text-danger er">{{$message}}</span> @enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group" style="padding: 10px;">
            <label>Estado</label>
            <select wire:model.lazy="status" class="form-control">
               <option value="Elegir" selected>Elegir</option>
               <option value="Active" selected>Activo</option>
               <option value="Locked" selected>Bloqueado</option>
            </select>
            @error('status') <span class="text-danger er">{{$message}}</span> @enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group" style="padding: 10px;">
            <label>Asignar Rol</label>
            <select wire:model.lazy="profile" class="form-control">
               <option value="Elegir" selected>Elegir</option>
               @foreach ($roles as $role)
               <option value="{{$role->id}}" selected>{{$role->name}}</option>
               @endforeach
            </select>
            @error('profile') <span class="text-danger er">{{$message}}</span> @enderror
        </div>
    </div>
    <div class="col-sm-12 col-md-6">
        <div class="form-group" style="padding: 10px;">
            <label>Imagen del perfil</label>
            <input type="file" wire:model="image" accept="image/x-png, image/jpeg, image/gif"
            class="form-control">
            @error('image') <span class="text-danger er">{{$message}}</span> @enderror
        </div>
    </div>
</div>

@include('common.modalFooter')

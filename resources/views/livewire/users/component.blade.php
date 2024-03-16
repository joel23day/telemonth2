<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{$nombre_componente}} | {{$PageTitle}}</b>
                </h4>
                    <ul class="tabs tab-pills">
                        <li>
                            <a href="javascript:void(0)" class="tabmenu bg-dark" data-toggle="modal" data-target
                            ="#theModal">Agregar</a>
                        </li>
                    </ul>
            </div>
            @include('common.searchbox')

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #363638">
                             <tr>
                                <th class="table-th text-white">USUARIO</th>
                                <th class="table-th text-white text-center">TELEFONO</th>
                                <th class="table-th text-white text-center">EMAIL</th>
                                <th class="table-th text-white text-center">ESTADO</th>
                                <th class="table-th text-white text-center">ACCION_R</th>
                                <th class="table-th text-white text-center">CARGO</th>
                                <th class="table-th text-white text-center">IMAGEN</th>
                                <th class="table-th text-white text-center">ACCIONES</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $r)
                            <tr>
                                <td><h6>{{$r->nombre}}</h6></td>
                                <td class="text-center"><h6>{{$r->telefono}}</h6></td>
                                <td class="text-center"><h6>{{$r->email}}</h6></td>
                                <td class="text-center">
                                    <span class="badge {{ $r->estado == 'Active' ? 'badge-success' :
                                    'badge-danger'}} text-uppercase">{{$r->estado}}</span>

                                </td>

                                <!--aumentado-->
                                <td class="boton">
                                    <div class="boton text-center">
                                        <input type="checkbox" id="btn-switch-{{$r->id}}" class="new-control-input lbl-switch"
                                            wire:change="ToggleUserStatus({{ $r->id }}, $('#btn-switch-{{$r->id}}').is(':checked'))"
                                            {{ $r->estado == 'Active' ? 'checked' : '' }}>

                                    </div>
                                </td>

                                <!--<td class="boton text-center">
                                    <input type="checkbox" id="btn-switch">
                                    <label for="btn-switch" class="lbl-switch"></label>
                                </td>-->




                                <td class="text-center"><h6>{{$r->cargo}}</h6></td>

                                <td class="text-center">
                                    @if($r->image != null)
                                    <img src="{{ asset('storage/users/'. $r->image )}}" alt="Imagen"
                                     class="card-img-top img-fluid">
                                    @endif
                                </td>

                                <td class="text-center">
                                    <a href="javascript:void(0)"
                                    wire:click="edit({{$r->id}})"
                                    class="btn btn-info mtmobile" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <a href="javascript:void(0)"
                                    onclick="Confirm('{{$r->id}}')"
                                    class="btn btn-danger" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$data->links()}}
                </div>
            </div>


        </div>
    </div>
    @include('livewire.users.form')
</div>



<script>
    document.addEventListener('DOMContetLoaded', function(){
        window.livewire.on('user-added', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)
        });
        window.livewire.on('user-updated', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)
        });
        window.livewire.on('user-deleted', Msg => {
            noty(Msg)
        })
        window.livewire.on('hide-modal', Msg => {
            $('#theModal').modal('hide')
        });
        window.livewire.on('show-modal', Msg => {
            $('#theModal').modal('show')
        })
        window.livewire.on('user-withsales', Msg => {
            noty(Msg)
        })
    });

    function Confirm(id){
        Swal.fire({
            title: 'CONFIRMAR',
            text: "CONFIRMAAS REVOCAR TODOS LOS PERMISOS?",
            type: 'warning',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#d33',
            confirmButtonColor: '3B3F5C',
            confirmButtonText: 'Aceptar'
        }).then(function(result) {
            if(result.value){
                window.livewire.emit('deleteRow', id)
                swal.close()
            }
        })
    }
</script>

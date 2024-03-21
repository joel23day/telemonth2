<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{$componentName}} | {{$pageTitle}}</b></h4>
                    <ul class="tabs tab-pills">

                        <li>
                            <a href="javascript:void(0)" class="tabmenu bg-dark bi bi-zoom-in" data-toggle="modal" data-target="#theModal">
                            Agregar</a>
                        </li>

                    </ul>
            </div>
            @include('common.searchbox')

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #363638">
                             <tr>
                                <th class="table-th text-white">ID</th>
                                <th class="table-th text-white text-center">DESCRIPCION</th>
                                <th class="table-th text-white text-center">OPCIONES</th>
                             </tr>
                        </thead>
                        <tbody>

                            @foreach($roles as $role)
                            <tr>
                                <td><h6 class="text-left">{{$role->id}}</h6></td>
                                <td><h6 class="text-center">{{$role->name}}</h6></td>



                                <td class="text-center">
                                    <a href="javascript:void(0)"
                                    wire:click.prevent="Edit({{$role->id}})"
                                    class="btn btn-info mtmobile" title="Edit Registro">
                                    <i class="bi bi-pencil"></i>
                                    </a>

                                    <a href="javascript:void(0)"
                                    onclick="Confirm({{$role->id}})"
                                    class="btn btn-danger" title="Delete">
                                    <i class="bi bi-trash"></i>
                                    </a>


                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$roles->links()}}
                </div>
            </div>


        </div>
    </div>
    @include('livewire.roles.form')
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
    window.livewire.on('role-added', Msg => {
         $('#theModal').modal('hide')
         noty(Msg)
      })
    window.livewire.on('role-updated', Msg => {
         $('#theModal').modal('hide')
         noty(Msg)
      })
      window.livewire.on('role-deleted', Msg => {
         noty(Msg)
      })
      window.livewire.on('role-exists', Msg => {
         noty(Msg)
      })
      window.livewire.on('role-error', Msg => {
         noty(Msg)
      })
      window.livewire.on('hide-modal', Msg => {
         $('#theModal').modal('hide')
      })
      window.livewire.on('show-modal', Msg => {
         $('#theModal').modal('show')
      })
      window.livewire.on('hidden.bs.modal', Msg => {
         $('.er').css('display','none')
      })
    });
</script>

<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{$nombre_componente}} | {{$pageTitle}}</b>
                </h4>
                    <ul class="tabs tab-pills">

                        <li>
                            <a href="javascript:void(0)" class="tabmenu bg-dark"
                            data-toggle="modal" data-target="#theModal">
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
                                <th class="table-th text-white">NOMBRE</th>
                                <th class="table-th text-white text-center">DESCRIPCION</th>
                                <th class="table-th text-white text-center">IMAGEN</th>
                                <th class="table-th text-white text-center">OPCIONES</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach ($servi as $servicio)


                            <tr>
                                <td><h6>{{$servicio->nombre}}</h6></td>
                                <td><h6>{{$servicio->descripcion}}</h6></td>
                                <td class="text-center">
                                    <span>
                                        <img src="{{asset('storage/servicios/' .$servicio->imagen)}}"
                                        alt="Imagen de ejemplo" height="70" width="120" class="rounded">
                                    </span>
                                </td>

                                <td class="text-center">
                                    <a href="javascript:void(0)"
                                    wire:click.prevent="Edit({{$servicio->id}})"
                                    class="btn btn-dark mtmobile" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <a href="javascript:void(0)"
                                    onclick="Confirm('{{$servicio->id}}')"
                                    class="btn btn-dark" title="Delete">
                                        <i class="bi bi-trash3"></i>
                                    </a>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$servi->links()}}
                </div>
            </div>


        </div>
    </div>
    @include('livewire.servicios.form')

</div>


<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{$nombre_componente}} | {{$pageTitle}}</b>
                </h4>
                    <ul class="tabs tab-pills">
                        <li>
                            <button type="button" class="btn btn-dark bi bi-zoom-in" data-toggle="modal"
                            data-target="#theModal">Agregar</button>

                        </li>
                    </ul>
            </div>
            @include('common.searchbox')

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #343538">
                             <tr>
                                <th class="table-th text-white">NOMBRE</th>
                                <th class="table-th text-white text-center" width="250px">DESCRIPCION</th>
                                {{-- <th class="table-th text-white text-center">CATEGORIA</th> --}}
                                <th class="table-th text-white text-center">ESTADO</th>
                                <th class="table-th text-white text-center">FECHA_INICIO</th>
                                <th class="table-th text-white text-center">FECHA_FIN</th>
                                <th class="table-th text-white text-center">IMAGEN</th>
                                <th class="table-th text-white text-center">ACCIONES</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach ( $anun as $anuncio )

                            <tr>
                                <td><h6 class="text-left">{{$anuncio->nombre}}</h6></td>
                                <td><h6 width="10px">{{$anuncio->descripcion}}</h6></td>
                                <td><h6 class="text-center">{{$anuncio->estado}}</h6></td>
                                <td><h6 class="text-center">{{$anuncio->fecha_inicio}}</h6></td>
                                <td><h6 class="text-center">{{$anuncio->fecha_fin}}</h6></td>
                                <td class="text-center">
                                    <span>
                                        <img src="{{asset('storage/anuncios/' .$anuncio->imagen)}}"
                                        alt="Imagen de ejemplo" height="70" width="120" class="rounded">
                                    </span>
                                </td>


                                <td class="text-center">
                                    <a href="javascript:void(0)"
                                    wire:click.prevent="Edit({{$anuncio->id}})"
                                    class="btn btn-dark mtmobile" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <a href="javascript:void(0)"
                                    onclick="Confirm('{{$anuncio->id}}')"
                                    class="btn btn-dark" title="Delete">
                                        <i class="bi bi-trash3"></i>
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$anun->links()}}
                </div>
            </div>


        </div>
    </div>
    @include('livewire.anuncios.form')

</div>




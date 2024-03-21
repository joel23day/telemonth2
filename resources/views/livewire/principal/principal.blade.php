

{{-- <div class="pogoSlider-slide" style="background-image:url(img/naranja/slidep.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide_text white_fonts">
                    <h3>Progress & Success<br><strong>Currency</strong></h3>
                    <br>
                    <a class="start_exchange_bt" href="exchange.html">Start Exchange ></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pogoSlider-slide" style="background-image:url(img/naranja/slide_img.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide_text white_fonts">
                    <h3>Progress & Success<br><strong>Currency</strong></h3>
                    <br>
                    <a class="start_exchange_bt" href="exchange.html">Start Exchange ></a>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@foreach($data as $servicio)
<div class="pogoSlider-slide" style="background-image:url({{ asset('storage/servicios/' . $servicio->imagen) }});">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slide_text white_fonts">
                    <h3>{{ $servicio->nombre }}</h3>
                    <p>{{ $servicio->descripcion }}</p>
                    <br>
                    <a class="start_exchange_bt" href="exchange.html">Start Exchange ></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach






{{-- @include('layouts.theme.scripts') --}}

<script>
    $(document).ready(function() {
        $('#miModal').modal('show'); // Abre el modal automáticamente al cargar la página
    });
</script>

{{-- <div class="col-md-6">
    <div class="full text_align_right_img">
        <img src="img/naranja/img1.png" alt="#" />
    </div>
</div>
<div class="col-md-6 layout_padding">
    <div class="full paddding_left_15">
        <div class="heading_main text_align_left">
           <h2><span class="theme_color">bienvenido</span> To Exchange</h2>
        </div>
    </div>
    <div class="full paddding_left_15">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    </div>
    <div class="full paddding_left_15">
        <a class="main_bt" href="#">About more ></a>
    </div>
</div> --}}

@foreach($data as $portada)


<div class="col-md-6">
    <div class="full text_align_right_img">
        <img src="{{ asset('storage/portadas/' . $portada->imagen) }}" alt="#" width="770" height="550" />
        {{-- <div class="pogoSlider-slide" style="background-image:url({{ asset('storage/portadas/' . $portada->imagen) }});"> --}}
    </div>
</div>
<div class="col-md-6 layout_padding">
    <div class="full paddding_left_15">
        <div class="heading_main text_align_left">
           <h2><span class="theme_color">bienvenido/a</span></h2>
        </div>
    </div>
    <div class="full paddding_left_15">
        <p>Telemonth SRL. es una empresa especializada en la instalación y mantenimiento  de redes de fibra óptica. Nuestro objetivo es proporcionar soluciones de  conectividad confiables y de alta velocidad para empresas, instituciones y  hogares, que incluyen los siguientes aspectos: Análisis de mercado, Planificación estratégica, Recursos humanos y captación, Adquisición de equipos y herramientas, Alianzas estratégicas, Proyectos, Investigación y desarrollo</p>
    </div>
    <div class="full paddding_left_15">
        <a class="main_bt" href="#">Contactanos></a>
    </div>
</div>
@endforeach

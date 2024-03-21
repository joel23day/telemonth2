 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="{{asset('css/cssnaranja/bootstrap.min.css')}}" />
 <!-- Pogo Slider CSS -->
 <link rel="stylesheet" href="{{asset('css/cssnaranja/pogo-slider.min.css')}}" />
 <!-- Site CSS -->
 <link rel="stylesheet" href="{{asset('css/cssnaranja/style.css')}}" />
 <!-- Responsive CSS -->
 <link rel="stylesheet" href="{{asset('css/cssnaranja/responsive.css')}}" />
 <!-- Custom CSS -->
 <link rel="stylesheet" href="{{asset('css/cssnaranja/custom.css')}}" />
 {{-- login --}}
<link href="{{asset('css/estiloslogin.css')}}" rel="stylesheet">

<style>
    /* Estilos para el botón Whatsapp */
    .whatsapp-button {
        position: fixed;
        bottom: 20px; /* Ajusta la distancia desde la parte inferior */
        left: 20px; /* Ajusta la distancia desde el borde izquierdo */
        z-index: 1000; /* Asegura que el botón esté por encima de otros elementos */
        background-color: #25d366; /* Color de fondo del botón */
        color: #fff; /* Color del texto del botón */
        padding: 10px 20px; /* Ajusta el padding del botón */
        border-radius: 5px; /* Radio de los bordes del botón */
        font-size: 16px; /* Tamaño de la fuente del botón */
        font-weight: bold; /* Grosor de la fuente del botón */
        text-decoration: none; /* Quita el subrayado del texto */
    }

    /* Estilos para el contenido del modal */
    .whatsapp-modal .modal-dialog {
        position: fixed;
        bottom: 20px; /* Ajusta la distancia desde la parte inferior */
        left: 20px; /* Ajusta la distancia desde el borde izquierdo */
        margin: 0; /* Elimina el margen */
    }

    /* Estilos para el contenido del modal */
    .whatsapp-modal .modal-content {
        border-radius: 10px; /* Radio de los bordes del modal */
    }
</style>



@livewireStyles

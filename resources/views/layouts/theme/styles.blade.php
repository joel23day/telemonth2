<script src="{{ asset("assets/js/loader.js") }}"></script>
<link href="{{ asset("assets/css/loader.css") }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="{{asset("bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" >
<link href="{{ asset("assets/css/plugins.css")}}" rel="stylesheet" type="text/css">
<link href="{{ asset("assets/css/structure.css")}}" rel="stylesheet" type="text/css" class="structure">


<link href="{{asset('bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet" type="text/css">


<link href="{{asset('assets/css/elements/avatar.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('plugins/sweetalerts/sweetalert2.min.css')}}"></script>
<link href="{{asset('plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css">


<link href="{{asset("plugins/apex/apexcharts.css")}}" rel="stylesheet" type="text/css">
<link href="{{ asset("assets/css/dashboard/dash_2.css")}}" rel="stylesheet" type="text/css" class="dashboard-sales" />

<link href="{{asset('assets/css/apps/scrumboard.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/apps/notes.css')}}" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="{{asset('css/apexcharts.css') }}">
{{-- login --}}
<link href="{{asset('css/estiloslogin.css')}}" rel="stylesheet">
<style>
    aside{
        display: none!important;
    }
    .page-item.active .page-link{
        z-index: 3;
        color: #fff;
        background-color:#3b3f5c;
        border-color:#3b3f5c;
    }

    @media (max-width: 480px){
        .ntmobile{
            margin-bottom: 20px!important;
        }
        .nbmobile{
            margin-bottom: 10px!important;
        }
        .hideonsm{
            display: none!important;
        }
        .inblock{
            display: block;
        }
    }

    /*sidebar background*/
    .sidebar-theme #compactSidebar {
        background: #363638!important;
    }
    /*sidebar collapse background*/
    .header-container .sidebarCollapse {
        color: #363638!important;
    }

    .navbar .navbar-item .nav-item form.form-inline input.search-form-control {
    font-size: 15px;
    background-color: #363638!important;
    padding-right: 40px;
    padding-top: 12px;
    border: none;
    color: #fff;
    box-shadow: none;
    border-radius: 30px;
}

.boton{
    margin: 10px;
}
.lbl-switch{
    display: inline-block;
    width: 55px;
    height: 30px;
    background: #aaa;
    border-radius: 100px;
    position: relative;
    cursor: pointer;
}
#btn-switch:checked~ .lbl-switch{
    background: #21b145;
}
.lbl-switch:after{
    position: absolute;
    content: '';
    width: 22px;
    height: 22px;
    background: #fff;
    border-radius: 100px;
    top: 4px;
    left: 5px;
    transition: 0.3s;
}
#btn-switch:checked~ .lbl-switch:after{
    left: 28px;
}
#btn-switch{
    display: none;
}
</style>

<style>
    @font-face {
        font-family: 'MiFuente1';
        src: url('{{ asset('assets/fuentecer/Digital.ttf') }}') format('woff2');
    }
    .servicio {
        position: absolute;
        transform: translateX(-50%);
        font-family: 'MiFuente1';
        font-size: 60px;
        color: #000;
        white-space: nowrap;
    }
</style>

@livewireStyles
<link href="{{asset('plugins/flatpickr/flatpickr.dark.css') }}" rel="stylesheet" type="text/css">

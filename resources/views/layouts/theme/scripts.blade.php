
<script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
<script src="{{ asset('js/slick-loader.min.js') }}"></script>
<script src="{{ asset('js/scriptlogin.js') }}"></script>


<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('plugins/notification/snackbar/snackbar.min.js')}}"></script>
<script src="{{asset('plugins/nicescroll/nicescroll.min.js')}}"></script>
<script src="{{asset('plugins/currency/currency.js')}}"></script>

<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

{{-- login --}}
{{-- <script src="{{asset('js/scriptlogin.js')}}"></script> --}}
<script src="{{ asset('js/scriptlogin.js') }}"></script>


<script>
    function noty(msg, option = 1){
        Snackbar.show({
            text: msg.toUpperCase(),
            actionText: "CERRAR",
            actionTextColor: '#fff',
            backgroundColor: option == 1 ? '#3b3f5c' : '#e7515a',
            pos: 'top-right'
        });
    }

    document.addEventListener('DOMContentLoaded', function(){
        window.livewire.on('global-msg', msg=>{
            noty(msg)
        })
    })
</script>

<script>
    document.addEventListener('notys', (event) => {
                SlickLoader.enable()
                toastr.info(event.detail.msg, "Info", {
                    positionClass: "toast-bottom-center",
                    closeButton: !0,
                    progressBar: !0,
                })
            })
          function showProcessing() {
            SlickLoader.setText('ESPERA', 'PROCESANDO SOLICITUD')
            SlickLoader.enable()
          }

          function hideProcessing() {
            SlickLoader.disable()
          }


</script>

<script>
    document.addEventListener('DOMContentLoaded', function(){

       window.livewire.on('show-modal', msg => {

        $('#theModal').modal('show')
       });
       window.livewire.on('closemodal', msg => {
        $('#theModal').modal('hide')
       });

       // de usuario
       window.livewire.on('user-added', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)
        });
        window.livewire.on('users-added', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)
        });
        window.livewire.on('user-updated', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)
        });

        window.livewire.on('userperfil-updated', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)

            setTimeout(() => {
            location.reload();
        }, 100)
        });

        window.livewire.on('hide-modal', Msg => {
            $('#theModal').modal('hide')
        });
///////
       window.livewire.on('permi', Msg => {
            noty(Msg)
          });
          window.livewire.on('sync-error', Msg => {
            noty(Msg)
          });
          window.livewire.on('removeall', Msg => {
            noty(Msg)
          });

          ///////////////GENERAL
          window.livewire.on('cat_added', Msg => {
            noty(Msg)
        })
        window.livewire.on('cat_updated', Msg => {
            noty(Msg)
        })
        window.livewire.on('category-deleted', Msg => {
            noty(Msg, 2)
        })
        window.livewire.on('no-stock', Msg => {
            noty(Msg, 2)
        })
        window.livewire.on('sale-error', Msg => {
            noty(Msg)
        })

        window.livewire.on('certi-falso', Msg => {
            noty(Msg, 3)
        })
        //////////////////FIN GENERAL//////////

    });
    // reportes
    flatpickr(document.getElementsByClassName('flatpickr'),{
            enableTime: false,
            dateFormat: 'Y-m-d',
            locale: {
                firstDayofWeek: 1,
                weekdays: {
                    shorthand: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                    longhand: [
                        "Domingo",
                        "Lunes",
                        "Martes",
                        "Miercoles",
                        "Jueves",
                        "Viernes",
                        "Sabado",
                    ],
                },
                months: {
                    shorthand: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                    longhand: [
                        "Enero",
                        "Febrero",
                        "Marzo",
                        "Abril",
                        "Mayo",
                        "Junio",
                        "Julio",
                        "Agosto",
                        "Septiembre",
                        "Octubre",
                        "Noviembre",
                        "Diciembre",
                    ],
                },
            }
        })
        /////reportes

   $('#theModal').on('hidden.bs.modal', function(){
        $('.er').css('display', 'none')
    });

    $('#theModal').on('hidden.bs.modal', function(e){
        $('.er').css('display', 'none')
    });


    function Confirm(id, products){
        if(products > 0){
            swal.fire('NO SE PUEDE ELIMINAR LA CATEGORIA PORQUE TIENE PRODUCTOS RELACIONADOS*')
            return;
        }
        Swal.fire({
            title: 'estas seguro?',
            text: "Esto no lo podras revertir*",
            type: 'warning',
            icon: 'warning',
            showCancelButton: true,
           // cancelButtonText: 'Cerrar',
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

    function emitPreviewData() {
        showProcessing()
        window.livewire.emit('previewData');
        // window.livewire.emit('notify-update');
    }
    function emitImportar() {
        showProcessing()
        window.livewire.emit('importar');
    }

    function emitbusqueda() {
        showProcessing()
        window.livewire.emit('realizarbusqueda');
        // window.livewire.emit('notify-update');
    }

</script>


<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('codigoEncontrado', function () {
            Swal.fire('El certificado es auténtico', '', 'success');
        });

        Livewire.on('codigoNoEncontrado', function () {
            Swal.fire('El certificado es una falsificación', '', 'error');
        });
    });
</script>


<script src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{ asset('js/apexcharts.js') }}"></script>
@livewireScripts

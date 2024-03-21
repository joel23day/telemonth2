 <!-- ALL JS FILES -->
 <script src="{{ asset('js/jsnaranja/jquery.min.js')}}"></script>
 <script src="{{ asset('js/jsnaranja/popper.min.js')}}"></script>
 <script src="{{ asset('js/jsnaranja/bootstrap.min.js')}}"></script>
 <!-- ALL PLUGINS -->
 <script src="{{ asset('js/jsnaranja/jquery.magnific-popup.min.js')}}"></script>
 <script src="{{ asset('js/jsnaranja/jquery.pogo-slider.min.js')}}"></script>
 <script src="{{ asset('js/jsnaranja/slider-index.js')}}"></script>
 <script src="{{ asset('js/jsnaranja/smoothscroll.js')}}"></script>
 <script src="{{ asset('js/jsnaranja/form-validator.min.js')}}"></script>
 <script src="{{ asset('js/jsnaranja/contact-form-script.js')}}"></script>
 <script src="{{ asset('js/jsnaranja/isotope.min.js')}}"></script>
 <script src="{{ asset('js/jsnaranja/images-loded.min.js')}}"></script>
 <script src="{{ asset('js/jsnaranja/custom.js')}}"></script>




 {{-- login --}}
<script src="{{asset('js/scriptlogin.js')}}"></script>
 <script>
 /* counter js */
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
            }
        });
    });
</script>

<script>
$(document).ready(function(){
    // Quitar el fragmento de la URL al cargar la página
    window.location.hash = '';

    // Código para el desplazamiento suave al hacer clic en enlaces
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
});
</script>


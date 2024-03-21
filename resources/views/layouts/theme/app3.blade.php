<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>TELEMONTH</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

   @include('layouts.theme.styles3')
   {{-- @include('layouts.theme.styles3') --}}

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<script src="//code.tidio.co/4eydwww8gv3wgfxx1fur2rh8gvebxwxs.js" async></script>
{{-- @include('livewire.chat.chatmsg') --}}
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    @include('livewire.principal.login')


    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="img/naranja/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <div class="header_top">

            <div class="container">
                <div class="row">
                    <div class="logo_section">
                        <a class="navbar-brand" href="index.html">
                            <img src="img/naranja/LOGOOF.png" alt="image" width="300" height="100">
                        </a>

                    </div>
                    <div class="site_information">
                        <div class="search-box">
                            <input type="text" class="search-txt" placeholder="Search">
                            <a class="search-btn">
                                <img src="img/naranja/search_icon.png" alt="#" />
                            </a>
                        </div>
                      {{-- prueba modal --}}




                        {{-- @include('livewire.principal.login') --}}

                        <ul>
                            <li>
                                <a href="mailto:exchang@gmail.com" style="display: inline-block; vertical-align: middle;">
                                    <img src="img/naranja/mail_icon.png" alt="#" style="vertical-align: middle;" />
                                    <span style="display: inline-block; vertical-align: middle;">comercial@telemonth.com.bo</span>
                                </a>
                            </li>

                            <li><a href="tel:exchang@gmail.com"><img src="img/naranja/phone_icon.png" alt="#" />+591 63133000</a></li>
                            {{-- <li><a class="join_bt" href="#">Iniciar Sesion</a></li> --}}
                            <li>
                                <a href="javascript:void(0)" class="join_bt" data-toggle="modal" data-target="#theModal2">
                                Ingresar</a>
                            </li>

                            {{-- <img src="img/naranja/w.png" class="whatsapp-button" data-toggle="modal" data-target="#theModal4" alt="WhatsApp"  width="120" height="80"> --}}
                            {{-- <a href="javascript:void(0)" class="whatsapp-button" data-toggle="modal" data-target="#theModal4">Whatsapp</a> --}}




                        </ul>


                    </div>
                </div>
            </div>

        </div>
        <div class="header_bottom">
          <div class="container">
            <div class="col-sm-12">
                <div class="menu_orange_section" style="background: #fa0851;">
                   <nav class="navbar header-nav navbar-expand-lg">
                     <div class="menu_section">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="{{ url('/enviar') }}">INICIO</a></li>

                        <li class="nav-item dropdown" onmouseenter="showDropdownMenu(this)" onmouseleave="hideDropdownMenu(this)">
                            <a class="nav-link active" href="{{ url('/misionVision') }}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                NOSOTROS▼
                            </a>
                            <div class="dropdown-menu custom-dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item custom-dropdown-item" href='/misionVision#mision'>Misión</a>
                                <a class="dropdown-item custom-dropdown-item" href="{{ url('/misionVision#vision') }}">Visión</a>
                                <a class="dropdown-item custom-dropdown-item" href="{{ url('/misionVision#valores') }}">Valores</a>
                                <a class="dropdown-item custom-dropdown-item" href="{{ url('/misionVision') }}">Organigrama</a>
                                <!-- Agrega más elementos de menú aquí si es necesario -->
                            </div>
                        </li>


                        <li class="nav-item dropdown" onmouseenter="showDropdownMenu(this)" onmouseleave="hideDropdownMenu(this)">
                            <a class="nav-link active" href="#services" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                SERVICIOS
                            </a>

                        </li>



                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                CONTRATACIONES▼
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Servicio 1</a>
                                <a class="dropdown-item" href="#">Servicio 2</a>
                                <!-- Agrega más elementos de menú aquí si es necesario -->
                            </div>
                        </li>
                        <li class="nav-item dropdown" onmouseenter="showDropdownMenu(this)" onmouseleave="hideDropdownMenu(this)">
                            <a class="nav-link active" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                NOTICIAS▼
                            </a>
                            <div class="dropdown-menu custom-dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item custom-dropdown-item" href="#">Notas de prensa</a>
                                <a class="dropdown-item custom-dropdown-item" href="#">Galeria de fotos</a>
                                <a class="dropdown-item custom-dropdown-item" href="#">Galeria de videos</a>

                                <!-- Agrega más elementos de menú aquí si es necesario -->
                            </div>
                        </li>
                        <li><a class="nav-link" href="contact.html">CONTACTANOS</a></li>
                    </ul>
                </div>
                     </div>
                 </nav>
                </div>
            </div>
          </div>
        </div>

    </header>
    <!-- End header -->

    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal">
        Abrir Modal
    </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="miModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Contenido del modal -->
                @include('livewire.modal.modalan') <!-- Incluye el contenido del archivo modal.blade.php -->
            </div>
        </div>
    </div>
    <!-- Start Banner -->
    <div class="ulockd-home-slider" id="inicio">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    @yield('content')
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->

	<!-- section -->
    <div class="section">

        <div class="container">
            <div class="row">

                @livewire('portadavista-controller')




            </div>
            </div>



    </div>
    	<!-- end section -->




    <!-- section -->
    <div class="section layout_padding" id="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Servicios</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" class="overlay">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog" style="position: relative;">
                        <a href="{{ url('/servicioslog') }}">
                            <img class="img-responsive" src="img/naranja/tele.png" alt="#" style="width: 100%; height: auto;" />
                            <div class="overlay"></div>
                            {{-- <div class="button-container">
                                <a href="url_de_la_otra_pagina" class="btn btn-5">Cableado Estructurado</a>
                            </div> --}}
                        </a>
                    </div>
                </div>



                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog" style="position: relative;">
                        <a href="url_de_la_otra_pagina">
                            <img class="img-responsive" src="img/naranja/fibra2.png" alt="#" style="width: 100%; height: auto;" />
                            <div class="overlay"></div>
                            {{-- <div class="button-container">
                                <a href="url_de_la_otra_pagina" class="btn btn-5">Cableado Estructurado</a>
                            </div> --}}
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog" style="position: relative;">
                        <a href="url_de_la_otra_pagina">
                            <img class="img-responsive" src="img/naranja/se6.png" alt="#" style="width: 100%; height: auto;" />
                            <div class="overlay"></div>
                            {{-- <div class="button-container">
                                <a href="url_de_la_otra_pagina" class="btn btn-5">Cableado Estructurado</a>
                            </div> --}}
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog" style="position: relative;">
                        <a href="url_de_la_otra_pagina">
                            <img class="img-responsive" src="img/naranja/se5.png" alt="#" style="width: 100%; height: auto;" />
                            <div class="overlay"></div>
                            {{-- <div class="button-container">
                                <a href="url_de_la_otra_pagina" class="btn btn-5">Cableado Estructurado</a>
                            </div> --}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="row margin-top_30">
                <div class="col-sm-12">
                    <div class="full">
                        <div class="center">
                            <a class="main_bt" href="#">About more ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
   {{-- elimianda --}}
	<!-- section -->
    {{-- elimianda --}}
    <!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Noticias</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                       <iframe width="100%" height="250" src="https://www.youtube.com/embed/ShmSbBdHmUQ" frameborder="0" allowfullscreen></iframe>
                       <div class="overlay"><a class="main_bt transparent" href="https://www.youtube.com/watch?v=ShmSbBdHmUQ&ab_channel=ScreenCulture">Ver</a></div>
                       {{-- <div class="blog_details">
                         <h3>Bitcoin News</h3>
                         <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                       </div> --}}
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="img/naranja/b2.png" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                       <div class="blog_details">
                         <h3>Ethereum News</h3>
                         <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                       </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="img/naranja/b3.png" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                       <div class="blog_details">
                         <h3>Light News</h3>
                         <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                       </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Contactos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- contact_form -->
    <div class="section contact_form">
        <div class="container">
            <div class="row">
                {{-- mapa --}}
                <div class="border-style: col dashed sm:py-6 px-50">
                    <h2 class=" italic text-lg font-serif text-sky-800">Direccion</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3825.445219865352!2d-68.13868602567383!3d-16.503605940816612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTbCsDMwJzEzLjAiUyA2OMKwMDgnMTAuMCJX!5e0!3m2!1ses!2sbo!4v1710932248678!5m2!1ses!2sbo" width="500" height="300" style="border:1px " class="rounded-lg border-slate-400 "></iframe>
                </div>
                {{-- fin mapa --}}
                <div class="col-lg-6 col-sm-12">
                    <div class="full">
                        {{-- <form class="contact_form_inner" method="Post" action="{{ route('nosotros') }}"> --}}
                            @csrf
                                <fieldset>
                                    <div class="field">
                                        <input  id="name "type="text" name="name" value="{{old('name')}}" placeholder="Tu nombre">
                                        @error('name')
                                        <span class="text-rose-600">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <input id ="email" type="email" name="email" value="{{old('email')}}" placeholder="Email">
                                        @error('email')
                                        <span class="text-rose-600">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <input id="phone"type="text" name="message" value="{{old('message')}}" placeholder="Phone number">
                                        @error('phone')
                                        <span class="text-rose-600">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="field">
                                        <textarea name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="field center">
                                    {{-- <a class="button" href="https://wa.me/59167062641?text= mensahe+"></a> --}}
                                        <button type="summit" >SEND </button>
                                    </div>
                                </fieldset>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->
    <!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
               <div class="col-md-12 white_fonts">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <img class="img-responsive" src="img/naranja/footer_logo.png" alt="#" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <h3>Enlaces</h3>
                            </div>
                            <div class="full">
                                <ul class="menu_footer">
                                    <li><a href="home.html">> Inicio</a></li>
                                    <li><a href="about.html">> Nosotros</a></li>
                                    <li><a href="exchange.html">> Servicios</a></li>
                                    <li><a href="services.html">> Contrataciones</a></li>
                                    <li><a href="new.html">> Noticias</a></li>
                                    <li><a href="contact.html">> Contactos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Nuestros Clientes</h3>
                             <p>Gracias por confiar en nosotros</p>
                             <div class="newsletter_form">
                                {{-- <form action="index.html">
                                   <input type="email" placeholder="Your Email" name="#" required="">
                                   <button>Submit</button>
                                </form> --}}
                             </div>
                         </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Contact us</h3>
                             <ul class="full">
                               <li><img src="img/naranja/i5.png"><span>La Paz<br>Bolivia</span></li>
                               <li><img src="img/naranja/i6.png"><span>demo@gmail.com</span></li>
                               <li><img src="img/naranja/i7.png"><span>+591 988789798</span></li>
                             </ul>
                         </div>
                            </div>
                        </div>
					</div>
                </div>
			 </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2019 design by html.design</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

   @include('layouts.theme.scripts3')

   {{-- encima --}}
   <script>
    var currentDropdownMenu = null;

function showDropdownMenu(element) {
    var dropdownMenu = element.querySelector('.dropdown-menu');
    if (dropdownMenu) {
        dropdownMenu.style.display = 'block';
        currentDropdownMenu = dropdownMenu;
    }
}

function hideDropdownMenu(element) {
    var dropdownMenu = element.querySelector('.dropdown-menu');
    if (dropdownMenu && dropdownMenu !== currentDropdownMenu) {
        dropdownMenu.style.display = 'none';
    }
}

function keepDropdownMenuVisible() {
    if (currentDropdownMenu) {
        currentDropdownMenu.style.display = 'block';
    }
}

document.addEventListener('mousemove', keepDropdownMenuVisible);

   </script>

   <script>
    document.addEventListener('DOMContentLoaded', function() {
    var dropdownMenuList = document.querySelectorAll('.nav-item.dropdown .dropdown-menu');

    dropdownMenuList.forEach(function(dropdownMenu) {
        dropdownMenu.parentElement.addEventListener('click', function() {
            var rect = this.getBoundingClientRect();
            dropdownMenu.style.top = (rect.bottom - rect.top) + 'px';
        });
    });
});

   </script>

   {{-- despleige automatico --}}
   <script>
    function showDropdownMenu(element) {
    var dropdownMenu = element.querySelector('.dropdown-menu');
    if (dropdownMenu) {
        dropdownMenu.style.display = 'block';
    }
}

function hideDropdownMenu(element) {
    var dropdownMenu = element.querySelector('.dropdown-menu');
    if (dropdownMenu) {
        dropdownMenu.style.display = 'none';
    }
}

   </script>
   <script>
(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};

		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);

			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;

			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};

			$self.data('countTo', data);

			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);

			// initialize the element with the starting value
			render(value);

			function updateTimer() {
				value += increment;
				loopCount++;

				render(value);

				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}

				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;

					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}

			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};

	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });

  // start all the timers
  $('.timer').each(count);

  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>

</html>

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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

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
                        @include('livewire.principal.login')
                        <ul>
                            <li><a href="mailto:exchang@gmail.com"><img src="img/naranja/mail_icon.png" alt="#" />comercial@telemonth.com.bo</a></li>
                            <li><a href="tel:exchang@gmail.com"><img src="img/naranja/phone_icon.png" alt="#" />+591 63133000</a></li>
                            {{-- <li><a class="join_bt" href="#">Iniciar Sesion</a></li> --}}
                            <li>
                                <a href="javascript:void(0)" class="join_bt" data-toggle="modal" data-target="#theModal2">
                                Ingresar</a>
                            </li>

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
                        <li><a class="nav-link active" href="index.html">INICIO</a></li>

                        <li class="nav-item dropdown" onmouseenter="showDropdownMenu(this)" onmouseleave="hideDropdownMenu(this)">
                            <a class="nav-link active" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                NOSOTROS▼
                            </a>
                            <div class="dropdown-menu custom-dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item custom-dropdown-item" href="#">Misión</a>
                                <a class="dropdown-item custom-dropdown-item" href="#">Visión</a>
                                <a class="dropdown-item custom-dropdown-item" href="#">Valores</a>
                                <a class="dropdown-item custom-dropdown-item" href="#">Organigrama</a>
                                <!-- Agrega más elementos de menú aquí si es necesario -->
                            </div>
                        </li>


                        <li class="nav-item dropdown" onmouseenter="showDropdownMenu(this)" onmouseleave="hideDropdownMenu(this)">
                            <a class="nav-link active" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                SERVICIOS▼
                            </a>
                            <div class="dropdown-menu custom-dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item custom-dropdown-item" href="#">Atencion al cliente</a>
                                <a class="dropdown-item custom-dropdown-item" href="#">Implementacion Tecnica</a>
                                <a class="dropdown-item custom-dropdown-item" href="#">Redes</a>
                                <a class="dropdown-item custom-dropdown-item" href="#">Sistemas</a>
                                <!-- Agrega más elementos de menú aquí si es necesario -->
                            </div>
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

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        {{-- @yield('content') --}}
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
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img src="img/naranja/img1.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
						   <h2><span class="theme_color">Welcome</span> To Exchange</h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">About more ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                       <img class="img-responsive" src="img/naranja/s1.png" alt="#" />
                       <h4>Safe & Secure</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="img/naranja/s2.png" alt="#" />
                        <h4>Mobile Apps</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="img/naranja/s3.png" alt="#" />
                        <h4>Wallet</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="img/naranja/s4.png" alt="#" />
                        <h4>Experts Support</h4>
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
    <!-- section -->
    <div class="section white_fonts" style="background: #2a2a2a;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background: #fff;">
                    <div class="full text_align_right_img">
                        <img src="img/naranja/img2.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                           <h2><span class="theme_color">Apply for</span> Exchange</h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">Exchange ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
	<!-- section -->
    <div class="section layout_padding about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                           <h2>About</h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="#">Read More ></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img src="images/img3.png" alt="#" />
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
                           <h2><span class="theme_color"></span>News</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                       <img class="img-responsive" src="img/naranja/b1.png" alt="#" />
                       <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                       <div class="blog_details">
                         <h3>Bitcoin News</h3>
                         <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                       </div>
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
                           <h2><span class="theme_color"></span>Contact</h2>
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
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" action="#">
                            <fieldset>
                                <div class="field">
                                    <input type="text" name="name" placeholder="Your name" />
                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <input type="text" name="phone_no" placeholder="Phone number" />
                                </div>
                                <div class="field">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <div class="field center">
                                    <button>SEND</button>
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
                                <h3>Quick Links</h3>
                            </div>
                            <div class="full">
                                <ul class="menu_footer">
                                    <li><a href="home.html">> Home</a></li>
                                    <li><a href="about.html">> About</a></li>
                                    <li><a href="exchange.html">> Exchange</a></li>
                                    <li><a href="services.html">> Services</a></li>
                                    <li><a href="new.html">> New</a></li>
                                    <li><a href="contact.html">> Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Newsletter</h3>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                             <div class="newsletter_form">
                                <form action="index.html">
                                   <input type="email" placeholder="Your Email" name="#" required="">
                                   <button>Submit</button>
                                </form>
                             </div>
                         </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                             <h3>Contact us</h3>
                             <ul class="full">
                               <li><img src="img/naranja/i5.png"><span>London 145<br>United Kingdom</span></li>
                               <li><img src="img/naranja/i6.png"><span>demo@gmail.com</span></li>
                               <li><img src="img/naranja/i7.png"><span>+12586954775</span></li>
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

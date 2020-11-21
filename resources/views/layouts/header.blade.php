<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 May 2020 22:03:18 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>{{ config('app.name', 'EduLearn') }}</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.html')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/fav.png') }}">
        <!-- bootstrap v4 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{  asset('css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
		<!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css')}}">
		<!-- Offcanvas CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/off-canvas.css')}}">
		<!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon.css')}}">
		<!-- flaticon2 css  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/fonts2/flaticon.css')}}">
        <!-- rsmenu CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/rsmenu-main.css')}}">
        <!-- rsmenu transitions CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/rsmenu-transitions.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

        <title>{{ config('app.name', 'EduLearn') }}</title>
        <!--[if lt IE 9]>
            <script src="{{ asset( 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
            <script src="{{ asset( 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js')  }}"></script>
        <![endif]-->
    </head>
    <body class="home1">
        <!--Preloader area start here-->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--Preloader area end here-->

        <!--Full width header Start-->
		<div class="full-width-header">

			<!-- Toolbar Start -->

			<!-- Toolbar End -->

			<!--Header Start-->
			<header id="rs-header" class="rs-header">

				<!-- Header Top Start -->
				<div class="rs-header-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12">
						        <div class="header-contact">
						            <div id="info-details" class="widget-text">
                                        <i class="glyph-icon flaticon-email"></i>
						                <div class="info-text">
						                    <a href="mailto:info@domain.com">
						                    	<span>Mail Us</span>
												eduLearn@gmail.com
											</a>
						                </div>
						            </div>
						        </div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="logo-area text-center">
									<a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
						        <div class="header-contact pull-right">
						            <div id="phone-details" class="widget-text">
						                <i class="glyph-icon flaticon-phone-call"></i>
						                <div class="info-text">
						                    <a href="tel:4155551234">
						                    	<span>Call Us</span>
												+1234-567-890
											</a>
						                </div>
						            </div>
						        </div>
							</div>
						</div>
					</div>
				</div>
				<!-- Header Top End -->

				<!-- Menu Start -->
				<div class="menu-area menu-sticky">
					<div class="container">
						<div class="main-menu">
							<div class="row">
								<div class="col-sm-12">
									<!-- <div id="logo-sticky" class="text-center">
										<a href="index.html"><img src="images/logo.png" alt="logo"></a>
									</div> -->
									<a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
									<nav class="rs-menu">
										<ul class="nav-menu">
											<!-- Home -->
                                        <li class="menu-item-has-children"> <a href="{{ route('index') }}" class="home">Home</a>
											</li>
											<!-- End Home -->





                                            <li class="menu-item-has-children"> <a href="{{ route('teachers') }}">Teachers</a>
                                            </li>

                                            <li class="menu-item-has-children"> <a href="{{ route('courses') }}">Courses</a>
                                            </li>


                                            <li class="menu-item-has-children"> <a href="{{ route('events') }}">Events</a>
                                            </li>


                                            @auth
                                            <li class="menu-item-has-children"> <a href="{{ route('user' , ['id' => Auth::user()->id]) }}">profile</a>
                                            </li>
                                            @endauth

								            <!--Contact Menu End-->
                                        </ul>



                                    <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
                                        <div class="container">


                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <!-- Left Side Of Navbar -->


                                                <!-- Right Side Of Navbar -->
                                                <ul class="navbar-nav ml-auto" >
                                                    <!-- Authentication Links -->
                                                    @guest
                                                        <li class="nav-item" style="
                                                        background-color: white; color: white";>
                                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                        </li>
                                                        @if (Route::has('register'))
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                            </li>
                                                        @endif
                                                    @else
                                                        <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                {{ Auth::user()->name }} <span class="caret"></span>
                                                            </a>




                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                                                                 document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                        </li>
                                                    @endguest
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>

                                </nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End -->
			</header>
			<!--Header End-->

        </div>

        @yield('content')

        <!-- Partner Start -->

        <!-- Partner End -->

        <!-- Footer Start -->
        <footer id="rs-footer" class="bg3 rs-footer">
			<div class="container">
				<!-- Footer Address -->
				<div>
					<div class="row footer-contact-desc">
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-map-marker"></i>
								<h4 class="contact-title">Address</h4>
								<p class="contact-desc">
									Cairo Egypt<br>

								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-phone"></i>
								<h4 class="contact-title">Phone Number</h4>
								<p class="contact-desc">
									+3453-909-6565
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-map-marker"></i>
								<h4 class="contact-title">Email Address</h4>
								<p class="contact-desc">
									eduLearn@gmail.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="about-widget">
                                <img src="images/logo-footer.png" alt="Footer Logo">
                                <p>We provide you some courses.</p>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <h5 class="footer-title">OUR SITEMAP</h5>
                            <ul class="sitemap-widget">
                                <li class="menu-item-has-children"> <a href="{{ route('index') }}" class="home">Home</a>
                                </li>
                                <li class="menu-item-has-children"> <a href="{{ route('teachers') }}">Teachers</a>
                                </li>
                                <li class="menu-item-has-children"> <a href="{{ route('courses') }}">Courses</a>
                                </li>



                                <li class="menu-item-has-children"> <a href="{{ route('events') }}">Events</a>
                                </li>
                                @auth
                                <li class="menu-item-has-children"> <a href="{{ route('user' , ['id' => Auth::user()->id]) }}">profile</a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <h5 class="footer-title">NEWSLETTER</h5>
                            <p>Sign Up to watch Our Courses and Book our events  &amp; Services</p>

                        </div>
                    </div>
                    <div class="footer-share">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <p>© 2020 <a href="#">EduLearn</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>

		<!-- Canvas Menu start -->
        <nav class="right_menu_togle">

            <div class="canvas-logo">
                <a href="#"><img src="{{ asset('images/logo-white.png') }}" alt="logo"></a>
            </div>
        	<ul class="sidebarnav_menu list-unstyled main-menu">
                <!--Home Menu Start--><li class="menu-item-has-children"> <a href="{{ route('index') }}" class="home">Home</a>
											</li>
											<!-- End Home -->





                                            <li class="menu-item-has-children"> <a href="{{ route('teachers') }}">Teachers</a>
                                            </li>

                                            <li class="menu-item-has-children"> <a href="{{ route('courses') }}">Courses</a>
                                            </li>


                                            <li class="menu-item-has-children"> <a href="{{ route('events') }}">Events</a>
                                            </li>


                                            @auth
                                            <li class="menu-item-has-children"> <a href="{{ route('user' , ['id' => Auth::user()->id]) }}">profile</a>
                                            </li>
                                            @endauth
        	</ul>
            <div class="search-wrap">
                <label class="screen-reader-text">Search for:</label>
                <input type="search" placeholder="Search..." name="s" class="search-input" value="">
                <button type="submit" value="Search"><i class="fa fa-search"></i></button>
            </div>
        </nav>
        <!-- Canvas Menu end -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Computer Technology" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="{{ asset('js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('js/owl.carousel.min.js')  }}"></script>
		<!-- slick.min js -->
        <script src="{{ asset('js/slick.min.js')  }}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('js/isotope.pkgd.min.js')  }}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ asset('js/imagesloaded.pkgd.min.js')  }}"></script>
        <!-- wow js -->
        <script src="{{ asset('js/wow.min.js')  }}"></script>
        <!-- counter top js -->
        <script src="{{ asset('js/waypoints.min.js')  }}"></script>
        <script src="{{ asset ('js/jquery.counterup.min.js')  }}"></script>
        <!-- magnific popup -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!-- rsmenu js -->
        <script src="{{ asset('js/rsmenu-main.js') }}"></script>
        <!-- plugins js -->
        <script src="{{ asset('js/plugins.js')  }}"></script>
		 <!-- main js -->
        <script src="{{ asset('js/main.js')  }}"></script>
        @include('sweetalert::alert')
    </body>

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 May 2020 22:05:24 GMT -->
</html>

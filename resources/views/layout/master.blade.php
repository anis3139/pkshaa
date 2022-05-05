<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Roboto:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('/assets/css')}}/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/assets/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('/assets/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/assets/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('/assets/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Conference Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('/assets/css/fonts.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/assets/css')}}/colors.php?color=222" type="text/css" />
	<link rel="stylesheet" href="{{asset('/assets/css/conference.css')}}" type="text/css" />

    <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<!-- / -->
        @yield('style')
	<!-- Document Title
	============================================= -->
	<title>PKHSAA | @yield('title')</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="responsive-sticky-header transparent-header dark header-size-sm" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="me-lg-0">
							<a href="{{route('home')}}" data-scrollto="#slider" class="standard-logo" data-dark-logo="{{asset('/assets/images')}}/logo.jpeg"><img src="{{asset('/assets/images')}}/logo.jpeg" alt="Canvas Logo"></a>
							<a href="{{route('home')}}" data-scrollto="#slider" class="retina-logo" data-dark-logo="{{asset('/assets/images')}}/logo.jpeg"><img src="{{asset('/assets/images')}}/logo.jpeg" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container not-dark one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="160">
								<li class="menu-item"><a class="menu-link" href="{{route('home')}}"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{route('home')}}" data-href="#section-about"><div>About</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{route('home')}}" data-href="#section-speakers"><div>Speakers</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{route('home')}}" data-href="#section-schedule"><div>Schedule</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{route('home')}}" data-href="#section-tickets"><div>Tickets</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{route('home')}}" data-href="#section-sponsors"><div>Sponsors</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{route('home')}}" data-href="#section-location"><div>Location</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container header-button">
								<li class="menu-item">
									<a href="{{route('user.registration')}}" class="button button-effect m-0" >Buy Tickets</a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		@yield('content')
		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background: linear-gradient(to bottom, rgba(255,255,255,.1), rgba(255,255,255,.03)); border-top-color: #222">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">
					<div class="row clearfix">

						<div class="col-lg-4">

							<div class="widget clearfix">
								<div class="row clearfix">
									<div class="col-lg-8 bottommargin-sm clearfix" style="color:#888;">
										<img src="{{asset('/assets')}}/images/logo-dark.png" alt="Canvas Logo" style="display: block;" height="100">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, consequatur facere molestiae iusto atque.</p>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-pinterest">
											<i class="icon-pinterest"></i>
											<i class="icon-pinterest"></i>
										</a>

										<a href="#" class="social-icon si-small si-borderless si-colored si-rounded si-vimeo">
											<i class="icon-vimeo"></i>
											<i class="icon-vimeo"></i>
										</a>

									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-8">
							<div class="row clearfix">

								<div class="col-lg-3 bottommargin-sm">
									<div class="widget widget_links app_landing_widget_link clearfix">
										<ul class="pt-3">
											<li><a href="">Visiting Place</a></li>
											<li><a href="">Nearby Hotels</a></li>
											<li><a href="">Public Transports</a></li>
											<li><a href="">Weather Info</a></li>
											<li><a href="">Food Cost</a></li>
											<li><a href="">Accommodation </a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-3 bottommargin-sm">
									<div class="widget widget_links app_landing_widget_link clearfix">
										<ul class="pt-3">
											<li><a href="">Code Of Conduct</a></li>
											<li><a href="">Speakers</a></li>
											<li><a href="">Sponsors</a></li>
											<li><a href="">FAQs</a></li>
											<li><a href="">Volunteers</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-6 bottommargin-sm">
									<div id="twitter" class="widget widget-twitter-feed pt-3">

										<ul class="iconlist twitter-feed twitter-feed-avatar" data-username="envato" data-count="2">
											<li></li>
										</ul>

										<a href="#" class="button button-gradient text-white float-end">Follow Us on Twitter</a>

									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-transparent pt-0">
				<div class="container clearfix">

					<div class="w-100 text-center text-md-start">
						Copyrights &copy; 2021 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('/assets/js')}}/jquery.js"></script>
	<script src="{{asset('/assets/js')}}/plugins.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('/assets/js')}}/functions.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script>

		jQuery(document).ready( function(){

			// Ticket Price Changed Script
			var elementEarlyBird = $("#early-bird-person"),
				element1Day = $("#1-day-pricing-person"),
				element2Day = $("#2-day-pricing-person"),
				elementFull = $("#full-pricing-person");

			elementEarlyBird.on( 'change', function(){
				pricingEarlyBird = $(this).prop('value');
				jQuery('.early-bird-pricing').html( '$'+ (pricingEarlyBird * 39) );
			});

			element1Day.on( 'change', function(){
				pricing1day = $(this).prop('value');
				jQuery('.1-day-pricing').html( '$'+ (pricing1day * 29) );
			});

			element2Day.on( 'change', function(){
				pricing2Day = $(this).prop('value');
				jQuery('.2-day-pricing').html( '$'+ (pricing2Day * 49) );
			});

			elementFull.on( 'change', function(){
				pricingFull = $(this).prop('value');
				jQuery('.full-pricing').html( '$'+ (pricingFull * 69) );
			});

		});

	</script>
    <script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif
      </script>
    @yield('js')
</body>
</html>

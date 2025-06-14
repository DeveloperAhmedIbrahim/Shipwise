<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
		<meta charset="utf-8">
        <meta name="theme-color"  content="#253b2f">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="{{ asset('assets/images/fav-icon/favicon.png') }}" type="image/x-icon">
		<link rel="apple-touch-icon" href="{{ asset('assets/images/fav-icon/favicon.png') }}" >
		<title>SHIPWISE - @yield('title')</title>
		
		<meta name="title" content="SHIPWISE - @yield('title')">
		<meta name="description" content="Shipwise Freight Inc. We don’t just move freight — we engineer smarter, faster, and more dependable transportation solutions that empower your supply chain.">
        <meta name="keywords" content="shipwise, shipwise freight, shipwise freight inc, freight service, freight company, logistics company, international shipping, domestic freight, shipping services, cargo transport, freight logistics, global shipping solutions, shipping company, freight forwarding services, supply chain solutions, ocean freight, ground shipping, trucking services, logistics and transportation">

        
		<!-- Open Graph / Facebook / WhatsApp -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="{{ url('/') }}/">
		<meta property="og:title" content="SHIPWISE - @yield('title')">
		<meta property="og:description" content="Shipwise Freight Inc. We don’t just move freight — we engineer smarter, faster, and more dependable logistics.">
		<meta property="og:image" content="{{ asset('assets/images/fav-icon/favicon.png') }}"> <!-- Use absolute path -->

		<!-- Google fonts -->	
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;family=Yantramanav:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">		
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/leaflet.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/leaflet-routing-machine.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/toastr.css') }}">
	</head>


	<body>
		<div id="preloader">
            <img src="{{ asset('assets/images/loading.gif') }}" width="100" height="100" alt="Loading...">
        </div>
		<div class="wrapper">
			<!--Header Section ======================-->
			<header class="section-header header-1 sticky-navbar">				
				<nav class="navbar logistics-navbar navbar-expand-xl navbar-light hover-menu">	
					<div class="container">										
						<a class="navbar-brand py-2 py-xl-0" href="{{ route('home') }}">
						<div class="d-flex justify-content-center align-items-center gap-2">
							<div>
								<img src="{{ asset('assets/images/fav-icon/favicon.png') }}" alt="logo-dark" width="60" height="auto" alt="Shipwise Logo">
							</div>
							<div class="d-flex justify-content-center align-items-start flex-column">
								<h5 class="m-0 p-0 pt-2">SHIPWISE</h2>							
								<p class="m-0 p-0" style="font-size: 15px">Smart logistics for smarter business</p>
							</div>
						</div>
						<span class="logo">
						</span>						
						</a>
						<a href="#" class="logistics-toggler-icon text-decoration-none d-block d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#logisticsNavbar" aria-controls="logisticsNavbar" aria-label="Toggle navigation">
							<svg width="25" height="30" viewBox="0 0 25 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<line x1="1.5" y1="1.5" x2="38.5" y2="1.5" stroke-width="3" stroke-linecap="round"/>
								<line x1="1.5" y1="11.5" x2="38.5" y2="11.5" stroke-width="3" stroke-linecap="round"/>
								<line x1="10.5" y1="21.5" x2="38.5" y2="21.5" stroke-width="3" stroke-linecap="round"/>
							</svg> 
						</a>
						<div class="collapse navbar-collapse">	
							<ul class="navbar-nav gap-30 gap-lg-40 justify-content-end flex-grow-1 align-items-xl-center">
								<li class="nav-item dropdown">
									<a class="nav-link {{ request()->is('/') === true ? 'active' : '' }}" href="{{ route('home') }}" aria-label="nav-links" >
										Home		   
									</a>						
								</li>	

								<li class="nav-item dropdown">
									<a class="nav-link {{ request()->is('about') === true ? 'active' : '' }}" href="{{ route('about') }}" aria-label="nav-links" >
										About		   
									</a>						
								</li>
								
								<li class="nav-item dropdown">
									<a class="nav-link {{ request()->is('services') === true ? 'active' : '' }}" href="{{ route('services') }}" aria-label="nav-links" >
										Services		   
									</a>						
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link {{ request()->is('contact') === true ? 'active' : '' }}" href="{{ route('contact') }}" aria-label="nav-links" >
										Contact		   
									</a>						
								</li>
							</ul>	
						</div>
					</div>	
					<!-- container -->
				</nav>		
			</header>
			<!--Header Section ======================-->


			<!--Mobile-Header ======================-->
			<nav class="navbar logistics-navbar hover-menu" aria-label="Offcanvas navbar large">
				<div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="logisticsNavbar" aria-labelledby="logisticsNavbarLabel">
					<div class="offcanvas-header">
						<span class="offcanvas-title" id="logisticsNavbarLabel">
							<span class="logo">
								<img src="{{ asset('assets/images/logo.png') }}" alt="logo-dark" width="60" alt="Shipwise Logo">	
							</span>
						</span>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<ul class="navbar-nav gap-30 gap-lg-40 justify-content-end flex-grow-1 align-items-xl-center">	
								<li class="nav-item dropdown">
									<a class="nav-link {{ request()->is('/') === true ? 'active' : '' }}" href="{{ route('home') }}" aria-label="nav-links" >
										Home		   
									</a>						
								</li>	

								<li class="nav-item dropdown">
									<a class="nav-link {{ request()->is('about') === true ? 'active' : '' }}" href="{{ route('about') }}" aria-label="nav-links" >
										About		   
									</a>						
								</li>
								
								<li class="nav-item dropdown">
									<a class="nav-link {{ request()->is('services') === true ? 'active' : '' }}" href="{{ route('services') }}" aria-label="nav-links" >
										Services		   
									</a>						
								</li>

								<li class="nav-item dropdown">
									<a class="nav-link {{ request()->is('contact') === true ? 'active' : '' }}" href="{{ route('contact') }}" aria-label="nav-links" >
										Contact		   
									</a>						
								</li>						
													
						</ul>						  
					</div>
				</div>
			</nav>			
			<!--Mobile-Header ======================-->

            @yield('content')			

			<!--Footer Section ======================-->
			<footer class="section-footer footer-1 bg-secondary" data-bs-theme="dark">
				<div class="container">
					<div class="footer-wrapper pt-60 pb-5 pt-lg-100 pb-lg-90">
						<div class="row gx-40 gy-5 justify-content-lg-between">

							<div class="col-md-5 col-lg-5 col-xl-3 px-1">
								<div class="logo-footer mb-20 mb-xl-30">
									<a class="navbar-brand py-0" href="index-2.html">
										<span class="logo">
											<img src="assets/images/logo.jpg" class="img-fluid rounded-2" alt="logo-white" alt="Shipwise Logo">							
										</span>						
									</a>
								</div>

								<div class="d-flex gap-20 social-icons text-white">
									<a href="#" class="text-decoration-none" aria-label="social-icon">
										<span class="facebook-icon">											
											<svg width="9" height="17"><use xlink:href="#facebook-icon"></use></svg> 
										</span>
									</a>
									<a href="#" class="text-decoration-none" aria-label="social-icon">
										<span class="twitter-icon">											
											<svg width="19" height="15"><use xlink:href="#twitter-icon"></use></svg> 
										</span>
									</a>									
									<a href="#" class="text-decoration-none" aria-label="social-icon">
										<span class="linkedin-icon">											
											<svg width="17" height="15"><use xlink:href="#linkedin-icon"></use></svg> 
										</span>
									</a>	
									<a href="#" class="text-decoration-none" aria-label="social-icon">
										<span class="instagram-icon-3">											
											<svg width="18" height="18"><use xlink:href="#instagram-icon-3"></use></svg> 
										</span>
									</a>								
								</div>
								{{-- <!-- logo-footer -->
								<div class="row">
									<ul class="list-unstyled mb-0 d-flex flex-column gap-10 mt-5">
										<li class="d-flex gap-3 align-items-center">
											<span class="contact-icon location-icon">											
												<svg width="24" height="24"><use xlink:href="#location-icon"></use></svg> 
											</span>											
											<p class="mb-0"><a id="mapDirectionBtn" href="#" class="text-decoration-none link-hover-animation-2" data-bs-toggle="modal" data-bs-target="#RoutingMapModal">Always On: 24/7/365 North America Coverage</a></p>
										</li>
									</ul>
								</div> --}}
							</div>
							<!-- col-4 -->

							<div class="col-md-3 col-lg-3 col-xl-2">
								<div class="d-flex justify-content-md-center justify-content-xxl-end">
									<div class="d-flex flex-column gap-20 gap-lg-30">
										{{-- <h5 class="mb-0">Our Company</h5> --}}
										<ul class="list-unstyled mb-0 d-flex flex-column gap-10">
											<li class="d-flex gap-3 align-items-center">
												<span class="contact-icon mail-icon">											
													<svg width="20" height="20"><use xlink:href="#mail-icon"></use></svg> 
												</span>											
												<p class="mb-0"><a href="mailto:info@shipwisefreight.com" class="text-decoration-none link-hover-animation-2">sales@shipwisefreight.com </a></p>
											</li>
											<li class="d-flex gap-3 align-items-center">
												<span class="contact-icon phone-icon">											
													<svg width="20" height="20"><use xlink:href="#phone-icon"></use></svg> 
												</span>
												<p class="mb-0"><a href="tel:+14373538433" class="text-decoration-none link-hover-animation-2">+1437-353-8433<br>+1905-283-3652</a></p>
											</li>
											<li class="d-flex gap-3 align-items-start">
												<span class="contact-icon location-icon">											
													<svg width="24" height="24"><use xlink:href="#location-icon"></use></svg> 
												</span>											
												<p class="mb-0">
													<a id="mapDirectionBtn" href="#" class="text-decoration-none link-hover-animation-2" data-bs-toggle="modal" data-bs-target="#RoutingMapModal">
														Head Office
													</a>
													<br>
													<a id="mapDirectionBtn" href="#" class="text-decoration-none link-hover-animation-2" data-bs-toggle="modal" data-bs-target="#RoutingMapModal">
														SHIPWISE FREIGHT INC 5800 Ambler Dr Mississauga, ON L4W 4J4
													</a>
												</p>
											</li>
											<li class="d-flex gap-3 align-items-start">
												<span class="contact-icon location-icon">											
													<svg width="24" height="24"><use xlink:href="#location-icon"></use></svg> 
												</span>											
												<p class="mb-0">
													<a id="mapDirectionBtn" href="#" class="text-decoration-none link-hover-animation-2" data-bs-toggle="modal" data-bs-target="#RoutingMapModal">
														USA OFFICE
													</a>
													<br>
													<a id="mapDirectionBtn" href="#" class="text-decoration-none link-hover-animation-2" data-bs-toggle="modal" data-bs-target="#RoutingMapModal">
														SHIPWISE FREIGHT LLC
														5900 Balcones DR STE 100
														Austin TX 78731
													</a>
												</p>
											</li>											
										</ul>
									</div>	
								</div>
															
							</div>
							<!-- col-2 -->

							<div class="col-md-4 col-lg-3 col-xxl-2">
								<div class="d-flex justify-content-md-end justify-content-xl-center justify-content-xxl-end">
									<div class="d-flex flex-column gap-20 gap-lg-30">
										<h5 class="mb-0">Our Company</h5>
										<ul class="list-unstyled mb-0 d-flex flex-column gap-10">
											<li class="d-flex gap-10 align-items-center">
												<span class="chevron-right-icon">											
													<svg width="9" height="14"><use xlink:href="#chevron-right-icon"></use></svg> 
												</span>
												<a href="{{ route('home') }}" class="text-decoration-none link-hover-animation-1">Home</a>
											</li>
											<li class="d-flex gap-10 align-items-center">
												<span class="chevron-right-icon">											
													<svg width="9" height="14"><use xlink:href="#chevron-right-icon"></use></svg> 
												</span>
												<a href="{{ route('about') }}" class="text-decoration-none link-hover-animation-1">About</a>
											</li>
											<li class="d-flex gap-10 align-items-center">
												<span class="chevron-right-icon">											
													<svg width="9" height="14"><use xlink:href="#chevron-right-icon"></use></svg> 
												</span>
												<a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Services</a>
											</li>										
											<li class="d-flex gap-10 align-items-center">
												<span class="chevron-right-icon">											
													<svg width="9" height="14"><use xlink:href="#chevron-right-icon"></use></svg> 
												</span>
												<a href="{{ route('contact') }}" class="text-decoration-none link-hover-animation-1">Contact</a>
											</li>
										</ul>
									</div>
								</div>
																
							</div>
							<!-- col-2 -->

							<div class="col-md-6 col-lg-5 col-xl-4 col-xxl-4 d-flex justify-content-end">								
								<div class="footer-subscription d-flex flex-column gap-20 gap-lg-30">
									<h5 class="mb-0">Let’s Move Your Business Forward — Together</h5>
									<p class="mb-0 body-color-style-1">
										Whether you're a regional distributor or a Fortune 500 enterprise, Shipwise Freight Inc. delivers 
										the logistical backbone your business needs to scale — with integrity, intelligence, and 
										relentless follow-through.
									</p>
	
									<!-- social-icons -->
									<!-- subscriptionForm -->	
																	
								</div>
								<!-- d-flex -->
							</div>
							<!-- col-3 -->
						</div>
						<!-- row -->
					</div>
					<!-- footer-wrapper -->
				</div>
				<!-- container -->

				<div class="footer-separator"></div>

				<div class="container">
					<div class="copyright py-30 py-lg-40 d-flex flex-column flex-md-row gap-3 justify-content-between">						
						<p class="mb-0 copyright-text">&copy; <span class="dynamic-year"></span>, SHIPWISE. All Rights Reserved</p>
						<div class="d-flex gap-4">
							<a href="#" class="text-decoration-none link-hover-animation-1 copyright-text" aria-label="Privacy">Privacy Policy</a>
							<a href="#" class="text-decoration-none link-hover-animation-1 copyright-text" aria-label="Terms">Terms & Conditions</a>
						</div>
					</div>
				</div>
			</footer>
			<!--Footer Section ======================-->


			<!--Back-to-top ======================-->
			<div class="progressCounter progressScroll progress-scroll-opacity-0">
				<div class="progressScroll-border">
				  <div class="progressScroll-circle">
					<span class="progressScroll-text text-white">
						<span class="progress-arrow-icon">											
							<svg width="12" height="18"><use xlink:href="#progress-arrow-icon"></use></svg> 
						</span>
					</span>
					</div>
				</div>
			</div>
			<!--Back-to-top ======================-->


			<!-- Modal-Map -->
			{{-- <div class="modal modal-fullscreen routing-map-modal fade" id="RoutingMapModal" tabindex="-1" aria-labelledby="RoutingMapLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
						<h1 class="modal-title fs-5" id="RoutingMapLabel">Head Office: Toronto, Ontario.</h1>
						<h1 class="modal-title fs-5" id="RoutingMapLabel">Head Office: Toronto, Ontario.</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
						<div id="RoutingMap"></div>
						</div>
					</div>
				</div>
			</div> --}}
			<!-- Modal-Map -->
						

			
			<!-- SVG ======================-->
			<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">	

				<symbol id="progress-arrow-icon" viewBox="0 0 12 18" fill="none">
					<path d="M6.00008 1.5L10.1667 5.66667M6.00008 1.5L1.83341 5.66667M6.00008 1.5L6.00008 16.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</symbol>

				<symbol id="instagram-icon-3" viewBox="0 0 18 18">
					<g clip-path="url(#clip0_1618_1223)">
						<path d="M6.49049 0.667969H11.4735C11.5715 0.676796 11.6667 0.685951 11.7635 0.694451C12.3892 0.75134 13.0261 0.751993 13.6385 0.874924C15.2601 1.20187 16.3894 2.14282 16.9596 3.71509C17.2352 4.47557 17.299 5.2707 17.3016 6.0691C17.3075 7.97976 17.3163 9.89043 17.296 11.8008C17.2898 12.4056 17.248 13.0196 17.1325 13.6117C16.8206 15.2079 15.9078 16.3371 14.3767 16.9335C13.6378 17.2212 12.8597 17.298 12.076 17.3059C10.3177 17.3235 8.55907 17.3386 6.80076 17.3304C5.93436 17.3258 5.06338 17.3222 4.21136 17.1156C2.83132 16.7808 1.80603 15.9984 1.1966 14.706C0.821269 13.9109 0.706184 13.0553 0.697684 12.1885C0.678721 10.3871 0.65845 8.58494 0.672836 6.78314C0.67508 6.02384 0.729701 5.2656 0.836308 4.51382C1.00861 3.34728 1.57063 2.37887 2.52498 1.66286C3.34234 1.04919 4.29048 0.805286 5.29126 0.734339C5.6898 0.706221 6.09031 0.689874 6.49049 0.667969ZM9.00175 15.8709V15.8454C9.4415 15.8454 9.88156 15.8585 10.3207 15.8428C11.2636 15.8101 12.2127 15.8176 13.1464 15.7035C14.3784 15.5531 15.2219 14.8557 15.5949 13.6438C15.7656 13.0879 15.795 12.5119 15.8016 11.9368C15.8186 10.4606 15.8398 8.98446 15.8267 7.50831C15.8189 6.63046 15.7966 5.74804 15.6959 4.87706C15.542 3.53658 14.6929 2.62964 13.3746 2.3671C12.7992 2.25267 12.2012 2.21867 11.6124 2.20853C10.1585 2.18434 8.7026 2.18892 7.249 2.19382C6.41399 2.19644 5.57668 2.18565 4.74918 2.33114C3.48456 2.55313 2.61718 3.35513 2.35889 4.61321C2.24773 5.15659 2.21046 5.7209 2.19869 6.27703C2.17024 7.61751 2.15978 8.95798 2.17449 10.2985C2.18496 11.2361 2.21209 12.1764 2.29971 13.1102C2.3808 13.9763 2.77705 14.705 3.51333 15.2115C4.08156 15.6038 4.73186 15.7519 5.40569 15.7777C6.60361 15.8222 7.80285 15.8402 9.00175 15.8709Z"/>
						<path d="M4.71291 9.01086C4.70507 6.65261 6.63175 4.72494 8.99589 4.72461C10.1297 4.72357 11.2177 5.17259 12.0207 5.97306C12.8238 6.77353 13.2763 7.86 13.2789 8.99386C13.2949 11.3505 11.3734 13.2821 9.00537 13.2906C6.64679 13.2987 4.72109 11.3789 4.71291 9.01086ZM8.9887 11.7814C9.53785 11.7831 10.0752 11.6219 10.5327 11.3182C10.9902 11.0144 11.3473 10.5818 11.5588 10.075C11.7703 9.56825 11.8268 9.01011 11.721 8.47125C11.6152 7.93238 11.3519 7.43702 10.9644 7.04784C10.577 6.65866 10.0828 6.39317 9.54444 6.28495C9.00606 6.17674 8.44767 6.23067 7.93995 6.43992C7.43223 6.64918 6.998 7.00434 6.69221 7.46048C6.38641 7.91661 6.22281 8.45321 6.22209 9.00236C6.22054 9.36669 6.29095 9.72775 6.42929 10.0648C6.56762 10.4019 6.77115 10.7083 7.0282 10.9665C7.28525 11.2247 7.59076 11.4296 7.92719 11.5694C8.26362 11.7093 8.62436 11.7813 8.9887 11.7814Z"/>
						<path d="M13.4715 3.55919C13.7338 3.56828 13.982 3.68039 14.1622 3.87123C14.3424 4.06207 14.4402 4.31625 14.4342 4.57866C14.4283 4.84108 14.3191 5.09058 14.1305 5.27307C13.9418 5.45557 13.6888 5.55634 13.4264 5.55355C13.2944 5.55215 13.164 5.52457 13.0427 5.4724C12.9215 5.42022 12.8118 5.34451 12.72 5.24963C12.6282 5.15475 12.5562 5.0426 12.5081 4.91968C12.46 4.79676 12.4367 4.66551 12.4397 4.53354C12.4427 4.40157 12.4718 4.27151 12.5255 4.15089C12.5791 4.03027 12.6561 3.92149 12.7521 3.83086C12.8481 3.74023 12.9611 3.66955 13.0846 3.62292C13.208 3.57628 13.3396 3.55462 13.4715 3.55919Z"/>
						</g>
						<defs>
						<clipPath id="clip0_1618_1223">
						<rect width="16.6408" height="16.6667" fill="white" transform="translate(0.667969 0.667969)"/>
						</clipPath>
						</defs>
				</symbol>


				<symbol id="plus-icon" viewBox="0 0 10 10" fill="none">
					<path d="M5 1V9" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M1 5H9" stroke-linecap="round" stroke-linejoin="round"/>
				</symbol>

				<symbol id="chevron-right-icon" viewBox="0 0 9 14" fill="none">
					<path d="M1 1L7 7L1 13" stroke-width="2"/>
				</symbol>


				<symbol id="arrow-icon" viewBox="0 0 16 16">
					<path d="M14 7.99984L10.6667 4.6665M14 7.99984L10.6667 11.3332M14 7.99984H2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</symbol>

				<symbol id="arrow-icon-2" viewBox="0 0 18 18">
					<path d="M1.9165 16.0837L16.0832 1.91699M16.0832 1.91699H1.9165M16.0832 1.91699V16.0837" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
				</symbol>

				<symbol id="arrow-icon-3" viewBox="0 0 20 12" fill="none">
					<path d="M19 6L14 1M19 6L14 11M19 6H1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</symbol>

				<symbol id="check-icon" viewBox="0 0 17 13" fill="none">
					<path d="M1 6L6 11L16 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</symbol>

				<symbol id="star-rating-icon" viewBox="0 0 17 16">
					<path d="M4.02618 15.9955C3.10173 16.0199 2.58617 15.4132 2.71506 14.5799C2.88617 13.4688 3.0684 12.3577 3.30173 11.2643C3.44173 10.5977 3.35507 10.1021 2.80173 9.62657C1.96436 8.92286 1.18345 8.15458 0.466175 7.32879C0.170619 6.9799 -0.0538225 6.33546 0.0661775 5.9399C0.170622 5.59546 0.777283 5.27323 1.21284 5.18434C2.36617 4.93323 3.55062 4.84434 4.7084 4.61768C5.05446 4.53293 5.35452 4.31802 5.54617 4.01767C6.11728 2.98656 6.55284 1.87545 7.15728 0.868788C7.3795 0.479899 7.93729 0.0821246 8.35506 0.0665691C8.72395 0.0510135 9.24395 0.484346 9.46617 0.85768C10.0617 1.87324 10.504 2.97768 11.0751 4.00879C11.263 4.31203 11.5621 4.52975 11.9084 4.61545C13.0973 4.83767 14.3128 4.93546 15.4928 5.19324C15.9173 5.28657 16.4751 5.63767 16.5928 6.00434C16.7106 6.37101 16.4751 6.98879 16.1884 7.31546C15.4184 8.17075 14.5961 8.97748 13.7262 9.73101C13.5328 9.88734 13.3899 10.0972 13.3152 10.3344C13.2405 10.5715 13.2373 10.8254 13.3062 11.0643C13.5151 12.1755 13.7506 13.2688 13.8573 14.3821C13.8995 14.8266 13.7795 15.4932 13.4862 15.6955C13.1395 15.9177 12.4573 15.9177 12.0351 15.7377C10.9819 15.2724 9.95848 14.7425 8.97062 14.151C8.78189 14.0177 8.55707 13.9451 8.32604 13.9427C8.09501 13.9403 7.86872 14.0083 7.67729 14.1377C6.7084 14.6999 5.70173 15.1977 4.70395 15.711C4.48355 15.8185 4.25727 15.9134 4.02618 15.9955Z"/>
				</symbol>

				<symbol id="video-icon" viewBox="0 0 21 26">
					<path d="M0.500998 12.9718C0.500998 9.35922 0.500998 5.74709 0.500998 2.13545C0.500998 1.53824 0.578769 0.996786 1.15397 0.676903C1.72917 0.35702 2.23247 0.572721 2.73578 0.897006C8.36356 4.51647 13.9928 8.13594 19.6235 11.7554C20.8194 12.5243 20.8165 13.4898 19.6162 14.2602C14.0041 17.8699 8.39143 21.4786 2.77833 25.0863C2.26182 25.4179 1.75118 25.6732 1.14663 25.3299C0.572897 25.0056 0.49953 24.4641 0.500998 23.8625C0.506867 20.2333 0.506867 16.603 0.500998 12.9718Z"/>
				</symbol>


				<symbol id="location-icon-sm" viewBox="0 0 11 12">
					<g clip-path="url(#clip0_1_217)">
						<path d="M4.7037 11.9999C4.52543 11.9849 4.34745 11.9691 4.16947 11.9547C3.33909 11.8891 2.52162 11.7551 1.73141 11.4838C1.26813 11.3249 0.824798 11.1267 0.453005 10.7965C0.265936 10.6303 0.120209 10.4347 0.0477858 10.1925C-0.085919 9.74714 0.0659647 9.37945 0.375597 9.06484C0.685229 8.75022 1.07931 8.55289 1.4898 8.39367C2.03312 8.18285 2.59639 8.04592 3.1702 7.94975C3.196 7.94535 3.22093 7.93685 3.25553 7.92805C3.23441 7.89052 3.21917 7.86003 3.20099 7.83159C2.79782 7.20118 2.38732 6.57576 1.99178 5.93978C1.48013 5.11527 1.29159 4.21657 1.464 3.26012C1.71147 1.88583 2.48027 0.885098 3.75839 0.335032C5.07549 -0.230868 6.3536 -0.0739993 7.52528 0.761069C8.33748 1.33958 8.84268 2.13682 9.04471 3.11087C9.25289 4.11571 9.08634 5.0663 8.54126 5.93978C8.14542 6.57488 7.73551 7.2006 7.33205 7.83188C7.31388 7.8612 7.29863 7.89052 7.27722 7.92864C7.51179 7.97643 7.73639 8.0166 7.95894 8.06909C8.59433 8.21775 9.218 8.4013 9.77363 8.75902C10.0797 8.95576 10.3442 9.19239 10.4709 9.55069C10.5976 9.909 10.5295 10.2348 10.3149 10.5356C10.1003 10.8364 9.79386 11.0367 9.4684 11.2021C8.80105 11.5407 8.08414 11.724 7.34935 11.8313C6.87552 11.9005 6.39612 11.9319 5.91936 11.9808C5.88095 11.9846 5.84312 11.9934 5.80501 11.9999H4.7037ZM5.26344 9.76298C5.29746 9.71225 5.32209 9.67794 5.34408 9.64247C6.18501 8.32477 7.02242 7.00356 7.86805 5.68997C8.53804 4.64848 8.62453 3.56271 8.0733 2.45935C7.56604 1.44601 6.71895 0.855777 5.5892 0.741718C4.39583 0.620914 3.43057 1.07539 2.71191 2.0339C1.95396 3.04461 1.90646 4.50861 2.58436 5.56828C3.18115 6.5007 3.77735 7.43321 4.37296 8.36582C4.66822 8.82558 4.96085 9.28621 5.26462 9.76298H5.26344ZM5.26168 11.3144C5.7015 11.285 6.14132 11.2672 6.58114 11.2264C7.34349 11.1578 8.09294 11.0129 8.80955 10.7303C9.13648 10.6013 9.45462 10.4532 9.69622 10.1829C9.87684 9.97937 9.8745 9.8052 9.69622 9.60171C9.52851 9.40995 9.31505 9.28093 9.08898 9.17274C8.39964 8.84112 7.65987 8.69246 6.90836 8.59277C6.87904 8.58895 6.83271 8.62209 6.81278 8.65141C6.72481 8.77984 6.64301 8.91295 6.55944 9.04431C6.23691 9.5504 5.91437 10.0567 5.59184 10.5632C5.50006 10.7098 5.37867 10.7875 5.20187 10.7596C5.0752 10.7394 4.99985 10.6535 4.93505 10.5514C4.53784 9.9259 4.14044 9.30117 3.74284 8.67721C3.7015 8.61212 3.66632 8.57605 3.57718 8.5957C3.41415 8.63206 3.24614 8.64525 3.08136 8.67545C2.46268 8.7898 1.85338 8.93934 1.30156 9.25367C1.12697 9.35534 0.96681 9.48 0.825383 9.62429C0.654147 9.79728 0.662944 9.98288 0.825383 10.1658C0.899941 10.2507 0.984179 10.3264 1.07637 10.3916C1.44465 10.6499 1.86248 10.8004 2.29086 10.922C3.26139 11.1997 4.25626 11.2906 5.26286 11.3144H5.26168Z"/>
						<path d="M7.02215 3.89711C7.02267 4.24417 6.9203 4.58359 6.72799 4.8725C6.53567 5.1614 6.26203 5.38681 5.94165 5.52025C5.62127 5.6537 5.26853 5.68918 4.92799 5.62221C4.58745 5.55525 4.2744 5.38885 4.0284 5.14404C3.7824 4.89922 3.61449 4.58698 3.54588 4.24677C3.47727 3.90656 3.51104 3.55365 3.64293 3.23263C3.77482 2.9116 3.99891 2.63688 4.28687 2.44317C4.57484 2.24945 4.91377 2.14545 5.26083 2.14429C5.72649 2.14428 6.17321 2.32868 6.50327 2.65716C6.83334 2.98563 7.0199 3.43145 7.02215 3.89711ZM6.31844 3.89711C6.3186 3.75888 6.29152 3.62196 6.23876 3.49419C6.18601 3.36642 6.1086 3.2503 6.01096 3.15244C5.91333 3.05459 5.79737 2.97692 5.66972 2.92388C5.54207 2.87084 5.40522 2.84346 5.26698 2.8433C5.12875 2.84315 4.99184 2.87022 4.86407 2.92298C4.7363 2.97574 4.62017 3.05315 4.52232 3.15078C4.42446 3.24842 4.3468 3.36438 4.29375 3.49203C4.24071 3.61968 4.21333 3.75653 4.21318 3.89476C4.20907 4.47005 4.69522 4.9559 5.2705 4.95033C5.84578 4.94476 6.32108 4.47005 6.31932 3.89799L6.31844 3.89711Z"/>
						</g>
						<defs>
						<clipPath id="clip0_1_217">
						<rect width="10.5339" height="12" fill="white"/>
						</clipPath>
						</defs>
				</symbol>


				<symbol id="globe-icon" viewBox="0 0 30 30" fill="none">
					<path d="M15 1.66675C18.335 5.31789 20.2303 10.0561 20.3333 15.0001C20.2303 19.944 18.335 24.6823 15 28.3334M15 1.66675C11.6649 5.31789 9.76962 10.0561 9.66663 15.0001C9.76962 19.944 11.6649 24.6823 15 28.3334M15 1.66675C7.63616 1.66675 1.66663 7.63628 1.66663 15.0001C1.66663 22.3639 7.63616 28.3334 15 28.3334M15 1.66675C22.3638 1.66675 28.3333 7.63628 28.3333 15.0001C28.3333 22.3639 22.3638 28.3334 15 28.3334M2.33332 11.0001H27.6667M2.33329 19.0001H27.6666" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</symbol>


				<symbol id="clock-icon" viewBox="0 0 32 32">
					<g clip-path="url(#clip0_60_2469)">
						<path d="M16.0008 28.9308C23.1327 28.9308 28.9313 23.1304 28.9313 16.0003C28.9313 8.87025 23.1302 3.06982 16.0008 3.06982C8.87136 3.06982 3.07031 8.87025 3.07031 16.0003C3.07031 23.1304 8.87074 28.9308 16.0008 28.9308ZM16.0008 4.62024C22.2756 4.62024 27.3809 9.72546 27.3809 16.0003C27.3809 22.2752 22.2756 27.3804 16.0008 27.3804C9.72595 27.3804 4.62073 22.2752 4.62073 16.0003C4.62073 9.72546 9.72533 4.62024 16.0008 4.62024Z"/>
						<path d="M16.0004 32.0007C18.1024 32.0064 20.1847 31.5951 22.1267 30.7906C24.0687 29.9862 25.8318 28.8045 27.3141 27.3141C28.8044 25.8318 29.986 24.0686 30.7903 22.1266C31.5947 20.1846 32.0059 18.1024 32.0001 16.0004C32.0059 13.8984 31.5947 11.8161 30.7903 9.87413C29.986 7.93213 28.8044 6.16895 27.3141 4.68666C25.8318 3.19622 24.0687 2.01457 22.1267 1.21012C20.1847 0.405661 18.1024 -0.00562715 16.0004 5.9145e-05C13.8983 -0.00567498 11.8159 0.405589 9.87377 1.21005C7.93166 2.0145 6.16839 3.19617 4.68604 4.68666C3.19579 6.16904 2.01432 7.93223 1.20997 9.87421C0.405631 11.8162 -0.00560706 13.8984 5.77366e-05 16.0004C-0.00560706 18.1023 0.405631 20.1845 1.20997 22.1265C2.01432 24.0685 3.19579 25.8317 4.68604 27.3141C6.16839 28.8046 7.93166 29.9862 9.87377 30.7907C11.8159 31.5951 13.8983 32.0064 16.0004 32.0007ZM16.0004 1.55048C23.9677 1.55048 30.4503 8.03246 30.4503 16.0004C30.4503 23.9683 23.9683 30.4503 16.0004 30.4503C8.03246 30.4503 1.55048 23.9677 1.55048 16.0004C1.55048 8.03308 8.03246 1.55048 16.0004 1.55048Z"/>
						<path d="M14.5534 15.6498C14.5256 15.7645 14.5117 15.8822 14.5119 16.0002C14.5119 16.3949 14.6687 16.7735 14.9478 17.0527C15.2269 17.3318 15.6055 17.4886 16.0003 17.4886C16.395 17.4886 16.7736 17.3318 17.0527 17.0527C17.3318 16.7735 17.4887 16.3949 17.4887 16.0002C17.4889 15.7893 17.4441 15.5808 17.3572 15.3887L22.8382 9.91016C22.9367 9.81135 22.992 9.67755 22.992 9.53806C22.992 9.39857 22.9367 9.26476 22.8382 9.16596C22.7394 9.06749 22.6056 9.01221 22.4661 9.01221C22.3266 9.01221 22.1928 9.06749 22.094 9.16596L16.613 14.647C16.4208 14.5602 16.2124 14.5154 16.0015 14.5155C15.8835 14.5157 15.7659 14.5296 15.6511 14.5571L11.4774 10.3833C11.3319 10.2381 11.1347 10.1565 10.9291 10.1565C10.7236 10.1565 10.5264 10.2381 10.3809 10.3833C10.2357 10.5288 10.1541 10.726 10.1541 10.9316C10.1541 11.1372 10.2357 11.3343 10.3809 11.4798L14.5534 15.6498Z"/>
						<path d="M16 8.49142C16.1645 8.49142 16.3223 8.42608 16.4386 8.30978C16.5549 8.19347 16.6202 8.03573 16.6202 7.87125V5.99028C16.6202 5.82581 16.5549 5.66806 16.4386 5.55176C16.3223 5.43546 16.1645 5.37012 16 5.37012C15.8356 5.37012 15.6778 5.43546 15.5615 5.55176C15.4452 5.66806 15.3799 5.82581 15.3799 5.99028V7.87125C15.3799 8.03573 15.4452 8.19347 15.5615 8.30978C15.6778 8.42608 15.8356 8.49142 16 8.49142Z"/>
						<path d="M16 23.5093C15.8356 23.5093 15.6778 23.5746 15.5615 23.6909C15.4452 23.8072 15.3799 23.965 15.3799 24.1294V26.0104C15.3799 26.1749 15.4452 26.3326 15.5615 26.4489C15.6778 26.5652 15.8356 26.6306 16 26.6306C16.1645 26.6306 16.3223 26.5652 16.4386 26.4489C16.5549 26.3326 16.6202 26.1749 16.6202 26.0104V24.1294C16.6202 23.965 16.5549 23.8072 16.4386 23.6909C16.3223 23.5746 16.1645 23.5093 16 23.5093Z"/>
						<path d="M24.1288 16.6205H26.0104C26.1749 16.6205 26.3326 16.5551 26.4489 16.4388C26.5652 16.3225 26.6306 16.1648 26.6306 16.0003C26.6306 15.8358 26.5652 15.6781 26.4489 15.5618C26.3326 15.4455 26.1749 15.3801 26.0104 15.3801H24.1288C23.9644 15.3801 23.8066 15.4455 23.6903 15.5618C23.574 15.6781 23.5087 15.8358 23.5087 16.0003C23.5087 16.1648 23.574 16.3225 23.6903 16.4388C23.8066 16.5551 23.9644 16.6205 24.1288 16.6205Z"/>
						<path d="M8.4913 16.0003C8.4913 15.8358 8.42596 15.6781 8.30965 15.5618C8.19335 15.4455 8.03561 15.3801 7.87113 15.3801H5.99016C5.82568 15.3801 5.66794 15.4455 5.55164 15.5618C5.43533 15.6781 5.37 15.8358 5.37 16.0003C5.37 16.1648 5.43533 16.3225 5.55164 16.4388C5.66794 16.5551 5.82568 16.6205 5.99016 16.6205H7.87113C8.03561 16.6205 8.19335 16.5551 8.30965 16.4388C8.42596 16.3225 8.4913 16.1648 8.4913 16.0003Z"/>
						</g>
						<defs>
						<clipPath id="clip0_60_2469">
						<rect width="32.0006" height="32" fill="white"/>
						</clipPath>
						</defs>
				</symbol>

				<symbol id="quote-icon" viewBox="0 0 78 60">
					<g clip-path="url(#clip0_7_1293)">
						<path d="M31.1211 0C31.2101 0.100813 31.3111 0.190315 31.4219 0.266485C33.5537 1.3286 34.5854 3.09879 34.1971 5.03649C33.7669 7.18737 32.0957 8.50835 29.6555 8.56926C24.9827 8.65467 20.4654 10.2621 16.789 13.1477C13.1127 16.0333 10.478 20.0394 9.28495 24.5581C9.2012 24.8741 9.17073 25.2015 9.08317 25.7001H29.3776C32.5411 25.7001 34.2542 27.3904 34.258 30.5196C34.258 38.7501 34.258 46.9818 34.258 55.2148C34.258 58.2603 32.5144 59.9543 29.4461 59.9581C21.5507 59.9581 13.6514 59.8896 5.75217 60.0038C3.08736 60.0419 1.14206 59.2881 0 56.8213V27.1277C0.0913647 26.7661 0.209386 26.4044 0.270296 26.0352C2.08236 14.7135 8.24185 6.71151 18.7869 2.25367C21.4136 1.14206 24.3373 0.730922 27.1239 0.00381058L31.1211 0Z"/>
						<path d="M73.9483 2.64032e-05C74.0373 0.100839 74.1383 0.190342 74.2491 0.266512C76.3809 1.32863 77.4126 3.09882 77.0243 5.0327C76.5941 7.18739 74.9229 8.50076 72.4827 8.56928C67.1455 8.63849 62.0315 10.7216 58.1651 14.4014C54.9175 17.4014 52.7095 21.3574 51.8609 25.6964H72.0373C75.4026 25.6964 77.07 27.3371 77.0738 30.6453C77.0738 38.7666 77.0738 46.9006 77.0738 55.0473C77.0738 58.2793 75.3873 59.9505 72.1249 59.9543H47.7228C44.4832 59.9543 42.8082 58.2679 42.8044 55.0245C42.8044 46.7483 42.8044 38.4722 42.8044 30.1923C42.8463 14.7783 53.8176 2.30699 69.1174 0.239861C69.3925 0.180241 69.6624 0.0987633 69.9245 -0.00378418L73.9483 2.64032e-05Z"/>
						</g>
						<defs>
						<clipPath id="clip0_7_1293">
						<rect width="77.1042" height="60" fill="white"/>
						</clipPath>
						</defs>
				</symbol>

				

				<symbol id="mail-icon" viewBox="0 0 22 18" fill="none">
					<path d="M1 4L9.16492 9.71544C9.82609 10.1783 10.1567 10.4097 10.5163 10.4993C10.8339 10.5785 11.1661 10.5785 11.4837 10.4993C11.8433 10.4097 12.1739 10.1783 12.8351 9.71544L21 4M5.8 17H16.2C17.8802 17 18.7202 17 19.362 16.673C19.9265 16.3854 20.3854 15.9265 20.673 15.362C21 14.7202 21 13.8802 21 12.2V5.8C21 4.11984 21 3.27976 20.673 2.63803C20.3854 2.07354 19.9265 1.6146 19.362 1.32698C18.7202 1 17.8802 1 16.2 1H5.8C4.11984 1 3.27976 1 2.63803 1.32698C2.07354 1.6146 1.6146 2.07354 1.32698 2.63803C1 3.27976 1 4.11984 1 5.8V12.2C1 13.8802 1 14.7202 1.32698 15.362C1.6146 15.9265 2.07354 16.3854 2.63803 16.673C3.27976 17 4.11984 17 5.8 17Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</symbol>

				<symbol id="location-icon" viewBox="0 0 22 22" fill="none">
					<path d="M19 11C19 15.4183 15.4183 19 11 19M19 11C19 6.58172 15.4183 3 11 3M19 11H21M11 19C6.58172 19 3 15.4183 3 11M11 19V21M3 11C3 6.58172 6.58172 3 11 3M3 11H1M11 3V1M14 11C14 12.6569 12.6569 14 11 14C9.34315 14 8 12.6569 8 11C8 9.34315 9.34315 8 11 8C12.6569 8 14 9.34315 14 11Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</symbol>

				<symbol id="phone-icon" viewBox="0 0 24 24" fill="none">
					<path d="M14.0497 6C15.0264 6.19057 15.924 6.66826 16.6277 7.37194C17.3314 8.07561 17.8091 8.97326 17.9997 9.95M14.0497 2C16.0789 2.22544 17.9713 3.13417 19.4159 4.57701C20.8606 6.01984 21.7717 7.91101 21.9997 9.94M10.2266 13.8631C9.02506 12.6615 8.07627 11.3028 7.38028 9.85323C7.32041 9.72854 7.29048 9.66619 7.26748 9.5873C7.18576 9.30695 7.24446 8.96269 7.41447 8.72526C7.46231 8.65845 7.51947 8.60129 7.63378 8.48698C7.98338 8.13737 8.15819 7.96257 8.27247 7.78679C8.70347 7.1239 8.70347 6.26932 8.27247 5.60643C8.15819 5.43065 7.98338 5.25585 7.63378 4.90624L7.43891 4.71137C6.90747 4.17993 6.64174 3.91421 6.35636 3.76987C5.7888 3.4828 5.11854 3.4828 4.55098 3.76987C4.2656 3.91421 3.99987 4.17993 3.46843 4.71137L3.3108 4.86901C2.78117 5.39863 2.51636 5.66344 2.31411 6.02348C2.08969 6.42298 1.92833 7.04347 1.9297 7.5017C1.93092 7.91464 2.01103 8.19687 2.17124 8.76131C3.03221 11.7947 4.65668 14.6571 7.04466 17.045C9.43264 19.433 12.295 21.0575 15.3284 21.9185C15.8928 22.0787 16.1751 22.1588 16.588 22.16C17.0462 22.1614 17.6667 22 18.0662 21.7756C18.4263 21.5733 18.6911 21.3085 19.2207 20.7789L19.3783 20.6213C19.9098 20.0898 20.1755 19.8241 20.3198 19.5387C20.6069 18.9712 20.6069 18.3009 20.3198 17.7333C20.1755 17.448 19.9098 17.1822 19.3783 16.6508L19.1835 16.4559C18.8339 16.1063 18.6591 15.9315 18.4833 15.8172C17.8204 15.3862 16.9658 15.3862 16.3029 15.8172C16.1271 15.9315 15.9523 16.1063 15.6027 16.4559C15.4884 16.5702 15.4313 16.6274 15.3644 16.6752C15.127 16.8453 14.7828 16.904 14.5024 16.8222C14.4235 16.7992 14.3612 16.7693 14.2365 16.7094C12.7869 16.0134 11.4282 15.0646 10.2266 13.8631Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</symbol>

				<symbol id="facebook-icon" viewBox="0 0 9 17">
					<path d="M0.387939 8.43562V5.69697H2.18664C2.18664 5.50917 2.17882 5.34583 2.18664 5.18445C2.23555 4.31688 2.22186 3.43954 2.35586 2.58566C2.52507 1.51954 3.21071 0.820209 4.24357 0.510154C5.63833 0.0925091 7.07319 0.271499 8.51587 0.237266V2.97592H7.62581C7.44291 2.97592 7.26098 2.97592 7.07906 2.97592C6.01391 2.9945 5.81634 3.19599 5.80754 4.26994C5.80754 4.72377 5.80754 5.1776 5.80754 5.6823H8.54032C8.43273 6.62322 8.33199 7.50937 8.22929 8.42095H5.81341V16.5919H2.18958V8.43562H0.387939Z"/>
				</symbol>

				<symbol id="twitter-icon" viewBox="0 0 10 9">
					<g clip-path="url(#clip0_1503_1360)">
						<path d="M7.84073 0.000976562H9.36735L6.03215 3.81289L9.95575 9.00006H6.88361L4.47738 5.85406L1.72414 9.00006H0.196586L3.76393 4.92278L0 0.000976562H3.15012L5.32513 2.87654L7.84073 0.000976562ZM7.30495 8.0863H8.15085L2.6905 0.866729H1.78274L7.30495 8.0863Z"/>
						</g>
						<defs>
						<clipPath id="clip0_1503_1360">
						<rect width="9.95575" height="9" fill="white"/>
						</clipPath>
						</defs>
				</symbol>

				<symbol id="linkedin-icon" viewBox="0 0 17 15">
					<path d="M16.1416 14.6754H12.5374V14.2685C12.5374 12.6674 12.5374 11.0672 12.5374 9.46608C12.5394 9.14098 12.5159 8.81623 12.4669 8.49483C12.3691 7.87864 12.0542 7.53435 11.57 7.4473C11.0203 7.34949 10.4139 7.56956 10.1753 8.08208C9.97009 8.51101 9.85239 8.97651 9.82903 9.45141C9.78795 11.0907 9.81338 12.7309 9.8124 14.3712C9.8124 14.4602 9.8036 14.5492 9.79675 14.6646H6.21988V4.72234H9.78991V6.00461C10.2173 5.68184 10.6047 5.25344 11.0878 5.05097C12.4239 4.48955 14.0945 4.50324 15.098 5.65641C15.7271 6.383 16.0849 7.30521 16.1103 8.26596C16.1827 10.3591 16.1661 12.4541 16.1847 14.5492C16.1761 14.593 16.1617 14.6355 16.1416 14.6754Z"/>
					<path d="M0.748047 14.6742V4.72021H4.32982V14.6742H0.748047Z"/>
					<path d="M4.35227 1.95705C4.35516 2.31491 4.25187 2.66559 4.05546 2.96475C3.85905 3.26391 3.57834 3.49811 3.24882 3.63773C2.91931 3.77736 2.55579 3.81613 2.20424 3.74916C1.85269 3.68219 1.52889 3.51247 1.27379 3.26148C1.0187 3.01048 0.843754 2.68948 0.77109 2.33906C0.698426 1.98864 0.731306 1.62454 0.865568 1.29281C0.99983 0.961075 1.22945 0.676603 1.52538 0.475366C1.82131 0.274128 2.17028 0.165163 2.52814 0.16225C2.76604 0.159278 3.00218 0.203458 3.22292 0.292239C3.44366 0.38102 3.64463 0.512643 3.81423 0.679512C3.98382 0.84638 4.11869 1.04519 4.21104 1.26446C4.30339 1.48373 4.35139 1.71912 4.35227 1.95705Z"/>
				</symbol>
			</svg>
			<!-- SVG ======================-->
		</div>
		<!-- pages -->
	
		<input type="hidden" id="url" value="{{ url('/') }}">

		<script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>	
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>	
		<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>	
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>		
		<script src="{{ asset('assets/js/wow.min.js') }}"></script>	
		<script src="{{ asset('assets/js/animate.js') }}"></script>					

		<!-- map -->			
		<script src="{{ asset('assets/js/leaflet.js') }}"></script>
		<script src="{{ asset('assets/js/leaflet-routing-machine.min.js') }}"></script>
		<script src="{{ asset('assets/js/leaflet-scripts.js') }}"></script>
		<!-- map -->
			
		<script src="{{ asset('assets/js/jquery.progressScroll.min.js') }}"></script>	
		<script src="{{ asset('assets/js/odometer.js') }}"></script>	
		<script src="{{ asset('assets/js/toastr.js') }}"></script>	
		<script src="{{ asset('assets/js/script.js') }}"></script>	

	</body>
</html>
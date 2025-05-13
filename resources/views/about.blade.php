@extends('layout')
@section('title', 'About Us')
@section('content')
<!--Banner Section ======================-->
<section class="section-banner banner-style-1 position-relative parallax" data-bs-theme="dark">		
    <div class="container">
        <div class="banner-wrapper d-flex flex-column gap-10 gap-md-3 gap-lg-30">
            <h3 class="banner-heading mb-0">About us</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('about') }}" class="text-decoration-none link-hover-animation-1">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
            </nav>
        </div>
        <!-- banner-wrapper -->
    </div>
    <!-- container -->
</section>
<!--Banner Section ======================-->


<!--About Section ======================-->
<section class="section-about about-1 pt-5 pt-lg-80 pt-xxl-100 pb-60 pb-lg-100 pb-xxl-120">
    <div class="container">
        <div class="row gx-40 gy-5 gy-xl-0">
            <div class="col-xl-6 col-xxl-7">
                <div class="row gy-30">
                    <div class="col-md-6">
                        <div class="about-image-1 border-10 wow fadeInUp">										
                            <img src="{{ asset('assets/images/about-image-6.jpg') }}" class="img-fluid" alt="about-image-6">										
                        </div>									
                        <!-- about-image-1 -->
                    </div>
                    <!-- col-md-6 -->
                    <div class="col-md-6">
                        <div class="d-flex flex-column gap-30">
                            <ul class="about-experience list-unstyled d-flex align-items-center justify-content-center gap-10 border-10 shadow mb-0">
                                <li>
                                    <h2 class="display-3 fw-bold text-primary mb-0">25</h2>												
                                </li>
                                <li>
                                    <h4 class="display-6 fw-bold lh-1 mb-0">Years Of Experience</h4>
                                </li>											
                            </ul>
                            <div class="about-image-2 border-10 wow fadeInUp">											
                                <img src="{{ asset('assets/images/about-image-2.jpg') }}" class="img-fluid" alt="about-image-1">											
                            </div>	
                            <!-- about-image-1 -->									
                        </div>
                        <!-- d-flex -->
                    </div>
                    <!-- col-md-6 -->
                </div>
                <!-- row -->
            </div>
            <!-- col-7 -->
            <div class="col-xl-6 col-xxl-5">
                <div class="mb-30 mb-xxl-40">
                    <h6 class="mb-3 text-primary">About Us</h6>
                    <h3 class="mb-20">A Legacy of <span class="text-primary">Excellence</span> in Transportation</h3>
                    <p class="mb-4">At Logistip, we are more than just a transportation company - we're your trusted partner in navigating the complexities of logistics and supply chain management.</p>
                    <p class="mb-0 fw-medium body-color-style-2 custom-border-left pe-xxl-30">
                        25 years of experience in the industry, we have built a reputation for excellence, reliability, customer service.
                    </p>
                </div>
                
                <div class="d-flex flex-wrap gap-4 align-items-md-center mb-40 mb-xxl-5">
                    <div>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                    </div>
                    <div class="contact-about d-flex gap-10 gap-lg-3 align-items-center">
                        <span class="contact-icon">											
                            <svg width="24" height="24"><use xlink:href="#phone-icon"></use></svg> 
                        </span>					
                        <p class="mb-0 fs-5 fw-bold"><a href="tel:+07550321425" class="text-decoration-none link-hover-animation-1">+075 5032 1425</a></p>									
                    </div>
                </div>
                <div class="d-flex flex-wrap gap-3 gap-xl-10">
                    <div class="about-service d-flex gap-1 flex-column align-items-center justify-content-center shadow border-8">
                        <h4 class="mb-0 d-flex text-primary">
                            <span class="odometer" data-count-to=25></span><span class="odometer-pertial-text">K</span>
                        </h4>
                        <p class="mb-0 fw-medium">Logistics Outlets</p>
                    </div>
                    <div class="about-service d-flex gap-1 flex-column align-items-center justify-content-center shadow border-8">
                        <h4 class="mb-0 d-flex text-primary">
                            <span class="odometer" data-count-to=150></span><span class="odometer-pertial-text">+</span>
                        </h4>
                        <p class="mb-0 fw-medium">Countries Service</p>
                    </div>
                    <div class="about-service d-flex gap-1 flex-column align-items-center justify-content-center shadow border-8">
                        <h4 class="mb-0 d-flex text-primary">
                            <span class="odometer" data-count-to=12></span><span class="odometer-pertial-text">M+</span>
                        </h4>
                        <p class="mb-0 fw-medium">Deliveries</p>
                    </div>
                </div>
            </div>
            <!-- col-5 -->
        </div>
        <!-- row -->					
    </div>
    <!-- container -->
</section>
<!--About Section ======================-->


<!--Service Section ======================-->
<section class="section-service service-3 pb-60 pb-lg-100 pb-xxl-120 hover-element">
    <div class="bg-custom-light py-60 py-lg-100 py-xxl-120">
        <div class="container">
            <div class="row justify-content-between align-items-lg-end gx-0 gy-30 mb-40">
                <div class="col-lg-5 col-xl-4">
                    <h6 class="subtitle mb-10 text-primary">Our Service</h6>
                    <h3 class="mb-0">Navigating Your <span class="text-primary">Logistics</span> Journey</h3>
                </div>
                <!-- col-md-5 -->
                <div class="col-lg-6 col-xl-5">
                    <p class="mb-0 text-lg-end">Whether you're a small business or a multinational corporation, logistip is your trusted partner for all your transportation and logistics needs.</p>								
                </div>
                <!-- col-md-3 -->
            </div>			
            <!--row mb-40 -->
            <div class="row g-30 wow fadeInUp">
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow active">
                        <span class="freight-icon">
                            <svg width="29" height="28"><use xlink:href="#air-freight-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Air Freight Services</a></h5>
                        <p class="mb-0  service-3-text">Our global network of airline partners ensure fast reliable delivery of your cargo to destinations worldwide.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="29" height="28"><use xlink:href="#road-freight-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Road Freight Services</a></h5>
                        <p class="mb-0  service-3-text">Our global network of airline partners ensure fast reliable delivery of your cargo to destinations worldwide.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="29" height="28"><use xlink:href="#ocean-freight-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Ocean Freight Services</a></h5>
                        <p class="mb-0  service-3-text">Our global network of airline partners ensure fast reliable delivery of your cargo to destinations worldwide.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="26" height="28"><use xlink:href="#rail-freight-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Rail Freight Services</a></h5>
                        <p class="mb-0  service-3-text">Our global network of airline partners ensure fast reliable delivery of your cargo to destinations worldwide.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="32" height="28"><use xlink:href="#supply-chain-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Supply chain management</a></h5>
                        <p class="mb-0  service-3-text">Our global network of airline partners ensure fast reliable delivery of your cargo to destinations worldwide.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="28" height="28"><use xlink:href="#ware-housing-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Warehousing Services</a></h5>
                        <p class="mb-0  service-3-text">Our global network of airline partners ensure fast reliable delivery of your cargo to destinations worldwide.</p>
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>				
</section>
<!--Service Section ======================-->


<!--Team Section ======================-->
<section class="section-team pb-60 pb-lg-100 pb-xxl-120 hover-element">
    <div class="container">
        <div class="section-top-contents text-lg-center mb-40 wow fadeInUp">
            <h6 class="mb-10 text-primary fw-medium">Our Team</h6>
            <h3 class="mb-20 mb-lg-30">Meet Our <span class="text-primary">Dedicated</span> Team</h3>
            <p class="mb-0">Get to know the individuals who work tirelessly behind the scenes to ensure that we deliver top-notch service to our clients.</p>
        </div>
        <!-- text-lg-center -->

        <div class="row g-30 wow fadeInUp">
            <div class="col-lg-4">
                <div class="team-wrapper hover-item position-relative border-10 active">								
                    <img src="{{ asset('assets/images/team-1.jpg') }}" class="img-fluid" alt="team-1">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column justify-content-center align-items-center gap-1">																			
                        <h5 class="mb-0"><a href="#" class="text-decoration-none stretched-link link-hover-animation-1">David M.Lalan</a></h5>
                        <p class="mb-0 fw-medium">Supply Chain Manager</p>																		
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
            <div class="col-lg-4">
                <div class="team-wrapper hover-item position-relative border-10">								
                    <img src="{{ asset('assets/images/team-2.jpg') }}" class="img-fluid" alt="team-2">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column justify-content-center align-items-center gap-1">																			
                        <h5 class="mb-0"><a href="#" class="text-decoration-none stretched-link link-hover-animation-1">Tim David</a></h5>
                        <p class="mb-0 fw-medium">Construction Manager</p>																		
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
            <div class="col-lg-4">
                <div class="team-wrapper hover-item position-relative border-10">								
                    <img src="{{ asset('assets/images/team-3.jpg') }}" class="img-fluid" alt="team-3">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column justify-content-center align-items-center gap-1">																			
                        <h5 class="mb-0"><a href="#" class="text-decoration-none stretched-link link-hover-animation-1">James Bond</a></h5>
                        <p class="mb-0 fw-medium">Architechture Manager</p>																		
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
            <div class="col-lg-4">
                <div class="team-wrapper hover-item position-relative border-10">								
                    <img src="{{ asset('assets/images/team-4.jpg') }}" class="img-fluid" alt="team-4">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column justify-content-center align-items-center gap-1">																			
                        <h5 class="mb-0"><a href="#" class="text-decoration-none stretched-link link-hover-animation-1">Elena Dewan</a></h5>
                        <p class="mb-0 fw-medium">Construction Manager</p>																		
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
            <div class="col-lg-4">
                <div class="team-wrapper hover-item position-relative border-10">								
                    <img src="{{ asset('assets/images/team-5.jpg') }}" class="img-fluid" alt="team-5">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column justify-content-center align-items-center gap-1">																			
                        <h5 class="mb-0"><a href="#" class="text-decoration-none stretched-link link-hover-animation-1">Tom Justin</a></h5>
                        <p class="mb-0 fw-medium">Construction Manager</p>																		
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
            <div class="col-lg-4">
                <div class="team-wrapper position-relative border-10 custom-active">								
                    <img src="{{ asset('assets/images/team-6.jpg') }}" class="img-fluid" alt="team-6">								
                    <!-- team-image -->
                    <div class="team-image-hover d-flex flex-column text-center align-items-center gap-1">																			
                        <h2 class="mb-0">300+</h2>	
                        <p class="mb-20 team-image-text">Creative team member in logistics Company</p>
                        <a href="#" class="btn btn-primary">Join Our Team</a>																	
                    </div>
                    <!-- portfolio-image-hover -->
                </div>
                <!-- team-wrapper -->
            </div>
            <!-- col-4 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!--Team Section ======================-->


<!--Pricing Section ======================-->
<section class="section-pricing pricing-1 hover-element">
    <div class="bg-custom-light py-60 py-lg-100 py-xxl-120">
        <div class="container">
            <div class="text-lg-center mb-40 wow fadeInUp" data-wow-duration="1.2s">
                <h6 class="mb-10 text-primary fw-medium">Pricing</h6>
                <h3 class="mb-0">Our Best <span class="text-primary">Pricing</span> Plan</h3>
            </div>
            <!-- text-lg-center -->
            <div class="row gx-30 gy-40">
                <div class="col-lg-6 col-xl-4">
                    <div class="card card-pricing hover-item shadow wow fadeIn" data-wow-delay="150ms" data-wow-duration="1.3s">
                        <img src="{{ asset('assets/images/pricing-image-1.jpg') }}" class="card-img-top" alt="pricing-image-1">
                        <div class="card-body card-body-bg-2 text-center">
                            <h4 class="card-title mb-10 position-relative">Road Freight</h4>
                            <div class="d-flex align-items-baseline justify-content-center gap-0 pb-20 mb-30 border-bottom position-relative">
                            <h4 class="fs-2 pricing-amount mb-0">$120</h4>
                            <span class="pricing-quantity">/150kg</span>
                            </div>
                            <ul class="pricing-list list-unstyled d-flex flex-column mb-30 gap-20 gap-sm-4 position-relative">
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                Real Time Rate Shoping
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                Customs Business Rules
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                200 Freight Shipment/Month
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium opacity-50">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                1 Warehouse
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium opacity-50">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                Full Insurance
                            </li>
                            </ul>
                            <div>
                            <a href="{{ route('contact') }}" class="btn btn-secondary">Get Started</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- col-4 -->
                <div class="col-lg-6 col-xl-4">
                    <div class="card card-pricing hover-item shadow active wow fadeIn" data-wow-delay="400ms" data-wow-duration="1.3s">
                        <img src="{{ asset('assets/images/pricing-image-2.jpg') }}" class="card-img-top" alt="pricing-image-2">
                        <div class="card-body card-body-bg-1 text-center">
                            <h4 class="card-title mb-10 position-relative">Air Freight</h4>
                            <div class="d-flex align-items-baseline justify-content-center gap-0 pb-20 mb-30 border-bottom position-relative">
                            <h4 class="fs-2 pricing-amount mb-0">$270</h4>
                            <span class="pricing-quantity">/250kg</span>
                            </div>
                            <ul class="pricing-list list-unstyled d-flex flex-column mb-30 gap-20 gap-sm-4 position-relative">
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                Real Time Rate Shoping
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                Customs Business Rules
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                200 Freight Shipment/Month
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                1 Warehouse
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium opacity-50">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                Full Insurance
                            </li>
                            </ul>
                            <div>
                            <a href="{{ route('contact') }}" class="btn btn-secondary">Get Started</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- col-4 -->
                <div class="col-lg-6 col-xl-4">
                    <div class="card card-pricing hover-item shadow wow fadeIn" data-wow-delay="650ms" data-wow-duration="1.3s">
                        <img src="{{ asset('assets/images/pricing-image-3.jpg') }}" class="card-img-top" alt="pricing-image-3">
                        <div class="card-body card-body-bg-3 text-center">
                            <h4 class="card-title mb-10 position-relative">Ocean Freight</h4>
                            <div class="d-flex align-items-baseline justify-content-center gap-0 pb-20 mb-30 border-bottom position-relative">
                            <h4 class="fs-2 pricing-amount mb-0">$320</h4>
                            <span class="pricing-quantity">/500kg</span>
                            </div>
                            <ul class="pricing-list list-unstyled d-flex flex-column mb-30 gap-20 gap-sm-4 position-relative">
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                Real Time Rate Shoping
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                Customs Business Rules
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                200 Freight Shipment/Month
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                1 Warehouse
                            </li>
                            <li class="d-flex align-items-center gap-2 gap-sm-3 fw-medium">
                                <span class="check-icon">											
                                    <svg width="17" height="12"><use xlink:href="#check-icon"></use></svg> 
                                    </span>
                                Full Insurance
                            </li>
                            </ul>
                            <div>
                            <a href="{{ route('contact') }}" class="btn btn-secondary">Get Started</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- col-4 -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- bg-custom-light -->				
</section>
<!--Pricing Section ======================-->


<!--CTA Section ======================-->
<section class="section-cta cta-1 mb-60 mb-lg-100 mb-xxl-120">
    <div class="cta-wrapper text-bg-dark py-60 py-lg-100 py-xxl-120" data-bs-theme="dark">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between gy-40">
                <div class="col-lg-7">
                    <h3 class="mb-0 cta-heading">Delivering <span class="text-primary">Excellence</span> Your Premier Transport Agency</h3>
                </div>
                <!-- col-7 -->

                <div class="col-lg-3">
                    <div class="d-flex justify-content-lg-end">
                        <a href="{{ route('contact') }}" class="btn btn-secondary">Contact with us</a>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- cta-wrapper -->
</section>
<!--CTA Section ======================-->



<!--Brand Section ======================-->
<section class="section-brand brand-1 pb-60 pb-lg-100 pb-xxl-120">				
    <div class="container">
        <div class="text-lg-center">
            <h6 class="mb-10 text-primary fw-medium">Our Partners</h6>
            <h3 class="mb-40">Our <span class="text-primary">Trusted</span> Collaborators</h3>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 g-30">
                <div class="col">
                    <a href="#" class="brand-item text-decoration-none">
                        <img src="{{ asset('assets/images/brand-1.png') }}" class="img-fluid" alt="brand-1">
                    </a>
                </div>
                <!-- col -->
                <div class="col">
                    <a href="#" class="brand-item text-decoration-none">
                        <img src="{{ asset('assets/images/brand-2.png') }}" class="img-fluid" alt="brand-2">
                    </a>
                </div>
                <!-- col -->
                <div class="col">
                    <a href="#" class="brand-item text-decoration-none">
                        <img src="{{ asset('assets/images/brand-3.png') }}" class="img-fluid" alt="brand-3">
                    </a>
                </div>
                <!-- col -->
                <div class="col">
                    <a href="#" class="brand-item text-decoration-none">
                        <img src="{{ asset('assets/images/brand-4.png') }}" class="img-fluid" alt="brand-4">
                    </a>
                </div>
                <!-- col -->
                <div class="col">
                    <a href="#" class="brand-item text-decoration-none">
                        <img src="{{ asset('assets/images/brand-5.png') }}" class="img-fluid" alt="brand-5">
                    </a>
                </div>
                <!-- col -->
                <div class="col">
                    <a href="#" class="brand-item text-decoration-none">
                        <img src="{{ asset('assets/images/brand-6.png') }}" class="img-fluid" alt="brand-6">
                    </a>
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
    </div>
    <!-- container -->				
</section>
<!--Brand Section ======================-->



<!--Faq Section ======================-->
<section class="section-faq faq-1">	
    <div class="bg-custom-light py-60 py-lg-100 py-xxl-120">
        <div class="container">
            <div class="mb-40">
                <h6 class="mb-10 text-primary fw-medium">Our Partners</h6>
                <h3 class="mb-0 title">Frequently Asked <span class="text-primary">Questions</span></h3>
            </div>
            
            <div class="row align-items-center gx-20 gx-xl-60 gy-40 gy-lg-0">
                <div class="col-lg-6">
                    <div class="faq-image overflow-hidden border-10">
                        <img src="{{ asset('assets/images/faq-image-1.jpg') }}" class="img-fluid" alt="faq-image-1">									
                    </div>
                </div>
                <!-- col-5 -->
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <div class="accordion" id="faq-1-accordion">
                            <div class="accordion-item wow fadeIn" data-wow-delay="150ms" data-wow-duration="1.2s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button d-flex justify-content-between align-items-center " type="button" data-bs-toggle="collapse" data-bs-target="#itemOne" aria-expanded="true" aria-controls="itemOne">
                                        <span class="accordion-title fs-5 fw-semibold mb-0">How do I request a quote?</span>
                                        <span class="accordion-icon"></span>													
                                    </button>
                                </h2>
                                <div id="itemOne" class="accordion-collapse collapse show" data-bs-parent="#faq-1-accordion">
                                    <p class="accordion-body mb-0">
                                        Simply fill out our online quote request with details about your shipment, including origin, destination, dimensions, and weight. Once we receive your request, one our logistics experts will contact you with a customized.
                                    </p>
                                </div>
                            </div>
                            <!-- accordion-item -->

                            <div class="accordion-item wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.2s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button d-flex justify-content-between align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#itemTwo" aria-expanded="false" aria-controls="itemTwo">
                                        <span class="accordion-title fs-5 fw-semibold mb-0">What are your delivery times?</span>
                                        <span class="accordion-icon"></span>													
                                    </button>
                                </h2>
                                <div id="itemTwo" class="accordion-collapse collapse" data-bs-parent="#faq-1-accordion">
                                    <p class="accordion-body mb-0">
                                        Simply fill out our online quote request with details about your shipment, including origin, destination, dimensions, and weight. Once we receive your request, one our logistics experts will contact you with a customized.
                                    </p>
                                </div>
                            </div>
                            <!-- accordion-item -->

                            <div class="accordion-item wow fadeIn" data-wow-delay="450ms" data-wow-duration="1.2s">
                                <h2 class="accordion-header">
                                    <button class="accordion-button d-flex justify-content-between align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#itemThree" aria-expanded="false" aria-controls="itemThree">
                                        <span class="accordion-title fs-5 fw-semibold mb-0">How do I request a quote?</span>
                                        <span class="accordion-icon"></span>													
                                    </button>
                                    
                                </h2>
                                <div id="itemThree" class="accordion-collapse collapse" data-bs-parent="#faq-1-accordion">
                                    <p class="accordion-body mb-0">
                                        Simply fill out our online quote request with details about your shipment, including origin, destination, dimensions, and weight. Once we receive your request, one our logistics experts will contact you with a customized.
                                    </p>
                                </div>
                            </div>
                            <!-- accordion-item -->

                            <div class="accordion-item wow fadeIn" data-wow-delay="600ms" data-wow-duration="1.2s">
                                <h2 class="accordion-header">
                                <button class="accordion-button d-flex justify-content-between align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#itemFour" aria-expanded="false" aria-controls="itemFour">
                                    <span class="accordion-title fs-5 fw-semibold mb-0">What measures do you take to ensure the safety of my cargo?</span>
                                    <span class="accordion-icon"></span>												   
                                </button>
                                </h2>
                                <div id="itemFour" class="accordion-collapse collapse" data-bs-parent="#faq-1-accordion">
                                    <p class="accordion-body mb-0">
                                        Simply fill out our online quote request with details about your shipment, including origin, destination, dimensions, and weight. Once we receive your request, one our logistics experts will contact you with a customized.
                                    </p>
                                </div>
                            </div>
                            <!-- accordion-item -->									
                        </div>
                        <!-- .accordion -->
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </div>		
    <!-- bg-custom-light -->
</section>
<!--Faq Section ======================-->
@endsection
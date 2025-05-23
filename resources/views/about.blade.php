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
                            <img src="{{ asset('assets/images/image-02.jpg') }}" class="img-fluid" alt="about-image-6">
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
                    <p class="mb-4">
                        With an elite network of pre-qualified carriers, real-time technology integration, and a 
                        relentless focus on execution, Shipwise is more than a broker — we are your strategic logistics 
                        partner committed to delivering excellence from pickup to final mile.
                    </p>
                    <p class="mb-0 fw-medium body-color-style-2 custom-border-left pe-xxl-30">
                        Since 2019, Shipwise Freight Inc. has set the standard in freight brokerage, becoming the go-to 
                        logistics partner for businesses across North America. We don’t just move freight — we 
                        engineer smarter, faster, and more dependable transportation solutions that empower your 
                        supply chain.
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
                        <p class="mb-0 fs-5 fw-bold"><a href="tel:+07550321425" class="text-decoration-none link-hover-animation-1">+905-283-3652</a></p>									
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
                    <p class="mb-0 text-lg-end">Whether you're a small business or a multinational corporation, SHIPWISE is your trusted partner for all your transportation and logistics needs.</p>								
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
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Full Truckload (FTL) & Less Than Truckload (LTL)</a></h5>
                        <p class="mb-0  service-3-text">Efficient shipping for large and small loads, maximizing space and minimizing costs.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="29" height="28"><use xlink:href="#road-freight-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Dry Van & Refrigerated (Temp-Controlled) Freight </a></h5>
                        <p class="mb-0  service-3-text">Secure transport for all goods, from everyday items to temperature-sensitive products.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="28" height="28"><use xlink:href="#ware-housing-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Dedicated Freight Management Programs </a></h5>
                        <p class="mb-0  service-3-text">Customized logistics solutions, providing dedicated resources for your unique shipping needs.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="26" height="28"><use xlink:href="#rail-freight-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Route Optimization & Load Planning</a></h5>
                        <p class="mb-0  service-3-text">Smart planning for efficient routes and load configurations, reducing costs and transit times.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="32" height="28"><use xlink:href="#supply-chain-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Freight Consolidation & Distribution</a></h5>
                        <p class="mb-0  service-3-text">Combining shipments for cost-effective transport, then distributing to final destinations efficiently.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="28" height="28"><use xlink:href="#ware-housing-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Cross-Border Logistics (Canada – U.S.) </a></h5>
                        <p class="mb-0  service-3-text">Seamless transport across borders, handling customs and regulations for smooth delivery.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="29" height="28"><use xlink:href="#ocean-freight-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="{{ route('services') }}" class="text-decoration-none link-hover-animation-1">Expedited & Time-Critical Shipments</a></h5>
                        <p class="mb-0  service-3-text">Fast, reliable delivery for urgent shipments, ensuring deadlines are met every time.</p>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>				
</section>
<!--Service Section ======================-->



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
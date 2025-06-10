@extends('layout')
@section('title', 'Services')
@section('content')
<!--Banner Section ======================-->
<section class="section-banner banner-style-1 position-relative parallax" data-bs-theme="dark">		
    <div class="container">
        <div class="banner-wrapper d-flex flex-column gap-10 gap-md-3 gap-lg-30">
            <h3 class="banner-heading mb-0">Our Services</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none link-hover-animation-1">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
        <!-- banner-wrapper -->
    </div>
    <!-- container -->
</section>
<!--Banner Section ======================-->


<!--About Section ======================-->
<section class="section-about about-inner pt-5 pt-lg-80 pt-xxl-100 pb-60 pb-lg-100 pb-xxl-120">
    <div class="container">
        <div class="text-lg-center contents-width mb-40">						
            <h6 class="mb-10 text-primary fw-medium">Our Services</h6>
            <h3 class="mb-0">Your <span class="text-primary">Gateway</span> to Seamless Transportation</h3>
        </div>
        <!-- text-lg-center -->
        <div class="service-inner-image video-image-wrapper position-relative border-10 wow fadeInUp">
            <img src="{{ asset('assets/images/image-13.png') }}" class="img-fluid" alt="Shipwise Intro Video">
            <a href="{{ asset('assets/videos/SHIPWISE-INTRO-VIDEO.mp4') }}" aria-label="video-popus-icon" class="video-popup video-popup-style-1">
                <span class="video-icon">						
                    <svg width="24" height="30"><use xlink:href="#video-icon"></use></svg> 
                </span>	
            </a>
        </div>		
        <!-- video-image-wrapper -->
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
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="javascript:void(0)" class="text-decoration-none link-hover-animation-1">Full Truckload (FTL) & Less Than Truckload (LTL)</a></h5>
                        <p class="mb-0  service-3-text">Efficient shipping for large and small loads, maximizing space and minimizing costs.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="29" height="28"><use xlink:href="#road-freight-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="javascript:void(0)" class="text-decoration-none link-hover-animation-1">Dry Van & Refrigerated (Temp-Controlled) Freight </a></h5>
                        <p class="mb-0  service-3-text">Secure transport for all goods, from everyday items to temperature-sensitive products.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="28" height="28"><use xlink:href="#ware-housing-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="javascript:void(0)" class="text-decoration-none link-hover-animation-1">Dedicated Freight Management Programs </a></h5>
                        <p class="mb-0  service-3-text">Customized logistics solutions, providing dedicated resources for your unique shipping needs.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="26" height="28"><use xlink:href="#rail-freight-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="javascript:void(0)" class="text-decoration-none link-hover-animation-1">Route Optimization & Load Planning</a></h5>
                        <p class="mb-0  service-3-text">Smart planning for efficient routes and load configurations, reducing costs and transit times.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="32" height="28"><use xlink:href="#supply-chain-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="javascript:void(0)" class="text-decoration-none link-hover-animation-1">Freight Consolidation & Distribution</a></h5>
                        <p class="mb-0  service-3-text">Combining shipments for cost-effective transport, then distributing to final destinations efficiently.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="28" height="28"><use xlink:href="#ware-housing-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="javascript:void(0)" class="text-decoration-none link-hover-animation-1">Cross-Border Logistics (Canada – U.S.) </a></h5>
                        <p class="mb-0  service-3-text">Seamless transport across borders, handling customs and regulations for smooth delivery.</p>
                    </div>
                </div>
                <!-- col -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-3-wrapper hover-item shadow">
                        <span class="freight-icon">
                            <svg width="29" height="28"><use xlink:href="#ocean-freight-icon"></use></svg> 
                        </span>
                        <h5 class="mb-0 service-3-title" style="display:block;"><a href="javascript:void(0)" class="text-decoration-none link-hover-animation-1">Expedited & Time-Critical Shipments</a></h5>
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
<section class="section-faq faq-1 pb-60 pb-lg-100 pb-xxl-120">	
    <div class="bg-custom-light py-60 py-lg-100 py-xxl-120">
        <div class="container">
            <div class="mb-40">
                <h6 class="mb-10 text-primary fw-medium">Our Partners</h6>
                <h3 class="mb-0 title">Frequently Asked <span class="text-primary">Questions</span></h3>
            </div>
            
            <div class="row align-items-center gx-20 gx-xl-60 gy-40 gy-lg-0">
                <div class="col-lg-6">
                    <div class="faq-image overflow-hidden border-10">
                        <img src="{{ asset('assets/images/image-04.jpg') }}" class="img-fluid" alt="Shipwise FAQ Image">									
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
                                        Need a reliable partner to move your freight? We’re here to deliver efficient, cost-effective logistics solutions tailored to your needs. As a trusted freight forwarder and asset-based transportation provider, we offer full-service shipping solutions across North America.
                                        <br>
                                        To request a quote, simply fill out the form below with your shipment details, including:
                                        <ul class="ms-4">
                                            <li>Origin and destination</li>
                                            <li>Type of freight (e.g., FTL, LTL, reefer, flatbed, etc.)</li>
                                            <li>Dimensions and weight</li>
                                            <li>Any special handling requirements</li>
                                        </ul>
                                        <br>
                                        Our logistics team will review your request and get back to you promptly with a competitive, customized rate. Whether you’re shipping one load or managing ongoing freight needs, we’re ready to support your business.
                                        <strong>Fast</strong>. <strong>Reliable</strong>. On <strong>Time</strong>. Let’s move your freight.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- .accordion -->
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </div>	
</section>
<!--Faq Section ======================-->


<!--Call Request Section ======================-->
<section class="section-callRequest pb-60 pb-lg-100 pb-xxl-120">
    <div class="container">
        <div class="call-request-inner shadow">
            <div class="row g-0 align-items-center">
                <!-- col -->
                <div class="col-lg-12 col-xl-12">
                    <div class="p-3 p-lg-40 p-xl-5">
                        <h3 class="mb-20">Request Quote</h3>
                        <p>
                            Looking for a dependable logistics partner? Let us provide you with a customized freight solution. 
                            We make transportation simple, efficient, and reliable — so you can focus on your business.
                        </p>
                        <form onsubmit="submission(event, '{{ route('quote') }}')" class="contact-form row g-30">
                            @csrf
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Name *">
                                    <span class="text-danger error-field error-name">&nbsp;</span>
                                </div>											
                            </div>	
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email *">
                                    <span class="text-danger error-field error-email">&nbsp;</span>
                                </div>											
                            </div>
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="contact" class="form-label">Contact</label>
                                    <input type="text" class="form-control form-control-lg" name="contact" id="contact" placeholder="Contact *">
                                    <span class="text-danger error-field error-contact">&nbsp;</span>
                                </div>											
                            </div>	
                            <div class="col-lg-6">
                                <label for="type" class="form-label">Freight Type</label>
                                <select id="type" class="form-select" aria-label="select" name="type">
                                    <option value="" selected>Select Freight</option>
                                    <option value="FTL">FTL</option>
                                    <option value="LTL">LTL</option>
                                    <option value="Reefer">Reefer</option>
                                    <option value="Flatbed">Flatbed</option>
                                    <option value="Other">Other</option>
                                </select>	
                                <span class="text-danger error-field error-type">&nbsp;</span>
                            </div>										
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="origin" class="form-label">Origin</label>
                                    <input type="text" class="form-control form-control-lg" name="origin" id="origin" placeholder="Origin *">
                                    <span class="error text-danger error-field error-origin">&nbsp;</span>
                                </div>											
                            </div>
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="destination" class="form-label">Destination</label>
                                    <input type="text" class="form-control form-control-lg" name="destination" id="destination" placeholder="Destination *">
                                    <span class="error text-danger error-field error-destination">&nbsp;</span>
                                </div>											
                            </div>
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="weight" class="form-label">Weight</label>
                                    <input type="text" class="form-control form-control-lg" name="weight" id="weight" placeholder="Weight *">
                                    <span class="error text-danger error-field error-weight">&nbsp;</span>
                                </div>											
                            </div>
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="dimensions" class="form-label">Dimensions</label>
                                    <input type="text" class="form-control form-control-lg" name="dimensions" id="dimensions" placeholder="Dimensions">
                                    <span class="error text-danger error-field error-dimensions">&nbsp;</span>
                                </div>											
                            </div>
                            <div class="col-lg-12">
                                <div class="position-relative">
                                    <label for="requirement" class="form-label">Special Handling Requirement</label>
                                    <textarea class="form-control form-control-lg" name="requirement" id="requirement" placeholder="If you have extra requirements feel free to inform us." rows="3"></textarea>
                                    <span class="error text-danger error-field error-requirement">&nbsp;</span>
                                </div>											
                            </div>
                            <div class="col-4">
                                <div>
                                    <button type="submit" class="btn btn-primary w-100">Submit Request</button>
                                </div>								
                            </div>	
                            <div class="response"></div>												  
                        </form>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- call-request-inner -->
        
    </div>
    <!-- container -->
</section>
<!--Call Request Section ======================-->
@endsection
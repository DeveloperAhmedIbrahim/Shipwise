@extends('layout')
@section('title', 'Contact Us')
@section('content')
<!--Banner Section ======================-->
<section class="section-banner banner-style-1 position-relative parallax" data-bs-theme="dark">		
    <div class="container">
        <div class="banner-wrapper d-flex flex-column gap-10 gap-md-3 gap-lg-30">
            <h3 class="banner-heading mb-0">Contact Us</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none link-hover-animation-1">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
        <!-- banner-wrapper -->
    </div>
    <!-- container -->
</section>
<!--Banner Section ======================-->


<!--Contact Section ======================-->
<section class="section-contact pt-5 pt-lg-80 pt-xxl-100 pb-60 pb-lg-100 pb-xxl-120">
    <div class="container">
        <div class="row align-items-center justify-content-between gx-30 gy-60 gy-lg-0">
            <div class="col-lg-4 col-xxl-3">
                <ul class="contact-details-lists list-unstyled mb-0 d-flex flex-column">
                    <li class="d-flex gap-20 align-items-center wow fadeIn" data-wow-delay="150ms" data-wow-duration="1.3s">
                        <span class="contact-icon location-icon">											
                            <svg width="24" height="24"><use xlink:href="#location-icon"></use></svg> 
                        </span>	
                        <span class="d-flex flex-column gap-2">
                            <span class="contact-title fs-5 fw-semibold">Head Office Address</span>
                            <span>
                                <a href="#map" class="text-decoration-none link-hover-animation-2">
                                    SHIPWISE FREIGHT INC 5800 Ambler Dr Mississauga, ON L4W 4J4
                                </a>
                            </span>
                        </span>	
                    </li>
                    <li class="d-flex gap-20 align-items-center wow fadeIn" data-wow-delay="150ms" data-wow-duration="1.3s">
                        <span class="contact-icon location-icon">											
                            <svg width="24" height="24"><use xlink:href="#location-icon"></use></svg> 
                        </span>	
                        <span class="d-flex flex-column gap-2">
                            <span class="contact-title fs-5 fw-semibold">USA Office Address</span>
                            <span>
                                <a href="#map" class="text-decoration-none link-hover-animation-2">
                                    SHIPWISE FREIGHT LLC 5900 Balcones DR STE 100 Austin TX 78731
                                </a>
                            </span>
                        </span>	
                    </li>
                    <li class="d-flex gap-20 align-items-center wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.3s">
                        <span class="contact-icon mail-icon">											
                            <svg width="20" height="20"><use xlink:href="#mail-icon"></use></svg> 
                        </span>		
                        <span class="d-flex flex-column gap-2">
                            <span class="contact-title fs-5 fw-semibold">Send Message</span>
                            <span><a href="mailto:info@shipwisefreight.com" class="text-decoration-none link-hover-animation-2">info@shipwisefreight.com</a></span>
                        </span>
                    </li>								
                    <li class="d-flex gap-20 align-items-center wow fadeIn" data-wow-delay="450ms" data-wow-duration="1.3s">
                        <span class="contact-icon phone-icon">											
                            <svg width="20" height="20"><use xlink:href="#phone-icon"></use></svg> 
                        </span>
                        <span class="d-flex flex-column gap-2">
                            <span class="contact-title fs-5 fw-semibold">Send Message</span>
                            <span><a href="tel:(+0123)234556789" class="text-decoration-none link-hover-animation-2">(+0123) 2345 56789</a></span>
                        </span>									
                    </li>											
                </ul>
                <!-- contact-details-lists -->
            </div>
            <!-- col-3 -->

            <div class="col-lg-7 col-xxl-8">
                <div class="submit-form-wrapper bg-custom-light wow fadeIn" data-wow-duration="1.7s">
                    <h3 class="mb-40 text-lg-center">Get In Touch</h3>
                    <form id="contactForm" class="submit-form row g-30">
                        <div class="col-md-6">										
                            <input type="text" class="form-control" id="InputName1" name="InputName" placeholder="Your Name" required="">
                        </div>					
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="InputEmail1" name="InputEmail" placeholder="Your Email" required="">
                        </div>		
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="InputNumber1" name="InputNumber" placeholder="Phone Number" required="">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="InputCompany1" name="InputCompany" placeholder="Company Name">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="InputMessage1" name="InputMessage" placeholder="Your Message" rows="3"></textarea>
                        </div>		
                        <div class="col-12">									
                            <button type="submit" class="btn btn-primary w-100">Submit Now</button>																	
                        </div>	
                        <div class="response py-1"></div>											  
                    </form>
                </div>
                <!-- submit-form-wrapper -->							
            </div>
            <!-- col-8 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>			
<!--Contact Section ======================-->


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
                        <img src="{{ asset('assets/images/section-image-1.jpg') }}" class="img-fluid" alt="section-image-1">									
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
</section>
<!--Faq Section ======================-->


<!--Call Request Section ======================-->
<section class="section-callRequest pb-60 pb-lg-100 pb-xxl-120">
    <div class="container">
        <div class="call-request-inner shadow">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 col-xl-5">
                    <div class="call-request-image mb-3 mb-lg-0">
                        <img src="{{ asset('assets/images/call-request-image-2.jpg') }}" class="img-fluid" alt="call-request-image-2">									
                    </div>
                </div>
                <!-- col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="p-3 p-lg-40 p-xl-5">
                        <h3 class="mb-40">Request Quote</h3>
                        <form id="callRequestForm" class="contact-form row g-30">
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="InputName-2" class="form-label">Name</label>
                                    <input type="text" class="form-control form-control-lg" name="InputName" id="InputName-2" placeholder="Name *" required>
                                    <span class="form-icon form-name-icon">											
                                        <svg width="16" height="16"><use xlink:href="#form-name-icon"></use></svg> 
                                    </span>
                                </div>											
                            </div>	
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="InputEmail-2" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-lg" name="InputEmail" id="InputEmail-2" placeholder="Email *" required>
                                    <span class="form-icon form-email-icon">											
                                        <svg width="16" height="14"><use xlink:href="#form-email-icon"></use></svg> 
                                    </span>
                                </div>											
                            </div>	
                            <div class="col-lg-6">
                                <label for="freightSelect" class="form-label">State</label>
                                <select id="freightSelect" class="form-select" aria-label="select">
                                    <option selected>Select Freight</option>
                                    <option value="1">Air Freight</option>
                                    <option value="2">Road Freight</option>
                                    <option value="3">Ocean Freight</option>
                                    <option value="3">Rail Freight</option>
                                </select>											
                            </div>										
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="InputEmail-2" class="form-label">Distance</label>
                                    <input type="text" class="form-control form-control-lg" name="InputDistance" id="InputDistance" placeholder="Distance/Km *" required>
                                    <span class="form-icon form-location-icon">											
                                        <svg width="14" height="18"><use xlink:href="#form-location-icon"></use></svg> 
                                    </span>
                                </div>											
                            </div>
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="InputWeight" class="form-label">Weight</label>
                                    <input type="text" class="form-control form-control-lg" name="InputWeight" id="InputWeight" placeholder="Kilo *" required>
                                    <span class="form-icon form-weight-icon">											
                                        <svg width="17" height="16"><use xlink:href="#form-weight-icon"></use></svg> 
                                    </span>
                                </div>											
                            </div>
                            <div class="col-lg-6">
                                <div class="position-relative">
                                    <label for="InputEmail-2" class="form-label">Height</label>
                                    <input type="text" class="form-control form-control-lg" name="InputHeight" id="InputHeight" placeholder="Centimeter *" required>
                                    <span class="form-icon form-height-icon">											
                                        <svg width="16" height="16"><use xlink:href="#form-height-icon"></use></svg> 
                                    </span>
                                </div>											
                            </div>					
                            <div class="col-12">
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



<!--CTA Section ======================-->
<section class="section-cta cta-2">
    <div class="cta-wrapper text-bg-dark py-60 py-lg-100 py-xxl-120" data-bs-theme="dark">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between gy-40">
                <div class="col-lg-7">
                    <h3 class="mb-0 cta-heading">Delivering <span class="text-primary">Excellence</span> Your Premier Transport Agency</h3>
                </div>
                <!-- col-7 -->

                <div class="col-lg-3">
                    <div class="d-flex justify-content-lg-end">
                        <a href="{{ route('contact') }}" class="btn btn-primary">Contact with us</a>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <div class="cta-image cta-image-tra">
            <img src="{{ asset('assets/images/cta-image-tra.png') }}" class="img-fluid" alt="cta-image-tra">
        </div>
        <div class="cta-image cta-image-tra-2">
            <img src="{{ asset('assets/images/cta-image-tra-2.png') }}" class="img-fluid" alt="cta-image-tra-2">
        </div>
    </div>
    <!-- cta-wrapper -->
</section>
<!--CTA Section ======================-->
@endsection
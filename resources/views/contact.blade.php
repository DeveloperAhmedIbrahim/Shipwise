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
                            <span><a href="tel:+14373538433" class="text-decoration-none link-hover-animation-2">+1437-353-8433</a></span>
                        </span>									
                    </li>											
                </ul>
                <!-- contact-details-lists -->
            </div>
            <!-- col-3 -->

            <div class="col-lg-7 col-xxl-8">
                <div class="submit-form-wrapper bg-custom-light wow fadeIn" data-wow-duration="1.7s">
                    <h3 class="mb-40 text-lg-center">Get In Touch</h3>
                    <form onsubmit="submission(event, '{{ route('contact') }}')" class="submit-form row g-30">
                        @csrf
                        <div class="col-md-6">										
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                            <span class="text-danger error-field error-name">&nbsp;</span>
                        </div>					
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                            <span class="text-danger error-field error-email">&nbsp;</span>
                        </div>		
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number">
                            <span class="text-danger error-field error-contact">&nbsp;</span>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
                            <span class="text-danger error-field error-company">&nbsp;</span>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="3"></textarea>
                            <span class="text-danger error-field error-message">&nbsp;</span>
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
                        <img src="{{ asset('assets/images/image-04.jpg') }}" class="img-fluid" alt="section-image-1">									
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
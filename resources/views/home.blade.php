@extends('layout')
@section('title', 'Home')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<section class="section-hero mb-60 mb-lg-100 mb-xxl-120 position-relative">
  <!-- Sound Toggle Button -->
  <div id="soundConsent" class="position-absolute bottom-0 end-0 mb-3 me-3 z-3">
    <button 
      class="btn btn-light btn-sm rounded-circle p-2 shadow-sm" 
      onclick="enableSound()"
      style="width: 40px; height: 40px;"
    >
      <i class="bi bi-volume-mute fs-5"></i>
    </button>
  </div>

  <video
    id="heroVideo"
    autoplay
    muted
    loop
    playsinline
    class="w-100 h-auto"
    style="object-fit: cover; min-height: 600px;"
  >
    <source src="{{ asset('assets/videos/SHIPWISE-INTRO-VIDEO.mp4') }}" type="video/mp4">
    <img src="{{ asset('assets/images/about-image-2.jpg') }}" alt="Hero fallback" class="w-100 h-auto" alt="Shipwise About Image">
  </video>

  <!-- Your existing overlay content -->
</section>



<!--About Section ======================-->
<section class="section-about about-1 pb-60 pb-lg-100 pb-xxl-120">
    <div class="container">
        <div class="row gx-40 gy-5 gy-xl-0">
            <div class="col-xl-6 col-xxl-7">
                <div class="row gy-30">
                    <div class="col-md-6">
                        <div class="about-image-1 border-10 wow fadeInUp">
                            <img src="{{ asset('assets/images/image-02.jpg') }}" class="img-fluid" alt="Shipwise About Image">
                        </div>									
                        <!-- about-image-1 -->
                    </div>
                    <!-- col-md-6 -->
                    <div class="col-md-6">
                        <div class="d-flex flex-column gap-30">
                            <ul class="about-experience list-unstyled d-flex align-items-center justify-content-center gap-10 border-10 shadow mb-0">
                                <li>
                                    <h2 class="display-3 fw-bold text-primary mb-0">15</h2>												
                                </li>
                                <li>
                                    <h4 class="display-6 fw-bold lh-1 mb-0">Years Of Experience</h4>
                                </li>											
                            </ul>
                            <div class="about-image-2 border-10 wow fadeInUp">
                                <img src="{{ asset('assets/images/about-image-2.jpg') }}" class="img-fluid" alt="Shipwise About Image">
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


<!--Support Section ======================-->
<section class="section-support support-1 pb-60 pb-lg-100 pb-xxl-120">
    <div class="support-wrapper bg-custom-light py-60 py-lg-100 py-xxl-120">
        <div class="container">
            <div class="row align-items-center g-60">
                <div class="col-lg-7 col-xxl-6 wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.2s">
                    <div class="mb-30 mb-xxl-40">
                        <h6 class="subtitle mb-10 text-primary">Why Choose Us</h6>
                        <h3 class="mb-3 title">Why Leading Businesses <span class="text-primary">Trust</span> Shipwise</h3>
                    </div>								

                    <div class="d-flex flex-column flex-sm-row justify-content-between gap-30">
                        <div class="d-flex flex-column gap-10">
                            <h6 class="mb-0 fw-medium">Unmatched Reliability</h6>
                            <p class="mb-0">
                                Time is money, and we don’t waste either. Operating 24/7, 365 days a year, we ensure your 
                                shipments stay on the move — securely, punctually, and professionally — regardless of 
                                complexity or scale.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-sm-row justify-content-between gap-30 mt-3">
                        <div class="d-flex flex-column gap-10">
                            <h6 class="mb-0 fw-medium">Customized Logistics That Fit Like a Glove</h6>
                            <p class="mb-0">
                                Your freight isn’t generic — and neither are our solutions. From full truckloads to LTL, 
                                temperature-controlled to high-value expedited freight, we tailor every move to your 
                                operational and financial goals.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-sm-row justify-content-between gap-30 mt-3">
                        <div class="d-flex flex-column gap-10">
                            <h6 class="mb-0 fw-medium">Technology with a Purpose</h6>
                            <p class="mb-0">
                                We use advanced logistics platforms to optimize routes, reduce costs, and provide complete 
                                visibility at every step. Our clients get more than updates — they get control. 
                            </p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-sm-row justify-content-between gap-30 mt-3">
                        <div class="d-flex flex-column gap-10">
                            <h6 class="mb-0 fw-medium">Quality is Our Culture</h6>
                            <p class="mb-0">
                                We believe in doing fewer things — flawlessly. Every client receives focused attention, proactive 
                                service, and the peace of mind that comes from partnering with a team that gets it right the 
                                first time. 
                            </p>
                        </div>
                    </div>
                </div>
                <!-- col-6 -->

                <div class="col-lg-5 col-xxl-6">
                    <div class="support-image-wrapper position-relative">
                        <div class="support-inner-image-1 border-10 wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1.4s">
                            <img src="{{ asset('assets/images/support-image.jpg') }}" class="img-fluid" alt="Shipwise Support Image">										
                        </div>	
                        <div class="support-inner-image-2 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1.6s">
                            <img src="{{ asset('assets/images/support-image-3.jpg') }}" class="img-fluid" alt="Shipwise Support Image">										
                        </div>								
                    </div>
                </div>
                <!-- col-6 -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- support-wrapper -->
</section>
<!--Support Section ======================-->


<!--Service Section ======================-->
<section class="section-service service-1 pb-60 pb-lg-100 pb-xxl-120">
    <div class="container">
        <div class="row gx-30 gy-60">
            <div class="col-md-12">
                <div class="mb-30 mb-xxl-40">
                    <h6 class="subtitle mb-10 text-primary">Our Services</h6>
                    <h3 class="mb-3 title">Our Core <span class="text-primary">Capabilities</span></h3>
                    <p class="mb-0 descriptions-width">Whether you're a small business or a multinational corporation, SHIPWISE is your trusted partner for all your transportation and logistics needs.</p>
                </div>							
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-6">
                        <div class="card card-style-1 wow fadeIn" data-wow-delay="100ms" data-wow-duration="1.2s">
                            <div class="row gx-30 align-items-center">
                                <div class="col-lg-12 col-xxl-5">
                                <div class="card-image-wrapper border-10">
                                    <img src="{{ asset('assets/images/service-image-1.jpg') }}" class="img-fluid card-image" alt="Shipwise Service Image">
                                </div>
                                <!-- card-image-wrapper -->
                                </div>
                                <div class="col-lg-12 col-xxl-7">
                                <div class="card-body">
                                    <h3 class="card-title lead fw-semibold mb-10"><a href="{{ route('services') }}" class="text-decoration-none stretched-link link-hover-animation-1">Full Truckload (FTL) & Less Than Truckload (LTL)</a></h4>												
                                </div>
                                <!-- card-body -->
                                </div>
                            </div>
                        </div>
                        <!-- card-style-3 -->
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-6">
                        <div class="card card-style-1 wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.2s">
                            <div class="row gx-30 align-items-center">
                                <div class="col-lg-12 col-xxl-5">
                                <div class="card-image-wrapper border-10">
                                    <img src="{{ asset('assets/images/service-image-4.jpg') }}" class="img-fluid card-image" alt="Shipwise Service Image">
                                </div>
                                <!-- card-image-wrapper -->
                                </div>
                                <div class="col-lg-12 col-xxl-7">
                                <div class="card-body">
                                    <h4 class="card-title lead fw-semibold mb-10"><a href="{{ route('services') }}" class="text-decoration-none stretched-link link-hover-animation-1">Dry Van & Refrigerated (Temp-Controlled) Freight</a></h4>													
                                </div>
                                <!-- card-body -->
                                </div>
                            </div>
                        </div>
                        <!-- card-style-3 -->
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <div class="card card-style-1 wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.2s">
                            <div class="row gx-30 align-items-center">
                                <div class="col-lg-12 col-xxl-5">
                                <div class="card-image-wrapper border-10">
                                    <img src="{{ asset('assets/images/image-05.jpg') }}" class="img-fluid card-image" alt="Shipwise Service Image">
                                </div>
                                <!-- card-image-wrapper -->
                                </div>
                                <div class="col-lg-12 col-xxl-7">
                                <div class="card-body">
                                    <h4 class="card-title lead fw-semibold mb-10"><a href="{{ route('services') }}" class="text-decoration-none stretched-link link-hover-animation-1">Expedited & Time-Critical Shipments</a></h4>													
                                </div>
                                <!-- card-body -->
                                </div>
                            </div>
                        </div>
                        <!-- card-style-3 -->
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <div class="card card-style-1 wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.2s">
                            <div class="row gx-30 align-items-center">
                                <div class="col-lg-12 col-xxl-5">
                                <div class="card-image-wrapper border-10">
                                    <img src="{{ asset('assets/images/service-image-3.jpg') }}" class="img-fluid card-image" alt="Shipwise Service Image">
                                </div>
                                <!-- card-image-wrapper -->
                                </div>
                                <div class="col-lg-12 col-xxl-7">
                                <div class="card-body">
                                    <h4 class="card-title lead fw-semibold mb-10"><a href="{{ route('services') }}" class="text-decoration-none stretched-link link-hover-animation-1">Route Optimization & Load Planning</a></h4>													
                                </div>
                                <!-- card-body -->
                                </div>
                            </div>
                        </div>
                        <!-- card-style-3 -->
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-6">
                        <div class="card card-style-1 wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.2s">
                            <div class="row gx-30 align-items-center">
                                <div class="col-lg-12 col-xxl-5">
                                <div class="card-image-wrapper border-10">
                                    <img src="{{ asset('assets/images/service-image-5.jpg') }}" class="img-fluid card-image" alt="Shipwise Service Image">
                                </div>
                                <!-- card-image-wrapper -->
                                </div>
                                <div class="col-lg-12 col-xxl-7">
                                <div class="card-body">
                                    <h4 class="card-title lead fw-semibold mb-10"><a href="{{ route('services') }}" class="text-decoration-none stretched-link link-hover-animation-1">Freight Consolidation & Distribution </a></h4>													
                                </div>
                                <!-- card-body -->
                                </div>
                            </div>
                        </div>
                        <!-- card-style-3 -->
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-6">
                        <div class="card card-style-1 wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.2s">
                            <div class="row gx-30 align-items-center">
                                <div class="col-lg-12 col-xxl-5">
                                <div class="card-image-wrapper border-10">
                                    <img src="{{ asset('assets/images/service-image-8.jpg') }}" class="img-fluid card-image" alt="Shipwise Service Image">
                                </div>
                                <!-- card-image-wrapper -->
                                </div>
                                <div class="col-lg-12 col-xxl-7">
                                <div class="card-body">
                                    <h4 class="card-title lead fw-semibold mb-10"><a href="{{ route('services') }}" class="text-decoration-none stretched-link link-hover-animation-1">Cross-Border Logistics (Canada – U.S.)  </a></h4>													
                                </div>
                                <!-- card-body -->
                                </div>
                            </div>
                        </div>
                        <!-- card-style-3 -->
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-6">
                        <div class="card card-style-1 wow fadeIn" data-wow-delay="300ms" data-wow-duration="1.2s">
                            <div class="row gx-30 align-items-center">
                                <div class="col-lg-12 col-xxl-5">
                                <div class="card-image-wrapper border-10">
                                    <img src="{{ asset('assets/images/service-image-2.jpg') }}" class="img-fluid card-image" alt="Shipwise Service Image">
                                </div>
                                <!-- card-image-wrapper -->
                                </div>
                                <div class="col-lg-12 col-xxl-7">
                                <div class="card-body">
                                    <h4 class="card-title lead fw-semibold mb-10"><a href="{{ route('services') }}" class="text-decoration-none stretched-link link-hover-animation-1">Dedicated Freight Management Programs  </a></h4>													
                                </div>
                                <!-- card-body -->
                                </div>
                            </div>
                        </div>
                        <!-- card-style-3 -->
                    </div>
                </div>
            </div>
            <!-- col-6 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
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



<!--Testimonial Section ======================-->
<section class="section-testimonial testimonial-1 pb-60 pb-lg-100 pb-xxl-120">
    <div class="container">
        <div class="position-relative">
            <div class="row align-items-lg-center mb-40">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-lg-center">
                        <h6 class="mb-10 text-primary fw-medium">Testimonial</h6>
                        <h3 class="mb-20 mb-lg-30">Over 30,000 People Trusted Us</h3>
                        <p class="mb-0">“At SHIPWISE, we are more than just a transportation company - we're your trusted partner in navigating the complexities of logistics and supply chain management.”</p>
                    </div>
                    <!-- text-lg-center -->
                </div>
                <!-- col -->
            </div>
            <!-- row -->
            
            <div class="swiper testimonial-thumb-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                            <div class="testimonial-author-image-wrapper">
                                <div class="testimonial-author-image">
                                    <img src="{{ asset('assets/images/testimonial-2.jpg') }}" class="img-fluid" alt="Shipwise Testimonial Image">
                                </div>															
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                            <div class="testimonial-author-image-wrapper">
                                <div class="testimonial-author-image">
                                    <img src="{{ asset('assets/images/testimonial-1.jpg') }}" class="img-fluid" alt="Shipwise Testimonial Image">
                                </div>															
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                            <div class="testimonial-author-image-wrapper">
                                <div class="testimonial-author-image">
                                    <img src="{{ asset('assets/images/testimonial-3.jpg') }}" class="img-fluid" alt="Shipwise Testimonial Image">
                                </div>															
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="swiper testimonial-thumb-swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                        <div class="testimonial-details-wrapper">
                            <div class="testimonial-author-details">
                                <div class="text-center">
                                    <h4 class="mb-1 fw-medium"><a href="#" class="text-decoration-none link-hover-animation-1">David Malan</a></h4>
                                    <p class="mb-0 fs-base">Marketing Manager</p>
                                </div>															
                            </div>
                            <!-- testimonial-author-details -->
                            <div class=" text-center">
                                <p class="mb-40 body-color-style-2">“Working with SHIPWISE has been a game-changer for our business. attention to detail, reliability, and professionalism have exceeded our expectations time and time again. From streamlined logistics solutions to top-notch customer service, they truly go above and beyond to deliver results.”</p>
    
                                <div class="d-flex gap-1 justify-content-center">
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                </div>
                            </div>
                            <!-- text-lg-center -->
                        </div>
                        <!-- testimonial-details-wrapper -->
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                        <div class="testimonial-details-wrapper">
                            <div class="testimonial-author-details">
                                <div class="text-center">
                                    <h4 class="mb-1 fw-medium"><a href="#" class="text-decoration-none link-hover-animation-1">Mark Arnold</a></h4>
                                    <p class="mb-0 fs-base">Cargo Handler</p>
                                </div>															
                            </div>
                            <!-- testimonial-author-details -->
                            <div class=" text-center">
                                <p class="mb-40 body-color-style-2">“Working with SHIPWISE has been a game-changer for our business. attention to detail, reliability, and professionalism have exceeded our expectations time and time again. From streamlined logistics solutions to top-notch customer service, they truly go above and beyond to deliver results.”</p>
    
                                <div class="d-flex gap-1 justify-content-center">
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                </div>
                            </div>
                            <!-- text-lg-center -->
                        </div>
                        <!-- testimonial-details-wrapper -->
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-slide-container">
                        <div class="testimonial-details-wrapper">
                            <div class="testimonial-author-details">
                                <div class="text-center">
                                    <h4 class="mb-1 fw-medium"><a href="#" class="text-decoration-none link-hover-animation-1">Melina Rose</a></h4>
                                    <p class="mb-0 fs-base">Architechture Manager</p>
                                </div>															
                            </div>
                            <!-- testimonial-author-details -->
                            <div class=" text-center">
                                <p class="mb-40 body-color-style-2">“Working with SHIPWISE has been a game-changer for our business. attention to detail, reliability, and professionalism have exceeded our expectations time and time again. From streamlined logistics solutions to top-notch customer service, they truly go above and beyond to deliver results.”</p>
    
                                <div class="d-flex gap-1 justify-content-center">
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                    <span class="star-rating-icon">											
                                        <svg width="17" height="17"><use xlink:href="#star-rating-icon"></use></svg> 
                                    </span>
                                </div>
                            </div>
                            <!-- text-lg-center -->
                        </div>
                        <!-- testimonial-details-wrapper -->
                        </div>
                    </div>
                </div>
                
            </div>
                
            <!-- testimonialSwiper-1-buttons -->
            <div class="testimonialSwiper-1-buttons">
                <div class="testimonialSwiper-1-button-prev">
                    <span class="chevron-right-icon arrow-reverse">											
                        <svg width="10" height="20"><use xlink:href="#chevron-right-icon"></use></svg> 
                    </span>
                </div>
                <div class="testimonialSwiper-1-button-next">
                    <span class="chevron-right-icon">											
                        <svg width="10" height="20"><use xlink:href="#chevron-right-icon"></use></svg> 
                    </span>
                </div>									
            </div>
            <!-- testimonialSwiper-1-buttons -->						
        </div>
        <!-- position-relative -->
    </div>
    <!-- container -->
</section>
<!--Testimonial Section ======================-->


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
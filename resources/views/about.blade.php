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


<!--Service Section ======================-->
<section class="section-service service-3 pb-60 pb-lg-100 pb-xxl-120 hover-element">
    <div class="bg-custom-light py-60 py-lg-100 py-xxl-120">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt-5">
                    <div class="d-flex justify-content-center align-items-center gap-20">
                        <div class="border-10 wow fadeInUp fadeInTop d-flex justify-content-center align-items-center" style="width: 100%; height: 100%; position: relative;">
                            <div style="position: absolute; bottom: 0; right: 0; width: 200px; height: auto; background-color: rgba(163, 80, 72, 0.8); padding: 20px;">
                                <div class="text-center" style="z-index: 1;">
                                    <h4 class="mb-0 text-black">Providing <b>BEST</b> Freight Service!</h4>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/image-12.jpg') }}"  alt="Shipwise About Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center flex-column gap-20 pt-5">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Shipwise Logo">
                    <h5 class="text-primary">YOUR TRUSTED FREIGHT PARTNER!</h2>
                    <p class="mb-0 text-center" style="font-size: 24px;">At SHIPWISE Freight Inc, “Smart logistics for smarter business” is more than just a slogan—it’s our philosophy.</p>
                    <p>We believe that intelligent, technology-driven logistics are the backbone of modern business success. By leveraging advanced tools, data-driven insights, and industry expertise, we help companies streamline their supply chains, reduce costs, and improve delivery performance.</p>
                    <p>Our smart logistics solutions empower businesses to operate more efficiently, make informed decisions, and stay competitive in a fast-moving marketplace. When your logistics are smart, your business becomes even smarter.</p>
                </div>
            </div>
        </div>
        <!-- container -->
    </div>				
</section>
<!--Service Section ======================-->


<!--Service Section ======================-->
<section class="section-service service-3 pb-lg-100 pb-xxl-120 hover-element">
    <div class="bg-custom-light py-60 py-lg-100 py-xxl-120">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>WHAT WE DO</h3>
                    <p><strong>We are the best at transportation</strong></p>
                    <hr>
                    <p style="font-size: 20px;">
                        At <b>SHIPWISE</b> Fright Inc, we specialize in delivering dependable, efficient, and innovative transportation solutions tailored to meet the unique needs of businesses across diverse industries.
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>&nbsp;</h3>
                    <p><strong>&nbsp;</strong></p>
                    <hr>
                    <p style="font-size: 20px;">
                        As a dynamic and customer-focused freight transportation company, our mission is to streamline logistics, enhance supply chain efficiency, and support the seamless movement of goods—locally and globally.
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>&nbsp;</h3>
                    <p><strong>&nbsp;</strong></p>
                    <hr>
                    <p style="font-size: 20px;">
                        With a foundation built on excellence, reliability, and forward-thinking innovation, SHIPWISE transforms your logistical challenges into profitable, scalable opportunities. Whether you’re shipping across the country or across borders, we are your trusted partner in freight. 
                    </p>
                </div>
            </div>
        </div>
        <!-- container -->
    </div>				
</section>
<!--Service Section ======================-->


<!-- Service Section ====================== -->
<section class="section-service service-3 pb-60 pb-lg-100 pb-xxl-120 hover-element">
    <div class="bg-custom-light py-60 py-lg-100 py-xxl-120" style="background-color: #A35048;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center text-white">Our Core Values</h3>
                </div>
            </div>
            <!-- First Row: Three Columns -->
            <div class="row g-4 mt-4">
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-3 h-100">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/icon-01.webp') }}" width="86" height="81" class="img-fluid" alt="Integrity Icon">
                            </div>
                            <div class="col-8">
                                <h5 class="text-primary">Integrity</h5>
                                <p class="mb-0 text-black">We conduct every interaction and transaction with unwavering ethical standards, building trust through honesty and accountability.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-3 h-100">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/icon-02.webp') }}" width="86" height="81" class="img-fluid" alt="Customer Focus Icon">
                            </div>
                            <div class="col-8">
                                <h5 class="text-primary">Customer Focus</h5>
                                <p class="mb-0 text-black">Our clients are at the heart of everything we do. We actively listen, respond with purpose, and aim to exceed expectations at every opportunity.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-3 h-100">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/icon-03.webp') }}" width="86" height="81" class="img-fluid" alt="Innovation Icon">
                            </div>
                            <div class="col-8">
                                <h5 class="text-primary">Innovation</h5>
                                <p class="mb-0 text-black">We champion innovation, harnessing the latest technologies and forward-thinking strategies to enhance performance and create value-driven solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Row: Three Columns -->
            <div class="row g-4 mt-4">
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-3 h-100">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/icon-04.webp') }}" width="86" height="81" class="img-fluid" alt="Reliability Icon">
                            </div>
                            <div class="col-8">
                                <h5 class="text-primary">Reliability</h5>
                                <p class="mb-0 text-black">Consistency and dependability define our operations. We deliver on our promises—on time, every time.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-3 h-100">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/icon-05.webp') }}" width="86" height="81" class="img-fluid" alt="Teamwork Icon">
                            </div>
                            <div class="col-8">
                                <h5 class="text-primary">Teamwork</h5>
                                <p class="mb-0 text-black">We cultivate a collaborative environment where mutual respect, open communication, and shared goals drive collective success. Our people are our strength.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-white p-4 rounded-3 h-100">
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/images/icon-06.webp') }}" width="86" height="81" class="img-fluid" alt="Sustainability Icon">
                            </div>
                            <div class="col-8">
                                <h5 class="text-primary">Sustainability</h5>
                                <p class="mb-0 text-black">We are committed to responsible growth by integrating environmentally conscious practices into every facet of our business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
    </div>
</section>
<!-- Service Section ====================== -->


<!-- Address & Contact Section ====================== -->
<section class="py-60 py-lg-100 py-xxl-120">
    <div class="container">
        <div class="row g-4">
            <!-- Left Column - Address & Map -->
            <div class="col-md-6 pe-lg-5 mt-5">
                <div class="mb-5">
                    <h5 class="text-primary mb-4">Head Office: Canada</h3>
                    <p class="mb-4" style="font-size: 20px;">
                        SHIPWISE FREIGHT INC 5800 Ambler Dr Mississauga, ON L4W 4J4
                    </p>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.2402333494897!2d-79.64848072459714!3d43.64316995308057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b397ff43b2239%3A0x260346c3345964a0!2s5800%20Ambler%20Dr!5e0!3m2!1sen!2s!4v1748107808931!5m2!1sen!2s" 
                        width="100%" 
                        height="250" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="mb-5">
                    <h5 class="text-primary mb-4">USA Office Address</h3>
                    <p class="mb-4" style="font-size: 20px;">
                        SHIPWISE FREIGHT LLC 5900 Balcones DR STE 100 Austin TX 78731
                    </p>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.330227978764!2d-97.75752952528049!3d30.3415635044337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644cae2f96fffff%3A0x893fa7795b7d5f91!2s5900%20Balcones%20Dr%20Suit%20100%2C%20Austin%2C%20TX%2078731%2C%20USA!5e0!3m2!1sen!2s!4v1748108298393!5m2!1sen!2s" 
                        width="100%" 
                        height="250"  
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Right Column - Contact Form -->
            <div class="col-md-6 mt-5">
                <div class="bg-light p-4 p-lg-5 rounded-4">
                    <h3 class="text-primary mb-4">Contact Us</h3>
                    <form class="d-flex flex-column" onsubmit="submission(event, '{{ route('contact') }}')">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name">
                            <span class="error text-danger error-field error-name">&nbsp;</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email">
                            <span class="error text-danger error-field error-email">&nbsp;</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="form-label">Contact *</label>
                            <input type="text" class="form-control form-control-lg" id="contact" name="contact">
                            <span class="error text-danger error-field error-contact">&nbsp;</span>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="form-label">Company *</label>
                            <input type="text" class="form-control form-control-lg" id="company" name="company">
                            <span class="error text-danger error-field error-company">&nbsp;</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control form-control-lg" id="message" name="message" rows="4"></textarea>
                            <span class="error text-danger error-field error-message">&nbsp;</span>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Address & Contact Section ======================== -->
@endsection
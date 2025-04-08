@extends('layouts.app')

@section('title', 'About Company - Crafto Consulting')
@section('description', 'Learn about our company and expertise')

@section('content')
<!-- start page title section -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0" data-parallax-background-ratio="0.5"  style="background-image: url('{{ asset('images/website-images/hero.jpg') }}');">>
    <div class="opacity-light bg-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center small-screen">
            <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-small" data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h1 class="mb-5px alt-font text-white"><span class="opacity-6">Business profile</span></h1>
                <h2 class="mb-0 text-white alt-font ls-minus-2px text-shadow-double-large fw-500">About company</h2>
            </div>
            <div class="down-section text-center" data-anime='{ "translateY": [100, 0], "opacity": [0,1], "easing": "easeOutQuad" }'>
                <a href="#down-section" class="section-link">
                    <div class="fs-30 sm-fs-32 text-white">
                        <i class="bi bi-mouse"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->

<!-- start about section -->
<section id="down-section">
    <div id="particles-01" data-particle="true" data-particle-options='{"particles": {"number": {"value": 6,"density": {"enable": true,"value_area": 1000}},"color":{"value":["#b7b9be", "#dd6531"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"move": {"enable": true,"speed":2,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}' class="position-absolute h-100 top-0 left-0 z-index-minus-1"></div>
    <div class="container">
        <div class="row justify-content-center text-center text-lg-start">
            <div class="col-xl-5 col-lg-6 md-mb-30px xs-mb-25px">
                <h2 class="fw-600 text-dark-gray ls-minus-2px mb-0" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>We deliver exceptional and sustainable brand
                    for our clientele .</h2>
            </div>
            <div class="col-lg-6 offset-xl-1">
                <p class="w-90 sm-w-100 mx-auto mx-lg-0" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    We are specialist in sighage’s of all kinds. Our
                    expertise goes a long way in manufacturing of quality
                    durable signs at competitive price. We manufacture
                    sighage within our premises being a one stop
                    workshop to give our client the best of quality by
                    enhancing research on different type of materials.
                </p>
                <p class="w-90 sm-w-100 mx-auto mx-lg-0" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
   
                    On several occasion we have imported customized
                    materials for huge projects just to make sure we stick
                    to our client’s corporate brand and colors. Investing
                    in the current technology machinery has always been
                    our priority to enhance quality in production.
                </p>
                <a href="{{ route('services') }}" class="btn btn-link btn-large text-dark-gray fw-600" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>Explore services</a>
            </div>
        </div>
        
      
    </div>
</section>
<!-- end about section -->

<!-- start features section -->
<section class="p-0 bg-dark-gray overflow-hidden">
    <div class="container-fluid p-0"> 
        <div class="row justify-content-center g-0">
            <div class="col-lg-6 md-h-550px xs-h-400px overflow-hidden" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1000, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="h-100 cover-background"style="background-image: url('{{ asset('images/website-images/customers.jpg') }}');"></div>
            </div>
            <div class="col-lg-6 col-md-10 ps-8 pe-8 pt-7 pb-7" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'> 
                <h2 class="alt-font fw-500 text-white ls-minus-2px">Passion for All signage’s .</h2> 
                <p class="w-80 lg-w-100 mb-30px">
                    Our passion for SIGNAGE and BRANDING in totality
                    drives us to adopt new technology and its application
                    to serve our clients deligently. Our extensive portfolio
                    of projects gives us the ability to handle any signage
                    work technically. We leverage this technical
                    background to gives exactly what you need. Effective
                    outdoor communications sign/branding gives you
                    business enhanced visibility. This mileage will be
                    taken care of by us, the technology and its application. 
                </p> 
                <!-- start features box item -->
            
                <!-- end features box item -->
                <!-- start features box item -->
               
                <!-- end features box item -->
                <!-- start features box item -->
               
                <!-- end features box item -->
            </div>
        </div>
    </div>
</section>
<!-- end features section -->


<!-- end expertise section -->

<!-- start why choose us section -->
<section class="bg-very-light-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-50px">
                <div class="row">
                    <div class="col-sm-6 mt-30px xs-mt-0" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,0.7], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start features box item -->
                        <div class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all mb-30px">
                            <div class="feature-box hover-box dark-hover last-paragraph-no-margin">
                                <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Like icon-extra-large text-base-color mb-20px justify-content-center"></i>
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600">Honorable</span>
                                        <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">Lorem ipsum is simply dummy text.</p>
                                    </div>
                                    <div class="feature-box-overlay bg-base-color"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all xs-mb-30px">
                            <div class="feature-box hover-box dark-hover last-paragraph-no-margin">
                                <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Knight icon-extra-large text-base-color mb-20px justify-content-center"></i>
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600">Analytics</span>
                                        <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">Lorem ipsum is simply dummy text.</p>
                                    </div>
                                    <div class="feature-box-overlay bg-base-color"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div>
                    <div class="col-sm-6" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,0.7], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start features box item -->
                        <div class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all mb-30px">
                            <div class="feature-box hover-box dark-hover last-paragraph-no-margin">
                                <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-MaleFemale icon-extra-large text-base-color mb-20px justify-content-center"></i>
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600">Leadership</span>
                                        <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">Lorem ipsum is simply dummy text.</p>
                                    </div>
                                    <div class="feature-box-overlay bg-base-color"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all mt-30px">
                            <div class="feature-box hover-box dark-hover last-paragraph-no-margin">
                                <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                    <div class="feature-box-icon">
                                        <i class="line-icon-Bar-Chart2 icon-extra-large text-base-color mb-20px justify-content-center"></i>
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600">Production</span>
                                        <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">Lorem ipsum is simply dummy text.</p>
                                    </div>
                                    <div class="feature-box-overlay bg-base-color"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div> 
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 text-center text-lg-start" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px">Mission</h2>
                <p class="w-90 xs-w-100 mx-auto mx-lg-0">
                    To provide our customers with the highest quality signage in the quickest turn-around time and at the most competitive prices.
                </p>
                <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px">Strategy & Vision</h2>
                <p class="w-90 xs-w-100 mx-auto mx-lg-0">
                    Impex Sign Work strives to be the market leader in introducing innovative, cost-effective, and reliable signage that is manufactured to meet and exceed standards. We grow by learning from the past and envisioning the future of signage.
                </p>
            </div>            
            
        </div>
    </div>
</section>
<!-- end why choose us section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <div class="col-xl-6 col-lg-8 col-md-9 mx-auto mb-5">
            <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-2 text-base-color">
                Trusted Clients
            </span>
            <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px mb-3">
                Our Partners
            </h2>
           
        </div>

        <div class="row justify-content-center align-items-center g-4">
            <!-- Client 1 -->
            <div class="col-6 col-md-2 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/website-images/kcb.png') }}" alt="KCB" style="width: 120px; height: auto;">
            </div>

            <div class="col-6 col-md-2 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/website-images/crd.png') }}" alt="KCB" style="width: 120px; height: auto;">
            </div>

            <!-- Client 2 -->
            <div class="col-6 col-md-2 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/website-images/aml.png') }}" alt="AML" style="width: 120px; height: auto;">
            </div>

            <!-- Client 3 -->
            <div class="col-6 col-md-2 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/website-images/equit.png') }}" alt="Equity" style="width: 120px; height: auto;">
            </div>

            <!-- Client 4 -->
            <div class="col-6 col-md-2 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/website-images/taifagas.png') }}" alt="Taifa Gas" style="width: 120px; height: auto;">
            </div>
        </div>
    </div>
</section>
<!-- end clients section -->
@endsection

@section('scripts')
@parent

@endsection
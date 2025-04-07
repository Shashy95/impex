@extends('layouts.app')

@section('title', 'About Company - Crafto Consulting')
@section('description', 'Learn about our company and expertise')

@section('content')
<!-- start page title section -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0" data-parallax-background-ratio="0.5" style="background-image: url(https://via.placeholder.com/1925x1050)">
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
                <div class="h-100 cover-background" style="background-image: url(https://via.placeholder.com/960x762)"></div>
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

<!-- start expertise section -->
<section>
    <div class="container"> 
        <div class="row justify-content-center">
            <div class="row justify-content-center mb-2">
                <div class="col-lg-7 text-center" data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Work performance</span>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Our expertise</h2>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <!-- start pie chart item -->
            <div class="col md-mb-50px sm-mb-40px">
                <div class="chart-percent mb-25px">
                    <span class="pie-chart-style-01 d-flex align-items-center justify-content-center text-center" data-line-width="7" data-percent="96" data-track-color="#f6d8cc" data-start-color="#f66c34" data-end-color="#f49a76">
                        <span class="percent d-flex align-items-center justify-content-center alt-font fs-40 ls-minus-2px text-dark-gray fw-600"></span>
                    </span>
                </div>
                <div class="chart-text text-center fs-20 alt-font text-dark-gray fw-600 mb-5px">Strategy consulting</div>
                <p class="w-80 lg-w-90 sm-w-100 mx-auto mb-0 text-center">Lorem ipsum dolor consectetur adipiscing eiusmod tempor.</p>
            </div>
            <!-- end pie chart item -->
            <!-- start pie chart item -->
            <div class="col md-mb-50px sm-mb-40px">
                <div class="chart-percent mb-25px">
                    <span class="pie-chart-style-01 d-flex align-items-center justify-content-center text-center" data-line-width="7" data-percent="88" data-track-color="#f6d8cc" data-start-color="#f66c34" data-end-color="#f49a76">
                        <span class="percent d-flex align-items-center justify-content-center alt-font fs-40 ls-minus-2px text-dark-gray fw-600"></span>
                    </span>
                </div>
                <div class="chart-text text-center fs-20 alt-font text-dark-gray fw-600 mb-5px">Modeling analytics</div>
                <p class="w-80 lg-w-90 sm-w-100 mx-auto mb-0 text-center">Lorem ipsum dolor consectetur adipiscing eiusmod tempor.</p>
            </div>
            <!-- end pie chart item -->
            <!-- start pie chart item -->
            <div class="col">
                <div class="chart-percent mb-25px">
                    <span class="pie-chart-style-01 d-flex align-items-center justify-content-center text-center" data-line-width="7" data-percent="90" data-track-color="#f6d8cc" data-start-color="#f66c34" data-end-color="#f49a76">
                        <span class="percent d-flex align-items-center justify-content-center alt-font fs-40 ls-minus-2px text-dark-gray fw-600"></span>
                    </span>
                </div>
                <div class="chart-text text-center fs-20 alt-font text-dark-gray fw-600 mb-5px">Operations careers</div>
                <p class="w-80 lg-w-90 sm-w-100 mx-auto mb-0 text-center">Lorem ipsum dolor consectetur adipiscing eiusmod tempor.</p>
            </div>
            <!-- end pie chart item --> 
        </div>
    </div>
</section>
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
                <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px">Why choose our company services?</h2>
                <p class="w-90 xs-w-100 mx-auto mx-lg-0">Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam.</p>
                <a href="{{ route('contact') }}" class="btn btn-large btn-dark-gray btn-box-shadow mt-10px btn-round-edge">Get started now!</a>
            </div>
        </div>
    </div>
</section>
<!-- end why choose us section -->

<!-- start clients section -->
<section class="bg-very-light-gray pt-0">
    <div class="container"> 
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 text-center justify-content-center align-items-center clients-style-06" data-anime='{"el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <!-- start client item -->
            <div class="col client-box text-center md-mb-40px">
                <a href="#"><img src="{{ asset('images/logo-logitech.svg') }}" class="h-40px" alt=""></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box text-center md-mb-40px">
                <a href="#"><img src="{{ asset('images/logo-amazon.svg') }}" class="h-40px" alt=""></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box text-center xs-mb-40px">
                <a href="#"><img src="{{ asset('images/logo-walmart.svg') }}" class="h-40px" alt=""></a>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col client-box text-center">
                <a href="#"><img src="{{ asset('images/logo-yahoo.svg') }}" class="h-40px" alt=""></a>
            </div>
            <!-- end client item --> 
        </div>
    </div>
</section>
<!-- end clients section -->
@endsection

@section('scripts')
@parent

@endsection
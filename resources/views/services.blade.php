@extends('layouts.app')

@section('title', 'Our Services')
@section('description', 'Professional consulting services for your business growth')

@section('content')
<!-- start page title section -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0" data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('images/website-images/hero.jpg') }}');">
    <div class="opacity-light bg-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center small-screen">
            <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-small" data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h1 class="mb-5px alt-font text-white fw-400"><span class="opacity-6">Helping your business</span></h1>
                <h2 class="mb-0 text-white alt-font ls-minus-2px text-shadow-double-large fw-500">Our services</h2>
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


<!-- start results section -->
<section id="down-section" class="position-relative">
    <div id="particles-01" data-particle="true" data-particle-options='{"particles": {"number": {"value": 5,"density": {"enable": true,"value_area": 1000}},"color":{"value":["#b7b9be", "#dd6531"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"move": {"enable": true,"speed":2,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}' class="position-absolute h-100 top-0 left-0 z-index-minus-1"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center text-center text-lg-start">
            <div class="col-xl-5 col-lg-6 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <h2 class="text-dark-gray fw-600 ls-minus-2px">We have helped business revenue.</h2>
                <div class="service-benefits">
                    <span class="fw-600 fs-20 mb-5px text-dark-gray d-inline-block">Management and marketing</span>
                    <p class="w-80 sm-w-100 mx-auto mx-lg-0">Professional management services to optimize your marketing strategies.</p>
                    
                    <span class="fw-600 fs-20 mb-5px text-dark-gray d-inline-block">Business strategy and research</span>
                    <p class="w-80 sm-w-100 mx-auto mx-lg-0">Comprehensive research to develop effective business strategies.</p>
                    
                    <a href="#" class="btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge mt-10px">About company</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-11 offset-xl-1">
                <figure class="position-relative md-ps-40px border-radius-5px" data-anime='{ "effect": "slide", "color": "#292d36", "direction":"lr", "easing": "easeOutQuad", "delay":0}'>
                    <img src="https://via.placeholder.com/570x561" alt="Business results" class="border-radius-5px w-100">
                    <figcaption class="position-absolute bottom-minus-20px xs-bottom-minus-60px left-minus-50px lg-left-minus-20px xs-left-minus-0px text-white text-center last-paragraph-no-margin w-60 lg-w-70 md-w-60 xs-w-280px atropos" data-atropos> 
                        <div class="atropos-scale overflow-hidden border-radius-5px" data-anime='{ "effect": "slide", "color": "#dd6531", "direction":"lr", "easing": "easeOutQuad", "delay":500}'>
                            <div class="atropos-rotate">
                                <div class="atropos-inner border-radius-5px bg-base-color text-white ps-12 pe-12 pt-60px pb-60px sm-p-20px sm-pt-30px sm-pb-30px"> 
                                    <div data-atropos-offset="3">
                                        <i class="line-icon-Money-Bag icon-double-large mb-25px"></i>
                                        <span class="fs-22 sm-fs-20 mb-5px d-block">Endless possibilities</span>
                                        <p class="opacity-7 fw-300">Transform your business with our expert services.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption> 
                </figure>
            </div>
        </div>

        <!-- results counter -->
        <div class="row row-cols-2 row-cols-lg-4 justify-content-center counter-style-06 mt-8 xs-mt-22" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <!-- start counter item -->
            <div class="col feature-box md-mb-50px xs-mb-35px">
                <div class="feature-box-content">
                    <div class="counter-number alt-font text-light-gray counter fs-120 fw-600 opacity-2 ls-minus-3px" data-speed="2000" data-to="98"></div>
                    <span class="counter-title fs-24 fw-500 text-dark-gray ls-minus-1px">Clients</span>
                </div>                        
            </div>
            <!-- end counter item -->
            
            <!-- start counter item -->
            <div class="col feature-box md-mb-50px xs-mb-35px"> 
                <div class="feature-box-content">
                    <div class="counter-number alt-font text-light-gray counter fs-120 fw-600 opacity-2 ls-minus-3px" data-speed="2000" data-to="56"></div>
                    <span class="counter-title fs-24 fw-500 text-dark-gray ls-minus-1px">Projects</span> 
                </div>
            </div>
            <!-- end counter item -->
            
            <!-- start counter item -->
            <div class="col feature-box"> 
                <div class="feature-box-content">
                    <div class="counter-number alt-font text-light-gray counter fs-120 fw-600 opacity-2 ls-minus-3px" data-speed="2000" data-to="63"></div>
                    <span class="counter-title fs-24 fw-500 text-dark-gray ls-minus-1px">Partners</span>
                </div>                        
            </div>
            <!-- end counter item -->
            
            <!-- start counter item -->
            <div class="col feature-box"> 
                <div class="feature-box-content last-paragraph-no-margin">
                    <div class="counter-number alt-font text-light-gray counter fs-120 fw-600 opacity-2 ls-minus-3px" data-speed="2000" data-to="48"></div>
                    <span class="counter-title fs-24 fw-500 text-dark-gray ls-minus-1px">Awards</span> 
                </div>
            </div>                        
            <!-- end counter item -->
        </div>
    </div>
</section>
<!-- end results section -->

<!-- start all services section -->
<section class="bg-very-light-gray">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-7 text-center" data-anime='{"opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Our Expertise</span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Branding Solutions</h2>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "willchange": "transform", "scale": [0.9, 1], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>

            <!-- START LOOP OF SERVICES -->
            <!-- Iconic 3D LED Signage -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="line-icon-Light-Bulb icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Iconic 3D LED Signage</span>
                        <p>High-visibility signage with striking illumination and dimensional design.</p>
                    </div>
                </div>
            </div>

            <!-- Petrol Station Signage -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="fas fa-gas-pump icon-double-large text-base-color mb-25px"></i>

                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Petrol Station Signage</span>
                        <p>Custom signage tailored for fuel stations to ensure safety and branding.</p>
                    </div>
                </div>
            </div>

            <!-- Vehicle Branding -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="line-icon-Car icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Vehicle Branding</span>
                        <p>Vehicle wraps and graphics for impactful mobile advertising.</p>
                    </div>
                </div>
            </div>

            <!-- Aircraft Branding -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="fas fa-plane icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Aircraft Branding</span>
                        <p>Professional aircraft livery and custom branding solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Window Branding -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="line-icon-Shop icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Window Branding</span>
                        <p>Creative vinyls and decals for storefronts and glass walls.</p>
                    </div>
                </div>
            </div>

            <!-- Pylon Signage -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="fas fa-sign icon-double-large text-base-color mb-25px"></i>

                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Pylon Signage</span>
                        <p>Freestanding signs for visibility from long distances and highways.</p>
                    </div>
                </div>
            </div>

            <!-- Internal Displays Branding -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="line-icon-TV icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Internal Displays Branding</span>
                        <p>Digital display and interior signage for retail and corporate spaces.</p>
                    </div>
                </div>
            </div>

            <!-- RGB LED Signage -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="line-icon-Light-Bulb icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">RGB LED Signage</span>
                        <p>Vibrant LED displays for advertisements, events, and public areas.</p>
                    </div>
                </div>
            </div>

            <!-- Forex Rate Boards -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="line-icon-Line-Chart icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Forex Rate Boards</span>
                        <p>Dynamic digital boards for banks and financial institutions.</p>
                    </div>
                </div>
            </div>

            <!-- Moving Message LED Signage -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="line-icon-Talk-Man icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Moving Message LED Signage</span>
                        <p>Scrolling LED signs for real-time messages and announcements.</p>
                    </div>
                </div>
            </div>

            <!-- General Engraving -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="fas fa-tools icon-double-large text-base-color mb-25px"></i>

                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">General Engraving</span>
                        <p>Precision laser engraving on metal, acrylic, wood, and more.</p>
                    </div>
                </div>
            </div>

            <!-- Airport Signage -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="line-icon-Navigation-RightWindow icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Airport Signage</span>
                        <p>Wayfinding and informational signage for airports and terminals.</p>
                    </div>
                </div>
            </div>

            <!-- Gantries -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="line-icon-Structure icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Gantries</span>
                        <p>Large overhead signage structures for roads, tolls, and highways.</p>
                    </div>
                </div>
            </div>

            <!-- Promotional Materials -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="line-icon-Gift-Box icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Promotional Materials</span>
                        <p>Custom branded corporate gifts, uniforms, and event merchandise.</p>
                    </div>
                </div>
            </div>
            <!-- END LOOP -->

            <!-- Promotional Materials -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 p-18 bg-white box-shadow-quadruple-large border-radius-5px">
                    <div class="feature-box-icon">
                        <i class="line-icon-Gift-Box icon-double-large text-base-color mb-25px"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font text-dark-gray fw-600 fs-20">Floor graphics</span>
                        <p>Custom branded corporate gifts, uniforms, and event merchandise.</p>
                    </div>
                </div>
            </div>
            <!-- END LOOP -->
        </div>

        <div class="row mt-6" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <div class="col-12 text-center">
                <h6 class="text-dark-gray ls-minus-1px lh-inherit m-0">
                    We're committed to <span class="fw-600 text-decoration-line-bottom-medium">elevating your brand</span> through impactful signage.
                </h6>
            </div>
        </div>
    </div>
</section>



<!-- end testimonials section -->
@endsection

@section('scripts')
@parent

@endsection
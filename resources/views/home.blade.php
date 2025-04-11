@extends('layouts.app')

@section('title', 'Home')
@section('description', 'Professional signage services for your business - Impex Sign Works')

@section('content')
<!-- start hero section -->
<section class="p-0 bg-dark-gray">
    <div class="swiper full-screen bg-dark-gray ipad-top-space-margin md-h-600px sm-h-500px swiper-number-pagination-style-02 magic-cursor light magic-cursor-vertical lg-no-parallax"
         data-slider-options='{ 
            "slidesPerView": 1,
            "direction": "horizontal",
            "loop": true,
            "parallax": true,
            "speed": 1000,
            "pagination": { "el": ".swiper-number", "clickable": true },
            "autoplay": { "delay": 40000, "disableOnInteraction": false },
            "keyboard": { "enabled": true, "onlyInViewport": true },
            "breakpoints": { "1199": { "direction": "vertical" }},
            "effect": "slide"
         }'
         data-number-pagination="1">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background position-absolute top-0 start-0 w-100 h-100"
                     data-swiper-parallax="500"
                     style="background-image: url('{{ asset('images/website-images/hero.jpg') }}');">
                    <div class="opacity-light bg-dark-gray"></div>
                    <div class="container h-100">
                        <div class="row align-items-center h-100 justify-content-center">
                            <div class="col-md-10 text-white d-flex flex-column justify-content-center h-100 text-center">
                                <div class="alt-font fs-110 xs-fs-80 lh-100 mb-5 text-shadow-double-large"
                                     data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <span class="d-inline-block">Impex</span>
                                    <span class="fw-600 d-inline-block">Sign Works</span>
                                </div>
                                <p class="fs-24 mb-4" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 500, "delay": 200 }'>
                                    Transforming spaces with innovative signage solutions
                                </p>
                                <div data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300 }'>
                                    <a href="{{ route('contact') }}" class="btn btn-base-color btn-box-shadow btn-large btn-round-edge">
                                        Let's work together
                                    </a>
                                </div>
                                <div class="fs-20 alt-font position-absolute lg-position-relative bottom-0 mb-8 w-100 text-shadow-double-large"
                                     data-anime='{ "opacity": [0, 1], "duration": 500, "delay": 1000 }'>
                                    Request a free <a href="{{ route('contact') }}" class="text-decoration-line-bottom text-white fw-500">consultation!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background position-absolute top-0 start-0 w-100 h-100"
                     data-swiper-parallax="500"
                     style="background-image: url('{{ asset('images/website-images/hero2.jpg') }}');">
                    <div class="opacity-light bg-dark-gray"></div>
                    <div class="container h-100">
                        <div class="row align-items-center h-100 justify-content-center">
                            <div class="col-md-10 text-white d-flex flex-column justify-content-center h-100 text-center">
                                <div class="alt-font fs-110 xs-fs-80 lh-100 mb-5 text-shadow-double-large"
                                     data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <span class="d-inline-block">Creative</span>
                                    <span class="fw-600 d-inline-block">Signage</span>
                                </div>
                                <p class="fs-24 mb-4" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 500, "delay": 200 }'>
                                    Premium quality signs that make a lasting impression
                                </p>
                                <div data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300 }'>
                                    <a href="{{ route('services') }}" class="btn btn-base-color btn-box-shadow btn-large btn-round-edge">
                                        Explore our services
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Slider Pagination -->
        <div class="swiper-pagination container swiper-number swiper-pagination-clickable swiper-pagination-bullets-right"></div>
    </div>
</section>
<!-- end hero section -->

<!-- start features section -->
<section class="position-relative overflow-hidden py-5">
    <div id="particles-01" data-particle="true" data-particle-options='{"particles": {"number": {"value": 5,"density": {"enable": true,"value_area": 1000}},"color":{"value":["#b7b9be", "#dd6531"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"move": {"enable": true,"speed":2,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}' class="position-absolute h-100 top-0 left-0 z-index-minus-1"></div>
    <div class="container">
        {{--
        <!-- Feature boxes -->
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5" data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- Feature 1 -->
            <div class="col mb-4">
                <div class="feature-box feature-box-shadow p-4 border-radius-6px bg-white h-100">
                    <div class="feature-box-icon">
                        <i class="line-icon-Bulb text-base-color fs-40 mb-3"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fs-18 text-dark-gray fw-600 d-block mb-2">Innovative Design</span>
                        <p>Creative solutions tailored to your brand identity and business needs.</p>
                    </div>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col mb-4">
                <div class="feature-box feature-box-shadow p-4 border-radius-6px bg-white h-100">
                    <div class="feature-box-icon">
                        <i class="line-icon-Medal-2 text-base-color fs-40 mb-3"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fs-18 text-dark-gray fw-600 d-block mb-2">Premium Quality</span>
                        <p>High-quality materials and craftsmanship that ensure durability and visual impact.</p>
                    </div>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col mb-4">
                <div class="feature-box feature-box-shadow p-4 border-radius-6px bg-white h-100">
                    <div class="feature-box-icon">
                        <i class="line-icon-Time-Clock text-base-color fs-40 mb-3"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fs-18 text-dark-gray fw-600 d-block mb-2">Timely Delivery</span>
                        <p>Efficient project management to deliver your signage on schedule and within budget.</p>
                    </div>
                </div>
            </div>
        </div>
        --}}
        
        <!-- About Section with Improved Layout -->
        <div class="row mt-5 pt-3 align-items-center">
            <div class="col-lg-6 col-md-12 mb-5 mb-lg-0" data-anime='{ "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "delay": 300 }'>
                <div class="position-relative">
                    <div class="border-radius-10px overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('images/website-images/about3.png') }}" alt="Impex Sign Works - Quality Signage">
                    </div>
                    <div class="bg-base-color border-radius-6px py-3 px-4 position-absolute bottom-0 right-0 text-white d-inline-block">
                        <span class="alt-font fs-16 fw-600">10+ Years of Excellence</span>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12" data-anime='{ "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "delay": 500 }'>
                <div class="ps-lg-4">
                    <span class="fs-18 text-base-color fw-600 d-block mb-2">ABOUT IMPEX</span>
                    <h2 class="alt-font text-dark-gray fw-600 mb-4">Excellence in Signage Solutions</h2>
                    
                    <p class="mb-4">Impex Sign Works strives to be the market leader in introducing new, cost-effective and guaranteed signage that is manufactured to meet and exceed standards by looking backward for lessons learned and to grow by envisaging the future of signage.</p>
                    
                    <!-- Service Features in 2x2 Grid -->
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="line-icon-Archery-2 text-base-color fs-32"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="alt-font fs-16 fw-600 mb-2">Quality Signage</h5>
                                    <p class="mb-0">Durable and innovative solutions for businesses</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="line-icon-Brush text-base-color fs-32"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="alt-font fs-16 fw-600 mb-2">Custom Design</h5>
                                    <p class="mb-0">Eye-catching signage tailored to your brand</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="line-icon-Worker text-base-color fs-32"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="alt-font fs-16 fw-600 mb-2">Professional Installation</h5>
                                    <p class="mb-0">Complete setup with attention to detail</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="line-icon-Gear text-base-color fs-32"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="alt-font fs-16 fw-600 mb-2">Maintenance Services</h5>
                                    <p class="mb-0">Ongoing support to ensure lasting quality</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="mt-4 pt-2">
                        <a href="{{ route('company') }}" class="btn btn-medium btn-dark-gray btn-box-shadow me-3 ">About Company</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-medium btn-transparent-dark-gray">View Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end features section -->

<!-- start services section -->
<section class="bg-gradient-very-light-gray ps-7 pe-7 xxl-ps-3 xxl-pe-3 xs-px-0 py-5">
    <div class="container-fluid"> 
        <div class="row justify-content-center mb-5">
            <div class="col-xl-5 col-lg-7 col-md-8 text-center" data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Comprehensive Solutions</span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Our Premium Services</h2>
                <p class="mb-0">Delivering exceptional quality and innovative signage solutions for businesses of all sizes</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-md-2 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- service item -->
            <div class="col interactive-banner-style-05 lg-mb-30px position-relative z-index-1">
                <div class="atropos" data-atropos data-atropos-perspective="1450">
                    <a href="{{ route('services.details','neon-led-signs') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                    <img class="w-100" src="{{ asset('images/website-images/neon.jpg') }}" alt="Neon LED Signs">
                                    <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                        <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">Services</div>
                                        <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28">Neon LED Signs 3D Letters</span>
                                        <p class="text-white opacity-6 fs-18">Eye-catching illuminated signage</p>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent z-index-minus-1"></div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col interactive-banner-style-05 lg-mb-30px position-relative z-index-1">
                <div class="atropos" data-atropos data-atropos-perspective="1450">
                    <a href="{{ route('services.details','vehicle-branding') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                    <img class="w-100" src="{{ asset('images/website-images/motor.jpg') }}" alt="Vehicle Branding">
                                    <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                        <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">Services</div>
                                        <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28">Motor Vehicle & Fleet Branding</span>
                                        <p class="text-white opacity-6 fs-18">Mobile advertising solutions</p>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent z-index-minus-1"></div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col interactive-banner-style-05 lg-mb-30px position-relative z-index-1">
                <div class="atropos" data-atropos data-atropos-perspective="1450">
                    <a href="{{ route('services.details','metal-fabrication') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                    <img class="w-100" src="{{ asset('images/website-images/metal.jpg') }}" alt="Metal Fabrication">
                                    <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                        <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">Services</div>
                                        <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28">Metal Fabrication</span>
                                        <p class="text-white opacity-6 fs-18">Custom metal signage and structures</p>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent z-index-minus-1"></div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            
            <div class="col interactive-banner-style-05 lg-mb-30px position-relative z-index-1">
                <div class="atropos" data-atropos data-atropos-perspective="1450">
                    <a href="{{ route('services.details','petrol-station-signage') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                    <img class="w-100" src="{{ asset('images/website-images/station.jpg') }}" alt="Petrol Station Signage">
                                    <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                        <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">Services</div>
                                        <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28">Petrol Station Signage</span>
                                        <p class="text-white opacity-6 fs-18">Specialized fuel station branding</p>
                                        <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9"></div>
                                        <div class="box-overlay bg-gradient-gray-light-dark-transparent z-index-minus-1"></div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('services') }}" class="btn btn-medium btn-dark-gray btn-box-shadow me-25px btn-round-edge">Explore More Services</a>
        </div>
    </div>
</section>
<!-- end services section -->

<!-- start portfolio section -->
<section class="py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-xl-5 col-lg-7 col-md-8 text-center" data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Our Works</span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Featured Projects</h2>
                <p class="mb-0">Explore our portfolio of completed signage projects for leading brands and businesses</p>
            </div>
        </div>

        <!-- Portfolio filter -->
        <div class="row">
            <div class="col-12 filter-content">
                <ul class="portfolio-filter nav nav-tabs d-flex flex-wrap justify-content-center border-0 text-uppercase alt-font mb-5" id="portfolio-tabs">
                    <li class="nav-item"><button class="nav-link active" data-filter="*">ALL</button></li>
                    <li class="nav-item"><button class="nav-link" data-filter=".printing">PRINTING</button></li>
                    <li class="nav-item"><button class="nav-link" data-filter=".branding">BRANDING</button></li>
                    <li class="nav-item"><button class="nav-link" data-filter=".signage">SIGNAGE</button></li>
                    <li class="nav-item"><button class="nav-link" data-filter=".experiential">EXPERIENTIAL MARKETING</button></li>
                </ul>
                
                
            </div>
        </div>

        <!-- Portfolio items with equal height images -->
        <div class="row" id="portfolio-container">
            <!-- Portfolio item 1 - Tanzania Postal Services -->
            <div class="col-lg-4 col-md-6 grid-item printing branding mb-4">
                <div class="portfolio-box position-relative overflow-hidden border-radius-4px h-100">
                    <div class="portfolio-image bg-dark-slate-blue h-100">
                        <div class="image-wrapper" style="padding-top: 75%; position: relative; overflow: hidden;">
                            <img src="{{ asset('images/portfolio/portfolio001.jpeg') }}" alt="Tanzania Commercial Bank" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="portfolio-hover justify-content-center bg-transparent-gradient-dark-gray">
                            <div class="portfolio-icon">
                                <a href="{{ asset('images/portfolio/portfolio001.jpeg') }}" class="feather icon-feather-zoom-in lightbox-portfolio" data-group="portfolio"></a>
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-tag"><span>Printing, Branding</span></div>
                                <div class="portfolio-title">Tanzania Commercial Bank</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio item 2 - Starimes Vehicle Branding -->
            <div class="col-lg-4 col-md-6 grid-item branding mb-4">
                <div class="portfolio-box position-relative overflow-hidden border-radius-4px h-100">
                    <div class="portfolio-image bg-dark-slate-blue h-100">
                        <div class="image-wrapper" style="padding-top: 75%; position: relative; overflow: hidden;">
                            <img src="{{ asset('images/portfolio/portfolio002.jpeg') }}" alt="CRDB Bank" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="portfolio-hover justify-content-center bg-transparent-gradient-dark-gray">
                            <div class="portfolio-icon">
                                <a href="{{ asset('images/portfolio/portfolio002.jpeg') }}" class="feather icon-feather-zoom-in lightbox-portfolio" data-group="portfolio"></a>
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-tag"><span>Branding</span></div>
                                <div class="portfolio-title">CRDB Bank</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio item 3 - Tigo Bima Vehicle -->
            <div class="col-lg-4 col-md-6 grid-item branding mb-4">
                <div class="portfolio-box position-relative overflow-hidden border-radius-4px h-100">
                    <div class="portfolio-image bg-dark-slate-blue h-100">
                        <div class="image-wrapper" style="padding-top: 75%; position: relative; overflow: hidden;">
                            <img src="{{ asset('images/portfolio/portfolio003.jpeg') }}" alt="Tigo Bima Vehicle Branding" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="portfolio-hover justify-content-center bg-transparent-gradient-dark-gray">
                            <div class="portfolio-icon">
                                <a href="{{ asset('images/portfolio/portfolio003.jpeg') }}" class="feather icon-feather-zoom-in lightbox-portfolio" data-group="portfolio"></a>
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-tag"><span>Branding</span></div>
                                <div class="portfolio-title">Equity Branding</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio item 4 - TPB Bank Signage -->
            <div class="col-lg-4 col-md-6 grid-item signage mb-4">
                <div class="portfolio-box position-relative overflow-hidden border-radius-4px h-100">
                    <div class="portfolio-image bg-dark-slate-blue h-100">
                        <div class="image-wrapper" style="padding-top: 75%; position: relative; overflow: hidden;">
                            <img src="{{ asset('images/portfolio/portfolio004.jpeg') }}" alt="TPB Bank Signage" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="portfolio-hover justify-content-center bg-transparent-gradient-dark-gray">
                            <div class="portfolio-icon">
                                <a href="{{ asset('images/portfolio/portfolio004.jpeg') }}" class="feather icon-feather-zoom-in lightbox-portfolio" data-group="portfolio"></a>
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-tag"><span>Signage</span></div>
                                <div class="portfolio-title">Equity Bank</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio item 5 - M-Pawa Vehicle -->
            <div class="col-lg-4 col-md-6 grid-item branding mb-4">
                <div class="portfolio-box position-relative overflow-hidden border-radius-4px h-100">
                    <div class="portfolio-image bg-dark-slate-blue h-100">
                        <div class="image-wrapper" style="padding-top: 75%; position: relative; overflow: hidden;">
                            <img src="{{ asset('images/portfolio/portfolio005.jpeg') }}" alt="M-Pawa Vehicle Branding" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="portfolio-hover justify-content-center bg-transparent-gradient-dark-gray">
                            <div class="portfolio-icon">
                                <a href="{{ asset('images/portfolio/portfolio005.jpeg') }}" class="feather icon-feather-zoom-in lightbox-portfolio" data-group="portfolio"></a>
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-tag"><span>Branding</span></div>
                                <div class="portfolio-title">MeridianBet</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio item 6 - Coca-Cola Kiosk -->
            <div class="col-lg-4 col-md-6 grid-item experiential signage mb-4">
                <div class="portfolio-box position-relative overflow-hidden border-radius-4px h-100">
                    <div class="portfolio-image bg-dark-slate-blue h-100">
                        <div class="image-wrapper" style="padding-top: 75%; position: relative; overflow: hidden;">
                            <img src="{{ asset('images/portfolio/portfolio001.jpeg') }}" alt="Coca-Cola Experiential Marketing" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="portfolio-hover justify-content-center bg-transparent-gradient-dark-gray">
                            <div class="portfolio-icon">
                                <a href="{{ asset('images/portfolio/portfolio001.jpeg') }}" class="feather icon-feather-zoom-in lightbox-portfolio" data-group="portfolio"></a>
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-tag"><span>Experiential Marketing, Signage</span></div>
                                <div class="portfolio-title">Coca-Cola Branded Kiosk</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- View all projects button -->
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="{{ route('portfolio') }}" class="btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge">View All Projects</a>
            </div>
        </div>
    </div>

    
</section>
<!-- end portfolio section -->

<!-- start stats counter section -->
<section class="py-5" style="background: linear-gradient(to right, #f8f9fa, #e9ecef);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2">
                    <!-- Counter 1 -->
                    <div class="col text-center mb-4 mb-md-0" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0 }'>
                        <div class="counter-style-01">
                            <h2 class="vertical-counter d-inline-flex text-base-color fw-600 letter-spacing-minus-1px" data-to="250"></h2>
                            <span class="alt-font text-extra-dark-gray d-block margin-10px-top fs-18">Projects Completed</span>
                        </div>
                    </div>
                    <!-- Counter 2 -->
                    <div class="col text-center mb-4 mb-md-0" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200 }'>
                        <div class="counter-style-01">
                            <h2 class="vertical-counter d-inline-flex text-base-color fw-600 letter-spacing-minus-1px" data-to="15"></h2>
                            <span class="alt-font text-extra-dark-gray d-block margin-10px-top fs-18">Years of Experience</span>
                        </div>
                    </div>
                    <!-- Counter 3 -->
                    <div class="col text-center mb-4 mb-sm-0" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 400 }'>
                        <div class="counter-style-01">
                            <h2 class="vertical-counter d-inline-flex text-base-color fw-600 letter-spacing-minus-1px" data-to="100"></h2>
                            <span class="alt-font text-extra-dark-gray d-block margin-10px-top fs-18">Satisfied Clients</span>
                        </div>
                    </div>
                    <!-- Counter 4 -->
                    <div class="col text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 600 }'>
                        <div class="counter-style-01">
                            <h2 class="vertical-counter d-inline-flex text-base-color fw-600 letter-spacing-minus-1px" data-to="10"></h2>
                            <span class="alt-font text-extra-dark-gray d-block margin-10px-top fs-18">Professional Awards</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end stats counter section -->

<!-- start testimonials section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-5 col-lg-7 col-md-8 text-center" data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Client Feedback</span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">What Our Clients Say</h2>
                <p class="mb-0 fs-18 text-muted">Hear from some of our satisfied clients about their experience working with Impex Sign Works</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="swiper testimonial-carousel" data-slider-options='{ 
                    "slidesPerView": 3, 
                    "spaceBetween": 30, 
                    "loop": true, 
                    "autoplay": { "delay": 5000, "disableOnInteraction": false },
                    "pagination": { "el": ".swiper-pagination", "clickable": true },
                    "keyboard": { "enabled": true, "onlyInViewport": true },
                    "breakpoints": { 
                        "0": { "slidesPerView": 1 },
                        "768": { "slidesPerView": 2 },
                        "992": { "slidesPerView": 3 } 
                    } }'>
                    
                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-box bg-white p-5 rounded-4 shadow-sm h-100">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('images/user_avatar.png') }}" alt="James Thompson" class="rounded-circle shadow-sm" width="70" height="70">
                                    </div>
                                    <div class="testimonial-info ms-4">
                                        <h6 class="mb-1 alt-font fw-600 text-dark">James Thompson</h6>
                                        <span class="text-muted fs-14 fw-500">KCB Bank</span>
                                    </div>
                                </div>
                                <p class="mb-0 fs-16 text-secondary">"Impex Sign Works delivered exceptional quality on our branch signage project. Their attention to detail and professional service exceeded our expectations."</p>
                            </div>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-box bg-white p-5 rounded-4 shadow-sm h-100">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('images/user_avatar.png') }}" alt="Sarah Johnson" class="rounded-circle shadow-sm" width="70" height="70">
                                    </div>
                                    <div class="testimonial-info ms-4">
                                        <h6 class="mb-1 alt-font fw-600 text-dark">Sarah Johnson</h6>
                                        <span class="text-muted fs-14 fw-500">Equity Group</span>
                                    </div>
                                </div>
                                <p class="mb-0 fs-16 text-secondary">"The vehicle branding by Impex Sign Works has significantly increased our brand visibility. Their team was professional and efficient."</p>
                            </div>
                        </div>
                        
                        <!-- Testimonial 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-box bg-white p-5 rounded-4 shadow-sm h-100">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('images/user_avatar.png') }}" alt="David Mwaura" class="rounded-circle shadow-sm" width="70" height="70">
                                    </div>
                                    <div class="testimonial-info ms-4">
                                        <h6 class="mb-1 alt-font fw-600 text-dark">David Mwaura</h6>
                                        <span class="text-muted fs-14 fw-500">Taifa Gas</span>
                                    </div>
                                </div>
                                <p class="mb-0 fs-16 text-secondary">"Working with Impex Sign Works on our chain of gas stations was a fantastic experience. Their team understood our requirements perfectly."</p>
                            </div>
                        </div>
                        
                        <!-- Testimonial 4 -->
                        <div class="swiper-slide">
                            <div class="testimonial-box bg-white p-5 rounded-4 shadow-sm h-100">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="testimonial-image">
                                        <img src="{{ asset('images/user_avatar.png') }}" alt="Grace Wambui" class="rounded-circle shadow-sm" width="70" height="70">
                                    </div>
                                    <div class="testimonial-info ms-4">
                                        <h6 class="mb-1 alt-font fw-600 text-dark">Grace Wambui</h6>
                                        <span class="text-muted fs-14 fw-500">Safaricom</span>
                                    </div>
                                </div>
                                <p class="mb-0 fs-16 text-secondary">"The digital signage solutions provided by Impex transformed our customer experience. Their innovative approach and timely delivery were impressive."</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination dots -->
                    <div class="swiper-pagination mt-5 position-relative"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end testimonials section -->

<!-- start cta section -->
<section class="pt-5 pb-5 cover-background" style="background-image: url('{{ asset('images/website-images/hero.jpg') }}');">
    <div class="opacity-extra-medium bg-gradient-black-dark-orange"></div>
    <div class="container position-relative"> 
        <div class="row align-items-center justify-content-center text-start text-sm-center text-lg-start">
            <div class="col-xl-5 col-lg-6 col-md-7 md-mb-25px">
                <h2 class="alt-font text-white fw-500 mb-0 cd-headline zoom fancy-text-style-4 text-shadow-double-large ls-minus-1px">Let's discuss your 
                    <span data-fancy-text='{ "effect": "rotate", "string": ["signage needs!", "branding project!", "business goals!"] }'></span>
                </h2>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 offset-xl-1 icon-with-text-style-08">
                <div class="feature-box feature-box-left-icon-middle text-start">
                    <div class="feature-box-icon feature-box-icon-rounded w-110px h-110px xs-w-80px xs-h-80px rounded-circle bg-base-color me-20px xs-me-15px">
                        <i class="line-icon-Handshake icon-extra-large text-white lh-100"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin xs-mt-15px xs-mb-15px">
                        <span class="fs-24 lh-32 xs-fs-22 xs-lh-32 text-white">Ready to get started? <a href="mailto:info@impexsignworks.co.tz" class="text-decoration-line-bottom text-white fw-500">info@impexsignworks.co.tz</a></span>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- end cta section -->

<!-- start clients section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <div class="col-xl-6 col-lg-8 col-md-9 mx-auto mb-5">
            <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-2 text-base-color">
                Trusted Clients
            </span>
            <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px mb-3">
                Our Partners
            </h2>
            <p class="mb-0">Proud to work with leading brands across various industries</p>
        </div>

        <div class="row justify-content-center align-items-center g-5">
            <!-- Client logos with hover effect -->
            <div class="col-6 col-md-2">
                <div class="client-logo">
                    <img src="{{ asset('images/website-images/kcb.png') }}" alt="KCB" class="opacity-6 hover-opacity-full transition-default" style="max-height: 60px; width: auto;">
                </div>
            </div>

            <div class="col-6 col-md-2">
                <div class="client-logo">
                    <img src="{{ asset('images/website-images/crd.png') }}" alt="CRD" class="opacity-6 hover-opacity-full transition-default" style="max-height: 60px; width: auto;">
                </div>
            </div>

            <div class="col-6 col-md-2">
                <div class="client-logo">
                    <img src="{{ asset('images/website-images/aml.png') }}" alt="AML" class="opacity-6 hover-opacity-full transition-default" style="max-height: 60px; width: auto;">
                </div>
            </div>

            <div class="col-6 col-md-2">
                <div class="client-logo">
                    <img src="{{ asset('images/website-images/equit.png') }}" alt="Equity" class="opacity-6 hover-opacity-full transition-default" style="max-height: 60px; width: auto;">
                </div>
            </div>

            <div class="col-6 col-md-2">
                <div class="client-logo">
                    <img src="{{ asset('images/website-images/taifagas.png') }}" alt="Taifa Gas" class="opacity-6 hover-opacity-full transition-default" style="max-height: 60px; width: auto;">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end clients section -->

<!-- start contact form section -->
<section class="bg-very-light-gray py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 text-center mb-5" data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0 }'>
                <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-2 text-base-color">Get In Touch</span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px mb-3">Work with us</h2>
                <p>Fill out the form below and our team will get back to you with a custom quote for your project</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form id="contact-form" method="post" action="">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <input type="text" name="name" id="name" placeholder="Your Name*" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" id="email" placeholder="Your Email*" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" name="phone" id="phone" placeholder="Your Phone" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <select name="service" id="service" class="form-control">
                                <option value="">Select Service</option>
                                <option value="Neon LED Signs">Neon LED Signs</option>
                                <option value="Vehicle Branding">Vehicle Branding</option>
                                <option value="Metal Fabrication">Metal Fabrication</option>
                                <option value="Petrol Station Signage">Petrol Station Signage</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" placeholder="Your Message*" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-large btn-base-color btn-round-edge btn-box-shadow">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end contact form section -->

@endsection

@section('scripts')
    <!-- Portfolio filtering script -->
    <script>
        $(document).ready(function() {
            // Initialize Isotope with imagesLoaded
            var $container = $('#portfolio-container');
            
            $container.imagesLoaded(function() {
                $container.isotope({
                    itemSelector: '.grid-item',
                    layoutMode: 'fitRows'
                });
            });
            
            // Filter items on button click
            $('#portfolio-tabs').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                
                // Toggle active class
                $('#portfolio-tabs button').removeClass('active');
                $(this).addClass('active');
                
                // Filter items
                $container.isotope({
                    filter: filterValue
                });
                
                return false;
            });
            
       
            
            // Fallback jQuery filtering if Isotope fails
            if (typeof $.fn.isotope === 'undefined') {
                console.log('Isotope not loaded, using fallback filtering');
                
                $('#portfolio-tabs').on('click', 'button', function() {
                    var filterValue = $(this).attr('data-filter');
                    
                    // Toggle active class
                    $('#portfolio-tabs button').removeClass('active');
                    $(this).addClass('active');
                    
                    // Basic jQuery filtering
                    if (filterValue === '*') {
                        $('.grid-item').show();
                    } else {
                        $('.grid-item').hide();
                        $(filterValue).show();
                    }
                    
                    return false;
                });
            }
        });
    </script>
@endsection
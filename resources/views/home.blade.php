@extends('layouts.app')

@section('title', 'Home - Impex Company Limited')
@section('description', 'Professional consulting services for your business')

@section('content')
<!-- start hero section -->
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
                                    <span class="d-inline-block">Innovation</span>
                                    <span class="fw-600 d-inline-block">Services</span>
                                </div>
                                <div data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300 }'>
                                    <a href="{{ route('contact') }}" class="btn btn-base-color btn-box-shadow btn-large btn-round-edge">
                                        Let's work together
                                    </a>
                                </div>
                                <div class="fs-20 alt-font position-absolute lg-position-relative bottom-0 mb-8 w-100 text-shadow-double-large"
                                     data-anime='{ "opacity": [0, 1], "duration": 500, "delay": 1000 }'>
                                    Request a free <a href="{{ route('contact') }}" class="text-decoration-line-bottom text-white fw-500">business consulting!</a>
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
n>
<!-- end hero section -->

<!-- start features section -->
<section class="position-relative overflow-hidden">
    <div id="particles-01" data-particle="true" data-particle-options='{"particles": {"number": {"value": 5,"density": {"enable": true,"value_area": 1000}},"color":{"value":["#b7b9be", "#dd6531"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"move": {"enable": true,"speed":2,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}' class="position-absolute h-100 top-0 left-0 z-index-minus-1"></div>
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

        </div>
        
        <div class="row align-items-center mt-4 lg-mt-2 mb-50px lg-mb-0">
            <div class="col-lg-6 position-relative md-mb-70px">
                <div class="w-75 overflow-hidden position-relative xs-w-80 border-radius-4px" data-anime='{ "effect": "slide", "direction": "lr", "color": "#dd6531", "duration": 1000, "delay": 0 }'>
                    <img class="w-100" src="{{ asset('images/website-images/about1.jpg') }}" alt="">

                </div>
                <div class="border-radius-4px position-absolute right-minus-15px md-right-15px bottom-minus-50px w-55 md-w-50 overflow-hidden" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-anime='{ "effect": "slide", "direction": "rl", "color": "#292d36", "duration": 1000, "delay": 500 }'>
                    <img class="w-100" src="{{ asset('images/website-images/about2.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 md-mt-30px" data-anime='{ "opacity": [0, 1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutCirc" }'>
                <span class="fs-20 mb-15px text-dark-gray fw-600 d-inline-block">Company's vision & strategy</span>
               
                <p class="w-80 lg-w-100 mb-35px sm-mb-25px">
                    Impex sign work strives to be the market leader in
                    introducing new, cost-effective and guaranteed
                    signage that is manufactured to meet and exceed
                    standards by looking backward for lessons learned
                    and to grow by envisaging the future of signhage. 
                    </p> 
                <div class="d-inline-block">
                    <a href="{{ route('company') }}" class="btn btn-medium btn-dark-gray btn-box-shadow me-25px btn-round-edge">About company</a>
                   
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- end features section -->

<!-- start services section -->
<section class="bg-gradient-very-light-gray ps-7 pe-7 xxl-ps-3 xxl-pe-3 xs-px-0">
    <div class="container-fluid"> 
        <div class="row justify-content-center mb-3">
            <div class="col-xl-5 col-lg-7 col-md-8 text-center" data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Innovative solutions</span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Impex services</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-md-2 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- service item -->
            <div class="col interactive-banner-style-05 lg-mb-30px position-relative z-index-1">
                <div class="atropos" data-atropos data-atropos-perspective="1450">
                    <a href="{{ route('services.details','audit-assurance') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                    <img class="w-100" src="{{ asset('images/website-images/neon.jpg') }}" alt="">
                                    <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                        <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">Services</div>
                                        <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28">Neon LED Signs 3D Letters</span>
                                        <p class="text-white opacity-6 fs-18"></p>
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
                    <a href="{{ route('services.details','audit-assurance') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                    <img class="w-100" src="{{ asset('images/website-images/motor.jpg') }}" alt="">
                                    <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                        <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">Services</div>
                                        <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28">Motorvehicle & Fleet branding</span>
                                        <p class="text-white opacity-6 fs-18"></p>
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
                    <a href="{{ route('services.details','audit-assurance') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                    <img class="w-100" src="{{ asset('images/website-images/metal.jpg') }}" alt="">
                                    <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                        <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">Services</div>
                                        <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28">Metal Fabrication</span>
                                        <p class="text-white opacity-6 fs-18"></p>
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
                    <a href="{{ route('services.details','audit-assurance') }}" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <figure class="m-0 hover-box border-radius-4px overflow-hidden position-relative" data-atropos-offset="3">
                                    <img class="w-100" src="{{ asset('images/website-images/station.jpg') }}" alt="">
                                    <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-15 xl-p-12 last-paragraph-no-margin">
                                        <div class="mb-auto bg-base-color fw-500 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-13">Services</div>
                                        <span class="alt-font text-white fw-500 fs-26 sm-lh-26 xs-lh-28">Petrol Staion Signage</span>
                                        <p class="text-white opacity-6 fs-18"></p>
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
        <a href="{{ route('services') }}" class="btn btn-medium btn-dark-gray btn-box-shadow me-25px btn-round-edge">Expore More Services</a>  </div>
    </div>
</section>
<!-- end services section -->



<!-- start cta section -->
<section class="pt-4 pb-4 cover-background" style="background-image:url('https://via.placeholder.com/1920x408');">
    <div class="opacity-extra-medium bg-gradient-black-dark-orange"></div>
    <div class="container position-relative"> 
        <div class="row align-items-center justify-content-center text-start text-sm-center text-lg-start">
            <div class="col-xl-5 col-lg-6 col-md-7 md-mb-25px">
                <h2 class="alt-font text-white fw-500 mb-0 cd-headline zoom fancy-text-style-4 text-shadow-double-large ls-minus-1px">Let's discuss your now 
                    <span data-fancy-text='{ "effect": "rotate", "string": ["consulting!", "business!", "innovative!"] }'></span>
                </h2>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 offset-xl-1 icon-with-text-style-08">
                <div class="feature-box feature-box-left-icon-middle text-start">
                    <div class="feature-box-icon feature-box-icon-rounded w-110px h-110px xs-w-80px xs-h-80px rounded-circle bg-base-color me-20px xs-me-15px">
                        <i class="line-icon-Handshake icon-extra-large text-white lh-100"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin xs-mt-15px xs-mb-15px">
                        <span class="fs-24 lh-32 xs-fs-22 xs-lh-32 text-white">Looking for collaboration? <a href="mailto:info@impexsignworks.co.tz" class="text-decoration-line-bottom text-white fw-500">info@impexsignworks.co.tz</a></span>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- end cta section -->

<!-- Hero/Intro Section -->


<!-- Our Clients Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
<!-- Our Clients Section -->
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


    </div>
</section>


@endsection

@section('scripts')
@parent

@endsection
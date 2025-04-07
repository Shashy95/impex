@extends('layouts.app')

@section('title', 'Our Services - Crafto Consulting')
@section('description', 'Professional consulting services for your business growth')

@section('content')
<!-- start page title section -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0" data-parallax-background-ratio="0.5" style="background-image: url(https://via.placeholder.com/1925x1050)">
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

<!-- start services grid section -->
<!-- start services grid section -->
<section class="p-0 bg-very-light-gray">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center align-items-center border-top border-color-light-medium-gray" data-anime='{ "el": "childs", "translateX": [-20, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start service item -->
            <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0">
                <div class="text-box-wrapper align-items-center d-flex">
                    <div class="position-relative text-center w-100">
                        <div class="text-box last-paragraph-no-margin p-14">
                            <i class="line-icon-Cursor-Click2 icon-extra-large d-block mb-20px text-base-color"></i>
                            <span class="alt-font text-dark-gray fw-500 fs-22 lg-fs-20 ls-minus-05px">Strategies</span>
                            <p>Business planning</p>
                        </div>
                        <div class="text-box-hover p-16 lg-p-12 md-p-17 sm-p-12 xs-p-17"> 
                            <p class="mb-15px">Comprehensive business strategy development and implementation.</p>
                            <a href="#" class="btn btn-link btn-large text-base-color thin fw-600">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end service item -->
            
            <!-- start service item -->
            <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0">
                <div class="text-box-wrapper align-items-center d-flex">
                    <div class="position-relative text-center w-100">
                        <div class="text-box last-paragraph-no-margin p-14">
                            <i class="line-icon-Money-Bag icon-extra-large d-block mb-20px text-base-color"></i>
                            <span class="alt-font text-dark-gray fw-500 fs-22 lg-fs-20 ls-minus-05px">Finance</span>
                            <p>Financial advisory</p>
                        </div>
                        <div class="text-box-hover p-16 lg-p-12 md-p-17 sm-p-12 xs-p-17"> 
                            <p class="mb-15px">Expert financial planning and investment strategies.</p>
                            <a href="#" class="btn btn-link btn-large text-base-color thin fw-600">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end service item -->
            
            <!-- start service item -->
            <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0">
                <div class="text-box-wrapper align-items-center d-flex">
                    <div class="position-relative text-center w-100">
                        <div class="text-box last-paragraph-no-margin p-14">
                            <i class="line-icon-Like icon-extra-large d-block mb-20px text-base-color"></i>
                            <span class="alt-font text-dark-gray fw-500 fs-22 lg-fs-20 ls-minus-05px">Marketing</span>
                            <p>Digital campaigns</p>
                        </div>
                        <div class="text-box-hover p-16 lg-p-12 md-p-17 sm-p-12 xs-p-17"> 
                            <p class="mb-15px">Effective digital marketing strategies for business growth.</p>
                            <a href="#" class="btn btn-link btn-large text-base-color thin fw-600">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end service item -->
            
            <!-- start service item -->
            <div class="col fancy-text-box-style-01 border-color-light-medium-gray p-0">
                <div class="text-box-wrapper align-items-center d-flex">
                    <div class="position-relative text-center w-100">
                        <div class="text-box last-paragraph-no-margin p-14">
                            <i class="line-icon-Archery-2 icon-extra-large d-block mb-20px text-base-color"></i>
                            <span class="alt-font text-dark-gray fw-500 fs-22 lg-fs-20 ls-minus-05px">Planning</span>
                            <p>Strategic development</p>
                        </div>
                        <div class="text-box-hover p-16 lg-p-12 md-p-17 sm-p-12 xs-p-17"> 
                            <p class="mb-15px">Long-term business planning and goal setting.</p>
                            <a href="#" class="btn btn-link btn-large text-base-color thin fw-600">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end service item -->
        </div>
    </div>
</section>
<!-- end services grid section -->

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
                <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Innovative solutions</span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Consulting services</h2>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "willchange": "transform", "scale": [0.9, 1], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start service item -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 justify-content-start border-radius-5px bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover p-18 md-p-16 last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <a href="#">
                            <i class="line-icon-Address-Book2 icon-double-large text-base-color mb-25px"></i>
                        </a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block alt-font text-dark-gray fw-600 mb-5px fs-20">Audit Assurance</a>
                        <p>Comprehensive financial audit services for your business.</p>
                    </div>
                </div>  
            </div>
            <!-- end service item -->
            
            <!-- start service item -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 justify-content-start border-radius-5px bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover p-18 md-p-16 last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <a href="#">
                            <i class="line-icon-Money-Bag icon-double-large text-base-color mb-25px"></i>
                        </a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block alt-font text-dark-gray fw-600 mb-5px fs-20">Financial Advisory</a>
                        <p>Expert advice for your financial planning and investments.</p>
                    </div>
                </div>  
            </div>
            <!-- end service item -->
            
            <!-- start service item -->
            <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                <div class="feature-box h-100 justify-content-start border-radius-5px bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover p-18 md-p-16 last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <a href="#">
                            <i class="line-icon-Pie-Chart2 icon-double-large text-base-color mb-25px"></i>
                        </a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block alt-font text-dark-gray fw-600 mb-5px fs-20">Business Analytics</a>
                        <p>Data-driven insights to optimize your business performance.</p>
                    </div>
                </div>  
            </div>
            <!-- end service item -->
            
            <!-- start service item -->
            <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                <div class="feature-box h-100 justify-content-start border-radius-5px bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover p-18 md-p-16 last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <a href="#">
                            <i class="line-icon-Megaphone icon-double-large text-base-color mb-25px"></i>
                        </a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block alt-font text-dark-gray fw-600 mb-5px fs-20">Marketing Strategy</a>
                        <p>Effective marketing plans to grow your customer base.</p>
                    </div>
                </div>  
            </div>
            <!-- end service item -->
            
            <!-- start service item -->
            <div class="col icon-with-text-style-04 transition-inner-all sm-mb-30px">
                <div class="feature-box h-100 justify-content-start border-radius-5px bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover p-18 md-p-16 last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <a href="#">
                            <i class="line-icon-MaleFemale icon-double-large text-base-color mb-25px"></i>
                        </a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block alt-font text-dark-gray fw-600 mb-5px fs-20">HR Consulting</a>
                        <p>Optimize your human resources for maximum productivity.</p>
                    </div>
                </div>  
            </div>
            <!-- end service item -->
            
            <!-- start service item -->
            <div class="col icon-with-text-style-04 transition-inner-all">
                <div class="feature-box h-100 justify-content-start border-radius-5px bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover p-18 md-p-16 last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <a href="#">
                            <i class="line-icon-Basket-Coins icon-double-large text-base-color mb-25px"></i>
                        </a>
                    </div>
                    <div class="feature-box-content">
                        <a href="#" class="d-inline-block alt-font text-dark-gray fw-600 mb-5px fs-20">Tax Planning</a>
                        <p>Strategic tax solutions to minimize liabilities.</p>
                    </div>
                </div>  
            </div>
            <!-- end service item -->
        </div>

        <div class="row mt-6" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <div class="col-12 text-center">
                <h6 class="text-dark-gray ls-minus-1px lh-inherit m-0">
                    Our <span class="fw-600 text-decoration-line-bottom-medium">committed services</span> are ready to help!
                </h6>
            </div>
        </div>
    </div>
</section>
<!-- end all services section -->

<!-- start testimonials section -->
<section class="position-relative border-bottom border-color-extra-medium-gray">
    <div id="particles-02" data-particle="true" data-particle-options='{"particles": {"number": {"value": 5,"density": {"enable": true,"value_area": 1000}},"color":{"value":["#b7b9be", "#dd6531"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"move": {"enable": true,"speed":2,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}' class="position-absolute h-100 top-0 left-0 z-index-minus-1"></div>
    <div class="container">
        <div class="row justify-content-center mb-2">
            <div class="col-lg-7 text-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Few good reasons</span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Client testimonials</h2>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
            <!-- start testimonial item -->
            <div class="col md-mb-30px">
                <div class="testimonials testimonials-style-05 last-paragraph-no-margin">
                    <div class="testimonials-bubble border-radius-5px border border-color-extra-medium-gray bg-white pt-30px pb-30px ps-40px pe-40px lg-p-25px mb-35px">
                        <p>Their team are easy to work with and helped me make amazing websites in a short amount time.</p>
                    </div>
                    <div class="author ps-20px pe-20px">
                        <img class="rounded-circle w-85px me-15px" src="https://via.placeholder.com/148x148" alt="Herman Miller">
                        <div class="d-inline-block align-middle lh-20">
                            <span class="fw-600 fs-18 text-dark-gray d-block mb-5px">Herman Miller</span>
                            <div class="fs-15">CEO, TechCorp</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end testimonial item --> 
            
            <!-- start testimonial item -->
            <div class="col md-mb-30px">
                <div class="testimonials testimonials-style-05 last-paragraph-no-margin">
                    <div class="testimonials-bubble border-radius-5px border border-color-extra-medium-gray bg-white pt-30px pb-30px ps-40px pe-40px lg-p-25px mb-35px">
                        <p>Trust us we looked for a very long time and wasted thousands of dollars testing other teams.</p>
                    </div>
                    <div class="author ps-20px pe-20px">
                        <img class="rounded-circle w-85px me-15px" src="https://via.placeholder.com/148x148" alt="Matthew Taylor">
                        <div class="d-inline-block align-middle lh-20">
                            <span class="fw-600 fs-18 text-dark-gray d-block mb-5px">Matthew Taylor</span>
                            <div class="fs-15">Marketing Director</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end testimonial item --> 
            
            <!-- start testimonial item -->
            <div class="col">
                <div class="testimonials testimonials-style-05 last-paragraph-no-margin">
                    <div class="testimonials-bubble border-radius-5px border border-color-extra-medium-gray bg-white pt-30px pb-30px ps-40px pe-40px lg-p-25px mb-35px">
                        <p>I personally enjoyed the energy and the professional support the whole team gave to into website.</p>
                    </div>
                    <div class="author ps-20px pe-20px">
                        <img class="rounded-circle w-85px me-15px" src="https://via.placeholder.com/148x148" alt="Leonel Mooney">
                        <div class="d-inline-block align-middle lh-20">
                            <span class="fw-600 fs-18 text-dark-gray d-block mb-5px">Leonel Mooney</span>
                            <div class="fs-15">Operations Manager</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end testimonial item --> 
        </div>
    </div>
</section>
<!-- end testimonials section -->
<!-- end testimonials section -->
@endsection

@section('scripts')
@parent

@endsection
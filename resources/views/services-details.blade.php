{{-- services-details.blade.php --}}
@extends('layouts.app')

@section('content')
<!-- Page title section -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0" data-parallax-background-ratio="0.5" style="background-image: url(https://via.placeholder.com/1920x1050)">
    <div class="opacity-light bg-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center small-screen">
            <div class="col-lg-7 col-md-8 position-relative text-center page-title-extra-small" data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h1 class="mb-5px alt-font text-white"><span class="opacity-6">Innovative solutions</span></h1>
                <h2 class="mb-0 text-white alt-font ls-minus-2px text-shadow-double-large fw-500">
                    @if($service == 'financial-advisory')
                        Financial Advisory
                    @elseif($service == 'investment-planning')
                        Investment Planning
                    @elseif($service == 'tax-planning')
                        Tax Planning
                    @elseif($service == 'retirement-planning')
                        Retirement Planning
                    @else
                        Our Services
                    @endif
                </h2>
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
<!-- end page title -->

<!-- start section -->
<section id="down-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9 md-mb-50px">
                <figure class="position-relative m-0 border-radius-5px overflow-hidden" data-anime='{ "effect": "slide", "direction": "lr", "color": "#dd6531", "duration": 1000, "delay": 0 }'>
                    @if($service == 'financial-advisory')
                        <img src="https://via.placeholder.com/600x590" alt="Financial Advisory" class="w-100">
                    @elseif($service == 'investment-planning')
                        <img src="https://via.placeholder.com/600x590" alt="Investment Planning" class="w-100">
                    @elseif($service == 'tax-planning')
                        <img src="https://via.placeholder.com/600x590" alt="Tax Planning" class="w-100">
                    @elseif($service == 'retirement-planning')
                        <img src="https://via.placeholder.com/600x590" alt="Retirement Planning" class="w-100">
                    @else
                        <img src="https://via.placeholder.com/600x590" alt="Our Services" class="w-100">
                    @endif
                    <figcaption class="position-absolute bottom-25px left-25px w-250px border-radius-4px bg-white d-flex align-items-center pt-20px pb-20px ps-25px pe-25px" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 1200, "staggervalue": 100, "easing": "easeOutQuad" }'> 
                        <h2 class="text-dark-gray fw-700 ls-minus-3px sm-ls-minus-2px vertical-counter d-inline-flex mb-0 text-nowrap border-end border-1 border-color-extra-medium-gray pe-20px me-20px" data-to="85"></h2>
                        <span class="text-dark-gray lh-22 fw-500 d-inline-block">Project completed</span>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-9" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                @if($service == 'financial-advisory')
                    <h2 class="fw-600 text-dark-gray ls-minus-2px">Finance advisory services provider.</h2>
                    <p class="w-90 lg-w-100 md-mx-auto mb-35px">Our financial advisory services help you make informed decisions about your money, investments, and financial future.</p>
                @elseif($service == 'investment-planning')
                    <h2 class="fw-600 text-dark-gray ls-minus-2px">Strategic investment planning.</h2>
                    <p class="w-90 lg-w-100 md-mx-auto mb-35px">Our investment planning services help you build wealth through strategic asset allocation and portfolio management.</p>
                @elseif($service == 'tax-planning')
                    <h2 class="fw-600 text-dark-gray ls-minus-2px">Comprehensive tax planning.</h2>
                    <p class="w-90 lg-w-100 md-mx-auto mb-35px">Our tax planning services help minimize your tax liability while ensuring compliance with all regulations.</p>
                @elseif($service == 'retirement-planning')
                    <h2 class="fw-600 text-dark-gray ls-minus-2px">Secure retirement planning.</h2>
                    <p class="w-90 lg-w-100 md-mx-auto mb-35px">Our retirement planning services help you build a secure financial future with strategies tailored to your goals.</p>
                @else
                    <h2 class="fw-600 text-dark-gray ls-minus-2px">Professional financial services.</h2>
                    <p class="w-90 lg-w-100 md-mx-auto mb-35px">Our professional team provides expert guidance across all aspects of financial planning and management.</p>
                @endif

                <div class="row row-cols-1 justify-content-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <!-- Feature boxes with dynamic content -->
                    <div class="col icon-with-text-style-01 mb-7">
                        <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                            <div class="feature-box-icon">
                                <img src="https://via.placeholder.com/64x64" alt="">
                            </div>
                            <div class="feature-box-content">
                                @if($service == 'financial-advisory')
                                    <span class="fs-20 md-fs-19 fw-600 text-dark-gray d-block mb-5px">Expert financial guidance</span>
                                    <p>Our team of certified financial advisors provides personalized strategies for your unique situation.</p>
                                @elseif($service == 'investment-planning')
                                    <span class="fs-20 md-fs-19 fw-600 text-dark-gray d-block mb-5px">Portfolio optimization</span>
                                    <p>We analyze and optimize your investment portfolio for maximum returns based on your risk tolerance.</p>
                                @elseif($service == 'tax-planning')
                                    <span class="fs-20 md-fs-19 fw-600 text-dark-gray d-block mb-5px">Tax efficiency strategies</span>
                                    <p>We implement legal tax reduction strategies tailored to your unique financial situation.</p>
                                @elseif($service == 'retirement-planning')
                                    <span class="fs-20 md-fs-19 fw-600 text-dark-gray d-block mb-5px">Long-term security</span>
                                    <p>We create comprehensive retirement plans that ensure financial security throughout your golden years.</p>
                                @else
                                    <span class="fs-20 md-fs-19 fw-600 text-dark-gray d-block mb-5px">Customized financial solutions</span>
                                    <p>We tailor our services to meet your specific financial goals and challenges.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="col icon-with-text-style-01">
                        <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                            <div class="feature-box-icon">
                                <img src="https://via.placeholder.com/64x64" alt="">
                            </div>
                            <div class="feature-box-content">
                                @if($service == 'financial-advisory')
                                    <span class="fs-20 md-fs-19 fw-600 text-dark-gray d-block mb-5px">Comprehensive planning</span>
                                    <p>We create holistic financial plans that address all aspects of your financial life.</p>
                                @elseif($service == 'investment-planning')
                                    <span class="fs-20 md-fs-19 fw-600 text-dark-gray d-block mb-5px">Market opportunity analysis</span>
                                    <p>We identify emerging market opportunities that align with your investment goals.</p>
                                @elseif($service == 'tax-planning')
                                    <span class="fs-20 md-fs-19 fw-600 text-dark-gray d-block mb-5px">Tax-advantaged accounts</span>
                                    <p>We help you leverage tax-advantaged accounts and structures to minimize your tax burden.</p>
                                @elseif($service == 'retirement-planning')
                                    <span class="fs-20 md-fs-19 fw-600 text-dark-gray d-block mb-5px">Income strategies</span>
                                    <p>We develop reliable income strategies to support your lifestyle throughout retirement.</p>
                                @else
                                    <span class="fs-20 md-fs-19 fw-600 text-dark-gray d-block mb-5px">Expert team</span>
                                    <p>Our experienced professionals bring decades of financial expertise to solve your challenges.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- Additional sections with dynamic content -->
<!-- ... Similar treatment for other sections ... -->

<!-- Dynamic FAQ Section -->
<section>
    <div class="container">
        <div class="row mb-6">
            <div class="col-xl-5 col-lg-6 md-mb-40px" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <h2 class="text-dark-gray fw-600 ls-minus-2px mb-15px">
                    @if($service == 'financial-advisory')
                        Financial Advisory FAQs
                    @elseif($service == 'investment-planning')
                        Investment Planning FAQs
                    @elseif($service == 'tax-planning')
                        Tax Planning FAQs
                    @elseif($service == 'retirement-planning')
                        Retirement Planning FAQs
                    @else
                        Frequently Asked Questions
                    @endif
                </h2>
                <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                    <!-- Dynamic FAQ content based on service -->
                    @if($service == 'financial-advisory')
                        <!-- Financial Advisory FAQs -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="fa-solid fa-angle-down icon-small"></i><span class="fs-20 fw-600">How will my financial planning be done?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                    <p>Our advisors follow a six-step process: assessment, goal-setting, strategy development, implementation, monitoring, and adjustment. We work collaboratively with you throughout the entire process.</p>
                                </div>
                            </div>
                        </div>
                    @elseif($service == 'investment-planning')
                        <!-- Investment Planning FAQs -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="fa-solid fa-angle-down icon-small"></i><span class="fs-20 fw-600">What investment strategies do you recommend?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                    <p>We tailor investment strategies to your specific goals, risk tolerance, and time horizon. Our approach typically includes diversification across asset classes, regular rebalancing, and tax-efficient investment vehicles.</p>
                                </div>
                            </div>
                        </div>
                    @elseif($service == 'tax-planning')
                        <!-- Tax Planning FAQs -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="fa-solid fa-angle-down icon-small"></i><span class="fs-20 fw-600">How can I minimize my tax liability?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                    <p>We employ various legal strategies such as maximizing deductions, utilizing tax-advantaged accounts, strategic income timing, tax-loss harvesting, and charitable giving strategies to minimize your tax burden.</p>
                                </div>
                            </div>
                        </div>
                    @elseif($service == 'retirement-planning')
                        <!-- Retirement Planning FAQs -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="fa-solid fa-angle-down icon-small"></i><span class="fs-20 fw-600">When should I start planning for retirement?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                    <p>The sooner you start planning for retirement, the better. Starting early allows you to benefit from compound growth and make smaller, more manageable contributions over time. However, it's never too late to begin planning.</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Default FAQs -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                        <i class="fa-solid fa-angle-down icon-small"></i><span class="fs-20 fw-600">How will my financial planning be done?</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                    <p>Our comprehensive approach involves understanding your goals, creating tailored strategies, and providing ongoing support to help you achieve financial success.</p>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                    <!-- Add more accordion items with dynamic content -->
                    <!-- Second FAQ item -->
                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-extra-medium-gray">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray">
                                    <i class="fa-solid fa-angle-right icon-small"></i>
                                    <span class="fs-20 fw-600">
                                        @if($service == 'financial-advisory')
                                            What is your investment philosophy?
                                        @elseif($service == 'investment-planning')
                                            How often should I review my investment portfolio?
                                        @elseif($service == 'tax-planning')
                                            Do you offer year-round tax planning?
                                        @elseif($service == 'retirement-planning')
                                            How much do I need to save for retirement?
                                        @else
                                            What services do you provide?
                                        @endif
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                            <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                @if($service == 'financial-advisory')
                                    <p>Our investment philosophy centers on long-term growth, diversification, risk management, and alignment with your personal goals and values. We focus on evidence-based strategies rather than market timing.</p>
                                @elseif($service == 'investment-planning')
                                    <p>We recommend quarterly reviews of your portfolio performance and annual comprehensive reviews of your overall investment strategy. Major life events may also trigger additional reviews.</p>
                                @elseif($service == 'tax-planning')
                                    <p>Yes, effective tax planning is a year-round process. We provide ongoing tax planning services to identify opportunities for tax savings throughout the year, not just during tax season.</p>
                                @elseif($service == 'retirement-planning')
                                    <p>The amount you need depends on your desired retirement lifestyle, expected longevity, healthcare costs, and other factors. We use sophisticated planning tools to help determine your specific savings target.</p>
                                @else
                                    <p>We offer a comprehensive range of financial services including financial planning, investment management, retirement planning, tax planning, estate planning, and more.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right side content remains the same -->
            <div class="col-lg-6 offset-xl-1 position-relative z-index-1" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="atropos" data-atropos data-atropos-perspective="2450">
                    <div class="atropos-scale">
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <img src="https://via.placeholder.com/960x762" alt="" class="w-100 border-radius-6px"/>
                            </div>
                        </div> 
                    </div>
                </div> 
                <div class="absolute-middle-center text-white-space-nowrap z-index-9">
                    <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU" class="btn btn-extra-large btn-white left-icon btn-box-shadow fw-600 btn-rounded popup-youtube ls-minus-05px"><i class="fa-brands fa-youtube icon-small"></i>How it works</a>
                </div>
            </div>  
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('title', 'Contact Us - Crafto Consulting')
@section('description', 'Get in touch with our consulting experts')

@section('content')
<!-- start page title -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0" data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('images/website-images/contact.jpg') }}');">
    <div class="opacity-light bg-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center small-screen">
            <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-small" data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h1 class="mb-5px alt-font text-white fw-400"><span class="opacity-6">Love to hear from you</span></h1>
                <h2 class="mb-0 text-white alt-font ls-minus-2px text-shadow-double-large fw-500">Contact us</h2>
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

<!-- Other sections from contact.html -->
<section id="down-section">
    <!-- Contact info boxes -->



    <section id="down-section">
        <div class="container"> 
            <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 justify-content-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 sm-mb-40px" style="">
                    <div class="feature-box last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <i class="line-icon-Geo2-Love icon-extra-large text-base-color mb-25px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-600 text-dark-gray mb-5px fs-20">Makumbusho, </span>
                            <p>Ali Hassan Mwinyi Road, Derm Plaza</p>
                        </div>
                    </div>  
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 sm-mb-40px" style="">
                    <div class="feature-box last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <i class="line-icon-Headset icon-extra-large text-base-color mb-25px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-600 text-dark-gray mb-5px fs-20">Call us directly</span>
                            <div class="w-100 d-block">
                                <span class="d-block">Phone: <a href="tel:1800222000" class="text-base-color-hover">1-800-222-000</a></span>
                                <span class="d-block">Fax: 1-800-222-002</span>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04" style="">
                    <div class="feature-box last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <i class="line-icon-Mail-Read icon-extra-large text-base-color mb-25px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-600 text-dark-gray mb-5px fs-20">E-mail us</span>
                            <div class="w-100 d-block">
                                <a href="mailto:info@yourdomain.com" class="d-block"> info@impexsignworks.co.tz</a>
                             
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- end features box item --> 
            </div>
        </div>
    </section>




</section>

<!-- Contact form section -->
<section class="bg-very-light-gray">
    <div class="container"> 
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center mb-2" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <span class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Feel free to get in touch!</span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">How we can help you?</h2>
            </div>
        </div>
        <div class="row row-cols-md-1 justify-content-center" data-anime='{ "translateY": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <div class="col-xl-9 col-lg-11">
                <!-- start contact form -->
                <form action="" method="post" class="row contact-form-style-02">
                    @csrf
                    <div class="col-md-6 mb-30px">
                        <input class="box-shadow-quadruple-large input-name form-control required" type="text" name="name" placeholder="Your name*" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="box-shadow-quadruple-large form-control required" type="email" name="email" placeholder="Your email address*" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="box-shadow-quadruple-large form-control" type="tel" name="phone" placeholder="Your phone" />
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="box-shadow-quadruple-large form-control" type="text" name="subject" placeholder="Your subject" />
                    </div>
                    <div class="col-md-12 mb-30px">
                        <textarea class="box-shadow-quadruple-large form-control" cols="40" rows="4" name="message" placeholder="Your message"></textarea>
                    </div>
                    <div class="col-md-7 last-paragraph-no-margin">
                        <p class="text-center text-md-start fs-16">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                    </div>
                    <div class="col-md-5 text-center text-md-end sm-mt-20px">
                        <input type="hidden" name="redirect" value="">
                        <button class="btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge submit" type="submit">send message</button>
                    </div>
                    <div class="col-12">
                        <div class="form-results mt-20px d-none"></div>
                    </div>
                </form>
                <!-- end contact form -->
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
@parent

@endsection
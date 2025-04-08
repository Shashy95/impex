<!-- start footer -->
<footer class="footer-light p-0 position-relative">
    <div id="particles-04" class="position-absolute h-100 top-0 left-0 z-index-minus-1 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 5,"density": {"enable": true,"value_area": 1000}},"color":{"value":["#b7b9be", "#dd6531"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"move": {"enable": true,"speed":2,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'></div>
    <div class="container"> 
        <div class="row justify-content-center pt-7 sm-pt-50px">
            <!-- start footer column -->
            <div class="col-7 col-lg-3 col-md-12 col-sm-6 text-md-center text-lg-start md-mb-30px">
                <span class="alt-font d-block text-dark-gray fw-600 mb-10px fs-19">About Ipex</span>
                <p class="mb-20px">Impex sign work strives to be the market leader in introducing new, cost-effective and guaranteed 
                    signage that is manufactured to meet and...</p>
                <div class="elements-social social-icon-style-02">
                    <ul class="medium-icon dark icon-with-animation">
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                        <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-5 col-lg-2 offset-xl-1 col-md-3 col-sm-6 md-mb-30px">
                <span class="alt-font d-block text-dark-gray fw-600 mb-10px fs-19">Company</span>
                <ul>
                    <li><a href="{{ route('company') }}">Company</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-lg-3 col-md-4 col-sm-6 xs-mb-30px">
                <span class="alt-font d-block text-dark-gray fw-600 mb-10px fs-19">Get in touch</span>
                <p class="mb-15px w-75 lg-w-85 sm-w-100">Makumbusho, Ali Hassan Mwinyi Road, Derm Plaza</p>
            
                <p class="m-0">
                    <span class="fw-600">
                        <i class="feather icon-feather-phone-call text-dark-gray icon-small me-10px"></i>
                    </span>
                    <a href="tel:+255688888833">+255 688 888 833</a>
                </p>
            
                <p class="m-0">
                    <span class="fw-600">
                        <i class="feather icon-feather-phone-call text-dark-gray icon-small me-10px"></i>
                    </span>
                    <a href="tel:+255754656539">+255 754 656 539</a>
                </p>
            
                <p class="m-0">
                    <span class="fw-600">
                        <i class="feather icon-feather-phone-call text-dark-gray icon-small me-10px"></i>
                    </span>
                    <a href="tel:+255745455242">+255 745 455 242</a>
                </p>
            
                <p class="m-0">
                    <span class="fw-600">
                        <i class="feather icon-feather-mail text-dark-gray icon-small me-10px"></i>
                    </span>
                    <a href="mailto:info@impexsignworks.co.tz">info@impexsignworks.co.tz</a>
                </p>
            </div>
            
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                <span class="alt-font d-block text-dark-gray fw-600 mb-10px fs-19">Newsletter</span>
                <p class="sm-mb-20px">Subscribe our newsletter to get the latest news and updates.</p>
                <div class="d-inline-block w-100 newsletter-style-02 position-relative">
                    <form action="" method="post" class="position-relative w-100">
                        @csrf
                        <input class="bg-transparent border-color-extra-medium-gray w-100 form-control required" type="email" name="email" placeholder="Enter email address...">
                        <input type="hidden" name="redirect" value="">
                        <button class="btn submit" aria-label="submit"><i class="icon feather icon-feather-mail icon-small text-base-color"></i></button>
                        <div class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                    </form>
                </div>
            </div>
            <!-- end footer column -->
        </div> 
        <div class="row justify-content-center align-items-center pt-5 sm-pt-30px">
            <!-- start divider -->
            <div class="col-12">
                <div class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray"></div>
            </div>
            <!-- end divider -->
            <!-- start copyright -->
            <div class="col-lg-6 pt-25px pb-25px md-pt-0 fs-16 last-paragraph-no-margin order-2 order-lg-1 text-center text-lg-start"><p>&copy; {{ date('Y') }} Ipex Company Limited <a href="https://www.themezaa.com/" target="_blank" class="text-decoration-line-bottom text-dark-gray fw-500"></a></p></div>
            <!-- end copyright -->
            <!-- start footer menu -->
         
        
            <!-- end footer menu -->
        </div>
    </div> 
</footer>
<!-- end footer -->
<!-- start scroll progress -->
<div class="scroll-progress d-none d-xxl-block">
    <a href="#" class="scroll-top" aria-label="scroll">
        <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
</div>
<!-- end scroll progress -->
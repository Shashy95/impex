<!-- start header -->
<header class="header-with-topbar">
    <!-- start header top bar -->
    <div class="header-top-bar top-bar-light bg-white disable-fixed md-border-bottom border-color-transparent-dark-very-light">
        <div class="container-fluid">
            <div class="row h-45px align-items-center m-0">
                <div class="col-md-6 text-center text-md-start">
                    <div class="fs-14 text-dark-gray">Our consulting experts waiting for you! <a href="{{ route('contact') }}" class="text-base-color fw-500 text-decoration-line-bottom">Contact now</a></div>
                </div>
                <div class="col-6 text-end d-none d-md-flex">
                    <div class="widget fs-14 me-30px md-me-0"><a href="tel:+255688888833" class="text-dark-gray"><i class="feather icon-feather-phone-call text-base-color"></i> +255688888833</a></div>
                    <div class="widget fs-14 text-dark-gray d-none d-lg-inline-block"><i class="feather icon-feather-map-pin text-base-color"></i> Makumbusho, Ali Hassan Mwinyi Road, Derm Plaza</div> 
                </div>
            </div>
        </div>
    </div>
    <!-- end header top bar -->
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent border-bottom border-color-transparent-white-light disable-fixed">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-auto">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo-transparent.png') }}" alt="Impex Logo" class="default-logo">
                    <img src="{{ asset('images/logo-transparent.png') }}" alt="Impex Logo" class="alt-logo">
                    <img src="{{ asset('images/logo-transparent.png') }}" alt="Impex Logo" class="mobile-logo"> 
                </a>
                
                
            </div>
            <div class="col-auto col-lg-8 menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav"> 
                    <ul class="navbar-nav alt-font"> 
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        <li class="nav-item"><a href="{{ route('company') }}" class="nav-link {{ request()->routeIs('company') ? 'active' : '' }}">Company</a></li>
                        <li class="nav-item">
                            <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') || request()->routeIs('services.details') ? 'active' : '' }}">Services</a>
                        </li>   

                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end md-pe-0">
                <div class="header-icon">
                    <div class="header-search-icon icon">
                        <a href="#" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a> 
                        <div class="search-form-wrapper">
                            <button title="Close" type="button" class="search-close alt-font">×</button>
                            <form id="search-form" role="search" method="get" class="search-form text-left" action="">
                                <div class="search-form-box">
                                    <h2 class="text-dark-gray fw-600 ls-minus-1px text-center mb-4 alt-font">What are you looking for?</h2>
                                    <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                    <button type="submit" class="search-button">
                                        <i class="feather icon-feather-search" aria-hidden="true"></i> 
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>  
            </div>
        </div>
    </nav>
    <!-- start push popup -->
    <div class="push-menu push-menu-style-3 p-50px bg-dark-gray">
        <span class="close-menu text-dark-gray bg-white"><i class="fa-solid fa-xmark"></i></span>
        <div class="push-menu-wrapper text-dark-gray" data-scroll-options='{ "theme": "light" }'>
            <div class="w-100">
                <h4 class="alt-font text-white fw-400 mb-30px d-block w-90 lh-40">Scalable business for <span class="d-inline-block fw-600 border-3 border-bottom border-color-base-color">startups</span></h4>
            </div>
            <div class="col-12">
                <ul class="fs-20 ps-0 alt-font">
                    <li class="pt-10px pb-10px w-100"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f w-30px text-start text-white"></i>Facebook</a></li>
                    <li class="pt-10px pb-10px w-100"><a class="instagram" href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram w-30px text-start text-white"></i>Instagram</a></li>
                    <li class="pt-10px pb-10px w-100"><a class="twitter" href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter w-30px text-start text-white"></i>Twitter</a></li>
                    <li class="pt-10px pb-10px w-100"><a class="dribbble" href="https://www.dribbble.com/" target="_blank"><i class="fa-brands fa-dribbble w-30px text-start text-white"></i>Dribbble</a></li>
                </ul>
            </div>
            <div class="border-top border-color-transparent-white-light pt-30px w-100">
                <span class="fs-24 fw-500 text-white"><a href="tel:12345678910">+1 234 567 8910</a></span>
                <a href="mailto:info@domain.com">info@domain.com</a>
            </div>
        </div>
    </div>
    <!-- end push popup -->
</header>
<!-- end header -->
@extends('layouts.app')

@section('title', 'Our Portfolio')
@section('meta_description', 'Explore our complete portfolio of signage projects including neon signs, vehicle branding, metal fabrication, and petrol station signage.')

@section('styles')

<!-- CSS Styles for Portfolio Section -->

@endsection
@section('content')
<!-- start page title section -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0" data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('images/website-images/hero.jpg') }}');">
    <div class="opacity-light bg-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center small-screen">
            <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-small" data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h1 class="mb-5px alt-font text-white fw-400"><span class="opacity-6">Helping your business</span></h1>
                <h2 class="mb-0 text-white alt-font ls-minus-2px text-shadow-double-large fw-500">Portfolio</h2>
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

<!-- Portfolio Filter and Grid -->
<section class="py-5 py-lg-7">
    <div class="container">
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

        <!-- Portfolio items grid -->
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

        <div class="load-more-container">
            <button class="load-more-btn">
                <span class="loading-spinner" style="display: none;"></span>
                <span class="btn-text">Load More</span>
            </button>
        </div>

    </div>
</section>

@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        // Initialize Feather Icons
        feather.replace();
        
        // Set initial visible item count
        var initialItems = 12;  // Show first 12 items initially
        var itemsToLoad = 6;   // Load 6 more items on each click
        var $grid = $('#portfolio-container');
        var $items = $grid.find('.grid-item');
        var totalItems = $items.length;
        var visibleItems = initialItems;
        
        // Hide items that exceed the initial count
        $items.slice(initialItems).addClass('hidden-item');
        
        // Initialize Isotope after hiding some items
        var $portfolioContainer = $grid.isotope({
            itemSelector: '.grid-item',
            layoutMode: 'fitRows',
            transitionDuration: '0.6s',
            filter: function() {
                return !$(this).hasClass('hidden-item');
            }
        });
        
   
  
        // Load More Button Click Handler
        $('.load-more-btn').on('click', function() {
            var btn = $(this);
           
            
            
            // Don't proceed if already loading or all items are visible
            if (btn.hasClass('loading') || visibleItems >= totalItems) {
                return;
            }
            
            // Show loading spinner
            btn.addClass('loading');
            btn.find('.loading-spinner').show();
            btn.find('.btn-text').text('Loading...');
            
            // Simulate loading delay for visual feedback
            setTimeout(function() {
                // Calculate next batch of items to show
                var $hiddenItems = $items.filter('.hidden-item');
                var $nextItems = $hiddenItems.slice(0, itemsToLoad);
                
                // Update visible items counter
                visibleItems = Math.min(visibleItems + itemsToLoad, totalItems);
                
                // Show items
                $nextItems.removeClass('hidden-item');
                
                // Update Isotope layout with new items
                $portfolioContainer.isotope('layout');
                
                // Apply current filter
                var currentFilter = $('.portfolio-filter button.active').attr('data-filter');
                if (currentFilter) {
                    $portfolioContainer.isotope({ filter: currentFilter });
                } else {
                    $portfolioContainer.isotope({ filter: '*' });
                }
                
                // Reset button state
                btn.removeClass('loading');
                btn.find('.loading-spinner').hide();
                btn.find('.btn-text').text('Load More');
                
                // Hide button if all items are now visible
                if (visibleItems >= totalItems) {
                    btn.text('All Items Loaded').addClass('disabled').css('opacity', '0.5');
                }
            }, 800); // 800ms delay for loading effect
        });
        
        // Filter items on button click
        $('.portfolio-filter').on('click', 'button', function() {
            var btn = $(this);
            var filterValue = btn.attr('data-filter');
            
            // Add active class to the clicked filter button
            $('.portfolio-filter button').removeClass('active');
            btn.addClass('active');
            
            // Combine filters: both not hidden AND matches category filter
            var combinedFilter;
            if (filterValue === '*') {
                combinedFilter = function() {
                    return !$(this).hasClass('hidden-item');
                };
            } else {
                combinedFilter = function() {
                    return !$(this).hasClass('hidden-item') && $(this).is(filterValue);
                };
            }
            
            // Apply the combined filter
            $portfolioContainer.isotope({ filter: combinedFilter });
        });
        
        // Layout Isotope after images have loaded
        $portfolioContainer.imagesLoaded().progress(function() {
            $portfolioContainer.isotope('layout');
        });
        
        // Smooth scrolling
        $('a.smooth-scroll').on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {
                    window.location.hash = hash;
                });
            }
        });
    });
</script>
@endsection
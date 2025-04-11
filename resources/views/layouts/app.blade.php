<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>@yield('title', 'Home') - {{ env('APP_NAME') ?? 'Impex Sign Works' }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="@yield('description', 'Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.')">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/consulting.css') }}" />
   
   
    <style>
        /* Portfolio Filter Styles */
        .portfolio-filter {
            margin-bottom: 30px;
        }
        .portfolio-filter .nav-link {
            font-size: 14px;
            font-weight: 600;
            padding: 8px 10px;
            margin: 0 5px;
            color: #555;
            background-color: transparent;
            border: none;
            border-radius: 0;
            position: relative;
            transition: all 0.3s ease;
        }
        .portfolio-filter .nav-link.active,
        .portfolio-filter .nav-link:hover {
            color: #fff;
            background-color: #b92f36; /* Red active state */
        }
        .portfolio-filter .nav-item:first-child .nav-link {
            margin-left: 0;
        }
        
        /* Portfolio Item Styles */
        .portfolio-box {
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
        .portfolio-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .portfolio-image {
            position: relative;
            overflow: hidden;
        }
        .portfolio-hover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.7);
            transition: all 0.3s ease;
            padding: 20px;
        }
        .portfolio-box:hover .portfolio-hover {
            opacity: 1;
        }
        .portfolio-icon {
            margin-bottom: 15px;
        }
        .portfolio-icon a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background-color: #fff;
            border-radius: 50%;
            color: #333;
            margin: 0 5px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .portfolio-icon a:hover {
            background-color: #b92f36; /* Red hover */
            color: #fff;
        }
        .portfolio-text {
            text-align: center;
        }
        .portfolio-tag {
            margin-bottom: 5px;
        }
        .portfolio-tag span {
            font-size: 13px;
            color: #fff;
            font-weight: 500;
        }
        .portfolio-title {
            font-size: 18px;
            font-weight: 600;
            color: #fff;
        }
        
        /* Lightbox Styles */
        .feather {
            width: 24px;
            height: 24px;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
        }
        
        /* Load More Button Styles */
        .load-more-container {
            text-align: center;
            margin-top: 40px;
        }
        .load-more-btn {
            display: inline-block;
            background: #333;
            color: #fff;
            padding: 12px 30px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .load-more-btn:hover {
            background: #b92f36;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .load-more-btn.loading {
            opacity: 0.7;
            cursor: not-allowed;
        }
        
        /* Loading Spinner */
        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 0.8s linear infinite;
            vertical-align: middle;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Hide items initially */
        .grid-item.hidden-item {
            display: none;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 767px) {
            .portfolio-filter .nav-link {
                padding: 5px 5px;
                font-size: 12px;
                
            }
            .portfolio-title {
                font-size: 16px;
            }
        }
        
        /* Isotope Animation Styles */
        .grid-item {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        .grid-item.hide {
            transform: scale(0.8);
            opacity: 0;
        }
        
        /* Button Styles for Filter */
        .portfolio-filter button.nav-link {
            cursor: pointer;
            border: none;
            outline: none;
            //background: #f5f5f5;
            padding: 8px 10px;
        }
        .portfolio-filter button.nav-link.active {
            background-color: #b92f36; /* Red active state */
            color: white;
        }

        @media (max-width: 576px) {
  .portfolio-filter {
    gap: 0 !important; /* Remove Bootstrap spacing if any */
  }

  .portfolio-filter .nav-item {
    flex: 0 0 50%;        /* 2 items per row */
    max-width: 50%;
    padding: 2px;         /* minimal space between buttons */
    margin: 0;            /* eliminate extra spacing */
    display: flex;
    justify-content: center;
  }

  .portfolio-filter .nav-link {
    width: 100%;          /* make button stretch within container */
    padding: 4px 4px;     /* adjust for comfortable touch size */
  }
}


        
    </style>
   
   
    @yield('styles')
</head>
<body data-mobile-nav-style="classic">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    @yield('scripts')
</body>
</html>
<!-- start header -->
<header>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
        <div class="container px-4 px-lg-5 d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-transparent.png') }}" 
                     alt="Impex Logo" 
                     style="height: 150px; width: auto; object-fit: contain;">
            </a>

            <!-- Toggler for mobile -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav alt-font text-end">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} text-black px-3">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('company') }}" class="nav-link {{ request()->routeIs('company') ? 'active' : '' }} text-black px-3">Company</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }} text-black px-3">Service</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }} text-black px-3">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- end header -->

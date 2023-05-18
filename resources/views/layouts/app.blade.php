<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/IITU.PNG')}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')

    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <style>
        body {
            touch-action: pan-x pan-y;
        }
    </style>
    @laravelPWA
</head>
<body>
    <div id="app" class="bg-gray-50">

        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
                <a href="{{route('welcome')}}" class="logo d-flex align-items-center me-auto me-lg-0">
                    <h1 class="whitespace-nowrap">IITU Canteen<span>.</span></h1>
                </a>
                @if(isset(auth()->user()->id))
                    @if(auth()->user()->is_admin)
                        <nav id="navbar" class="navbar">
                            <ul>
                                <li><a href="{{route('admin.users')}}">Users</a></li>
                                <li><a href="{{route('admin.menu')}}">Menu</a></li>
                                <li><a href="{{route('admin.categories')}}">Categories</a></li>
                                <li><a href="{{route('admin.orders')}}">Orders</a></li>
                                <li><a href="{{route('admin.feedback')}}">Feedbacks</a></li>

                            </ul>
                        </nav>
                        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

                    @endif
                @endif
            </div>
        </header>
        <main>
            @yield('content')

            @if(isset(auth()->user()->id))
            <div class="b-nav" style="z-index: 99">
                <div class="btm-nav" style="z-index: 99">
                    <button onclick="window.location='{{ url("home") }}'" class="{{Route::currentRouteNamed('home') ? 'active' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="btm-nav-label">Menu</span>
                    </button>
                    <button onclick="window.location='{{ url("favorites") }}'" class="{{Route::currentRouteNamed('favorites') ? 'active' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                        <span class="btm-nav-label">Favorites</span>
                    </button>
                    <button onclick="window.location='{{ url("basket") }}'" class="{{Route::currentRouteNamed('basket') ? 'active' : ''}} cartBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        @if(session('cart'))
                            <span class="cart_count">{{count(session('cart'))}}</span>
                        @endif
                        <span class="btm-nav-label">Basket</span>
                    </button>
                    <button onclick="window.location='{{ url("profile") }}'" class="{{Route::currentRouteNamed('profile') ? 'active' : ''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        <span class="btm-nav-label">Profile</span>
                    </button>
                </div>

            </div>

            @endif
        </main>
    </div>

    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>

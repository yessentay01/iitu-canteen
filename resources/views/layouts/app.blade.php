<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet"/>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <style>
        body {
            touch-action: pan-x pan-y;
        }
        .title{
            font-size: 24px;
        }
        @media screen and (max-width: 600px) {
            .title {
                font-size: 24px;
            }
        }
        #header{
            background-color: #F9FAFB;
        }
    </style>
</head>
<body>
<div id="app" class="bg-white">

    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class=" px-3 w-full d-flex align-items-center justify-content-between">
            <a href="{{route('welcome')}}" class="logo d-flex align-items-center me-auto me-lg-0">
                <img  src="{{ asset('/images/canteenv2/logo.png') }}" alt="">
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
        @if(isset(auth()->user()->id))
            @include('../pages/components/sidebar')
        @endif
        @if(Route::currentRouteNamed('home'))
            <div class="search_form">
                <form>
                    <input
                        type="search"
                        class="form-control my-4"
                        placeholder="Find a dish.."
                        name="search"
                        value="{{ request('search') }}"
                        onchange=""
                    >
                    <input type="submit" hidden/>
                </form>
            </div>
        @endif
        @if(isset(auth()->user()->id))
            <div class="p-1 sm:ml-64 bg-white">
                <br>
                @yield('content')
            </div>
        @else
            <div class="p-4">
                @yield('content')
            </div>
        @endif
        @if(isset(auth()->user()->id))
            @include('../pages/components/navbar')
        @endif
    </main>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>

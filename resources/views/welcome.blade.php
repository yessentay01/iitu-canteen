<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IITU Canteen</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="preconnect" href="https://fonts.googleapis.com">


    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

</head>

<body>

<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <h1>IITU Canteen<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
{{--                <li><a href="#events">Events</a></li>--}}
                <li><a href="#partners">Partners</a></li>
{{--                <li><a href="#gallery">Gallery</a></li>--}}
                <li><a href="#contact">Contact</a></li>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}" class="btn-book-a-table ">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="btn-book-a-table ">Log in</a></li>
                    @endauth
                @endauth

            </ul>
        </nav><!-- .navbar -->


        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div
                class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up">Book and collect <br>your daıly food!</h2>
                <p data-aos="fade-up" data-aos-delay="100">You can pre-order and schedule the pickup of your daily meals from a food establishment or service. It allows you to save time and avoid waiting in line by ordering in advance, while ensuring that you have access to the meals you need on a regular basis.</p>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{route('home')}}" class="btn-book-a-table">Order food</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                <img src="{{asset('assets/img/hero.png')}}" class="img-fluid" alt="" data-aos="zoom-out"
                     data-aos-delay="300">
            </div>
        </div>
    </div>
</section><!-- End Hero Section -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>About Us</h2>
                <p>Learn More <span>About Us</span></p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-7 position-relative about-img"
                     style="background-image: url('{{asset('assets/img/iitu-partners.jpg')}}') ;" data-aos="fade-up"
                     data-aos-delay="150">
                </div>
                <div class="col-lg-5 d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Welcome, dear teacher, student! We are glad to see you here again, so what would you like to order today ?

                            <br>
                            Quickly go to the menu and see what's on today. We are waiting for you and your application with impatience! It tastes better with us!
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->


{{--    <section id="why-us" class="why-us section-bg">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="row gy-4">--}}

{{--                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <div class="why-box">--}}
{{--                        <h3>Why Choose IITU Canteen?</h3>--}}
{{--                        <p>--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
{{--                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit--}}
{{--                            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus--}}
{{--                            optio ad corporis.--}}
{{--                        </p>--}}
{{--                        <div class="text-center">--}}
{{--                            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- End Why Box -->--}}

{{--                <div class="col-lg-8 d-flex align-items-center">--}}
{{--                    <div class="row gy-4">--}}

{{--                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">--}}
{{--                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">--}}
{{--                                <i class="bi bi-clipboard-data"></i>--}}
{{--                                <h4>Corporis voluptates officia eiusmod</h4>--}}
{{--                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut--}}
{{--                                    aliquip</p>--}}
{{--                            </div>--}}
{{--                        </div><!-- End Icon Box -->--}}

{{--                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">--}}
{{--                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">--}}
{{--                                <i class="bi bi-gem"></i>--}}
{{--                                <h4>Ullamco laboris ladore pan</h4>--}}
{{--                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia--}}
{{--                                    deserunt</p>--}}
{{--                            </div>--}}
{{--                        </div><!-- End Icon Box -->--}}

{{--                        <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">--}}
{{--                            <div class="icon-box d-flex flex-column justify-content-center align-items-center">--}}
{{--                                <i class="bi bi-inboxes"></i>--}}
{{--                                <h4>Labore consequatur incidid dolore</h4>--}}
{{--                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>--}}
{{--                            </div>--}}
{{--                        </div><!-- End Icon Box -->--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="zoom-out">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="{{count($users)}}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Users</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="{{count($items)}}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Menu items</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="{{count($orders)}}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Orders</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Universities</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Menu</h2>
                <p>Check Our <span>IITU Canteen Menu</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                        <h4>Starters</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                        <h4>Breakfast</h4>
                    </a><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                        <h4>Lunch</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                        <h4>Dinner</h4>
                    </a>
                </li><!-- End tab nav item -->

            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                <div class="tab-pane fade active show" id="menu-starters">
                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Starters</h3>
                    </div>
                    <div class="row gy-5">
                        @foreach($starters as $starter)
                            <div class="col-lg-4 menu-item">
                                <a href="{{$starter->images}}" class="glightbox"><img
                                        src="{{$starter->images}}" class="menu-img img-fluid" alt=""></a>
                                <h4>{{$starter->name}}</h4>
                                <p class="ingredients">
                                    {{$starter->ingredients}}
                                </p>
                                <p class="price">
                                    ₸{{$starter->price}}
                                </p>
                            </div><!-- Menu Item -->
                        @endforeach
                    </div>
                </div><!-- End Starter Menu Content -->

                <div class="tab-pane fade" id="menu-breakfast">

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Breakfast</h3>
                    </div>

                    <div class="row gy-5">

                        @foreach($breakfasts as $breakfast)
                            <div class="col-lg-4 menu-item">
                                <a href="{{$breakfast->images}}" class="glightbox"><img
                                        src="{{$breakfast->images}}" class="menu-img img-fluid" alt=""></a>
                                <h4>{{$breakfast->name}}</h4>
                                <p class="ingredients">
                                    {{$breakfast->ingredients}}
                                </p>
                                <p class="price">
                                    ₸{{$breakfast->price}}
                                </p>
                            </div><!-- Menu Item -->
                        @endforeach
                    </div>
                </div><!-- End Breakfast Menu Content -->

                <div class="tab-pane fade" id="menu-lunch">

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Lunch</h3>
                    </div>

                    <div class="row gy-5">

                        @foreach($lunches as $lunch)
                            <div class="col-lg-4 menu-item">
                                <a href="{{$lunch->images}}" class="glightbox"><img
                                        src="{{$lunch->images}}" class="menu-img img-fluid" alt=""></a>
                                <h4>{{$lunch->name}}</h4>
                                <p class="ingredients">
                                    {{$lunch->ingredients}}
                                </p>
                                <p class="price">
                                    ₸{{$lunch->price}}
                                </p>
                            </div><!-- Menu Item -->
                        @endforeach
                    </div>
                </div><!-- End Lunch Menu Content -->

                <div class="tab-pane fade" id="menu-dinner">

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Dinner</h3>
                    </div>

                    <div class="row gy-5">

                        @foreach($dinners as $dinner)
                            <div class="col-lg-4 menu-item">
                                <a href="{{$dinner->images}}" class="glightbox"><img
                                        src="{{$dinner->images}}" class="menu-img img-fluid" alt=""></a>
                                <h4>{{$dinner->name}}</h4>
                                <p class="ingredients">
                                    {{$dinner->ingredients}}
                                </p>
                                <p class="price">
                                    ₸{{$dinner->price}}
                                </p>
                            </div><!-- Menu Item -->
                        @endforeach
                    </div>
                </div><!-- End Dinner Menu Content -->

            </div>

        </div>
    </section><!-- End Menu Section -->


{{--    <section id="testimonials" class="testimonials section-bg">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="section-header">--}}
{{--                <h2>Testimonials</h2>--}}
{{--                <p>What Are They <span>Saying About Us</span></p>--}}
{{--            </div>--}}

{{--            <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">--}}
{{--                <div class="swiper-wrapper">--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <div class="row gy-4 justify-content-center">--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <p>--}}
{{--                                            <i class="bi bi-quote quote-icon-left"></i>--}}
{{--                                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum--}}
{{--                                            suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.--}}
{{--                                            Maecen aliquam, risus at semper.--}}
{{--                                            <i class="bi bi-quote quote-icon-right"></i>--}}
{{--                                        </p>--}}
{{--                                        <h3>Saul Goodman</h3>--}}
{{--                                        <h4>Ceo &amp; Founder</h4>--}}
{{--                                        <div class="stars">--}}
{{--                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
{{--                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
{{--                                                class="bi bi-star-fill"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-2 text-center">--}}
{{--                                    <img src="assets/img/testimonials/testimonials-1.jpg"--}}
{{--                                         class="img-fluid testimonial-img" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <div class="row gy-4 justify-content-center">--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <p>--}}
{{--                                            <i class="bi bi-quote quote-icon-left"></i>--}}
{{--                                            Export tempor illum tamen malis malis eram quae irure esse labore quem--}}
{{--                                            cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua--}}
{{--                                            noster fugiat irure amet legam anim culpa.--}}
{{--                                            <i class="bi bi-quote quote-icon-right"></i>--}}
{{--                                        </p>--}}
{{--                                        <h3>Sara Wilsson</h3>--}}
{{--                                        <h4>Designer</h4>--}}
{{--                                        <div class="stars">--}}
{{--                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
{{--                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
{{--                                                class="bi bi-star-fill"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-2 text-center">--}}
{{--                                    <img src="assets/img/testimonials/testimonials-2.jpg"--}}
{{--                                         class="img-fluid testimonial-img" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <div class="row gy-4 justify-content-center">--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <p>--}}
{{--                                            <i class="bi bi-quote quote-icon-left"></i>--}}
{{--                                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla--}}
{{--                                            quem veniam duis minim tempor labore quem eram duis noster aute amet eram--}}
{{--                                            fore quis sint minim.--}}
{{--                                            <i class="bi bi-quote quote-icon-right"></i>--}}
{{--                                        </p>--}}
{{--                                        <h3>Jena Karlis</h3>--}}
{{--                                        <h4>Store Owner</h4>--}}
{{--                                        <div class="stars">--}}
{{--                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
{{--                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
{{--                                                class="bi bi-star-fill"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-2 text-center">--}}
{{--                                    <img src="assets/img/testimonials/testimonials-3.jpg"--}}
{{--                                         class="img-fluid testimonial-img" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                    <div class="swiper-slide">--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <div class="row gy-4 justify-content-center">--}}
{{--                                <div class="col-lg-6">--}}
{{--                                    <div class="testimonial-content">--}}
{{--                                        <p>--}}
{{--                                            <i class="bi bi-quote quote-icon-left"></i>--}}
{{--                                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor--}}
{{--                                            noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat--}}
{{--                                            legam esse veniam culpa fore nisi cillum quid.--}}
{{--                                            <i class="bi bi-quote quote-icon-right"></i>--}}
{{--                                        </p>--}}
{{--                                        <h3>John Larson</h3>--}}
{{--                                        <h4>Entrepreneur</h4>--}}
{{--                                        <div class="stars">--}}
{{--                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
{{--                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i--}}
{{--                                                class="bi bi-star-fill"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-2 text-center">--}}
{{--                                    <img src="assets/img/testimonials/testimonials-4.jpg"--}}
{{--                                         class="img-fluid testimonial-img" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- End testimonial item -->--}}

{{--                </div>--}}
{{--                <div class="swiper-pagination"></div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}


{{--    <section id="events" class="events">--}}
{{--        <div class="container-fluid" data-aos="fade-up">--}}

{{--            <div class="section-header">--}}
{{--                <h2>Events</h2>--}}
{{--                <p>Share <span>Your Moments</span> In Our Restaurant</p>--}}
{{--            </div>--}}

{{--            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">--}}
{{--                <div class="swiper-wrapper">--}}

{{--                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"--}}
{{--                         style="background-image: url(assets/img/events-1.jpg)">--}}
{{--                        <h3>Custom Parties</h3>--}}
{{--                        <div class="price align-self-start">$99</div>--}}
{{--                        <p class="description">--}}
{{--                            Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere.--}}
{{--                            Enim facilis veritatis id est rem repudiandae nulla expedita quas.--}}
{{--                        </p>--}}
{{--                    </div><!-- End Event item -->--}}

{{--                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"--}}
{{--                         style="background-image: url(assets/img/events-2.jpg)">--}}
{{--                        <h3>Private Parties</h3>--}}
{{--                        <div class="price align-self-start">$289</div>--}}
{{--                        <p class="description">--}}
{{--                            In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo--}}
{{--                            vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.--}}
{{--                        </p>--}}
{{--                    </div><!-- End Event item -->--}}

{{--                    <div class="swiper-slide event-item d-flex flex-column justify-content-end"--}}
{{--                         style="background-image: url(assets/img/events-3.jpg)">--}}
{{--                        <h3>Birthday Parties</h3>--}}
{{--                        <div class="price align-self-start">$499</div>--}}
{{--                        <p class="description">--}}
{{--                            Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse--}}
{{--                            quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.--}}
{{--                        </p>--}}
{{--                    </div><!-- End Event item -->--}}

{{--                </div>--}}
{{--                <div class="swiper-pagination"></div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}

    <!-- ======= Chefs Section ======= -->
    <section id="partners" class="chefs section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Partners</h2>
                <p>Our partner Universities</p>
            </div>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="chef-member">
                        <div class="member-img">
                            <img src="{{asset('assets/img/iitu-partners.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>International IT University</h4>
                            <p>International IT University or International university of information technologies -
                                established in close collaboration with educational organization iCarnegie which
                                represents American IT university Carnegie Mellon in 2009.</p>
                        </div>
                    </div>
                </div><!-- End Chefs Member -->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="chef-member">
                        <div class="member-img">
                            <img src="{{asset('assets/img/satpayev.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Satbayev University</h4>
                            <p>Satbayev University is a technical university located in Almaty, Kazakhstan. The
                                university is the oldest technical university in Kazakhstan, comprising 10 institutions
                                and 27 departments.</p>
                        </div>
                    </div>
                </div><!-- End Chefs Member -->

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="chef-member">
                        <div class="member-img">
                            <img src="{{asset('assets/img/sdu.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Suleyman Demirel University</h4>
                            <p>Suleyman Demirel University is a private university in Kaskelen, Almaty, Kazakhstan. It
                                is named after Süleyman Demirel, the former prime minister and president of Turkey.</p>
                        </div>
                    </div>
                </div><!-- End Chefs Member -->

            </div>

        </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Gallery Section ======= -->
{{--    <section id="gallery" class="gallery section-bg">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="section-header">--}}
{{--                <h2>gallery</h2>--}}
{{--                <p>Check <span>Our Gallery</span></p>--}}
{{--            </div>--}}

{{--            <div class="gallery-slider swiper">--}}
{{--                <div class="swiper-wrapper align-items-center">--}}
{{--                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"--}}
{{--                                                 href="assets/img/gallery/gallery-1.jpg"><img--}}
{{--                                src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>--}}
{{--                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"--}}
{{--                                                 href="assets/img/gallery/gallery-2.jpg"><img--}}
{{--                                src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>--}}
{{--                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"--}}
{{--                                                 href="assets/img/gallery/gallery-3.jpg"><img--}}
{{--                                src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>--}}
{{--                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"--}}
{{--                                                 href="assets/img/gallery/gallery-4.jpg"><img--}}
{{--                                src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>--}}
{{--                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"--}}
{{--                                                 href="assets/img/gallery/gallery-5.jpg"><img--}}
{{--                                src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>--}}
{{--                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"--}}
{{--                                                 href="assets/img/gallery/gallery-6.jpg"><img--}}
{{--                                src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>--}}
{{--                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"--}}
{{--                                                 href="assets/img/gallery/gallery-7.jpg"><img--}}
{{--                                src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>--}}
{{--                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"--}}
{{--                                                 href="assets/img/gallery/gallery-8.jpg"><img--}}
{{--                                src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>--}}
{{--                </div>--}}
{{--                <div class="swiper-pagination"></div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}


    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>

            <div class="row gy-4">

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-map flex-shrink-0"></i>
                        <div>
                            <h3>Our Address</h3>
                            <p><a target="_blank"
                                  href="https://2gis.kz/almaty/search/%D0%9C%D0%B5%D0%B6%D0%B4%D1%83%D0%BD%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9%20%D1%83%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82%20%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D1%85%20%D1%82%D0%B5%D1%85%D0%BD%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D0%B9%2C%20%D1%83%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82%D1%8B/firm/9429940000793107/76.909876%2C43.235296"> Kazakhstan, Almaty, Manas Street, 34А</a>
                               </p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p><a target="_blank" href="mailto:info@iitu.edu.kz">info@iitu.edu.kz</a> </p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p><a target="_blank" href="tel:87273200000"> 8 (727) 320-00-00</a></p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item  d-flex align-items-center">
                        <i class="icon bi bi-share flex-shrink-0"></i>
                        <div>
                            <h3>Opening Hours</h3>
                            <div><strong>Mon-Fri:</strong> 8AM - 6PM;
                            </div>
                        </div>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
                <div class="row">
                    <div class="col-xl-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-xl-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                               required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center">
                    <button type="submit">Send Message</button>
                </div>
            </form>


        </div>
    </section>

</main>

<footer id="footer" class="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>IITU Canteen</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>


<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>

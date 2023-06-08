<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/canteen2.css')}}">
    <title>Canteen</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap" rel="stylesheet">
</head>
<body>
<header style="background-image: url('{{ asset('/images/canteenv2/hero.png') }}');">
    <div class="container">
        <nav>
            <div>
                <img width="150" src="{{ asset('/images/canteenv2/logo.png') }}" alt="">
            </div>
            <div class="nav_links">
                <a href="#">Home</a>
                <a href="#">Menu</a>
                <a href="#">About</a>
                <a href="#">Partners</a>
                <a href="#">Contact</a>
            </div>
            <div class="login">
                @auth
                    <a href="{{route('home')}}">Home</a>
                @else
                    <a href="{{route('login')}}">Login</a>
                @endauth
            </div>
        </nav>

        <h1>The Fastest Delivery
            In <span>Your Uni</span></h1>
        <a href="#" class="button">Order Now</a>
    </div>
</header>
<section>
    <div class="container text-center">
        <h3 class="title">Menu</h3>
        <p class="subtitle">Most Popular Items</p>
        <div class="row">
            @for($i = 0; $i < 6; $i++)
                <div class="col-md-4">
                    <div class="item">
                        <div class="item_top">
                            <img src="{{ asset('/images/canteenv2/item.png') }}" alt="">
                        </div>
                        <div class="item_bottom">
                            <h3>Gyro Sandwhic</h3>
                            <div class="item_price">
                                <a href="#">Add To Cart</a>
                                <span>1200тг</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <br>
        <br>
        <a href="#" class="button">See More Product</a>
    </div>
</section>
<br>
<br>
<br>
<br>
<section>
    <div class="container text-center">
        <h3 class="title">About Us</h3>
        <p class="subtitle">Why Choose Our Favorite Food</p>

        <div class="row">
            <div class="col-md-4">
                <div class="about_item">
                    <img width="120" src="{{ asset('/images/canteenv2/about1.png') }}" alt="">
                    <h2>Qualityfull Food</h2>
                    <p>healthy, homemade and hot food</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about_item about_item_center">
                    <img width="120" src="{{ asset('/images/canteenv2/about2.png') }}" alt="">
                    <h2>Healthy Food</h2>
                    <p>tired of snacks and sweet chocolates ,
                        then you come to us</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about_item">
                    <img width="120" src="{{ asset('/images/canteenv2/about3.png') }}" alt="">
                    <h2>Fast Delivery</h2>
                    <p>delivery in a few minutes is provided</p>
                </div>
            </div>
        </div>
    </div>
</section>

<br>
<br>
<br>
<br>
<section>
    <div class="container text-center">
        <h3 class="title">Partners</h3>
        <p class="subtitle">Our partner Universities</p>
        <div class="row">
            <div class="col-md-4">
                <div class="univer">
                    <img src="{{ asset('/images/canteenv2/iitu-partners.jpg') }}" alt="">
                    <div class="univer_desc">
                        <h4>International IT University</h4>
                        <p>International IT University or International university of information technologies -
                            established in close collaboration with educational organization iCarnegie which represents
                            .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="univer">
                    <img src="{{ asset('/images/canteenv2/satpayev.jpg') }}" alt="">
                    <div class="univer_desc">
                        <h4>Satbayev University</h4>
                        <p>Satbayev University is a technical university located in Almaty, Kazakhstan. The university is the oldest technical university in Kazakhstan, comprising 10 institutions and 27 departments.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="univer">
                    <img src="{{ asset('/images/canteenv2/sdu.jpg') }}" alt="">
                    <div class="univer_desc">
                        <h4>Suleyman Demirel University</h4>
                        <p>Suleyman Demirel University is a private university in Kaskelen, Almaty, Kazakhstan. It is named after Süleyman Demirel, the former prime minister and president of Turkey.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<section>
    <div class="container text-center">
        <h3 class="title">Events</h3>
        <p class="subtitle">Our partner Universities</p>
    </div>
    <div class="events">
        <div class="events_1item">
            <h1>Events</h1>
            <p>Plan and book a time for your event at the university so you don't have to spend time waiting in line or waiting for a table to become available.</p>
            <br>
            <a class="events_btn" href="#">Booking event</a>
        </div>
        <a href="#" class="event_item">
            <img src="{{ asset('/images/canteenv2/event1.png') }}" alt="">
            <h4>Sweet Fest</h4>
        </a>
        <a href="#" class="event_item">
            <img src="{{ asset('/images/canteenv2/event1.png') }}" alt="">
            <h4>Sweet Fest</h4>
        </a>
        <a href="#" class="event_item">
            <img src="{{ asset('/images/canteenv2/event1.png') }}" alt="">
            <h4>Sweet Fest</h4>
        </a>
        <a href="#" class="event_item">
            <img src="{{ asset('/images/canteenv2/event1.png') }}" alt="">
            <h4>Sweet Fest</h4>
        </a>


    </div>
</section>
<br>
<br>
<br>
<br>
<footer>
    <div class="container">
        <img width="100" src="{{ asset('/images/canteenv2/logo.png') }}" alt="">
    </div>
</footer>
</body>
</html>

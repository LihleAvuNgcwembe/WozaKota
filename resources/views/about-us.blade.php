<!<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('assets/css/proto-style.css') }}">
        <!-- external css icon link -->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <!-- tab icon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/Woza-Woza-Kota-Logo.png') }}">
    </head>

    <body>

        <!-- header section -->
        <section id="header">
            <a href="#"><img src="{{ asset('assets/img/images/WhatsApp Image 2023-09-18 at 18.10.09 (1).jpeg') }}"
                    class="logo"></a>
            <div class="nav">
                <ul id="navbar">
                    <li><a href="{{ route('menu') }}">Home</a></li>
                    <li><a href="{{ route('aboutUs') }}l">About Us</a></li>
                    <li><a href="{{ route('menu') }}">Menu</a></li>
                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                    <li><i class='bx bx-cart' id="cart-icon" data-quantity="0"></i></li>
                    <li><a href="user.html"><i class='bx bxs-user'></i></a></li>
                </ul>

                <!-- cart -->
                <div class="cart">
                    <h2 class="cart-title"> Your Cart</h2>
                    <!-- cart content -->
                    <div class="cart-content">

                    </div>
                    <!-- cart total -->
                    <div class="total">
                        <div class="total-title">Total</div>
                        <div class="total-price">R0</div>
                    </div>

                    <!-- buy button -->
                    <button type="button" class="btn-buy">Proceed To Checkout</button>

                    <!-- close cart button -->
                    <i class="bx bx-x" id="close-cart"></i>
                </div>
        </section>

        <section class="about">
            <div class="about-text">
                <h2>Come to Woza Woza and enjoy <br> the best</h2>
                <p>Opened in 2021, Woza Woza Kota Place was made with the goal
                    of giving as many young students around the Midrand area the
                    chance of being able to buy fresh kotas full of taste and that
                    will allow you to enjoy your day whether you going, already at or
                    coming back from school. Ceejay and his team come together every day
                    to provide the best service possible to the youth at the best possible
                    price for you to enjoy.
                    <br>
                    <br>
                    <br>
                    Located on 10 Ridge Road, across Little Cafe and next to Chuks,
                    in the two years since opening, the business has grown to become
                    one of the main kota and chillout locations for students in the area.
                    Be sure to stop around and get your kota ASAP.
                </p>
            </div>

            <div class="about-photo">
                <img src="{{ asset('assets/img/images/unnamed.jpg') }}">
            </div>
        </section>


        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

    </html>DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="stylehome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

        <div id="page-container">
            <div id="content-wrap">
                <!--page content-->
                <div class="inside">
                    <div
                        style="font-family: 'trebuchet MS', sans-serif; font-size: 40px; text-align: left; color: #faf9f6;">
                        Woza Woza Kota Place</div>
                    <div class="con">
                        <!--<button style="font-family: 'trebuchet MS', sans-serif; font-size: 15px; border: none; background-color: #FFC107; color: #fff;
                        border-radius: 5px; text-decoration: none; padding: 10px">
                        <a href="sign-in.html" style="color: #fff; text-decoration: none;">Sign In</a></button>-->
                        <i class="fa-solid fa-cart-shopping" style="color: #faf9f6; padding-right: 5px;"></i>
                        <button
                            style="font-family: 'trebuchet MS', sans-serif; font-size: 15px; border: none; background-color: #054979; color: #fff;
                        border-radius: 5px; padding: 10px">
                            @if (Route::has('login'))
                                @auth
                                    <li><a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Login/Sign-Up</a></li>
                                @endauth
                            @endif
                        </button>
                    </div>
                </div>

                <div class = "container1">
                    <li style="list-style: none;"><a href = "home.html"
                            style=" color: #faf9f6; font-family: 'trebuchet MS', sans-serif;">home</a></li>
                    <li style="list-style: none;"><a href = "Menu.html"
                            style=" color: #faf9f6; font-family: 'trebuchet MS', sans-serif;">menu</a>

                    </li>
                    <li style="list-style: none;"><a href = "#"
                            style=" color: #faf9f6; font-family: 'trebuchet MS', sans-serif;">find us</a></li>

                </div>

                <!--page content-->
                <div class="intro">
                    Woza Woza Kota Place is a fast-food extablishment founded in the beginning of 2022 by Thulakanyo
                    "CeeJay" Mathivine. In its infancy it has garned its fair share of customers, this is because the
                    business prides itself in
                    selling a quality product using only quality ingredients.
                </div>




            </div>

            <footer>
                <div class="kontain">
                    <div class="row">

                        <div class="footer-column">
                            <h2>A Taste You'll Remember</h2>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of use</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </footer>
        </div>

    </body>

    </html>

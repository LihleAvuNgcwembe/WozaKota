<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ config('app.name', 'Laravel') }}
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/proto-style.css') }}">
    <!-- external css icon link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- tab icon -->
    <link rel="icon" type="image/x-icon" href="{{asset('asset/img/images/WhatsApp Image 2023-09-18 at 21.31.03.jpeg')}}">

</head>

<body>

    <!-- header section -->
    <section id="header">
        <a href="#"><img src="{{asset('assets/img/images/WhatsApp Image 2023-09-18 at 18.10.09 (1).jpeg')}}" class="logo"></a>
        <div class="nav">
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><i class='bx bx-cart' id="cart-icon" data-quantity="0"></i></li>
                <li><a href="{{route('login')}}"><i class='bx bxs-user'></i></a></li>
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
    <!-- menu section -->
    <section class="shop-container">
        <!-- menu content -->
        <h2 class="section-title">Kota Menu</h2>
        <div class="shop-content">
            <div class="product-box">
                <img src="{{asset('assets/img/images/unnamed.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">Gugza</h2>
                <span class="price">R25,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/unnamed.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">Gugza Junior</h2>
                <span class="price">R32,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/unnamed.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">KB</h2>
                <span class="price">R30,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/unnamed.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">KB Junior</h2>
                <span class="price">R37,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/unnamed.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">Lebza</h2>
                <span class="price">R35,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/unnamed.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">Lebza Junior</h2>
                <span class="price">R42,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/unnamed.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">MB-B</h2>
                <span class="price">R45,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/unnamed.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">MB-B Junior</h2>
                <span class="price">R52,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/unnamed.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">MB-A All</h2>
                <span class="price">R62</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/unnamed.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">MB-B All Junior</h2>
                <span class="price">R67</span>
                <i class="bx bx-cart add-cart"></i>
            </div>
        </div>
        <br>

        <h2 class="section-title">Burger Menu</h2>

        <div class="shop-content">
            <div class="product-box">
                <img src="{{asset('assets/img/home/burger2.png')}}" alt="" class="product-img">
                <h2 class="product-title">Sthalala</h2>
                <span class="price">R30,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/home/burger2.png')}}" alt="" class="product-img">
                <h2 class="product-title">Amanda</h2>
                <span class="price">R35,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/home/burger2.png')}}" alt="" class="product-img">
                <h2 class="product-title">Clemy</h2>
                <span class="price">R40,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/home/burger2.png')}}" alt="" class="product-img">
                <h2 class="product-title">Kgogzizo</h2>
                <span class="price">R45,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/home/burger2.png')}}" alt="" class="product-img">
                <h2 class="product-title">Tumza</h2>
                <span class="price">R55,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/home/burger2.png')}}" alt="" class="product-img">
                <h2 class="product-title">Vovoki</h2>
                <span class="price">R65,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>
        </div>

        <h2 class="section-title">Sandwich Menu</h2>

        <div class="shop-content">
            <div class="product-box">
                <img src="{{asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg')}}" alt=""
                    class="product-img">
                <h2 class="product-title">Nene (3 Slices)</h2>
                <span class="price">R35,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg')}}" alt=""
                    class="product-img">
                <h2 class="product-title">Kea (3 Slices)</h2>
                <span class="price">R40,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg')}}" alt=""
                    class="product-img">
                <h2 class="product-title">Khanzo (3 Slices)</h2>
                <span class="price">R50,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg')}}" alt=""
                    class="product-img">
                <h2 class="product-title">Mini (3 Slices)</h2>
                <span class="price">R60,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg')}}" alt=""
                    class="product-img">
                <h2 class="product-title">Ceejay (3 Slices)</h2>
                <span class="price">R65,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg')}}" alt=""
                    class="product-img">
                <h2 class="product-title">Vic (2 Slices)</h2>
                <span class="price">R35,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg')}}" alt=""
                    class="product-img">
                <h2 class="product-title">Titi (2 Slices)</h2>
                <span class="price">R25,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg')}}" alt=""
                    class="product-img">
                <h2 class="product-title">Joe (2 Slices)</h2>
                <span class="price">R30,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/cucumber-caprese-sandwich-6343482dece14c3d876bc7bac317ecd8.jpg')}}" alt=""
                    class="product-img">
                <h2 class="product-title">Tshiazozo (2 Slices)</h2>
                <span class="price">R35,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>
        </div>

        <h2 class="section-title">Chips Menu</h2>

        <div class="shop-content">
            <div class="product-box">
                <img src="{{asset('assets/img/images/joyce-panda-lpsbMRRqMQw-unsplash.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">Small Chips</h2>
                <span class="price">R35,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/joyce-panda-lpsbMRRqMQw-unsplash.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">Medium Chips</h2>
                <span class="price">R40,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/joyce-panda-lpsbMRRqMQw-unsplash.jpg')}}" alt="" class="product-img">
                <h2 class="product-title">Large Chips</h2>
                <span class="price">R50,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>
        </div>


        <h2 class="section-title">Beverages Menu</h2>

        <div class="shop-content">
            <div class="product-box">
                <img src="{{asset('assets/img/images/1648675206726.jpeg')}}" alt="" class="product-img">
                <h2 class="product-title">Tea (Normal / Rooibos)</h2>
                <span class="price">R12,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/1648675206726.jpeg')}}" alt="" class="product-img">
                <h2 class="product-title">Milo / Hot Chocolate</h2>
                <span class="price">R15,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>

            <div class="product-box">
                <img src="{{asset('assets/img/images/1648675206726.jpeg')}}" alt="" class="product-img">
                <h2 class="product-title">Coffee</h2>
                <span class="price">R15,00</span>
                <i class="bx bx-cart add-cart"></i>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>

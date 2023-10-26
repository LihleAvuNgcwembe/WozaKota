<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('assets/css/stylehome.css') }}">
    <!--<link rel="stylesheet" href="menu.css">-->
    <script src="https://kit.fontawesome.com/2b9a291b91.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div id="page-container">
        <div id="content-wrap">

            <!--page content-->

            <section id="PAGE-HEADER">

                <div class="inside">
                    <div
                        style="font-family: 'trebuchet MS', sans-serif; font-size: 40px; text-align: left; color: #faf9f6;">
                        Woza Woza Kota Place</div>

                    <div class="con">

                        <button
                            style="font-family: 'trebuchet MS', sans-serif; font-size: 15px; border: none; background-color: #054979; color: #fff;
                        border-radius: 5px; padding: 10px">

                            <a href="{{route('login')}}" style="color: #fff; text-decoration: none;">Sign In</a></button>

                    </div>
                </div>

            </section>

            <section id="NAVIGATION">
                <div class = "container1">
                    <li style="list-style: none;"><a href = "{{route('menu')}}"
                            style=" color: #faf9f6; font-family: 'trebuchet MS', sans-serif;">home</a></li>
                    <li style="list-style: none;"><a href = "Find-us.html"
                            style=" color: #faf9f6; font-family: 'trebuchet MS', sans-serif;">find us</a>
                        <!--<div class="sub-menu1">
                <ul>
                    <li><a href = "#" style="font-family: 'trebuchet MS', sans-serif; color: #212121;">main menu</a></li>
                    <li><a href = "#" style="font-family: 'trebuchet MS', sans-serif; color: #212121;">kotas</a></li>
                    <li><a href = "#" style="font-family: 'trebuchet MS', sans-serif; color: #212121;">burgers</a></li>
                    <li><a href = "#" style="font-family: 'trebuchet MS', sans-serif; color: #212121;">sandwhiches</a></li>
                    <li><a href = "#" style="font-family: 'trebuchet MS', sans-serif; color: #212121;">drinks</a></li>
                    <li><a href = "#" style="font-family: 'trebuchet MS', sans-serif; color: #212121;">sides/extras</a></li>
                </ul>
            </div> -->
                    </li>
                    <li style="list-style: none;"><a href = "{{route('aboutUs')}}"
                            style=" color: #faf9f6; font-family: 'trebuchet MS', sans-serif;">about us</a></li>
                </div>
            </section>

            <section id="CART-DELIVERY">

                <div class="aboutHeading">
                    <h1>Contact Us</h1>
                </div>
            </section>

        </div>

        <!--

        <section id="contact-us">
            <div class="contain1">
                <div class="contactINFO">

                    <div class="box1">

                   
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="text">
                                <h2>Address</h2>
                                <p>10 ridge road</p>
                            </div>

                      
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <div class="text">
                                <h2>Phone</h2>
                                <p>070 6008 6754</p>
                            </div>

                    
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="text">
                                <h2>Email</h2>
                                <p>Woza Woza Kota Place</p>
                            </div>

                    </div>

                    <div class="contact-pic">

                    </div>

                </div>
            </div>
        </section>

        -->
        <section id="CON-DETAILS">
            <div class="contact-box">

                <div class="box1">

                    <div class="icon"><i id="icon" class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="menupic">

                        <table>

                            <tr>
                                <th>
                                    <h2>Address</h2>
                                </th>
                            </tr>

                            <tr>
                                <td>10 ridge road, glen austin midrand</td>
                            </tr>

                        </table>

                    </div>
                </div>

                <div class="box2">

                    <div class="icon"><i class="fa fa-phone" aria-hidden="true" align></i></div>
                    <div class="menupic">

                        <table>

                            <tr>
                                <th>
                                    <h2>Phone</h2>
                                </th>
                            </tr>

                            <tr>
                                <td>011 234 5678</td>
                            </tr>

                        </table>

                    </div>
                </div>


                <div class="box3">

                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="menupic">

                        <table>

                            <tr>
                                <th>
                                    <h2>Email</h2>
                                </th>
                            </tr>

                            <tr>
                                <td>wozawozakotaplace@gmail.com</td>
                            </tr>

                        </table>

                    </div>
                </div>
                <!--
                <div class="kota-img">
                        <img class="kotaPIC" src="contact-kota.jpg" alt="">
              </div>
  -->


        </section>

        <section id="BOTTOM">
            <footer>
                <div class="kontain">
                    <div class="row">

                        <div class="footer-column">
                            <h2>A Taste You'll Remember</h2>
                            <ul>
                                <li><a href="contact-details.html">Contact Us</a></li>
                                <li><a href="privacy1.html">Privacy Policy</a></li>
                                <li><a href="terms.html">Terms of use</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </footer>
        </section>


        </section>

</body>

</html>

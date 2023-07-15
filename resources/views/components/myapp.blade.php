<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>@yield('title') {{config('app.name',"Leafylane")}} One stop shop for all your fruits & veggies</title>
    <meta name="keywords" content="fruit,veggies,vegetable,leafy,leafylane,apple,nutrition,smothies,fruit shop,fruit store,healthy,salad">
    <meta name="description" content="">
    <meta name="author" content="lebechi leonard">

    <!-- Site Icons -->
    <link rel="shortcut icon" href={{asset('images/favicon.ico')}} type="image/x-icon">
    <link rel="apple-touch-icon" href={{asset('images/apple-touch-icon.png')}}>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <!-- Site CSS -->
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <!-- Responsive CSS -->
    <link rel="stylesheet" href={{asset('css/responsive.css')}}>
    <!-- Custom CSS -->
    <link rel="stylesheet" href={{asset('css/custom.css')}}>
</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">                        
                    </div>
                    <div class="right-phone-box">
                        <p>Call Us : +234 818 228 1634</p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href={{ url('/myaccount')}}><i class="fa fa-user s_color"></i> My Account</a></li>
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            {{-- <li><a href={{ url('/contactus')}}><i class="fas fa-headset"></i> Contact Us</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="login-box1">
                        <ul>
                            <li><a href="">Register Here</a> </li>
                            <li><a href="">Sign In</a></li>
                        </ul>
                    </div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> freshness guaranteed
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> speedy delivery
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> offers the best price
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> wide range of fruits & veggies
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> best quality
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header col-2 img-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src={{asset('images/default.jpg')}} class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href={{ url('/')}}>Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="shop.html">Sidebar Shop</a></li> -->
                                <li><a href={{ url('/showdetail')}}>Shop Detail</a></li>
                                <li><a href={{ url('/cart')}}>Cart</a></li>
                                <li><a href={{ url('/checkout')}}>Checkout</a></li>
                                <li><a href={{ url('/myaccount')}}>My Account</a></li>
                                <li><a href={{ url('/product')}}>Products</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
                            <a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">3</span>
                                <p>My Cart</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src={{asset('images/img-pro-01.jpg')}} class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src={{asset('images/img-pro-02.jpg')}} class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="cart.html" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <form action="#" method="post">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>

                    <input type="text" class="form-control" placeholder="Search">

                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </form>

        </div>
    </div>
    <div>
        {{-- @include('flash-message') --}}
        @yield('content')
      </div>
      <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Business Time</h3>
                            <ul class="list-time">
                                <li>Monday - Friday: 08.00am to 05.00pm</li>
                                <li>Saturday: 10.00am to 08.00pm</li>
                                <li>Sunday: <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <!--  -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Social Media</h3>
                            <p>Connect with us on our social media platforms</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Leafy lane</h4>
                            <p>At our business, we are passionate about providing fast and convenient access to the
                                freshest and highest quality fruits and vegetables. Our mission is to make healthy
                                eating easy and accessible for everyone. We believe that everyone should have access to
                                fresh, locally sourced produce and that's why we work closely with local farms to bring
                                you the best selection of seasonal fruits and vegetables.</p>
                            <p> With fast delivery straight to
                                your door, you'll never have to compromise on taste or nutrition again. Join us on our
                                journey to a healthier, happier lifestyle! </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
    
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: lawanson <br>Surulere,<br> Lagos
                                        state </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: +2348182281634</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a
                                            href="https://mail.google.com/mail/u/1/#inbox?compose=new"
                                            target="_blank">lebechiuchey@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->
    
    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 Design By :
            <a href="https://cvly.me/leonard" target="_blank">Lebechi Uche</a>
        </p>
    </div>
    <!-- End copyright  -->
    
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
    
    <!-- ALL JS FILES -->
    <script src={{asset('myjs/jquery-3.2.1.min.js')}}></script>
    <script src={{asset('myjs/popper.min.js')}}></script>
    <script src={{asset('myjs/bootstrap.min.js')}}></script>
    <!-- ALL PLUGINS -->
    <script src={{asset('myjs/jquery.superslides.min.js')}}></script>
    <script src={{asset('myjs/bootstrap-select.js')}}></script>
    <script src={{asset('myjs/inewsticker.js')}}></script>
    <script src={{asset('myjs/bootsnav.js')}}></script>
    <script src={{asset('myjs/images-loded.min.js')}}></script>
    <script src={{asset('myjs/isotope.min.js')}}></script>
    <script src={{asset('myjs/owl.carousel.min.js')}}></script>
    <script src={{asset('myjs/baguetteBox.min.js')}}></script>
    <script src={{asset('myjs/form-validator.min.js')}}></script>
    <script src={{asset('myjs/contact-form-script.js')}}></script>
    <script src={{asset('myjs/custom.js')}}></script>
    <script  type="text/javascript" language="javascript" src={{asset('/adminjs/mycustom.js')}}></script>

    </body>
    
    </html>

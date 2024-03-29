<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home 1 | Malias</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/nivo-slider.css') }}" type="text/css"/>
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- jquery-ui CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
<!-- HEADER-AREA START -->
<header class="header-area">
    <!-- HEADER-TOP START -->
    <div class="header-top hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="top-menu">
                        <!-- Start Language -->
                        <ul class="language">
                            <li><a href="#"><img class="right-5" src="{{ asset('img/flags/gb.png') }}" alt="#">English<i
                                        class="fa fa-caret-down left-5"></i></a>
                                <ul>
                                    <li><a href="#"><img class="right-5" src="{{ asset('img/flags/fr.png') }}" alt="#">French</a>
                                    </li>
                                    <li><a href="#"><img class="right-5" src="{{ asset('img/flags/gb.png') }}" alt="#">English</a>
                                    </li>
                                    <li><a href="#"><img class="right-5" src="{{ asset('img/flags/gb.png') }}" alt="#">English</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
{{--                        @dd($cart)--}}
                        <!-- End Language -->
                        <!-- Start Currency -->
                        <ul class="currency">
                            <li><a href="#"><strong>$</strong> USD<i class="fa fa-caret-down left-5"></i></a>
                                <ul>
                                    <li><a href="#">$ EUR</a></li>
                                    <li><a href="#">$ GBP</a></li>
                                    <li><a href="#">$ USD</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Currency -->
                        <p class="welcome-msg">Default welcome msg!</p>
                    </div>
                    <!-- Start Top-Link -->
                    <div class="top-link">
                        <ul class="link">
                            <li><a href="my-account.html"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="{{ route('cart.wishlist') }}"><i class="fa fa-heart"></i> Wish List ({{ \Illuminate\Support\Facades\Session::has('favorites') ? count(\Illuminate\Support\Facades\Session::get('favorites')) : 0 }})</a>
                            </li>
                            <li><a href="checkout.html"><i class="fa fa-share"></i> Checkout</a></li>
                            @if(auth()->check())
                                <li><a href="account.html"><i
                                            class="fa fa-unlock-alt"></i>{{ \Illuminate\Support\Facades\Auth::user()->first_name }}
                                    </a></li>
                            @else
                                <li><a href="{{ route('register.index') }}"><i class="fa fa-unlock-alt"></i>
                                        Register</a></li>
                                <li><a href="{{ route('login.index') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                    <!-- End Top-Link -->
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER-TOP END -->
    <!-- HEADER-MIDDLE START -->
    <div class="header-middle">
        <div class="container">
            <!-- Start Support-Client -->
            <div class="support-client hidden-xs">
                <div class="row">
                    <!-- Start Single-Support -->
                    <div class="col-md-3 hidden-sm">
                        <div class="single-support">
                            <div class="support-content">
                                <i class="fa fa-clock-o"></i>
                                <div class="support-text">
                                    <h1 class="zero gfont-1">working time</h1>
                                    <p>Mon- Sun: 8.00 - 18.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-truck"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Free shipping</h1>
                                <p>On order over $199</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-money"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Money back 100%</h1>
                                <p>Within 30 Days after delivery</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-phone-square"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Phone: 0123456789</h1>
                                <p>Order Online Now !</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                </div>
            </div>
            <!-- End Support-Client -->
            <!-- Start logo & Search Box -->
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="logo">
                        <a href="index.html" title="Malias"><img src="{{ asset('img/logo.png') }}" alt="Malias"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="quick-access">
                        <div class="search-by-category">
                            <div class="search-container">
                                <select>
                                    <option class="all-cate">All Categories</option>
                                    @foreach($categories as $category)
                                        @if($category->parent_id == 0)
                                            <optgroup class="cate-item-head" label="{{ $category->name }}">
                                                @endif
                                                @foreach($category->childrens as $child)
                                                    <option class="cate-item-title">{{ $child->name }}</option>
                                                @endforeach
                                                @if($category->parent_id == 0)
                                            </optgroup>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="header-search">
                                <form action="{{ route('product.index') }}" method="GET">
                                    <input name="search" type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="top-cart">
                            <ul>
                                <li>
                                    <a href="{{ route('cart.index') }}">
                                        <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                        <span class="cart-total">
			                    					<span class="cart-title">shopping cart</span>
				                    				<span class="cart-item">{{ \Illuminate\Support\Facades\Session::has('cart') ? count(\Illuminate\Support\Facades\Session::get('cart')) : 0}} item(s)- </span>
				                    				<span class="top-cart-price">$365.00</span>
			                    				</span>
                                    </a>
                                    <div class="mini-cart-content">
                                        <div class="clear"></div>
                                        <?php use App\Models\Product;$cart = \Illuminate\Support\Facades\Session::has('cart') ?
                                            Product::query()->whereIn('id', Session::get('cart'))->get() : [] ?>

                                        @foreach($cart as $product)
                                        <div class="cart-img-details">
                                            <div class="cart-img-photo">
                                                <a href="#"><img width="60" src="{{ asset($product->images[0]) }}"
                                                                 alt="#"></a>
                                            </div>
                                            <div class="cart-img-content">
                                                <a href="#"><h4>{{ $product->title }}</h4></a>
                                                <span>
{{--															<strong class="text-right">1 x</strong>--}}
															<strong class="cart-price text-right">m {{ $product->price }}</strong>
														</span>
                                            </div>
                                            <div class="pro-del">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="cart-inner-bottom">
													<span class="total">
														Total:
														<span class="amount">$550.00</span>
													</span>
                                            <span class="cart-button-top">
														<a href="cart.html">View Cart</a>
														<a href="checkout.html">Checkout</a>
													</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End logo & Search Box -->
        </div>
    </div>
    <!-- HEADER-MIDDLE END -->
    <!-- START MAINMENU-AREA -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainmenu hidden-sm hidden-xs">
                        <nav>
                            <ul>
                                <li><a href="{{ route('product.index') }}">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Versions 1</a></li>
                                        <li><a href="index-2.html">Home Versions 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="hot"><a href="shop.html">Bestseller Products</a></li>
                                <li class="new"><a href="shop-list.html">New Products</a></li>
                                <li><a href="shop.html">Special Products</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="account.html">Create Account</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="product-details.html">Product details</a></li>
                                        <li><a href="shop.html">Shop Grid View</a></li>
                                        <li><a href="shop-list.html">Shop List View</a></li>
                                        <li><a href="wishlist.html">Wish List</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN-MENU-AREA -->
    <!-- Start Mobile-menu -->
    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav id="mobile-menu">
                        <ul>
                            <li><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Home Page 1</a></li>
                                    <li><a href="index-2.html">Home Page 2</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="shop.html">Bestseller Products</a></li>
                            <li><a href="shop-list.html">New Products</a></li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="account.html">Create Account</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="product-details.html">Product details</a></li>
                                    <li><a href="shop.html">Shop Grid View</a></li>
                                    <li><a href="shop-list.html">Shop List View</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile-menu -->
</header>
@yield('content')

<!-- START BRAND-LOGO-AREA -->
<div class="brand-logo-area carosel-navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="area-title">
                    <h3 class="title-group border-red gfont-1">Brand Logo</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-brand-logo">
                <div class="col-md-2">
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{ asset('img/brand/1.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{ asset('img/brand/2.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{ asset('img/brand/3.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{ asset('img/brand/4.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{ asset('img/brand/5.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{ asset('img/brand/6.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{ asset('img/brand/1.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{ asset('img/brand/2.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="single-brand-logo">
                        <a href="#"><img src="{{ asset('img/brand/3.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BRAND-LOGO-AREA -->
<!-- START SUBSCRIBE-AREA -->
<div class="subscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
                <div class="subscribe">
                    <form action="#">
                        <input type="text" placeholder="Enter Your E-mail">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="social-media">
                    <a href="#"><i class="fa fa-facebook fb"></i></a>
                    <a href="#"><i class="fa fa-google-plus gp"></i></a>
                    <a href="#"><i class="fa fa-twitter tt"></i></a>
                    <a href="#"><i class="fa fa-youtube yt"></i></a>
                    <a href="#"><i class="fa fa-linkedin li"></i></a>
                    <a href="#"><i class="fa fa-rss rs"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SUBSCRIBE-AREA -->
</section>
<!-- END HOME-PAGE-CONTENT -->

<!-- FOOTER-AREA START -->
<footer class="footer-area">
    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-title">
                        <h5>My Account</h5>
                    </div>
                    <nav>
                        <ul class="footer-content">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="wishlist">Wish List</a></li>
                            <li><a href="#">Search Terms</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-title">
                        <h5>Customer Service</h5>
                    </div>
                    <nav>
                        <ul class="footer-content">
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-12 hidden-sm col-md-3">
                    <div class="footer-title">
                        <h5>Payment & Shipping</h5>
                    </div>
                    <nav>
                        <ul class="footer-content">
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="shop-list.html">Specials</a></li>
                            <li><a href="#">Search Terms</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="footer-title">
                        <h5>Payment & Shipping</h5>
                    </div>
                    <nav>
                        <ul class="footer-content box-information">
                            <li>
                                <i class="fa fa-home"></i><span>Towerthemes, 1234 Stret Lorem, LPA States, Libero</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p><a href="contact.html">admin@bootexperts.com</a></p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>01234-56789</span> <br> <span> 01234-56789</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Copyright-area Start -->
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright &copy; Взято с <a href="http://bayguzin.ru" target="_blank"> bayguzin.ru</a> All
                            rights reserved.</p>
                        <div class="payment">
                            <a href="#"><img src="{{ asset('img/payment.png') }}" alt="Payment"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright-area End -->
</footer>
<!-- FOOTER-AREA END -->
<!-- jquery
		============================================ -->
<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
<!-- bootstrap JS
============================================ -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- wow JS
============================================ -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- meanmenu JS
============================================ -->
<script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
<!-- owl.carousel JS
============================================ -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- scrollUp JS
============================================ -->
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<!-- countdon.min JS
============================================ -->
<script src="{{ asset('js/countdon.min.js') }}"></script>
<!-- jquery-price-slider js
============================================ -->
<script src="{{ asset('js/jquery-price-slider.js') }}"></script>
<!-- Nivo slider js
============================================ -->
<script src="{{ asset('js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
<!-- plugins JS
============================================ -->
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- main JS
============================================ -->
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.favorites').click(function () {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ route('favorite.add') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                success: function (response) {
                    console.log(response)
                }
            })
        })
        $('.favorite-remove').click(function () {
            let id = $(this).data('id');
            $.ajax({
                url: "{{ route('favorite.remove') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                success: function () {
                    location.reload()
                }
            })
        }),
            $('.add-cart').click(function () {
                let id = $(this).data('id');
                $.ajax({
                    url: "{{ route('cart.add') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id
                    },
                    success: function (response) {
                        console.log(response)
                    }
                })
            })
    })
</script>
</body>
</html>

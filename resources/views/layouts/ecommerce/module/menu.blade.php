<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <meta name="description" content="Hutche Furniture eCommerce Template is a wonderful and elegant-looking website template that is the best choice for any type of online furniture store."/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />
    
    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <!-- <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Be Furniture – About Us" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Be Furniture – About Us" /> -->
    <!-- For the og:image content, replace the # with a link of an image -->
    <!-- <meta property="og:image" content="#" />
    <meta property="og:description" content="Be Furniture – About Us" /> -->
    
    <!-- Add site Favicon -->
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-270x270.png" />
    @yield('css')
          <!-- CSS 
    ========================= -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/elegant-icons.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css"> -->
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/font.awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/elegant-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/jquery-ui.min.css')}}">


    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="{{ asset('furnitures/assets/css/style.css')}}">
    
    <!--modernizr min js here-->
    <!-- <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script> -->
    <script src="{{ asset('furnitures/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <!-- Structured Data  -->
    @yield('js')

	
</head>

<body>
<div class="body_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-left-sidebar.html">shop left sidebar</a></li>
                                        <li><a href="shop-fullwidth.html">shop fullwidth</a></li>
                                        <li><a href="shop-collection.html">shop collection</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="single-product.html">Product</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<header class="header_section mb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_header d-flex justify-content-between align-items-center">
                        <div class="header_logo">
                            <!-- <a class="sticky_none" href="index.html"><img src="assets/img/logo/logo.png" alt=""></a> -->
                            <a class="sticky_none" href="index.html"><img src="{{ asset('furnitures/assets/img/logo/logo.png')}}" alt="" height="120px" width="120px"></a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block">
                            <nav>
                                <ul class="d-flex">
                                    <!-- page now is index then make home is active -->
                                    @if (Request::is('/'))
                                    <li><a class="active" href="{{ route ('front.index')}}" >Home</a></li>
                                    <li><a href="{{ route ('front.product')}}">Product</a></li>
                                    <li><a href="{{ route ('about')}}">About US</a></li>
                                    @elseif (Request::is('product'))
                                    <li><a  href="{{ route ('front.index')}}" >Home</a></li>
                                    <li><a class="active" href="{{ route ('front.product')}}">Product</a></li>
                                    <li><a href="{{ route ('about')}}">About US</a></li>
                                    @else
                                    <li><a href="{{ route ('front.index')}}" >Home</a></li>
                                    <li><a href="{{ route ('front.product')}}">Product</a></li>
                                    <li><a class="active"  href="{{ route ('about')}}">About US</a></li>
                                    @endif
                                    <!--<li><a href="contact.html">Contact Us</a> </li>-->
        
                                </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                        <div class="header__ridebar d-flex align-items-center">
                            <div class="header_account">
                                <ul class="d-flex">
                                    <!-- <li class="header_search_btn"><a href="#"><img src="assets/img/icon/search.png"
                                                alt=""></a></li> -->
                                    <!--<li class="header_search_btn"><a href="#"><img src="{{ asset('furnitures/assets/img/icon/search.png')}}" alt=""></a></li>-->
                                    <!-- <li class="shopping_cart"><a href="#"><img src="assets/img/icon/cart.png"
                                                alt=""></a></li> -->
                                    <li>
                                        <a href="{{ route('front.cart')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                                <g id="Icon" transform="translate(-1524 -89)">
                                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.909" cy="0.952" rx="0.909" ry="0.952" transform="translate(1531.364 108.095)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.909" cy="0.952" rx="0.909" ry="0.952" transform="translate(1541.364 108.095)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                    <path id="Path_3" data-name="Path 3" d="M1,1H4.636L7.073,13.752a1.84,1.84,0,0,0,1.818,1.533h8.836a1.84,1.84,0,0,0,1.818-1.533L21,5.762H5.545" transform="translate(1524 89)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                </g>
                                            </svg>
                                            
                                            <span class="total"></span>
                                        </a>
                                    </li>
                                    <!--<li class="account_link_menu"><a href="#"><img src="assets/img/icon/person.png" alt=""></a>
                                        <ul class="dropdown_account_link">
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Contact Us</a></li>
                                        </ul>
                                    </li>-->
                                    <li class="user">
                                        
                                        @if (Auth::guard('customer')->check())
                                        <span><a href="{{ route('customer.dashboard')}}"><i class="fa fa-user"></i> {{ Auth::guard('customer')->user()->name }}</a></span>&nbsp;|&nbsp;
                                        <span><a href="{{ route('customer.logout')}}"><i class="fa fa-sign-out"></i> Logout</a></span>
                                        @else
                                        <span><a href="{{ route('customer.post_login')}}"><i class="fa fa-user"></i> Login</a></span>&nbsp;|&nbsp;
                                        <span><a href="{{ route('signup')}}"><i class="fa fa-user-plus"></i> Register</a></span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <div class="canvas_open">
                                <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--mini cart-->

    <script src="{{ asset('furnitures/assets/js/vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/vendor/popper.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/jquery.scrollup.min.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/images-loaded.min.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/mailchimp-ajax.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('furnitures/assets/js/ajax-mail.js') }}"></script>
    <script>
        $.ajax({
            url: "{{route ('customer.totalCart')}}",
            type: 'GET',
            success: function(data) {
                $('.total').html(data);
            }
        });
    </script>


    <!-- Main JS -->
    
    <!-- <script src="assets/js/main.js"></script> -->
    @yield('js')
    <script src="{{ asset('furnitures/assets/js/main.js') }}"></script>
   

    
</body>

</html>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hutche - Furniture ECommerce Bootstrap 5 Template </title>
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
    <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "Replace_with_your_site_title",
        "url": "Replace_with_your_site_URL"
        }
    </script>
	
</head>

<body>

    <!--offcanvas menu area start-->
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
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                    </ul>
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
    <!--offcanvas menu area end-->
@include('layouts.ecommerce.module.menu')
    <!-- slider section start -->
  
    <!-- choice section end -->

    <!-- product section start -->
@yield('content')
    <!-- shipping area start -->
    

    <!-- footer section start -->
    <footer class="footer_section footer_bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_footer d-flex justify-content-between align-items-center">
                        <div class="footer_left">
                            <div class="footer_logo">
                                <!-- <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a> -->
                                <a href="index.html"><img src="{{ asset('furnitures/assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                            <div class="footer_social">
                                <ul class="d-flex">
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer_sidebar d-flex">
                            <div class="footer_widget_list">
                                <div class="footer_widget_title">
                                    <h3>COMPANY</h3>
                                </div>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Licenses</a></li>
                                        <li><a href="#">Market API</a></li>
                                        <li><a href="#">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="footer_widget_list">
                                <div class="footer_widget_title">
                                    <h3>MORE FROM US</h3>
                                </div>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Mobile and Layout Apps</a></li>
                                        <li><a href="#">Marketplace</a></li>
                                        <li><a href="#">About Vendors</a></li>
                                        <li><a href="#">Gift Vouchers</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer_widget_list">
                                <div class="footer_widget_title">
                                    <h3>Userful Links</h3>
                                </div>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">The Collections</a></li>
                                        <li><a href="#">Size Guide</a></li>
                                        <li><a href="#">Fashion Inspiration</a></li>
                                        <li><a href="#">Look Book</a></li>
                                        <li><a href="#">Instagram Shop</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer_widget_list">
                                <div class="footer_widget_title">
                                    <h3>Sing up for newsletter</h3>
                                </div>
                                <div class="newsletter_subscribe">
                                    <form id="mc-form">
                                        <input id="mc-email" type="email" autocomplete="off"
                                            placeholder="Email address... ">
                                        <button id="mc-submit">Subscribe</button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div><!-- mailchimp-alerts end -->
                                </div>
                                <div class="instagram_shop">
                                    <h3>instagram shop</h3>
                                    <div class="instagram_inner d-flex">
                                        <div class="instagram_img">
                                            <!-- <a href="#"><img src="assets/img/others/instagram1.png" alt=""></a> -->
                                            <a href="#"><img src="{{ asset('furnitures/assets/img/others/instagram1.png')}}" alt=""></a>
                                        </div>
                                        <div class="instagram_img">
                                            <!-- <a href="#"><img src="assets/img/others/instagram2.png" alt=""></a> -->
                                            <a href="#"><img src="{{ asset('furnitures/assets/img/others/instagram2.png')}}" alt=""></a>
                                        </div>
                                        <div class="instagram_img">
                                            <!-- <a href="#"><img src="assets/img/others/instagram3.png" alt=""></a> -->
                                            <a href="#"><img src="{{ asset('furnitures/assets/img/others/instagram3.png')}}" alt=""></a>
                                        </div>
                                        <div class="instagram_img">
                                            <!-- <a href="#"><img src="assets/img/others/instagram4.png" alt=""></a> -->
                                            <a href="#"><img src="{{ asset('furnitures/assets/img/others/instagram4.png')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="copyright_right text-center">
                            <p>&copy; 2021 All rights reserved This template is Made with <i class="ion-heart"></i>
                                by <a href="https://hasthemes.com">HasThemes</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->


    <!-- Js 
    ========================= -->
    <!-- <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor/popper.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.scrollup.min.js"></script>
    <script src="assets/js/images-loaded.min.js"></script>
    <script src="assets/js/jquery.nice-select.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/mailchimp-ajax.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery-waypoints.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/ajax-mail.js"></script> -->
    <script src="{{ asset('furnitures/js/vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('furnitures/js/vendor/popper.js') }}"></script>
    <script src="{{ asset('furnitures/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('furnitures/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('furnitures/js/slick.min.js') }}"></script>
    <script src="{{ asset('furnitures/js/wow.min.js') }}"></script>
    <script src="{{ asset('furnitures/js/jquery.scrollup.min.js') }}"></script>
    <script src="{{ asset('furnitures/js/images-loaded.min.js') }}"></script>
    <script src="{{ asset('furnitures/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('furnitures/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('furnitures/js/mailchimp-ajax.js') }}"></script>
    <script src="{{ asset('furnitures/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('furnitures/js/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('furnitures/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('furnitures/js/ajax-mail.js') }}"></script>


    <!-- Main JS -->
    
    <!-- <script src="assets/js/main.js"></script> -->
    <script src="{{ asset('furnitures/js/main.js') }}"></script>
    @yield('js')
</body>

</html>
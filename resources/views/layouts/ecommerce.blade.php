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
    <section class="shipping_section mb-105">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shipping_inner d-flex justify-content-between">
                        <div class="single_shipping">
                            <div class="shipping_title d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s"
                                data-wow-duration="1.1s">
                                <!-- <img src="assets/img/others/shipping1.png" alt=""> -->
                                <img src="{{ asset('furnitures/assets/img/others/shipping1.png')}}" alt="">
                                <h3>Many Choices</h3>
                            </div>
                            <div class="shipping_desc wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                <p>Nulla Lorem mollit cupidatat irure. <br> Laborum magna nullamco c</p>
                            </div>
                        </div>
                        <div class="single_shipping">
                            <div class="shipping_title d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s"
                                data-wow-duration="1.1s">
                                <!-- <img src="assets/img/others/shipping2.png" alt=""> -->
                                <img src="{{ asset('furnitures/assets/img/others/shipping2.png')}}" alt="">
                                <h3>Good Facilities</h3>
                            </div>
                            <div class="shipping_desc wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                <p>Aliqua id fugiat nostrud irure ex <br> duis ea quis id quis ad et. </p>
                            </div>
                        </div>
                        <div class="single_shipping">
                            <div class="shipping_title d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s"
                                data-wow-duration="1.1s">
                                <!-- <img src="assets/img/others/shipping3.png" alt=""> -->
                                <img src="{{ asset('furnitures/assets/img/others/shipping3.png')}}" alt="">
                                <h3>Affordable Price</h3>
                            </div>
                            <div class="shipping_desc wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                <p>Nulla Lorem mollit cupidatat irure. <br> Laborum magna nullamco c</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shipping area end -->

    <!-- featured section start-->
    <section class="featured_banner_section">
        <div class="container">
            <div class="section_title text-center mb-105">
                <h2>Featured Collections</h2>
            </div>
            <div class="featured_banner_inner">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="featured_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <!-- <a href="#"><img src="assets/img/bg/bg1.png" alt=""></a> -->
                            <a href="#"><img src="{{ asset('furnitures/assets/img/bg/bg1.png')}}" alt=""></a>
                            <div class="featured_text">
                                <h3>SACANDINAVI LIVING ROOM</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="featured_banner_sidebar">
                            <div class="featured_thumb mb-30 wow fadeInUp" data-wow-delay="0.2s"
                                data-wow-duration="1.2s">
                                <!-- <a href="#"><img src="assets/img/bg/bg2.png" alt=""></a> -->
                                <a href="#"><img src="{{ asset('furnitures/assets/img/bg/bg2.png')}}" alt=""></a>
                                <div class="featured_text">
                                    <h3>MORDERN SOFA</h3>
                                </div>
                            </div>
                            <div class="featured_thumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                                <!-- <a href="#"><img src="assets/img/bg/bg3.png" alt=""></a> -->
                                <a href="#"><img src="{{ asset('furnitures/assets/img/bg/bg3.png')}}" alt=""></a>
                                <div class="featured_text">
                                    <h3>BEAUTIFUL CORNER</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured section end-->

    <!-- testimonial section start -->
    <section class="testimonial_section mb-75">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title text-center mb-90">
                        <h2>What’s Clients Say</h2>
                    </div>
                    <div class="testimonial_container testimonial_swiper swiper-container wow fadeInUp"
                        data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <div class="swiper-wrapper">
                            <div class="single_testimonial swiper-slide">
                                <div class="testimonial_desc">
                                    <!-- <img src="assets/img/icon/blockcode.png" alt=""> -->
                                    <img src="{{ asset('furnitures/assets/img/icon/blockcode.png')}}" alt="">
                                    <p>Guys, you don't just buy the theme, you also buy excellent support from the devs,
                                        so be sure that whatever problem you face, they will help you with it ;) 5
                                        stars!</p>
                                </div>
                                <div class="testimonial_author">
                                    <!-- <img src="assets/img/others/testi-author1.png" alt=""> -->
                                    <img src="{{ asset('furnitures/assets/img/others/testi-author1.png')}}" alt="">
                                    <h3><a href="#">Jerome Bell • Indiana</a></h3>
                                </div>
                            </div>
                            <div class="single_testimonial swiper-slide">
                                <div class="testimonial_desc">
                                    <!-- <img src="assets/img/icon/blockcode.png" alt=""> -->
                                    <img src="{{ asset('furnitures/assets/img/icon/blockcode.png')}}" alt="">
                                    <p>Pretty nice theme. The quality of the documentation is not good. The don't even
                                        explain some of the options. They just have a screen shot of the admin page.</p>
                                </div>
                                <div class="testimonial_author">
                                    <!-- <img src="assets/img/others/testi-author2.png" alt=""> -->
                                    <img src="{{ asset('furnitures/assets/img/others/testi-author2.png')}}" alt="">
                                    <h3><a href="#">Floyd Miles • LA</a></h3>
                                </div>
                            </div>
                            <div class="single_testimonial swiper-slide">
                                <div class="testimonial_desc">
                                    <!-- <img src="assets/img/icon/blockcode.png" alt=""> -->
                                    <img src="{{ asset('furnitures/assets/img/icon/blockcode.png')}}" alt="">
                                    <p>Guys, you don't just buy the theme, you also buy excellent support from the devs,
                                        so be sure that whatever problem you face, they will help you with it ;) 5
                                        stars!</p>
                                </div>
                                <div class="testimonial_author">
                                    <!-- <img src="assets/img/others/testi-author1.png" alt=""> -->
                                    <img src="{{ asset('furnitures/assets/img/others/testi-author1.png')}}" alt="">
                                    <h3><a href="#">Jerome Bell • Indiana</a></h3>
                                </div>
                            </div>
                            <div class="single_testimonial swiper-slide">
                                <div class="testimonial_desc">
                                    <!-- <img src="assets/img/icon/blockcode.png" alt=""> -->
                                    <img src="{{ asset('furnitures/assets/img/icon/blockcode.png')}}" alt="">
                                    <p>Guys, you don't just buy the theme, you also buy excellent support from the devs,
                                        so be sure that whatever problem you face, they will help you with it ;) 5
                                        stars!</p>
                                </div>
                                <div class="testimonial_author">
                                    <!-- <img src="assets/img/others/testi-author1.png" alt=""> -->
                                    <img src="{{ asset('furnitures/assets/img/others/testi-author1.png')}}" alt="">
                                    <h3><a href="#">Jerome Bell • Indiana</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <!-- <div class="swiper-pagination"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->

    <!-- banner advice section start -->
    <section class="banner_advice_section mb-100">
        <div class="container">
            <div class="banner_advice_inner">
                <div class="row">
                    <div class="col-lg-5 offset-lg-7 col-md-5 offset-md-7">
                        <div class="banner_advice_text">
                            <h3 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">New armchair <br> &
                                pillow</h3>
                            <a class="btn btn-link wow fadeInUp" href="#" data-wow-delay="0.2s"
                                data-wow-duration="1.2s">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <div class="banner_position_img">
                    <!-- <img src="assets/img/others/armchair.png" alt=""> -->
                    <img src="{{ asset('furnitures/assets/img/others/armchair.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="banner_position_text">
            <h2>New armchair <br> & pillow</h2>
        </div>
    </section>
    <!-- banner advice section end -->

    <!-- blog section start -->
    <section class="blog_section mb-100">
        <div class="container">
            <div class="section_title text-center mb-60">
                <h2>OUR JOURNAL</h2>
            </div>
            <div class="blog_inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <article class="single_blog wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <figure>
                                <div class="blog_thumb">
                                    <!-- <a href="blog-details.html"><img src="assets/img/blog/blog1.png" alt=""></a> -->
                                    <a href="blog-details.html"><img src="{{ asset('furnitures/assets/img/blog/blog1.png')}}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h3><a href="blog-details.html">Amet minim mollit non deserunt </a></h3>
                                    <div class="blog_meta">
                                        <ul class="d-flex">
                                            <li>6 NOVEMBER 2021</li>
                                            <!-- <li><img src="assets/img/icon/heart-icon.png" alt=""> 24</li>
                                            <li><img src="assets/img/icon/chart-icon.png" alt=""> 12</li> -->
                                            <li><img src="{{ asset('furnitures/assets/img/icon/heart-icon.png')}}" alt=""> 24</li>
                                            <li><img src="{{ asset('furnitures/assets/img/icon/chart-icon.png')}}" alt=""> 12</li>
                                        </ul>
                                    </div>
                                    <div class="blog_footer">
                                        <a class="btn btn-link" href="blog-details.html">Learn more</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="single_blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <figure>
                                <div class="blog_thumb">
                                    <!-- <a href="blog-details.html"><img src="assets/img/blog/blog2.png" alt=""></a> -->
                                    <a href="blog-details.html"><img src="{{ asset('furnitures/assets/img/blog/blog2.png')}}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h3><a href="blog-details.html">Any mechanical keyboard enthusiasts in design? </a>
                                    </h3>
                                    <div class="blog_meta">
                                        <ul class="d-flex">
                                            <li>6 NOVEMBER 2021</li>
                                            <!-- <li><img src="assets/img/icon/heart-icon.png" alt=""> 24</li>
                                            <li><img src="assets/img/icon/chart-icon.png" alt=""> 12</li> -->
                                            <li><img src="{{ asset('furnitures/assets/img/icon/heart-icon.png')}}" alt=""> 24</li>
                                            <li><img src="{{ asset('furnitures/assets/img/icon/chart-icon.png')}}" alt=""> 12</li>
                                        </ul>
                                    </div>
                                    <div class="blog_footer">
                                        <a class="btn btn-link" href="blog-details.html">Learn more</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="single_blog wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <figure>
                                <div class="blog_thumb">
                                    <!-- <a href="blog-details.html"><img src="assets/img/blog/blog3.png" alt=""></a> -->
                                    <a href="blog-details.html"><img src="{{ asset('furnitures/assets/img/blog/blog3.png')}}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h3><a href="blog-details.html">Yo Reddit! What’s a small thing that anyone can do
                                        </a></h3>
                                    <div class="blog_meta">
                                        <ul class="d-flex">
                                            <li>6 NOVEMBER 2021</li>
                                            <!-- <li><img src="assets/img/icon/heart-icon.png" alt=""> 24</li>
                                            <li><img src="assets/img/icon/chart-icon.png" alt=""> 12</li> -->
                                            <li><img src="{{ asset('furnitures/assets/img/icon/heart-icon.png')}}" alt=""> 24</li>
                                            <li><img src="{{ asset('furnitures/assets/img/icon/chart-icon.png')}}" alt=""> 12</li>
                                        </ul>
                                    </div>
                                    <div class="blog_footer">
                                        <a class="btn btn-link" href="blog-details.html">Learn more</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->

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
</body>

</html>
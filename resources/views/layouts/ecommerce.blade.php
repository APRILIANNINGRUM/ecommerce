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
                                    <a href="{{ route (('front.index')) }}">Home</a></li>
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
                                <a href="index.html"><img src="{{ asset('furnitures/assets/img/logo/logo1.png')}}" style="width:400px; height: 300px">
                            </div>
                        </div>
                        <div class="footer_sidebar d-flex">
                            <div class="footer_widget_list">
                                <div class="footer_widget_title">
                                    <h3>KATEGORI</h3>
                                </div>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Lemari</a></li>
                                        <li><a href="#">Kursi</a></li>
                                        <li><a href="#">Meja</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="footer_widget_list">
                                <div class="footer_widget_title">
                                    <h3>INFORMASI</h3>
                                </div>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="{{ route ('about') }}">About us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer_widget_list">
                                <div class="footer_widget_title">
                                    <h3>Kontak Kami</h3>
                                </div>
                                <div class="footer_menu">
                                    <ul>
                                        <li>Jl. Roro Jonggrang XII/no.12, Semarang<li>
                                        <li>Telepon : 081235465919</li>
                                        
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="footer_bottom">
                        <div class="copyright_right text-center">
                            <p>&copy; 20233 All Rights Reserved 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @yield('scripts')
    <!-- footer section end -->


    <!-- Js 
    
    ========================= -->
    

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
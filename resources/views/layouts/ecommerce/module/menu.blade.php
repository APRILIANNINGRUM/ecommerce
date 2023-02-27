<header class="header_section mb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_header d-flex justify-content-between align-items-center">
                        <div class="header_logo">
                            <!-- <a class="sticky_none" href="index.html"><img src="assets/img/logo/logo.png" alt=""></a> -->
                            <a class="sticky_none" href="index.html"><img src="{{ asset('furnitures/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block">
                            <nav>
                                <ul class="d-flex">
                                    <li><a class="active" href="{{ route ('front.index')}}" >Home</a>
                                        <ul class="sub_menu">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub_menu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-left-sidebar.html">Shop </a>
                                        <ul class="sub_menu">
                                            <li><a href="shop-left-sidebar.html">shop left sidebar</a></li>
                                            <li><a href="shop-fullwidth.html">shop fullwidth</a></li>
                                            <li><a href="shop-collection.html">shop collection</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route ('front.product')}}">Product</a></li>
                                    <li><a href="blog.html">blog</a>
                                        <ul class="sub_menu">
                                            <li><a href="blog.html">Blog Pages</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                        <div class="header__ridebar d-flex align-items-center">
                            <div class="header_account">
                                <ul class="d-flex">
                                    <!-- <li class="header_search_btn"><a href="#"><img src="assets/img/icon/search.png"
                                                alt=""></a></li> -->
                                    <li class="header_search_btn"><a href="#"><img src="{{ asset('furnitures/assets/img/icon/search.png')}}" alt=""></a></li>
                                    <!-- <li class="shopping_cart"><a href="#"><img src="assets/img/icon/cart.png"
                                                alt=""></a></li> -->
                                    <li class="shopping_cart"><a href="{{route('front.cart')}}"><img src="{{ asset('furnitures/assets/img/icon/cart.png')}}" alt=""></a></li>
                                    <li class="account_link_menu"><a href="#"><img src="assets/img/icon/person.png" alt=""></a>
                                        <ul class="dropdown_account_link">
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li class="user">
                                        <span><a href="{{ route('customer.post_login')}}">Login</a></span>&nbsp;/&nbsp;
                                        <span><a href="{{ route('signup')}}">Register</a></span>
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
    <div class="mini_cart">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <!-- <a href="#"><img src="assets/img/product/small-product1.png" alt=""></a> -->
                    <a href="#"><img src="{{ asset('furnitures/assets/img/product/small-product1.png')}}" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">Primis In Faucibus</a>
                    <p>1 x <span> $65.00 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-close icons"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <!-- <a href="#"><img src="assets/img/product/small-product2.png" alt=""></a> -->
                    <a href="#"><img src="{{ asset('furnitures/assets/img/product/small-product2.png')}}" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">Letraset Sheets</a>
                    <p>1 x <span> $60.00 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-close icons"></i></a>
                </div>
            </div>
        </div>
        <div class="mini_cart_table">
            <div class="cart_table_border">
                <div class="cart_total">
                    <span>Sub total:</span>
                    <span class="price">$125.00</span>
                </div>
                <div class="cart_total mt-10">
                    <span>total:</span>
                    <span class="price">$125.00</span>
                </div>
            </div>
        </div>
        <div class="mini_cart_footer">
            <div class="cart_button">
                <a href="#"><i class="fa fa-shopping-cart"></i> View cart</a>
            </div>
            <div class="cart_button">
                <a href="#"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
    </div>
    <!--mini cart end-->
    <!-- page search box -->
    <div class="page_search_box">
        <div class="search_close">
            <i class="ion-close-round"></i>
        </div>
        <form class="border-bottom" action="#">
            <input class="border-0" placeholder="Search products..." type="text">
            <button type="submit"><i class="icofont-search"></i></button>
        </form>
    </div>
    <!--header area end-->

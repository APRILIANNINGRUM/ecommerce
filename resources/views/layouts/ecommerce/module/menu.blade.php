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
                                    <li><a href="{{ route ('front.product')}}">Product</a></li>
                                    <li><a href="{{ route ('about')}}">About US</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub_menu">
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <!--<li><a href="contact.html">Contact Us</a></li>--->
        
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
                                    <li class="account_link_menu"><a href="#"><img src="assets/img/icon/person.png" alt=""></a>
                                        <ul class="dropdown_account_link">
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Contact Us</a></li>
                                        </ul>
                                    </li>
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
    
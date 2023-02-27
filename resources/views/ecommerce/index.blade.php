@extends('layouts.ecommerce')

@section('title')
    <title>Furniture - Pusat Belanja Online</title>
@endsection

@section('content')
<section class="slider_section mb-170">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slider_swiper swiper-container">
                        <div class="swiper-wrapper">
                            <div class="single_slider swiper-slide d-flex align-items-center">
                                <div class="slider_text">
                                    <h2>Make your Home Feel <br> Comfortable</h2>
                                    <div class="slider_text_shape">
                                        <!-- <img src="assets/img/slider/slider-text-shape.png" alt=""> -->
                                        <img src="{{ asset('furnitures/assets/img/slider/slider-text-shape.png')}}" alt="">
                                        <div class="slider_btn">
                                            <a class="btn btn-link" href="shop-left-sidebar.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider_thumb">
                                    <!-- <img src="assets/img/slider/slider-shape1.png" alt=""> -->
                                    <img src="{{ asset('furnitures/assets/img/slider/slider-shape1.png')}}" alt="">
                                </div>
                            </div>
                            <div class="single_slider swiper-slide d-flex align-items-center">
                                <div class="slider_text">
                                    <h2>Make your Home Feel Better</h2>
                                    <div class="slider_text_shape">
                                        <!-- <img src="assets/img/slider/slider-text-shape.png" alt=""> -->
                                        <img src="{{ asset('furnitures/assets/img/slider/slider-text-shape.png')}}" alt="">
                                        <div class="slider_btn">
                                            <a class="btn btn-link" href="shop-left-sidebar.html">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="slider_thumb">
                                    <!-- <img src="assets/img/slider/slider-shape1.png" alt=""> -->
                                    <img src="{{ asset('furnitures/assets/img/slider/slider-shape1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <!-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- choice section start -->
  <section class="choice_section mb-175">
        <div class="container">
            <div class="section_title text-center mb-105">
                <h2>Best Choice For You</h2>
            </div>
            <div class="choice_container">
                <div class="row choice_slick slick_slider_activation" data-slick='{
                    "slidesToShow": 3,
                    "slidesToScroll": 1,
                    "arrows": true,
                    "dots": false,
                    "autoplay": false,
                    "speed": 300,
                    "infinite": true,
                    "responsive":[
                        {"breakpoint":992, "settings": { "slidesToShow": 2 } },  
                        {"breakpoint":768, "settings": { "slidesToShow": 2 } },  
                        {"breakpoint":480, "settings": { "slidesToShow": 1 } }  
                    ]                                                         
                }'>
                    <div class="col-lg-4">
                        <div class="single_choice wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="choice_thumb">
                                <!-- <img src="assets/img/others/choice1.png" alt=""> -->
                                <img src="{{ asset('furnitures/assets/img/others/choice1.png')}}" alt="">
                            </div>
                            <div class="choice_text">
                                <h4><a href="#">for Living room</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_choice wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="choice_thumb">
                                <!-- <img src="assets/img/others/choice2.png" alt=""> -->
                                <img src="{{ asset('furnitures/assets/img/others/choice2.png')}}" alt="">
                            </div>
                            <div class="choice_text">
                                <h4><a href="#">For Out Door & Gardern</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_choice wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="choice_thumb">
                                <!-- <img src="assets/img/others/choice3.png" alt=""> -->
                                <img src="{{ asset('furnitures/assets/img/others/choice3.png')}}" alt="">
                            </div>
                            <div class="choice_text">
                                <h4><a href="#">For Rest Place</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_choice wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.4s">
                            <div class="choice_thumb">
                                <!-- <img src="assets/img/others/choice2.png" alt=""> -->
                                <img src="{{ asset('furnitures/assets/img/others/choice2.png')}}" alt="">
                            </div>
                            <div class="choice_text">
                                <h4><a href="#">for Living room</a></h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<div class="product_section mb-50">
        <div class="container">
            <div class="product_tab_button">
                <ul class="nav justify-content-center" role="tablist" id="nav-tab">
                    <li>
                        <a data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="false">
                            Best Seller </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content product_container">
                <div class="tab-pane fade show active" id="products" role="tabpanel">
                    <div class="product_gallery">
                        <div class="row">
            @forelse($products as $row)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="{{ url('/product/' . $row->slug) }}"><img src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}"></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4><a href="{{ url('/product/' . $row->slug) }}">
                                            {{ $row->name }}</a></h4>
                                            <div class="price_box">
                                                <span class="old_price">Rp {{ number_format($row->price) }}</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>

            @empty

            @endforelse
                        </div>
                    <div class="row">
					{{ $products->links() }}
				</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    <!-- product section end -->
@endsection

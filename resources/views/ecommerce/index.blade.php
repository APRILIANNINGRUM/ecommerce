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
                                    <h2>Buat Rumah Anda<br> Nyaman</h2>
                                    <div class="slider_text_shape">
                                        <!-- <img src="assets/img/slider/slider-text-shape.png" alt=""> -->
                                        <img src="{{ asset('furnitures/assets/img/slider/slider-text-shape.png')}}" alt="">
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
                <h2>Selamat Datang</h2>
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
                                <!--<img src="assets/img/others/choice1.png" alt=""> -->
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
                                <!--<img src="assets/img/others/choice2.png" alt=""> -->
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
                                <!--<img src="assets/img/others/choice3.png" alt=""> -->
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
        <div class="container" style="width: 80%; text-align: center;">
            <div class="product_tab_button">
                <ul class="nav justify-content-center" role="tablist" id="nav-tab">
              
                <h2>Produk Kami</h2>
                <!--<li>
                        <a data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="false">
                            Best Seller </a>
                    </li>-->
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
                                            <a href="{{ url('/product/' . $row->slug) }}"><img src="{{ asset('storage/products/' . $row->image) }}" style="width:100%; height:300px;" alt="{{ $row->name }}"></a>
                                        </div>
                                        <figcaption class="product_content">
                                            <h4><a href="{{ url('/product/' . $row->slug) }}"> {{ $row->name }}</a></h4>
                                            <center>
                                        
                                                <span>Rp {{ number_format($row->price) }}</span>
                                            
                                            </center>
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
   
    <!-- product section end -->
@endsection

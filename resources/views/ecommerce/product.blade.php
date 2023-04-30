@extends('layouts.ecommerce')

@section('title')
    <title>CV. Kawan Sejati - Pusat Belanja Online</title>
@endsection

@section('content')

  
<div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <h2>Shop</h2>
                        <ul class="d-flex justify-content-center">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li>></li>
                            <li><a href="{{ route ('front.product') }}">Shop</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!-- shop page section satrt -->
    <div class="shop_page_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop_page_inner d-flex ">
                    <br><br>
                        <div class="shop_sidebar_widget">
                            <div class="shop_widget_list categories">
                                <div class="shop_widget_title categories_title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="widget_categories">
                                    <ul>
                                       @foreach ($categories as $category)
                                        <li><a href="{{ url('/category/'.$category->slug) }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="shop_widget_thumb">
                                <img src="assets/img/others/shop-sidebar.png" alt="">
                            </div>
                        </div>
                        <div class="shop_right_sidaber">
                            <div class="shop_top_bar d-flex justify-content-between">
                                <div class="shop_product_count">
                                    <span>Produk Kami</span>
                                </div>
                               
                            </div>
                            <div class="shop_gallery">
                                <div class="row">
                            @forelse($products as $row)

                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                       
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="{{ url('/product/' . $row->slug) }}"><img src="{{ asset('storage/products/' . $row->image) }} " alt="{{ $row->image }}" height="300px" width="300px"></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4><a href="{{ url('/product/' . $row->slug) }}">{{ $row->name }}</a></h4>
                                                    <div class="price_box"> 
                                                        <span class="old_price"></span>
                                                        <span class="current_price">Rp.{{ number_format($row->price) }} </span>
                                                    </div>
                                                </figcaption>  
                                            </figure>
                                        </article>
                                     
                                    </div>
                            @empty

                            @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page section end -->
@endsection
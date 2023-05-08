@extends('layouts.ecommerce')

@section('title')
    <title>Pusat Belanja Online</title>
@endsection

@section('content')
<div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <h2>Leisure Chair Restaurant Back Sofa Office</h2>
                        <ul class="d-flex justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li>></li>
                            <li><a href="single-product.html">single product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>

    <!-- product gallery section start -->
    <div class="product_gallery_section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="product_gallery_inner d-flex">
                        <div class="product_gallery_list">
                            <div class="product_gallery_thumb">
                                <a href="#"><img src="{{ asset('storage/products/' . $product->image) }}"  >
                            </div>
                        </div>
                        
                    </div>
                    <div class="product_social">
                        <ul class="d-flex justify-content-center">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-ios-email"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </div>
    </div>
    <!-- product gallery section end -->

    <!-- product details css here -->
    <div class="product_details_section">
        <div class="container">
            <form action="{{ route('front.add_cart')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="product_details_left">
                        <form action="#">
                            <div class="product_ratting_stock d-flex">
                                <div class=" product_ratting">
                                    <ul class="d-flex">
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li class="review"><span>5  Reviews</span></li>
                                    </ul>
                                </div>
                                <div class="in_stock">
                                    <span><img src="assets/img/icon/check.png" alt=""> in Stock</span>
                                </div>
                            </div>
                            <div class="product_details_title">
                                <h3>{{ $product->name }}</h3>
                            </div>
                            <div class="product_price_box">
                                <span class="current_price">Rp {{ number_format($product->price) }}</span>
                            </div>
                            <div class="product_desc">
                            {!! $product->description !!}                           
                            </div>
                           
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product_details_right">
                        <div class="product_d_meta">
                            <span>SKU: N/A <br>
                            Categories:{{ $product->category->name }}<br>
                            Weight: {{ $product->weight }} gr <br>
                            Product ID: {{ $product->id }}</span>
                        </div>
                        <div class="product_variant_quantity d-flex align-items-center">
                            <div class="pro-qty border">
                                <input min="1" max="100" type="tex" value="1" name="qty">
                            </div>
                            <button class="btn btn-link" type="submit">Keranjang</button>  &nbsp;&nbsp;

                            <a href="https://api.whatsapp.com/send?phone=+6285881594312&text=Halo%20Admin%20Saya%20Mau%20Custom%20Produk%20{{ $product->name }}"><button class="btn btn-link"><a href="https://api.whatsapp.com/send?phone=+6285881594312&text=Halo%20Admin%20Saya%20Mau%20Custom%20Produk%20{{ $product->name }}" style="a:hover{color: white;}; color :white;">Whatsapp</a></button></a>
                            
                            <!-- <i class="fa fa-whatsapp fa-5x" aria-hidden="true" style="color: green"></i> -->
                        </div>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                    
        
                        <div class=" product_d_action">
                           <ul class="d-flex">
                               <li><a href="#" title="Add to wishlist"> <img src="assets/img/icon/heart.png" alt=""> Add to Wishlist <i class="ion-android-arrow-forward"></i></a></li>
                               <li><a href="#" title="Add to wishlist"><i class="ion-android-arrow-back"></i> ADD TO COMPARE</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- product details css end -->

     <!--product info start-->
     <div class="product_d_info">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">   
                        <div class="product_info_button">    
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li >
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                </li>
                                <li>
                                     <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">additional information</a>
                                </li>
                                <li>
                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (3)</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#vendor" role="tab" aria-controls="vendor" aria-selected="false">Vendor info</a>
                                 </li>
                                 <li>
                                    <a data-toggle="tab" href="#brand" role="tab" aria-controls="brand" aria-selected="false">about brand</a>
                                 </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_info__flex d-flex ">
                                    <div class="product_info_thumb">
                                        <img src="assets/img/others/product-info-thumb.png" alt="">
                                    </div>
                                    <div class="product_info_content productinfo_text_flex">
                                        <h4>{{ $product->name }}</h4>
                                        <p>{!! $product->description !!}</p>
                                    </div> 
                                </div>   
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                <div class="product_d_table">
                                   <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Compositions</td>
                                                    <td>Polyester</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Styles</td>
                                                    <td>Girly</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Properties</td>
                                                    <td>Short Dress</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                </div>    
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                                    </ul>   
                                                </div>
                                                <p><strong>admin </strong>- Maret 20, 2023</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published.  Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                       <h3>Your rating</h3>
                                        <ul class="d-flex">
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                            <li><a href="#"><i class="ion-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment" ></textarea>
                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author"  type="text">

                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email"  type="text">
                                                </div>  
                                            </div>
                                            <button type="submit">Submit</button>
                                         </form>   
                                    </div> 
                                </div>     
                            </div>
                            <div class="tab-pane fade" id="vendor" role="tabpanel" >
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="brand" role="tabpanel" >
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                </div>     
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>    
    </div>  
    <!--product info end-->
@endsection
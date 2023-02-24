@extends('layouts.ecommerce')

@section('title')
    <title>Furniture - Pusat Belanja Online</title>
@endsection

@section('content')
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

    <!-- product section end -->
@endsection

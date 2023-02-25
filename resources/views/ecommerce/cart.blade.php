@extends('layouts.ecommerce')

@section('title')
    <title>Keranjang Belanja - BySkin</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Keranjang Belanja</h2>
					
				</div>
			</div>
		</div>
	</section>
	<br><br>
	<!--================End Home Banner Area =================-->

	<!--================Cart Area =================-->
	<section class="cart_area">
		<div class="container">
			<div class="cart_inner">
        
        <!-- DISABLE BAGIAN INI JIKA INGIN MELIHAT HASILNYA TERLEBIH DAHULU -->
        <!-- KARENA MODULENYA AKAN DIKERJAKAN PADA SUB BAB SELANJUTNYA -->
        <!-- HANYA SAJA DEMI KEMUDAHAN PENULISAN MAKA SAYA MASUKKAN PADA BAGIAN INI -->
                <form action="{{ route('front.update_cart') }}" method="post">
                    @csrf
        <!-- DISABLE BAGIAN INI JIKA INGIN MELIHAT HASILNYA TERLEBIH DAHULU -->
                <div class="container">
				<div class="table-responsive">
					<table class="table" style="text-align: center;">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Name</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
		
						<tbody>
              <!-- LOOPING DATA DARI VARIABLE CARTS -->
                       @forelse($carts as $row)
							<tr style="text-align: center;">
								<td style="text-align: center;">
									
											<img src="{{ asset('storage/products/' . $row->product->image) }}" alt="" width="100" height="100">
								
								</td>
								<td>
									<span>{{ $row->product->name }}</span>
								</td>
								<td>
                                   <span>Rp. {{ number_format($row->product->price) }}</span>
								</td>
								<td>
									<div class="product_count">
									<input type="text" name="qty[]" id="sst{{ $row['product_id'] }}" maxlength="12" value="{{ $row['quantity'] }}" title="Quantity:" class="input-text qty">
                                        <input type="hidden" name="product_id[]" value="{{ $row->product_id }}">
                    <!-- PERHATIKAN BAGIAN INI, NAMENYA KITA GUNAKAN ARRAY AGAR BISA MENYIMPAN LEBIH DARI 1 DATA -->
                    
                    
										<button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
										 class="reduced items-count" type="button">
											<i class="fa fa-minus"></i>
										</button>
										<button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
										 class="increase items-count" type="button">
											<i class="fa fa-plus"></i>
										</button>
										
									</div>
								</td>
								<td>
                                <span>Rp. {{ number_format($row->product->price * $row->quantity) }}</span>
								</td>
                            </tr>
                          @empty
                            <tr>
                                <td colspan="4">Tidak ada belanjaan</td>
                            </tr>
                          @endforelse
							<tr class="bottom_button">
								<td>
									<button class="gray_btn">Update Cart</button>
								</td>
								<td></td>
								<td></td>
								<td></td>
                            </tr>
                            </form>
							<tr>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h5>Subtotal</h5>
									<spam>Rp. {{ number_format($total) }}</spam>
								</td>
								<td>
                                    
								</td>
							</tr>
							{{-- <tr class="shipping_area">
								<td></td>
								<td></td>
								<td>
									<h5>Shipping</h5>
								</td>
								<td>
									<div class="shipping_box">
										<ul class="list">
											<li>
												<a href="#">Flat Rate: $5.00</a>
											</li>
											<li>
												<a href="#">Free Shipping</a>
											</li>
											<li>
												<a href="#">Flat Rate: $10.00</a>
											</li>
											<li class="active">
												<a href="#">Local Delivery: $2.00</a>
											</li>
										</ul>
										<h6>Calculate Shipping
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</h6>
										<select class="shipping_select">
											<option value="1">Bangladesh</option>
											<option value="2">India</option>
											<option value="4">Pakistan</option>
										</select>
										<select class="shipping_select">
											<option value="1">Select a State</option>
											<option value="2">Select a State</option>
											<option value="4">Select a State</option>
										</select>
										<input type="text" placeholder="Postcode/Zipcode">
										<a class="gray_btn" href="#">Update Details</a>
									</div>
								</td>
							</tr> --}}
							<tr class="out_button_area">
								<td></td>
								<td></td>
								<td></td>
								<td>
									<div class="checkout_btn_inner">
									<a class="gray_btn" href="{{ route('front.product') }}">Continue Shopping</a>
									<a class="main_btn" href="{{ route('front.checkout') }}">Proceed to checkout</a>
									</div>
								</td>
							</tr>
						</tbody>
						</center>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Cart Area =================-->
@endsection
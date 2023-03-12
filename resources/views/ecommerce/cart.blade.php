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
            <!--cart update + id-->
		
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
					   <form action="{{ route('front.update_cart', $row->id) }}" method="post">
                		@csrf
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
									<input type="text" id="qty{{ $row->id }}" maxlength="12" value="{{ $row->quantity }}" title="Quantity:" class="input-text qty">
                                        <input type="hidden" name="product_id" value="{{ $row->product_id }}">
                
                    
										<button class="reduced items-count" type="button" id="qtyminus{{ $row->id }}">
											<i class="fa fa-minus"></i>
										</button>
										<button class="increase items-count" type="button" id="qtyplus{{ $row->id }}">
											<i class="fa fa-plus"></i>
										</button>
									
										<input type="hidden" name="id{{ $row->id }}" value="{{ $row->id }}">
										
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
						  </form>
							<tr class="bottom_button">
								<td>
									<button class="btn btn-primary btn-block">Update Cart</button>
								</td>
								<td></td>
								<td></td>
								<td></td>
                            </tr>
                            
							<tr>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h5>Subtotal</h5>
									<spam>Rp. {{ number_format($subtotal) }}</spam>
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
									<a class="btn btn-primary btn-block" href="{{ route('front.product') }}">Continue Shopping</a>
									<a class="btn btn-primary btn-block" href="{{ route('front.checkout') }}">Checkout
									</a>
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
@section('js')
	<script>

		@foreach($carts as $row)
		$('#qtyminus{{ $row->id }}').click(function(e){

			var qty = $('#qty{{ $row->id }}').val();
			if(qty > 1){
				$('#qty{{ $row->id }}').val(parseInt(qty) - 1);
			}

			var qty = $('#qty{{ $row->id }}').val();
			var id = $('#id{{ $row->id }}').val();
			$.ajax({
				url: '/api/cart/{{ $row->id }}',
				type: 'POST',
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				data: {
				
					qty: qty,
				 
				},
				dataType: 'json',
				success: function (data) {
					if (data.status == 'success') {
				
					
						location.reload();
					} else {
						location.reload();
					}
				}
			});

		});
		$('#qtyplus{{ $row->id }}').click(function(e){

			var qty = $('#qty{{ $row->id }}').val();
			$('#qty{{ $row->id }}').val(parseInt(qty) + 1);

			var qty = $('#qty{{ $row->id }}').val();
			var id = $('#id{{ $row->id }}').val();
			$.ajax({
				url: '/api/cart/{{ $row->id }}',
				type: 'POST',
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				data: {
				
					qty: qty,
				 
				},
				dataType: 'json',
				success: function (data) {
					if (data.status == 'success') {
							
					} else {
						location.reload();
					}
				}
			});
		});
	
		@endforeach
	</script>
<script>

$(document).ready(function () {
	@foreach ($carts as $item)
		$('#qty{{ $item->id }}').on('change', function () {
			var qty = $(this).val();
			var id = $('#id{{ $item->id }}').val();
			$.ajax({
				url: '/api/cart/{{ $item->id }}',
				type: 'POST',
				data: {
				
					qty: qty,
				 
				},
				dataType: 'json',
				success: function (data) {
					if (data.status == 'success') {
				
						console.log(data.data);
					} else {
						console.log(data.data);
					}
				}
			});
		});
	@endforeach
});
</script>
@endsection
@extends('layouts.ecommerce')

@section('title')
    <title>Checkout - BySkin</title>
@endsection

@section('content')

<?php 
    $total = 0;
?>
	<section class="checkout_area section_gap">
		<div class="container">
			<div class="billing_details">
				<div class="row">
					<div class="col-lg-8">
                        <h3>Informasi Pengiriman</h3>          
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <form class="row contact_form" action="{{ route('front.store_checkout') }}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="col-md-12 form-group p_star">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" id="first" name="customer_name" required>
                            <p class="text-danger">{{ $errors->first('customer_name') }}</p>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label for="">No Telp</label>
                            <input type="text" class="form-control" id="number" name="customer_phone" required>
                            <p class="text-danger">{{ $errors->first('customer_phone') }}</p>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="add1" name="customer_address" required>
                            <p class="text-danger">{{ $errors->first('customer_address') }}</p>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="">Propinsi</label>
                            <select class="form-control" name="province_id" id="province_id" required>
                                <option value="">Pilih Propinsi</option>
                                @foreach ($provinces as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            <p class="text-danger">{{ $errors->first('province_id') }}</p>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="">Kabupaten / Kota</label>
                            <select class="form-control" name="city_id" id="city_id" required>
                                <option value="">Pilih Kabupaten/Kota</option>
                            </select>
                            <p class="text-danger">{{ $errors->first('city_id') }}</p>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="">Kecamatan</label>
                            <select class="form-control" name="district_id" id="district_id" required>
                                <option value="">Pilih Kecamatan</option>
                            </select>
                            <p class="text-danger">{{ $errors->first('district_id') }}</p>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="">Kurir</label>
                            <select class="form-control" name="courier" id="courier" required>
                                <option value="">Pilih Kurir</option>
                                <option value="jne">JNE</option>
                                <option value="tiki">TIKI</option>
                                <option value="pos">POS INDONESIA</option>
                            </select>
                        <p class="text-danger">{{ $errors->first('courier') }}</p>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <label for="">Layanan</label>
                            <select class="form-control" name="cost" id="cost" required>
                                <option value="">Pilih Layanan Kurir</option>
                            </select>
                            <p class="text-danger">{{ $errors->first('cost') }}</p>
                        </div>
                    
					</div>
					<div class="col-lg-4">
						<div class="order_box">
							<h2>Ringkasan Pesanan</h2>
							<ul class="list">
								<li>
									<a href="#">Product
										<span>Total</span>
									</a>
                                </li>
                                    @foreach ($carts as $cart)
                                <li>
                                    <a href="#">{{ \Str::limit($cart['product_name'], 10) }}
                                        <span class="middle">x {{ $cart['qty'] }}</span>
                                        <span class="last">Rp {{ number_format($cart['product_price']) }}</span>
                                    </a>
                                </li>
                                <input type="hidden" name="weight" id="weight" value="{{ $cart['product_weight'] * $cart['qty'] }}">
                                @endforeach
							</ul>
							<ul class="list list_2">
								<li>
									<a href="#">Subtotal Product
                                        <span>Rp {{ number_format($subtotal) }}</span>
									</a>
								</li>
								<li>
									<a href="#">Pengiriman
                                        <span id="ongkir_cost"></span>
									</a>
								</li>
								<li>
                                
                                    <label for=""><a href="#">Total Pesanan</label>
                                    <select class="form-control" name="total" id="total" required>
                                        
                                    </select>
                                    <p class="text-danger">{{ $errors->first('total') }}</p>
                                
								</li>
							</ul>
                            <button class="main_btn">Bayar Pesanan</button>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('js')
    <script>
        $('#province_id').on('change', function() {
            $.ajax({
                url: "{{ url('/api/city') }}",
                type: "GET",
                data: { province_id: $(this).val() },
                success: function(html){
                    $('#city_id').empty()
                    $('#city_id').append('<option value="">Pilih Kabupaten/Kota</option>')
                    $.each(html.data, function(key, item) {
                        $('#city_id').append('<option value="'+item.id+'">'+item.name+'</option>')
                    })
                }
            });
        })

        $('#city_id').on('change', function() {
            $.ajax({
                url: "{{ url('/api/district') }}",
                type: "GET",
                data: { city_id: $(this).val() },
                success: function(html){
                    $('#district_id').empty()
                    $('#district_id').append('<option value="">Pilih Kecamatan</option>')
                    $.each(html.data, function(key, item) {
                        $('#district_id').append('<option value="'+item.id+'">'+item.name+'</option>')
                    })
                }
            });
        })
        
        $('#courier').on('change', function() {
            $.ajax({
                url: "{{ url('/api/cost') }}",
                type: "POST",
                data: {
                    origin: 114,
                    city_id: $('#city_id').val(),
                    weight: $('#weight').val(),
                    courier: $(this).val()
                },
                success: function(html){
                    $('#cost').empty()
                    $('#cost').append('<option value="">Pilih Layanan</option>')
                     $.each(html.data.rajaongkir.results[0].costs, function(key, item) {
                            $('#cost').append('<option value="'+item.cost[0].value+'">'+item.service+' - '+item.cost[0].value+'</option>')
                      })
                }
            });
        })
        
        $('#cost').on('change', function() {
            $('#ongkir_cost').text($(this).val())
            $('#total_cost').text(parseInt($(this).val()) + parseInt({{ $subtotal }}))
            $total = parseInt($(this).val()) + parseInt({{ $subtotal }})
            $('#total').append('<option value="'+$total+'">'+$total+'</option>')
        })

    </script>
@endsection
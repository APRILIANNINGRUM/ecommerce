@extends('layouts.ecommerce')

@section('title')
    <title>Checkout - BySkin</title>
@endsection

@section('content')
    <!--================Home Banner Area =================-->
	<!--================End Home Banner Area =================-->

	<!--================Checkout Area =================-->
	<section class="checkout_area section_gap">
		<div class="container" style="width: 90%">
			<div class="billing_details">
            
				<div class="row">
					<div class="col-lg-8">
            <h3>Informasi Pengiriman</h3>          
            <br>
              @if (session('error'))
                  <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
                        
              
            	<!-- REMOVE DULU VALUE ACTION-NYA JIKA INGIN MELIHATNYA DI BROWSER -->
            	<!-- KARENA ROUTE NAME front.store_checkout BELUM DIBUAT -->
        
              <form class="row contact_form" action="{{ route('front.store_checkout') }}" method="post" novalidate="novalidate">
                            @csrf
                        <br>
                      
                        <div class="col-md-12 form-group p_star">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" id="first" name="customer_name" value="{{ $user->name }}" required>
                            
           
                            <p class="text-danger">{{ $errors->first('customer_name') }}</p> 
                        </div>
                
                        <br><br><br>
                        <div class="col-md-6 form-group p_star">
                            <label for="">No Telp</label>
                            <input type="text" class="form-control" id="number" name="customer_phone" value="{{ $user->phone_number }}" required>

                            <p class="text-danger">{{ $errors->first('customer_phone') }}</p>
                        </div>
                        <br><br><br>
                        <div class="col-md-6 form-group p_star">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email}}" required>
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        </div>
                        <br><br><br>
                        <div class="col-md-12 form-group p_star">
                            <label for="">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="add1" name="customer_address" value="{{ $user->address }}" required>
                            <p class="text-danger">{{ $errors->first('customer_address') }}</p>
                        </div>
                        <br><br><br>
                        <div class="col-md-12 form-group p_star">
                            <label for="">Propinsi</label>
                            <select class="form-control" name="province_id" id="province_id" required>
                                <option value="">Pilih Propinsi</option>
                                <option value="{{$provinces->id}}">{{$provinces->name}}</option>
                            </select>
                            
                            <p class="text-danger">{{ $errors->first('province_id') }}</p>
                        </div>
                        <br><br><br>
                
                  <!-- ADAPUN DATA KOTA DAN KECAMATAN AKAN DI RENDER SETELAH PROVINSI DIPILIH -->
                        <div class="col-md-12 form-group p_star">
                            <label for="">Kabupaten / Kota</label>
                            <select class="form-control" name="city_id" id="city_id" required>
                                <option value="">Pilih Kabupaten/Kota</option>

                            </select>
                            <p class="text-danger">{{ $errors->first('city_id') }}</p>
                        </div>
                        <br><br><br>
                        <div class="col-md-12 form-group p_star">
                            <label for="">Kecamatan</label>
                            <select class="form-control" name="district_id" id="district_id" required>
                                <option value="">Pilih Kecamatan</option>
                            </select>
                            <p class="text-danger">{{ $errors->first('district_id') }}</p>
                        </div>
                    

                        <br><br><br>
                <!-- ADAPUN DATA KOTA DAN KECAMATAN AKAN DI RENDER SETELAH PROVINSI DIPILIH -->
                    
					</div>
                    
					<div class="col-lg-4">
                    <div class="card">
                        
						<div class="order_box">
						<div class="card-header">
                        <h3>Ringkasan Pesanan</h3>
                        </div>
                        <div class="card-body">
							<ul class="list" style="margin-bottom: 8px">
								<li>
									<a href="#">Product
										<span>Total : {{ $totalproduct }}</span>
									</a>
                                </li>
                            </ul>

							<ul class="list list_2">
								<li style="margin-bottom: 8px">
									<a>Subtotal
                                    <span>Rp. {{ $subtotal}} </span>
									</a> 
								</li>
								<li style="margin-bottom: 8px">
									<a href="#">Pengiriman
										<span>Rp. 150.000</span>
									</a>
								</li>
								<li style="margin-bottom: 8px">
									<a href="#">Total
										<span>
                                            <?php $total = $subtotal + 150000;?>
                                            Rp. {{number_format($total, 0, ',', '.')}} 
                                        </span>
									</a>
								</li>
							</ul>
                </div>
                </div>
          
              <button type="submit" class="btn btn-primary btn-block">Bayar Pesanan</button>
              </form>
						</div>
					</div>
				</div>
                </div>
			</div>
		</div>
	</section>
	<!--================End Checkout Area =================-->
@endsection
@section('js')
    <script>
        //KETIKA SELECT BOX DENGAN ID province_id DIPILIH
        $('#province_id').on('change', function() {
            //MAKA AKAN MELAKUKAN REQUEST KE URL /API/CITY
            //DAN MENGIRIMKAN DATA PROVINCE_ID
            $.ajax({
                url: "{{ url('/api/city') }}",
                type: "GET",
                data: { province_id: $(this).val() },
                success: function(html){
                    //SETELAH DATA DITERIMA, SELEBOX DENGAN ID CITY_ID DI KOSONGKAN
                    $('#city_id').empty()
                    //KEMUDIAN APPEND DATA BARU YANG DIDAPATKAN DARI HASIL REQUEST VIA AJAX
                    //UNTUK MENAMPILKAN DATA KABUPATEN / KOTA
                    $('#city_id').append('<option value="">Pilih Kabupaten/Kota</option>')
                    $.each(html.data, function(key, item) {
                        $('#city_id').append('<option value="'+item.id+'">'+item.name+'</option>')
                    })
                }
            });
        })

        //LOGICNYA SAMA DENGAN CODE DIATAS HANYA BERBEDA OBJEKNYA SAJA
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
    </script>
@endsection
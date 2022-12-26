@extends('layouts.ecommerce')

@section('title')
    <title>Keranjang Belanja - BySkin</title>
@endsection

<!--to load js-->

<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{config('midtrans.client_key')}}"></script>


@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Pesanan Diterima</h2>
					<div class="page_link">
            <a href="{{ url('/') }}">Home</a>
						<a href="">Invoice</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Order Details Area =================-->
	<section class="order_details p_120">
		<div class="container">
			<h3 class="title_confirmation">Terima kasih, pesanan anda telah kami terima.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-8">
					<div class="details_item">
					<h4>Informasi Pemesan</h4>
						<ul class="list">
							<li>
								<a href="#">
                  <span>Alamat</span> : {{ $order->customer_address }}</a>
							</li>
							<li>
								<a href="#">
                  <span>Kota</span> : {{ $order->district->city->name }}</a>
							</li>
							<li>
								<a href="#">
									<span>Country</span> : Indonesia</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
					<h4>Informasi Pesanan</h4>
						<ul class="list">
							<li>
								<a href="#">
                  <span>Invoice</span> : {{ $order->invoice }}</a>
							</li>
							<li>
								<a href="#">
                  <span>Tanggal</span> : {{ $order->created_at }}</a>
							</li>
							<li>
								<a href="#">
                  <span>Total</span> : Rp {{ number_format($order->subtotal) }}</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--button pay-->
	<center>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="payment-adress">
					<button id="pay-button" class="btn btn-primary" style="width:200px">Pay Now</button>
				</div>
			</div>
		</div>
	</div>
	</center>
  <!--================End Order Details Area =================-->
@endsection
<!-- script -->
@section('js')
<script>
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snapToken}}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            alert("payment success!"); console.log(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        })
      });
    </script>
@endsection
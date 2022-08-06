@extends('layouts.ecommerce')

@section('title')
    <title>Dashboard - BySkin</title>
@endsection

@section('content')
	<section class="login_box_area p_120" style="margin-top:100px;">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					@include('layouts.ecommerce.module.sidebar')
				</div>
				<div class="col-md-9">
                    <div class="row">
						<div class="col-md-4">
							<div class="card text-center" style="border-radius:10px;">
								<div class="card-body" style="background-color:#df4759;">
									<h3 style="color:white;">Belum Dibayar</h3>
								</div>
								<br><br>
								<div class="card-text">
									<p>Rp {{ number_format($orders[0]->pending) }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
						<div class="card text-center" style="border-radius:10px;">
								<div class="card-body" style="background-color:	#467fd0;">
									<h3 style="color:white;">Dikirim</h3>
									</div>
									<br><br>
								<div class="card-text">
									<p>{{ $orders[0]->shipping }} Pesanan</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
						<div class="card text-center" style="border-radius:10px;">
								<div class="card-body" style="background-color:#42ba96;">
									<h3 style="color:white;">Selesai</h3>
									</div>
									<br><br>
								<div class="card-text">
									<p>{{ $orders[0]->completeOrder }} Pesanan</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
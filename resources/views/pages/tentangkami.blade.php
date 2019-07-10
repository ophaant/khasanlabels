@extends('layout.master')
@section('content')

<div class="banner10" id="home1">
		<div class="container">
			<h2>Tentang Kami</h2>
		</div>
	</div>

<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Tentang Kami</li>
			</ul>
		</div>
	</div>

<div class="about">
		<div class="container">	
			<div class="w3ls_about_grids">
				<div class="col-md-6 w3ls_about_grid_left">
					<p>Khasan Labels Indonesia adalah toko yang bergerak pada bidang penjualan busana wanita muslim. Kami menyediakan busana yang nyaman bagi konsumen dan tentu akan mempercantik para wanita muslim.</p>
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3ls_about_grid_right">
					<img src="{{asset('assets/images/77.jpg')}}" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@endsection
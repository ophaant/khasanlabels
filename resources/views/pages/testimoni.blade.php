@extends('layout.master')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
body {
	font-family: "Open Sans", sans-serif;
}
h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	position: relative;
	margin: 30px 0 60px;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	border-radius: 1px;
	background: #1abc9c;
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel {
	margin: 0 auto;
	padding: 0 70px;
}
.carousel .item {
	color: #999;
	overflow: hidden;
    min-height: 120px;
	font-size: 13px;
}
.carousel .media {
	position: relative;
	padding: 0 0 0 20px;
}
.carousel .media img {
	width: 75px;
	height: 75px;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial-wrapper {
	padding: 0 10px;
}
.carousel .testimonial {
    color: #808080;
    position: relative;
    padding: 15px;
    background: #f1f1f1;
    border: 1px solid #efefef;
    border-radius: 3px;
	margin-bottom: 15px;
}
.carousel .testimonial::after {
	content: "";
	width: 15px;
	height: 15px;
	display: block;
	background: #f1f1f1;
	border: 1px solid #efefef;
	border-width: 0 0 1px 1px;
	position: absolute;
	bottom: -8px;
	left: 46px;
	transform: rotateZ(-46deg);
}
.carousel .star-rating li {
	padding: 0 2px;
}
.carousel .star-rating i {
	font-size: 16px;
	color: #ffdc12;
}
.carousel .overview {
	padding: 3px 0 0 15px;
}
.carousel .overview .details {
	padding: 5px 0 8px;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #1abc9c;
}
.carousel .carousel-indicators {
	bottom: -70px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 18px;
    height: 18px;
	border-radius: 50%;
	margin: 1px 2px;
}
.carousel-indicators li {	
    background: #e2e2e2;
    border: 4px solid red;
}
.carousel-indicators li.active {
	color: #fff;
    background: #1abc9c;
    border: 5px double;    
}
</style>
@section('content')

<div class="banner10" id="home1">
		<div class="container">
			<h2>Testimoni</h2>
		</div>
	</div>

<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Testimoni</li>
			</ul>
		</div>
	</div>

<div class="about">
		<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>See What <b>Our Customers</b> Say About Us</h2><br><a href="/testi"><h4 align="center"><i class="fa fa-commenting">Masukkan Testimoni Anda</i></h4></a><br>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				{{ csrf_field() }}
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="row">
							@foreach ($testi as $tes)
							<div class="col-sm-6">
								<div class="testimonial-wrapper">
									<div class="testimonial">{{ $tes->pesan }}</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="{{ asset('storage/produk/' . $tes->gambar) }}" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>{{ $tes->nama}}</b></div>
												<div class="details">{{ $tes->created_at->diffForHumans()}}</div>
												<div class="star-rating">
													<ul class="list-inline">
														@for ($i = 1; $i <= $tes->nilai; $i++)
																{{-- expr --}}
															
														
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														
														@endfor
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>								
							</div>
							@endforeach
							
						</div>			
					</div>
					<div class="item carousel-item">
						<div class="row">

							@foreach ($ags1 as $tes1)
							<div class="col-sm-6">
								<div class="testimonial-wrapper">
									<div class="testimonial">{{ $tes1->pesan }}</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="{{ asset('storage/produk/' . $tes1->gambar) }}" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>{{ $tes1->nama}}</b></div>
												<div class="details">{{ $tes1->created_at->diffForHumans()}}</div>
												<div class="star-rating">
													<ul class="list-inline">
														@for ($i = 1; $i <= $tes1->nilai; $i++)
																{{-- expr --}}
															
														
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														
														@endfor
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>								
							</div>
							@endforeach
							
						</div>			
					</div>
					<div class="item carousel-item">
						<div class="row">

							@foreach ($ags2 as $tes2)
							<div class="col-sm-6">
								<div class="testimonial-wrapper">
									<div class="testimonial">{{ $tes2->pesan }}</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="{{ asset('storage/produk/' . $tes2->gambar) }}" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>{{ $tes2->nama}}</b></div>
												<div class="details">{{ $tes2->created_at->diffForHumans()}}</div>
												<div class="star-rating">
													<ul class="list-inline">
														@for ($i = 1; $i <= $tes2->nilai; $i++)
																{{-- expr --}}
															
														
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														
														@endfor
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>								
							</div>
							@endforeach
							
						</div>			
					</div>
					<div class="item carousel-item">
						<div class="row">

							@foreach ($ags3 as $tes3)
							<div class="col-sm-6">
								<div class="testimonial-wrapper">
									<div class="testimonial">{{ $tes3->pesan }}</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="{{ asset('storage/produk/' . $tes3->gambar) }}" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>{{ $tes3->nama}}</b></div>
												<div class="details">{{ $tes3->created_at->diffForHumans()}}</div>
												<div class="star-rating">
													<ul class="list-inline">
														@for ($i = 1; $i <= $tes3->nilai; $i++)
																{{-- expr --}}
															
														
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														
														@endfor
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>								
							</div>
							@endforeach
							
						</div>			
					</div>
					<div class="item carousel-item">
						<div class="row">

							@foreach ($ags4 as $tes4)
							<div class="col-sm-6">
								<div class="testimonial-wrapper">
									<div class="testimonial">{{ $tes4->pesan }}</div>
									<div class="media">
										<div class="media-left d-flex mr-3">
											<img src="{{ asset('storage/produk/' . $tes4->gambar) }}" alt="">										
										</div>
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>{{ $tes4->nama}}</b></div>
												<div class="details">{{ $tes4->created_at->diffForHumans()}}</div>
												<div class="star-rating">
													<ul class="list-inline">
														@for ($i = 1; $i <= $tes4->nilai; $i++)
																{{-- expr --}}
															
														
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														
														@endfor
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>								
							</div>
							@endforeach
							
						</div>			
					</div>
				</div>
			</div>
		</div>
	
	<br><br>
	</div>
@endsection
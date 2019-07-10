@extends('layout.master')
@section('content')

{{-- <div class="banner10" id="home1">
		<div class="container">
			<h2>Detail Produk</h2>
		</div>
	</div>  --}}
<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>{{ $produk->nama_produk}}</li>
			</ul>
		</div>
	</div>
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="images/a.jpg">
							<div class="thumb-image"> <img src="{{ asset('storage/produk/' . $produk->gambar) }}" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						
					</ul>
				</div>
				<!-- flixslider -->
					<script defer src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
					<link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				<!-- flixslider -->
				<!-- zooming-effect -->
					<script src="{{asset('assets/js/imagezoom.js')}}"></script>
				<!-- //zooming-effect -->
			</div>
			<div class="col-md-8 single-right">
				<h3>{{ $produk->nama_produk}}</h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5" checked="">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
					<div class="description">
						<h5><i>Deskripsi</i></h5>
						<p>{{ $produk->deskripsi}}</p>
					</div>
					<div class="color-quality">
						<div class="color-quality-left">
							<h5>Color : </h5>
							<ul>
								<li><a href="#"><span></span>Red</a></li>
								<li><a href="#" class="brown"><span></span>Yellow</a></li>
								<li><a href="#" class="purple"><span></span>Purple</a></li>
								<li><a href="#" class="gray"><span></span>Violet</a></li>
							</ul>
						</div>
						<div class="color-quality-right">
							<h5>Stok :</h5>
							 <div class="quantity"> 
								<div class="quantity-select">                           
									
									<div class="entry value1"><span>{{ $produk->stok}}</span></div>
									
								</div>
							</div>
							<!--quantity-->
									<script>
									$('.value-plus1').on('click', function(){
										var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus1').on('click', function(){
										var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->

						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="simpleCart_shelfItem">
							<p><i>Rp. </i> <i class="item_price">{{ number_format($produk->harga, 2,',','.') }}</i></p>
							<p><a class="item_add" href="{!! url('produk/cart/'.$produk->id)!!}">Add to cart</a></p>
						</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	
	
	
<!-- //single -->
@endsection
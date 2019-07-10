@extends('layout.master')
@section('content')

<div class="banner10" id="home1">
		<div class="container">
			<h2>Konfirmasi Pembayaran</h2>
		</div>
	</div> 
<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Konfirmasi</li>
			</ul>
		</div>
	</div>
<div class="container">
    <div style="margin-bottom: 0px" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
 <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingAO">
              <h4 class="panel-title" >
                
                    Konfirmasi Pembayaran
               
              </h4>
            </div>
            <div id="collapseAO" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingAO">
              <div class="panel-body">
               <div class="shopper-informations">
		<div class="row">
			<div class="col-sm-12">
				<div class="shopper-info">
					
					<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="/bayar" enctype="multipart/form-data">
						
						<p>ID Transaksi</p>
						
						<div class="form-group col-md-6">
							<input type="text" name="idorder" class="form-control" required="required" placeholder="ID Transaksi">
						</div><br><br><br>
						<p>Bukti Pembayaran</p>
						<div class="form-group col-md-6">
							<input type="file" name="featured_img" required="required">
							<br>
@if ($errors->has('featured_img'))
  <p> {{ $errors->first('featured_img') }}</p>
@endif
						</div><br><br><br>
						
						<p>Pesan</p>
						
						
						<div class="form-group col-md-6">
							<textarea name="pesan" id="pesan"  class="form-control" rows="4" placeholder="(Optional)"></textarea>
						</div>

						<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Captcha</label>

                            <div class="col-md-6 pull-center">
                                {!! app('captcha')->display() !!}

                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group col-md-12">
							<input type="submit" name="submit" class="btn btn-primary pull-right" value="Selesai">
						</div>
						{{csrf_field()}}
						{{-- <div class="g-recaptcha" data-sitekey="6Le5UlYUAAAAAN1_XCreT1WP34OdT3loUXkukU91"></div> --}}
					</form>

				</div>
			</div>
		</div>			
	</div>
               
               </div>
            </div>
          </div>
          </div>
          </div>
@endsection
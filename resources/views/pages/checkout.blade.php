@extends('layout.master')
@section('content')
<!-- banner -->
    <div class="banner10" id="home1">
        <div class="container">
            <h2>Checkout</h2>
        </div>
    </div>
<!-- //banner -->

<!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
<!-- //breadcrumbs -->

<!-- checkout -->
    <div class="checkout">
        <div class="container">
            <div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Pelanggan</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Pengiriman</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Checkout</p>
        </div>
    </div>
</div>
<form role="form" style="center" method="post" action="{!! route('pelanggan.save', $formid) !!}">
    <input type="hidden" name="formid" value="{{ $formid }}">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">

        <br><br>
                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="nama" name="nama" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div><br/><br>
                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name">No. Telepon <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="telepon" name="telepon" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div><br/><br>

                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name">Provinsi <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="country" id="country">
                 <option value="" selected="selected">--- Pilih Provinsi ---</option>
@foreach($datas as $data => $utility)
{{-- @foreach($utility as $name => $numbers) --}}
                            <option value="{{ $utility['province_id'] }}">{{ $utility['province'] }}</option>
{{-- @endforeach --}}
@endforeach
                          </select>
                        </div>
                      </div><br/><br>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name">Kota/Kabupaten<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="state" id="state" disabled="disabled">
                 <option value="" selected="selected" >--- Pilih Kota/Kabupaten ---</option>
{{-- @foreach($datak as $datas => $utility)

                            <option value="{{ $utility['province_id'] }}">{{ $utility['province'] }}</option>

@endforeach --}}
                          </select>
                        </div>
                      </div><br/><br>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name">Kode Pos <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="kodepos" name="kodepos" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div><br/><br>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name">Alamat Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <textarea class="form-control" rows="3" id="alamat" name="alamat"></textarea>
                        </div>
                      </div><br/><br>

                      
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
         </div>
     </div>
    </div>

    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3></h3>
                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name">Pilih Kurir <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="kurir" id="kurir">
                 <option value="" selected="selected">--- Pilih Kurir ---</option>
@foreach($kurir as $kurirs => $utility)
{{-- @foreach($utility as $name => $numbers) --}}
                            <option value="{{ $utility['kurir_id'] }}">{{ $utility['kurir'] }}</option>
{{-- @endforeach --}}
@endforeach
                          </select>
                        </div>
                      </div><br/><br>

                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-1" for="first-name">Ongkos Kirim<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <select class="form-control" name="ongkir" id="ongkir" disabled="disabled">
                 <option value="" selected="selected" >--- Ongkir ---</option>
{{-- @foreach($dat as $datas => $util)

                            <option value="{{ $util['code'] }}">{{ $util['service'] }}</option>

@endforeach --}}
                          </select>
                        </div>
                      </div><br/><br>

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3></h3>
                

            <div class="checkout-right">
                
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>No.</th> 
                            <th width="25%">Produk</th>
                            <th>Jumlah</th>
                            <th>Nama Produk</th>
                            
                            <th>Harga</th>
                            <th>Sub Total</th>
                            
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    @foreach ($cart_content as $cart)
                        {{-- expr --}}
                    
                   <tr class="rem{{ $i }}">
                        <td class="invert">{{ $i }}</td>
                        <td class="invert-image"><a href="single.html"><img src="{{ asset('storage/produk/' . $cart->img) }}" alt=" " class="img-responsive" /></a></td>
                        <td class="invert">
                             <div class="quantity"> 
                                <div class="quantity-select">                           
                                    
                                    <div class="entry value"><span>{{ $cart->qty }}</span></div>
                                    
                                </div>
                            </div>
                        </td>
                        <td class="invert">{{ $cart->name }}</td>
                        
                        <td class="invert"><i>Rp. </i>{{ number_format($cart->price, 2,',','.') }}</td>
                        <td class="invert"><i>Rp. </i>{{ number_format($cart->subtotal, 2,',','.') }}</td>
                        
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                  
                                <!--quantity-->
                                    <script>
                                    $('.value-plus').on('click', function(){
                                        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus').on('click', function(){
                                        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
                                        if(newVal>=1) divUpd.text(newVal);
                                    });
                                    </script>
                                <!--quantity-->
                </table>
            </div>

            <div class="checkout-left"> 
                <div class="checkout-left-basket">
                    <h4>Continue to basket</h4>
                    <ul>
                        @foreach ($cart_content as $cart)
                        <li>{{ $cart->name }}<i> - </i> <span><i>Rp. </i>{{ number_format($cart->subtotal, 2,',','.') }}</span></li>
                        @endforeach
                        <li>Ongkos Kirim <i> -</i><input type="text" name="ongkos" id="ongkos" disabled="" style="background: transparent; border: none; text-align: right;"></li>
                        <input type="hidden" name="total" id="total" value="{{ $total }}">
                        @php
                            {{ $kode= str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT); }}
                        @endphp
                        <input type="hidden" name="kode" id="kode" value="{{ $kode }}">
                        
                        
                        <li>Total <i>- </i><input type="text" id="tbayar" name="tbayar" disabled="" style=" border: none; text-align: center; font-weight: bold;"><span>*kode 3 digit dibelakang total adalah kode unik pembayaran. Harap diteliti ketika melakukan pembayaran</span></li>
                        
                    </ul>
                </div>


                <button class="btn btn-success btn-lg pull-right" type="submit" {{-- formaction="{!! url('/bayar') !!}" --}}>Finish!</button>
            </div>
        </div>
    </div>
    {{csrf_field()}}
</form>
            
                
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

<script type="text/javascript">


    $('#country').change(function(){
    var countryID = $(this).val();    
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('checkout/list')}}?country_id="+countryID,
           success:function(res){               
            if(res){
                $("#state").prop('disabled', false);
                $("#state").empty();
                // $("#state").append('<option value="">--- Pilih Kota/Kabupaten ---</option>');
       
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+value['city_id']+'">'+value.city_name+'</option>');
                });
           
            }else{

               $("#state").empty();
            }
           }
        });
    }else{
         $("#state").prop('disabled', true);
        $("#state").empty();
        $("#state").append('<option value="">--- Pilih Kota/Kabupaten ---</option>');
    }      
   });
   

   $('#kurir').change(function(){
    var kurirID = $(this).val();   
    var kota = $("#state").val();  
    if(kurirID){
        $.ajax({
           type:"GET",
           url:"{{url('checkout/kurir')}}?kurir_id="+kurirID+"&kota=" + kota,
           success:function(res){               
            if(res){
                $("#ongkir").prop('disabled', false);
                $("#ongkir").empty();
                $("#ongkir").append('<option value="">--- Ongkir ---</option>');


                
                $.each(res[0].costs,function(key,value){
                    
                    $("#ongkir").append('<option value="'+value['cost'][0].value+'">'+value.service + ' - ' +value['cost'][0].value+'</option>');
                    
                });
           
            }else{

               $("#ongkir").empty();
            }
           }
        });
    }else{
         $("#ongkir").prop('disabled', true);
        $("#ongkir").empty();
        $("#ongkir").append('<option value="">--- Ongkir ---</option>');
    }      
   });
</script>

    <script type="text/javascript">


        $(document).ready(function () {
$('#ongkir').change(function(){
                <!-- Ambil nilai bayar dan diskon !-->
                var ongkir=parseInt($('#ongkir').val());
                var kode=parseInt($('#kode').val());
                var total=parseInt($('#total').val());

     
                <!-- Perhitungan bayar-(diskon/100 x bayar) !-->
                var total_bayar=kode+ongkir+(total*1000);
                var reverse = total_bayar.toString().split('').reverse().join(''),
    ribuan  = reverse.match(/\d{1,3}/g);
    ribuan  = 'Rp. '+ribuan.join('.').split('').reverse().join('')+',00';
    
                $('#tbayar').val(ribuan);
                var reverse2 = ongkir.toString().split('').reverse().join(''),
    ribuan2  = reverse2.match(/\d{1,3}/g);
    ribuan2  = 'Rp. '+ribuan2.join('.').split('').reverse().join('')+',00';
                $('#ongkos').val(ribuan2);
                });


    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
    </script>
    
<!-- //checkout -->
@endsection
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
            <h3>Your shopping cart contains: <span>{{ count($cart_content) }} Products</span></h3>

            <div class="checkout-right">
                @if(count($cart_content))
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>No.</th> 
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Nama Produk</th>
                            
                            <th>Harga</th>
                            <th>Sub Total</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    @foreach ($cart_content as $cart)
                        {{-- expr --}}
                    @php
                        
                    @endphp
                   <tr class="rem{{ $i }}">
                        <td class="invert">{{ $i }}</td>
                        <td class="invert-image"><a href="#"><img src="{{ asset('storage/produk/'.$cart->img) }}" alt=" " class="img-responsive" /></a></td>
                        <td class="invert">
                             <div class="quantity"> 
                                <div class="quantity-select">                           
                                    <div class="entry"><a href="{{ url('cart/remove/'.$cart->rowId) }}" class="btn btn-default glyphicon glyphicon-minus"></a></div>
                                    <div class="entry value"><span>{{ $cart->qty }}</span></div>
                                    <div class="entry "><a href="{{ url('cart/add/'.$cart->rowId) }}" class="btn btn-default glyphicon glyphicon-plus"></a></div>
                                </div>
                            </div>
                        </td>
                        <td class="invert">{{ $cart->name }}</td>
                        
                        <td class="invert">{{ $cart->price }}</td>
                        <td class="invert">{{ $cart->subtotal }}</td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close{{ $i }}"> <a href="{{ url('cart/delete/'.$cart->rowId) }}"><img src="{{ asset('assets/images/close.png') }}" ></a> </div>
                            </div>
                            
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                    @else
                <p>You have no items in the shopping cart</p>
                @endif
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
                    
                    <a href="{{ url('/') }}" class="btn btn-default add-to-cart">Lanjut  Belanja</a>

                </div>
                

                <div class="checkout-right-basket">
                    <a href="{{ url('cart/checkout') }}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Checkout</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>


    
    
<!-- //checkout -->
@endsection
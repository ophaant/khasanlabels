<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Khasan Labels Indonesia</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Busana Muslim, busana wanita muslim, Khasan Labels Indonesia" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/fasthover.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- //js -->
<!-- countdown -->
<link rel="stylesheet" href="{{asset('assets/css/jquery.countdown.css')}}" />
<!-- //countdown -->
<!-- cart -->
<script src="{{asset('assets/js/simpleCart.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<link rel="shortcut icon" href="{{asset('assets/images/fav.png')}}" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
    
<body>
<!-- header -->

    
    <div class="header">
        <div class="container">
            
            <div class="w3l_logo">
                <h1><a href="/">Khasan Labels Indonesia<span>One Stop Sunnah Outfit</span></a></h1>
            </div>
            <div class="search">
                <input class="search_box" type="checkbox" id="search_box">
                <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                <div class="search_form">
                    <form action="{{ url('query') }}" method="get">
                        <input type="text" name="q" placeholder="Search...">
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
            <div class="cart box_1">
                <a href="#">
                    <div >
                        
                        
                    <span >Rp. {{ $total }}</span> (<span id="simpleCart_quantity">{{ count($cart_content) }}</span> items)</div>
                    <img src="{{asset('assets/images/bag.png')}}" alt="" />
                </a>
                
                <div class="clearfix"> </div>
            </div>  
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{!! url('/')!!}" class="act">Home</a></li>   
                        <!-- Mega Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <h6>Khasan Labels Produk</h6>
                                    @foreach ($kategoris as $kategori) 
                                            <li><a href="/kategori/{{$kategori->id}}">{{ $kategori->nama_kategori }}<span>New</span></a></li>
                                        @endforeach  
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li><a href="/tentangkami">Tentang Kami</a></li>
                        
                        
                        <li><a href="/konfirmasi">Konfirmasi</a></li>
                        <li><a href="/testimoni">Testimoni</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
<!-- //header -->


<!-- banner-bottom -->
   
        @yield('content')

    
<!-- //banner-bottom1 -->




<!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="col-md-6 w3agile_newsletter_left">
                <h3>Selamat Berbelanja</h3>
                <p>Dapatkan update terbaru dari produk kami.</p>
            </div>
            
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //newsletter -->
<!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-3 w3_footer_grid">
                    <h3>Kontak</h3>
                    <p></p>
                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Jl. Delima Raya No.7. Yogyakarta
 <span></span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:khasanlabels@gmail.com">khasanlabels@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+(62) 878-3833-5838</li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Informasi</h3>
                    <ul class="info"> 
                        <li><a href="/tentangkami">Tentang Kami</a></li>
                        <li><a href="/panduan">Panduan Pembayaran</a></li>
                        <li><a href="/retur">Pengembalian dan Penukaran</a></li>
                        <li><a href="/ketentuan">FAQ's</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Jam Buka</h3>
                    <ul class="info"> 
                        <li>Senin-Jumat: &ensp; 09.00 - 15.00</li>
                        <li>Sabtu: &ensp; &ensp; &ensp; &ensp; &ensp;10.00 - 15.00</li>
                        <li>Minggu: &ensp; &ensp; &ensp; &ensp; 10.00 - 15.00</li>
                        
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Profile</h3>
                    
                    <h4>Follow Us</h4>
                    <div class="agileits_social_button">
                        <ul>
                            <li><a href="https://www.facebook.com/khasanlabels/" target="_blank" class="facebook"> </a></li>
                            
                            <li><a href="https://www.instagram.com/khasanlabels/" target="_blank" class="pinterest"> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="footer-copy1">
                <div class="footer-copy-pos">
                    <a href="#home1" class="scroll"><img src="{{asset('assets/images/arrow.png')}}" alt=" " class="img-responsive" /></a>
                </div>
            </div>
            <div class="container">
                
                <p>&copy; <?php echo (int)date('Y'); ?> Khasan Label Indonesia. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
    </div>
<!-- //footer -->
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '26323b74-6b9a-46f7-b5da-d4ea2608be17', f: true }); done = true; } }; })();</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('sweet::alert')
</body>
</html>
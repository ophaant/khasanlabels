@extends('layout.master')
@section('content')

<!-- banner -->
    <div class="banner3" id="home1">
        <div class="container">
            <h2>Busana Wanita<span>up to</span> Flat 40% <i>Discount</i></h2>
        </div>
    </div>
<!-- //banner -->

<!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Produk</li>
            </ul>
        </div>
    </div>
<!-- //breadcrumbs -->

<!-- dresses -->
    <div class="dresses">
        <div class="container">
            <div class="w3ls_dresses_grids">
                <div class="col-md-4 w3ls_dresses_grid_left">
                    <div class="w3ls_dresses_grid_left_grid">
                        <h3>Kategori</h3>
                        <div class="w3ls_dresses_grid_left_grid_sub">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            
                              
                              <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                  <h4 class="panel-title asd">
                                    <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Semua Kategori
                                    </a>
                                  </h4>
                                </div>
                                
                                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                   <div class="panel-body panel_text">
                                    <ul>
                                   

                                    

                                    @foreach ($kategoris as $kategori)
                                        
                                    
                                        <li><a href="/kategori/{{$kategori->id}}">{{ $kategori->nama_kategori }}</a></li>
                                        @endforeach

                                    </ul>

                                  </div>
                                </div>
                              </div>
                            </div>
                             
                            <ul class="panel_bottom">
                                <li><a href="/kategori/{{$kategori->id}}">{{ $kategori->nama_kategori }}</a></li>
                            </ul>
                                                    </div>
                    </div>
                    
                    <div class="w3ls_dresses_grid_left_grid">
                        <h3>Tersedia Ukuran</h3>
                        <div class="w3ls_dresses_grid_left_grid_sub">
                            <div class="ecommerce_color ecommerce_size">
                                <ul>
                                    <li><a>Medium</a></li>
                                    <li><a>Large</a></li>
                                    <li><a>Extra Large</a></li>
                                    <li><a>Small</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @if (count($hasil))
                <div class="col-md-8 w3ls_dresses_grid_right">
                    
                    <div class="clearfix"> </div>

                    <div class="w3ls_dresses_grid_right_grid2">
                        <div class="w3ls_dresses_grid_right_grid2_left">

                            <h3>Showing Results: {{ $hasil->count()}}</h3>
                        </div>
                        
                        <div class="clearfix"> </div>
                    </div>
                    {{ csrf_field() }}
                    <div class="w3ls_dresses_grid_right_grid3">
                    
@foreach ($hasil as $produk)
    {{-- expr --}}

                        
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
                        
                            <div class="agile_ecommerce_tab_left dresses_grid">

                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                    
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal{{ $produk->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="single.html">{{ $produk->nama_produk }}</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><span></span><i>Rp. </i><i class="item_price">{{ number_format($produk->harga, 2,',','.') }}</i></p>
                                    <p><a class="item_add" href="{!! url('produk/cart/'.$produk->id)!!}">Masuk Keranjang</a></p>
                                </div>
                                
                                
                            </div>
                            
                        </div>
                        
                        <div class="modal video-modal fade" id="myModal{{ $produk->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                                </div>
                                <section>
                                    <div class="modal-body">
                                        <div class="col-md-5 modal_body_left">
                                            <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="col-md-7 modal_body_right">
                                            <h4>{{ $produk->nama_produk }}</h4>
                                            <p>{{ $produk->deskripsi }}</p>
                                            <div class="rating">
                                                <div class="rating-left">
                                                    <img src="{{asset('assets/images/star-.png')}}" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="rating-left">
                                                    <img src="{{asset('assets/images/star-.png')}}" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="rating-left">
                                                    <img src="{{asset('assets/images/star-.png')}}" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="rating-left">
                                                    <img src="{{asset('assets/images/star-.png')}}" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="rating-left">
                                                    <img src="{{asset('assets/images/star-.png')}}" alt=" " class="img-responsive" />
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="modal_body_right_cart simpleCart_shelfItem">
                                                <p><span></span><i>Rp. </i><i class="item_price">{{ number_format($produk->harga, 2,',','.') }}</i></p>
                                                <p><a class="item_add" href="{!! url('produk/cart/'.$produk->id)!!}">Masuk Keranjang</a></p>
                                            </div>
                                            <h5>Tersedia Ukuran</h5>
                                        <div class="color-quality">
                                            <ul>
                                                <li><a href="#"><span></span>M</a></li>
                                                <li><a href="#" class="brown"><span></span>L</a></li>
                                                <li><a href="#" class="purple"><span></span>XL</a></li>
                                                <li><a href="#" class="gray"><span></span>S</a></li>
                                            </ul>
                                        </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    
                    
                    </div>
@endforeach
                <div class="clearfix"> </div>

            </div>

        </div>
        {{ $hasil->links()}}
        @else
   <div class="card-panel red darken-3 white-text">Oops.. Data <b>{{$query}}</b> Tidak Ditemukan</div>
@endif
    </div>

                        <div class="clearfix"> </div>
                    </div>
                    <p>

  </p>

<!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Rekomendasi Produk</h3>
            <div class="sliderfig">
                <ul id="flexiselDemo1">         
                   
                @foreach ($produks4 as $produks4)
                <li>
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="{{ asset('storage/produk/' . $produks4->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produks4->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produks4->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produks4->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produks4->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produks4->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produks4->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produks4->gambar) }}" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal{{ $produks4->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">{{ $produks4->nama_produk }}</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produks4->harga, 2,',','.') }}</i></p>
                            <p><a class="item_add" href="{!! url('produk/cart/'.$produks4->id)!!}">Add to cart</a></p>
                        </div>
                        <div class="dresses_grid_pos2">
                                    <h6>Hot</h6>
                                </div>
                    </div>
                
                </li>
                <!--modal-video-->
                <div class="modal video-modal fade" id="myModal{{ $produks4->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                            </div>
                            <section>
                                <div class="modal-body">
                                    <div class="col-md-5 modal_body_left">
                                        <img src="{{ asset('storage/produk/' . $produks4->gambar) }}" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-md-7 modal_body_right">
                                        <h4>{{ $produks4->nama_produk }}</h4>
                                        <p>{{ $produks4->deskripsi }}</p>
                                        <div class="rating">
                                            <div class="rating-left">
                                                <img src="{{asset('assets/images/star-.png')}}" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{asset('assets/images/star-.png')}}" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{asset('assets/images/star-.png')}}" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{asset('assets/images/star.png')}}" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{asset('assets/images/star.png')}}" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="modal_body_right_cart simpleCart_shelfItem">
                                            <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produks4->harga, 2,',','.') }}</i></p>
                                            <p><a class="item_add" href="{!! url('produk/cart/'.$produks4->id)!!}">Add to cart</a></p>
                                        </div>
                                        <h5>Color</h5>
                                        <div class="color-quality">
                                            <ul>
                                                <li><a href="#"><span></span>Red</a></li>
                                                <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                                <li><a href="#" class="purple"><span></span>Purple</a></li>
                                                <li><a href="#" class="gray"><span></span>Violet</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                @endforeach
                
                </ul>
            </div>
                    <script type="text/javascript">
                            $(window).load(function() {
                                $("#flexiselDemo1").flexisel({
                                    visibleItems: 4,
                                    animationSpeed: 1000,
                                    autoPlay: true,
                                    autoPlaySpeed: 3000,            
                                    pauseOnHover: true,
                                    enableResponsiveBreakpoints: true,
                                    responsiveBreakpoints: { 
                                        portrait: { 
                                            changePoint:480,
                                            visibleItems: 1
                                        }, 
                                        landscape: { 
                                            changePoint:640,
                                            visibleItems:2
                                        },
                                        tablet: { 
                                            changePoint:768,
                                            visibleItems: 3
                                        }
                                    }
                                });
                                
                            });
                    </script>
                    <script type="text/javascript" src="{{asset('assets/js/jquery.flexisel.js')}}"></script>
        </div>
    </div>
<!-- //top-brands -->
@endsection
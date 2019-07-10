@extends('layout.master')
@section('content')

<!-- banner -->
    <div class="banner" id="home1">
        <div class="container">
            <h3>fashions fade, <span>style is eternal</span></h3>
        </div>
    </div>
<!-- //banner -->
<!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
           {{ csrf_field() }}
            <div class="col-md-12 wthree_banner_bottom_right">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Semua Produk</a></li>
                        
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                            <div class="agile_ecommerce_tabs">
                                @foreach ($produks as $produk)
                                @if ($produk->stok>0)
                                    {{-- true expr --}}
                               
                                    {{-- false expr --}}
                                
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal{{ $produk->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="/read/{{$produk->slug_nama}}">{{ $produk->nama_produk }}</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produk->harga, 2,',','.') }}</i></p>
                                        <p><a class="item_add" href="{!! url('produk/cart/'.$produk->id)!!}">Add to cart</a></p>
                                    </div>
                                    
                                </div>

                                <!--modal-video-->
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
                                                <img src="{{asset('assets/images/star.png')}}" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{asset('assets/images/star.png')}}" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="modal_body_right_cart simpleCart_shelfItem">
                                            <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produk->harga, 2,',','.') }}</i></p>
                                            <p><a class="item_add" href="{!! url('produk/cart/'.$produk->id)!!}">Add to cart</a></p>
                                        </div>
                                         <h5>Stok : </h5>
                                        <div class="color-quality">
                                            <ul>
                                                <li><a href="#">{{ $produk->stok }} (Barang Tersedia)</a></li>
                                                
                                            </ul>
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
                 @else
                 <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <img src="{{ asset('storage/produk/' . $produk->gambar) }}" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#myModal{{ $produk->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="/read/{{$produk->slug_nama}}">{{ $produk->nama_produk }}</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produk->harga, 2,',','.') }}</i></p>
                                        <p><a class="item_add" href="{!! url('produk/cart/'.$produk->id)!!}" >Add to cart</a></p>
                                    </div>
                                    <div class="dresses_grid_pos3">
                                    <h6>Habis</h6>
                                </div>
                                </div>

                                <!--modal-video-->
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
                                                <img src="{{asset('assets/images/star.png')}}" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{asset('assets/images/star.png')}}" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="modal_body_right_cart simpleCart_shelfItem">
                                            <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produk->harga, 2,',','.') }}</i></p>
                                            <p><a class="item_add" href="{!! url('produk/cart/'.$produk->id)!!}" disabled='disabled'>Add to cart</a></p>
                                        </div>

                                        <h5>Stok : </h5>
                                        <div class="color-quality">
                                            <ul>
                                                <li><a href="#">{{ $produk->stok }} (Barang Tersedia)</a></li>
                                                
                                            </ul>
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
                @endif
                                @endforeach
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        
                        
                        
                        
                    </div>
                </div>
                    
                
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //banner-bottom -->



<!-- new-products -->
    <div class="new-products">
        <div class="container">
            <h3>Produk Baru</h3>
            <div class="agileinfo_new_products_grids">
                @foreach ($produksb as $produksb)
                @if ($produksb->stok>0)
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal{{ $produksb->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="/read/{{$produksb->slug_nama}}">{{ $produksb->nama_produk }}</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produksb->harga, 2,',','.') }}</i></p>
                            <p><a class="item_add" href="{!! url('produk/cart/'.$produksb->id)!!}">Add to cart</a></p>
                        </div>
                        <div class="dresses_grid_pos">
                                    <h6>New</h6>
                                </div>
                    </div>
                </div>
                
                <!--modal-video-->
                <div class="modal video-modal fade" id="myModal{{ $produksb->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                            </div>
                            <section>
                                <div class="modal-body">
                                    <div class="col-md-5 modal_body_left">
                                        <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-md-7 modal_body_right">
                                        <h4>{{ $produksb->nama_produk }}</h4>
                                        <p>{{ $produksb->deskripsi }}</p>
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
                                            <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produksb->harga, 2,',','.') }}</i></p>
                                            <p><a class="item_add" href="{!! url('produk/cart/'.$produksb->id)!!}">Add to cart</a></p>
                                        </div>

                                        <h5>Stok : </h5>
                                        <div class="color-quality">
                                            <ul>
                                                <li><a href="#">{{ $produk->stok }} (Barang Tersedia)</a></li>
                                                
                                            </ul>
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
                @else
                 <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal{{ $produksb->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="/read/{{$produksb->slug_nama}}">{{ $produksb->nama_produk }}</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produksb->harga, 2,',','.') }}</i></p>
                            <p><a class="item_add" href="{!! url('produk/cart/'.$produksb->id)!!}">Add to cart</a></p>
                        </div>
                        <div class="dresses_grid_pos3">
                                    <h6>Habis</h6>
                                </div>
                    </div>
                </div>
                
                <!--modal-video-->
                <div class="modal video-modal fade" id="myModal{{ $produksb->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                            </div>
                            <section>
                                <div class="modal-body">
                                    <div class="col-md-5 modal_body_left">
                                        <img src="{{ asset('storage/produk/' . $produksb->gambar) }}" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-md-7 modal_body_right">
                                        <h4>{{ $produksb->nama_produk }}</h4>
                                        <p>{{ $produksb->deskripsi }}</p>
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
                                            <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produksb->harga, 2,',','.') }}</i></p>
                                            <p><a class="item_add" href="{!! url('produk/cart/'.$produksb->id)!!}">Add to cart</a></p>
                                        </div>

                                        <h5>Stok : </h5>
                                        <div class="color-quality">
                                            <ul>
                                                <li><a href="#">{{ $produk->stok }} (Barang Tersedia)</a></li>
                                                
                                            </ul>
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
                @endif
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //new-products -->

<!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Rekomendasi Produk</h3>
            <div class="sliderfig">
                <ul id="flexiselDemo1">         
                   
                @foreach ($produks4 as $produks4)
                @if ($produks4->stok>0)
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
                        <h5><a href="/read/{{$produks4->slug_nama}}">{{ $produks4->nama_produk }}</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produks4->harga, 2,',','.') }}</i></p>
                            <p><a class="item_add" href="{!! url('produk/cart/'.$produk->id)!!}">Add to cart</a></p>
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
                                            <p><a class="item_add" href="{!! url('produk/cart/'.$produk->id)!!}">Add to cart</a></p>
                                        </div>
                                        <h5>Stok : </h5>
                                        <div class="color-quality">
                                            <ul>
                                                <li><a href="#">{{ $produk->stok }} (Barang Tersedia)</a></li>
                                                
                                            </ul>
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
                @else
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
                        <h5><a href="/read/{{$produks4->slug_nama}}">{{ $produks4->nama_produk }}</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span></span><i>Rp. </i> <i class="item_price">{{ number_format($produks4->harga, 2,',','.') }}</i></p>
                            <p><a class="item_add" href="{!! url('produk/cart/'.$produk->id)!!}">Add to cart</a></p>
                        </div>
                        <div class="dresses_grid_pos3">
                                    <h6>Habis</h6>
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
                                            <p><a class="item_add" href="{!! url('produk/cart/'.$produk->id)!!}">Add to cart</a></p>
                                        </div>
                                        <h5>Stok : </h5>
                                        <div class="color-quality">
                                            <ul>
                                                <li><a href="#">{{ $produk->stok }} (Barang Tersedia)</a></li>
                                                
                                            </ul>
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
                @endif
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
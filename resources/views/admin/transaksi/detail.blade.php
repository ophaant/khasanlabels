@extends('admin.layout.master')
@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>DETAIL <small>pembelian barang</small></h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pembelian Barang <small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                            @foreach ($transaksis as $tra)
                            @php
                              {{ $trs = $tra->created_at; 
                                $status = $tra->status;
                              }}
                            @endphp

                            @endforeach
                                          <i class="fa fa-globe"></i> Invoice.
                                          <small class="pull-right">Date: {{ date('d-m-Y')}}</small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          Dari
                          <address>
                                          <strong>Khasan Labels Indonesia</strong>
                                          <br>Jl. Delima Raya No.7.
                                          <br>Yogyakarta, Indonesia
                                          <br>Phone: +(62) 878-3833-5838
                                          <br>Email: khasanlabels@gmail.com
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          Kepada
                          {{ csrf_field() }}
                            @foreach ($pelanggans as $pl)
                             @php
                            {{ $data = RajaOngkir::Provinsi()->find($pl->provinsi); 
                               $data2 = RajaOngkir::Kota()->find($pl->kota);
                               $ongkir = $pl->ongkir;
                               $formid = $pl->formid;
                            }}
                          @endphp
                            

                          <address>
                            
                          
                          
                             
                            
                                          <strong>{{ $pl->nama }} </strong>
                                          <br>{{ $pl->alamat }}
                                          <br>{{ $data2['city_name'] }}, {{ $data2['province'] }}, Indonesia
                                          <br>Kode Pos: {{ $pl->kodepos }}
                                          <br>Phone: {{ $pl->telepon }}
                                         
                                      </address>

                                          @endforeach
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                          <b>Invoice #{{$formid}}</b>
                          <br>
                          <br>
                          <b>Tanggal Transaksi:</b> {{ date('d-m-Y', strtotime($trs))}}
                          <br>
                          <b>Status: </b> {{ $status }}
                          
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Qty</th>
                                <th>Produk</th>
                                <th>Serial #</th>
                                <th style="width: 59%">Deskripsi</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($transaksis as $tr)
                            @php
                                {{ $produk = DB::table("produks")->where('id', $tr->produk_id)->get();}}
                              @endphp
                              @foreach ($produk as $pr)
                              <tr>
                                <td>{{ $tr->qty }}</td>
                                <td>{{ $pr->nama_produk}}</td>
                                <td>PDK{{ $pr->id }}NM17</td>
                                <td>{{ $pr->deskripsi}}
                                </td>
                                <td><i>Rp. </i>{{ number_format($tr->total_harga, 2,',','.') }}</td>
                              </tr>
                              @endforeach
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                          <p class="lead">Pembayaran:</p>
                          <img src="{{ asset('assets/images/bca.gif') }}" alt="Visa">
                          
                          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Kami hanya melayani pembayaran melalui bank BCA. Terima Kasih.
                          </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <p class="lead">Tagihan</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                
                                <tr>
                                  
                                  <th style="width:50%">Subtotal:</th>
                                  @foreach ($transaksis as $tr2)
                                @php
                                  {{ 
                                    
                                    $data = DB::table("pelanggans")->where('formid', $tr2->formid)->get(); 
                            
                              // $jumlah = intval(preg_replace('/\D/','',$data[0]->ongkir)) + intval(preg_replace('/\D/','',$transaksi->subtotal));
                            $total=preg_replace('/\D/','',$tr->subtotal);
                            $total2=$total/100;
                                  }}
                                @endphp
                                @foreach ($data as $dt)
                              @php
                                {{$ongkir = $dt->ongkir;
                                }}
                              @endphp
                              @php
                                {{  $jumlah = ((($dt->kode+$ongkir)*100) + $total)/100; }}
                              @endphp
                            @endforeach 
                                @endforeach
                                  <td><i>Rp. </i>{{ number_format($total2, 2,',','.') }}</td>
                                  
                                </tr>
                                <tr>
                                  <th>Pengiriman: ( {{ $pl->kurir}} )</th>
                                  <td><i>Rp. </i>{{ number_format($ongkir, 2,',','.') }}</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td><i>Rp. </i>{{ number_format($jumlah, 2,',','.') }}</td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-success pull-right" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                          
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- /page content -->
@endsection
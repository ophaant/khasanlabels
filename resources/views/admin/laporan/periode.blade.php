@extends('admin.layout.master')
@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Laporan Transaksi</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Laporan</h2> <button class="btn btn-success pull-right" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                  
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

      <div class="panel panel-default">
        <div class="panel-heading">Laporan Periode : Tanggal : {{ $from }} s/d {{ $to }}</div>
        <div class="panel-body">

        <table class="table table-hover table-striped">
        <tr><th>Invoice</th><th>Tanggal</th><th>Nama Produk</th><th>Harga</th><th>Qty</th><th>Total</th></tr>
        @php
          {{$total=0;
          $ongkir=0;
          $a=$from;
          $b=$to;

          $data =  DB::select( DB::raw("SELECT pelanggans.kode, transaksis.status, pelanggans.ongkir
FROM transaksis, pelanggans
where transaksis.formid = pelanggans.formid AND transaksis.tanggal between '$a' and '$b'
"));
          }}
        @endphp
        @foreach ($data as $dt)
                              @php
                                {{$ongkir += $dt->ongkir;
                                  

                                }}
                              @endphp
                              
                            @endforeach
             @foreach( $transaksi as $list )
             @php
                                  {{ 
                                    
//                                     $data =  DB::select( DB::raw("SELECT kode, ongkir FROM pelanggans LEFT JOIN transaksis USING(formid) GROUP BY formid
// UNION ALL
// SELECT sum(kode), SUM(ongkir) as tot FROM pelanggans"));
                                    
                                     

                              // $jumlah = intval(preg_replace('/\D/','',$data[0]->ongkir)) + intval(preg_replace('/\D/','',$transaksi->subtotal));
                            $total1=preg_replace('/\D/','',$list->subtotal);
                            $total2=$total/100;
                                  }}
                                @endphp
                                 
                    <tr>
                      <td>{{ $list->formid }}</td>
            <td>{{ $list->tanggal }}</td>
            <td>{{ $list->produk->nama_produk }}</td>
            <td><i>Rp. </i>{{ number_format($list->produk->harga, 2,',','.') }}</td>
                        <td>{{ $list->qty }}</td>
            <td><i>Rp. </i>{{ number_format($list->total_harga, 2,',','.') }}</td>
            </tr>
            @php
              {{ 
                $total += $list->total_harga;
              }}
            @endphp
            @php
                                {{  $jumlah = $dt->kode; }}

                              @endphp
            @endforeach
            
            <td></td>
           {{-- @php {{dd($ongkir); }}@endphp --}}
            <tr><th>Total Penjualan</th><th></th><th></th><th></th><th></th><th><i>Rp. </i>{{ number_format($jumlah+$total+$ongkir, 2,',','.') }}</th></tr>
            
                    <tr>
                      <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
      </table>

        </div>
    </div>
  </div>
                    <!-- start project list -->
                    
 
          


                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
@extends('admin.layout.master')

@section('content')

        <!-- page content -->

        <div class="right_col" role="main">

          <!-- top tiles -->

          <div class="row tile_count">

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

              <span class="count_top"><i class="fa fa-user"></i> Total Pengunjung</span>
    {{ Visitor::log() }}

              <div class="count">{{ Visitor::count() }}</div>

              {{-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> --}}

            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

              <span class="count_top"><i class="fa fa-user"></i> Total Pelanggan</span>
            <div class="count">{{ $pelanggans}}</div>

              {{-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> --}}

            </div>

            {{-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

              <span class="count_top"><i class="fa fa-cube"></i> Barang Terjual</span>

              <div class="count green">{{ $barang }}</div>

              {{-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>

            </div> --}} 

           <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

              <span class="count_top"><i class="fa fa-book"></i> Total Pesanan</span>

              <div class="count"><a href="/admin/transaksi">{{count($paid)}}</a></div>

              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>{{$tots}} </i> Barang di pesan</span>

            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">

              <span class="count_top"><i class="fa fa-book"></i> Total Transaksi</span>

              <div class="count"><a href="/admin/transaksi2">{{count($paid2)}}</a></div>

              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>{{$tot}} </i> Barang terjual</span>

            </div>

@php
{{$total=0;
$ongkir=0;
$jumlah=0;
}}
@endphp

@php
{{ 
$data =  DB::select( DB::raw("SELECT pelanggans.kode, transaksis.status, pelanggans.ongkir as ongkir
FROM transaksis, pelanggans
where transaksis.formid = pelanggans.formid AND transaksis.status = 'paid'
GROUP by transaksis.formid"));
  //dd($data);
}}
@endphp

@foreach ($data as $dt)
@php
{{$ongkir += $dt->ongkir;
$jumlah += $dt->kode;
}}
@endphp
@endforeach

@foreach( $paid2 as $list )
@php
{{ 
$total1=preg_replace('/\D/','',$list->subtotal);
$total +=$total1/100;
}}
@endphp
@endforeach

            {{-- @php {{dd($ongkir); }}@endphp --}}

            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">

              <span class="count_top"><i class="fa fa-dollar"></i> Total Pemasukan</span>

              <div class="count"><i>Rp. </i>{{ number_format($jumlah+$total+$ongkir, 2,',','.') }}</div>

              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>

            </div> 

          </div>

          <!-- /top tiles -->



          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

              <div class="dashboard_graph">



                <div class="row x_title">

                  <div class="col-md-6">

                    <h3>Aktifitas Penjualan <small>Grafik Penjualan Produk</small></h3>

                  </div>

                  

                </div>



                <div class="col-md-12 col-sm-12 col-xs-12">

                  



<div id="poll_div"></div>
<?= $lava->render('BarChart', 'Votes', 'poll_div') ?>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
<br />
<div class="row">
</div>
</div>
<!-- /page content -->
@endsection
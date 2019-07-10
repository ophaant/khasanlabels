<?php

namespace App\Http\Controllers;
use App\Pelanggan;
use App\Transaksi;
use App\Produk;
use Illuminate\Support\Facades\DB;
use Khill\Lavacharts\Lavacharts;
use Illuminate\Http\Request;



class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

$lava = new Lavacharts; // See note below for Laravel

$votes  = $lava->DataTable();
$results = DB::select( DB::raw("SELECT produks.nama_produk, SUM(IF( produks.id = transaksis.produk_id, transaksis.qty, 0)) AS qty FROM transaksis, produks GROUP BY produks.id ") );
// dd($results);

$votes->addStringColumn('Food Poll');
$votes->addNumberColumn('Penjualan');
      foreach ($results as $key) {
      	$votes->addRow([$key->nama_produk,  $key->qty]);
      }
  
      
      

$lava->BarChart('Votes', $votes);
$barang1 = DB::select( DB::raw("SELECT SUM(qty) AS qty FROM transaksis") );
foreach ($barang1 as $key2) {
      	$barang = $key2->qty;
      }

    	$paid = DB::table('transaksis')->groupBy('formid')->orderBy('id', 'desc')->distinct()->get();
$paids = DB::select( DB::raw("SELECT sum(qty) as qty FROM transaksis") );
foreach ($paids as $pd1s) {
	$tots=$pd1s->qty;
}

$paid2 = DB::table('transaksis')->where('status','Paid')->groupBy('formid')->orderBy('id', 'desc')->distinct()->get();
$paid2s = DB::select( DB::raw("SELECT sum(qty) as qty FROM transaksis where status = 'Paid'") );
$total=0;
foreach ($paid2s as $pds) {
	$tot=$pds->qty;
}


    	$pelanggans = Pelanggan::count();
    	return view('admin/welcome',['pelanggans'=>$pelanggans, 'lava'=>$lava, 'barang'=>$barang, 'paid'=>$paid, 'paid2'=>$paid2, 'tot'=>$tot, 'tots'=>$tots]);
    }

}

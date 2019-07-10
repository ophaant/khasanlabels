<?php

namespace App\Http\Controllers;
use App\Pelanggan;
use App\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use RajaOngkir;
use Input;
use Redirect;
use Validator;
use Illuminate\Http\Request;


class LaporanController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
	return view('admin.laporan.home');
	}
	
	public function getPeriode(Request $request) {
	$this->validate($request, [
			'awal' => 'required',
            'akhir' => 'required',

    ]);
	
	$from = date('Y-m-d', strtotime(Input::get('awal')));
	
  	$to = date('Y-m-d', strtotime(Input::get('akhir')));
	
		$transaksi = Transaksi::whereHas('produk', function($q)
		{
		$from = date('Y-m-d', strtotime(Input::get('awal')));
  		$to = date('Y-m-d', strtotime(Input::get('akhir')));
	  
  		  $q->whereBetween('tanggal', array($from,$to));

		})->get();
	
	return view('admin.laporan.periode', compact('transaksi', 'from', 'to'));
	}

 


}


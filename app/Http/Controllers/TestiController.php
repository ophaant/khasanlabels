<?php

namespace App\Http\Controllers;
use App\Konfirmasi;
use App\Produk;
use App\Kategori;
use App\Transaksi;
use App\Pelanggan;
use App\Testimoni;
use Alert;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestiController extends Controller
{
    public function index() 
	{
	$kategoris = Kategori::all();

		return view('pages/testi', ['kategoris'=>$kategoris]);

}

public function store(Request $request)
    {
        $kategoris = Kategori::all();
    	$this->validate($request, [
    		'idorder'		 => 'required',
    		'nama'		 => 'required|alpha',
    		
    		'featured_img' => 'mimes:jpeg,jpg,png|max:1000'
    		
    	]);

        $query = $request->get('idorder');
        $hasil = Konfirmasi::where('formid', 'LIKE', '%' . $query . '%')->get();
        
        $photo = $request->file('featured_img');
    	$filename = time(). '.png';
    	$request->file('featured_img')->storeAs('public/produk', $filename);
        
    	$testimoni = new Testimoni;
    	$testimoni->formid     = $request->idorder;
    	$testimoni->nama = $request->nama;
    	$testimoni->nilai = $request->nilai;
    	$testimoni->pesan     = $request->pesan;
    	
      	$testimoni->gambar = $filename;
    	if (count($hasil)) {
    	$testimoni->save();

        return redirect('/testimoni');
    }else {
        Alert::warning('ID Transaksi tidak tersedia, harap masukkan data yang valid', 'Informasi');

        return view('pages.testi', ['kategoris'=>$kategoris]);
        }
    }


}

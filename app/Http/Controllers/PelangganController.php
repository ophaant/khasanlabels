<?php

namespace App\Http\Controllers;
use App\Pelanggan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RajaOngkir;
use Illuminate\Support\Facades\View;

class PelangganController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	
    	//insert biasa
    	//$produk = new produk;
    	//$produk->title = 'judul 3';
    	//$produk->description = 'isi dari judul 3';
    	//$produk->save();

    	//insert mass assignment
    	// produk::create([
    	// 	'title'=>'judul 4',
    	// 	'description'=> 'ini adalah isi dari judul 4'
    	// ]);

    	//update
    	// $produk = produk::where('title','judul 4')->first();
    	// $produk->title = 'judul 5';
    	// $produk->save();


    	//update mass assignment
    	// produk::find(5)->update([
    	// 	'title' => 'judul baru',
    	// 	'description' => 'ini adalah judul baru'
    	// ]);

    	$pelanggans = Pelanggan::all();
    	
    	
    	return view ('admin/pelanggan/home',['pelanggans'=>$pelanggans]);
    }

public function destroy($id)
    {
    	$pelanggan = Pelanggan::find($id);
    	$pelanggan->delete();

    	return redirect('admin/pelanggan');
    }
}

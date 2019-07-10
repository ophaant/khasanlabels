<?php

namespace App\Http\Controllers;
use App\Pelanggan;
use App\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use RajaOngkir;
use Illuminate\Http\Request;

class TransaksiController extends Controller
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

    	// $transaksis = Transaksi::all();
    	$transaksis = DB::table('transaksis')->groupBy('formid')->orderBy('id', 'desc')->distinct()->get();
    	
    	// dd($transaksis);
    	$pelanggans = Pelanggan::all();
    	return view ('admin/transaksi/home',['transaksis'=>$transaksis, 'pelanggans'=>$pelanggans]);
    }

public function index2()
    {
        
        

        // $transaksis = Transaksi::all();
        $transaksis = DB::table('transaksis')->where('status', 'Paid')->groupBy('formid')->orderBy('id', 'desc')->distinct()->get();
        
        // dd($transaksis);
        $pelanggans = Pelanggan::all();
        return view ('admin/transaksi/home',['transaksis'=>$transaksis, 'pelanggans'=>$pelanggans]);
    }

    public function show($id)
    {
    	//$nilai = 'Ini adalah linknya ' . $id;
    	
    	//$users = DB::table('users')->where('name','like','%u%')->get();
    	
//insert
//DB::table('users')->insert([
//	['name'=>'ocang', 'password'=>'12345', 'email'=>'ocangsd@mail.com'],
//	['name'=>'ocang2', 'password'=>'123452', 'email'=>'ocang2@mail.com'],
//	['name'=>'alise', 'password'=>'123alise', 'email'=>'alise@mail.com']
//]);


//update
//DB::table('users')->where('name','ocang')
//				->update(['name'=>'ricali']);

//DB::table('users')->where('id','>','5')->delete();

//$users = DB::table('users')->get();
    	
    	
    	$transaksi = Transaksi::find($id);
    	$formid= $transaksi->formid;
    	$pelanggans = DB::table('pelanggans')->where('formid', $formid)->get();
    	$transaksis = DB::table('transaksis')->where('formid', $formid)->get();

    	return view ('admin/transaksi/detail', ['transaksis'=>$transaksis, 'pelanggans'=>$pelanggans]);
    }

public function destroy($id)
    {
    	$transaksis = Transaksi::find($id);

        $formid= $transaksis->formid;
        
        DB::table('transaksis')->where('formid', $formid)->delete();
        
    	

    	return redirect('admin/transaksi');
    }
}

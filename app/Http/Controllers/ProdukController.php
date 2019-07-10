<?php

namespace App\Http\Controllers;
use App\Produk;
use App\Kategori;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukController extends Controller
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

    	$produks = Produk::all();
    	
    	return view ('admin/produk/home',['produks'=>$produks]);
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

    	$produk = Produk::find($id);
    	return view ('admin/produk/single', ['produk'=>$produk]);
    }


    public function create()
    {
    	$kategoris = Kategori::all();
    	return view ('admin/produk/create', ['kategoris'=>$kategoris]);
    }


    public function store(Request $request)
    {
    	$this->validate($request, [
    		'nama_produk'		 => 'required',
    		'harga'		 => 'required|integer',
    		'stok'		 => 'required|integer',
    		'descr'		 => 'required',
    		'rekomendasi'		 => 'required',
    		'featured_img' => 'mimes:jpeg,jpg,png|max:1000'
    		
    	]);


    	$filename = time(). '.png';
    	$request->file('featured_img')->storeAs('public/produk', $filename);

    	$produk = new Produk;
    	$produk->kategori_id      = $request->nama_kategori;
    	$produk->nama_produk      = $request->nama_produk;
        $produk->slug_nama = Str::slug($request->nama_produk);
    	$produk->harga      = $request->harga;
    	$produk->stok      = $request->stok;
    	$produk->deskripsi      = $request->descr;
    	$produk->rekomendasi      = $request->rekomendasi;
      	$produk->gambar = $filename;
    	
    	$produk->save();
    	
    	return redirect('admin/produk');
    }


    public function edit($id)
    {
    	$kategoris = Kategori::all();
    	$produk = Produk::find($id);
    	return view ('admin/produk/edit', ['produk'=>$produk, 'kategoris'=>$kategoris]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'nama_produk'  => 'required',
    		'harga'		   => 'required|integer',
    		'stok'		   => 'required|integer',
    		'descr'		   => 'required',
    		'rekomendasi'  => 'required',
    		'featured_img' => 'mimes:jpeg,jpg,png|max:1000'
    		]);
    		
    	

    	$produk = Produk::find($id);
    	$produk->kategori_id      = $request->nama_kategori;
    	$produk->nama_produk      = $request->nama_produk;
        $produk->slug_nama = Str::slug($request->nama_produk);
    	$produk->harga     		  = $request->harga;
    	$produk->stok             = $request->stok;
    	$produk->deskripsi   	  = $request->descr;
    	$produk->rekomendasi      = $request->rekomendasi;
    	if($request->file('featured_img') == "")
    	{
    		$produk->gambar=$produk->gambar;

    	}
    	else
    	{

    	$filename = time(). '.png';
    	$request->file('featured_img')->storeAs('public/produk', $filename);
	   	$produk->gambar = $filename;
	   }
    	$produk->save();

    	return redirect('admin/produk/');
    }

    public function destroy($id)
    {
    	$produk = Produk::find($id);
    	$produk->delete();

    	return redirect('admin/produk');
    }
}

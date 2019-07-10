<?php

namespace App\Http\Controllers;
use App\Produk;
use App\Kategori;
use App\Transaksi;
use App\Pelanggan;
use App\Testimoni;
use Alert;
use RajaOngkir;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
use Input;
use Redirect;
use Validator;
use PDF;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $id = DB::table('pelanggans')->orderBy('id', 'desc')->limit(1)->pluck('formid');
    	// dd($id[0]);
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
    	
    	

    	$produks = DB::table('produks')->inRandomOrder('id')->limit(9)->get();
    	$produks4 = DB::table('produks')->where('rekomendasi', 'Y')->orderBy('kategori_id', 'desc')->limit(8)->get();
    	$produksb = DB::table('produks')->orderBy('kategori_id', 'desc')->limit(4)->get();
    	$kategoris = Kategori::all();
    	return view ('welcome',['produks'=>$produks,'produks4'=>$produks4, 'produksb'=>$produksb, 'kategoris'=>$kategoris]);
    	// return view ('/home');
    }

public function index2()
{
	return view ('/home');
}

public function showproduk($slug)
    {
    	// $produk = Produk::find($slug);
    	$produk = Produk::where('slug_nama', $slug)->first();
    	$kategoris = Kategori::all();
    	return view ('pages/single', ['kategoris'=>$kategoris, 'produk'=>$produk]);
    }

    public function tambahItem($id) 
	{
		$kategoris = Kategori::all();
	$product = Produk::find($id);
			if($product->stok>0){		# code...
		$id          = $product->id;
		$img		 = $product->gambar;
		$name        = $product->nama_produk;
		$qty         = 1;
		$price       = $product->harga;

		$data = array('id'          => $id, 
					  'name'        => $name,
					  'img'			=> $img, 
					  'qty'         => $qty, 
					  'price'       => $price, 
					  'options'     => array('size' => 'large'));

		Cart::add($data);
		$cart_content = Cart::content(1);
		
		return view('pages/cart',['kategoris'=> $kategoris, 'cart_content', $cart_content]);
		}else{
			Alert::warning('Mohon Maaf, Stok Barang Yang Anda Pilih tidak Tersedia', 'Informasi');
			return redirect('/');
		}
}
	

	public function hapusItem($id)
	{
		$kategoris = Kategori::all();
	Cart::remove($id);
	$cart_content = Cart::content();

	if (Cart::count()== 0) {
	return Redirect::to('/')->with('message', 'Batal Transaksi');
	}
	else{
	return view('pages/cart', ['kategoris'=> $kategoris])->with('cart_content', $cart_content);
	}
	}


	public function add($id)
	{
	$kategoris = Kategori::all();
		$product = Cart::get($id);
		$productqty = $product->qty;
        $updateqty = $productqty+1;
        Cart::update($id, $updateqty);
        $cart_content = Cart::content();
		return view('pages/cart', ['kategoris'=> $kategoris])->with('cart_content', $cart_content);
	
	}

	public function remove($id)
	{
	$kategoris = Kategori::all();
		$product = Cart::get($id);
		$productqty = $product->qty;
        $updateqty = $productqty-1;
        Cart::update($id, $updateqty);
        $cart_content = Cart::content();
		return view('pages/cart', ['kategoris'=> $kategoris])->with('cart_content', $cart_content);
	
	}


	// public function check()
	// {
	
	// 	$checkout = RajaOngkir::Provinsi()->all();

	// 	return view('pages/checkout')->with('checkout', $checkout);
	
	// }



// public function checkout()
// 	{
		
// 		$id = DB::table('pelanggans')->orderBy('id', 'desc')->limit(1)->pluck('formid');
// 		$ongkirs = DB::table('pelanggans')->orderBy('id', 'desc')->limit(1)->pluck('ongkir');
// 		$cart_content = Cart::content(1);

// 		foreach ($cart_content as $cart) {

// 			$transaction  = new Transaksi();

// 			$product = Produk::find($cart->id);

// 			$transaction->produk_id  = $cart->id;
// 			$transaction->formid     = $id[0];
// 			$transaction->tanggal     = date('Ymd');
// 			$transaction->qty         = $cart->qty;
// 			$transaction->total_harga = $cart->price * $cart->qty;
// 			$transaction->status      = 'unpaid';
// 			$transaction->subtotal 	  = Cart::total();

// 			$transaction->save();

// 		}
		
// 		Cart::destroy();
// 		return view ('pages/check', ['formid'=>$id[0], 'ongkirs'=>$ongkirs[0]]);
// 	}


// public function savePelanggan(Request $request) 
// 	{
// 		$formids       = str_random();
// 	 $this->validate($request, [
// 			'nama' => 'required',
//             'telepon' => 'required',
//             'alamat' => 'required',
// 			'country' => 'required',
// 			'state' => 'required',
// 			'kodepos' => 'required',
// 			'kurir' => 'required',
//     ]);
	
		

// 		$pelanggan = new Pelanggan;
//     	$pelanggan->nama      = $request->nama;
//     	$pelanggan->telepon      = $request->nama;
//     	$pelanggan->provinsi      = $request->country;
//     	$pelanggan->kota      = $request->state;
//     	$pelanggan->alamat     = $request->alamat;
//     	$pelanggan->kodepos      = $request->kodepos;
//     	$pelanggan->formid      = $formids;
//     	$pelanggan->kurir      = $request->kurir;
//     	$pelanggan->ongkir = $request->ongkos;

//     	$pelanggan->save();
	
	
	
	
	
	
	
	
// 	return redirect()->action('HomeController@invoice', ['formids'=>$formids]);

// 	}


// 	public function invoice()
// 	{
		
// 		$id = DB::table('pelanggans')->orderBy('id', 'desc')->limit(1)->pluck('formid');
// 		$ongkirs = DB::table('pelanggans')->orderBy('id', 'desc')->limit(1)->pluck('ongkir');
// 		$cart_content = Cart::content(1);

// 		foreach ($cart_content as $cart) {
// $product = Produk::find($cart->id);
// 			$transaction  = new Transaksi();

			

// 			$transaction->produk_id  = $cart->id;
// 			$transaction->formid     = $id[0];
// 			$transaction->tanggal     = date('Ymd');
// 			$transaction->qty         = $cart->qty;
// 			$transaction->total_harga = $cart->price * $cart->qty;
// 			$transaction->status      = 'unpaid';
// 			$transaction->subtotal 	  = Cart::total();

// 			$transaction->save();

// 		}
		
// 		// Cart::destroy();

		

// 		return view ('pages/invoice', ['formid'=>$id[0], 'ongkirs'=>$ongkirs[0]]);
// 	}


public function checkout()
	{
		$kategoris = Kategori::all();
		$formid       = str_random();
		$cart_content = Cart::content(1);

		foreach ($cart_content as $cart) {

			$transaction  = new Transaksi();

			$product = Produk::find($cart->id);

			$transaction->produk_id  = $cart->id;
			$transaction->formid     = $formid;
			$transaction->tanggal     = date('Ymd');
			$transaction->qty         = $cart->qty;
			$transaction->total_harga = $cart->price * $cart->qty;
			$transaction->status      = 'unpaid';
			$transaction->subtotal 	  = Cart::total();
			$product->stok      = $product->stok-$cart->qty;
			$product->save();
			$transaction->save();

		}

		$datas = RajaOngkir::Provinsi()->all();
		$kurir = array(
                array('kurir_id' => 'jne', 'kurir' => 'JNE'),
				array('kurir_id' => 'pos', 'kurir' => 'POS'),
				array('kurir_id' => 'tiki', 'kurir' => 'TIKI')
);
		
		// Cart::destroy();
		return view('pages.checkout', ['datas' => $datas, 'kurir' => $kurir, 'formid'=> $formid, 'kategoris'=> $kategoris]);
	}


public function savePelanggan(Request $request) 
	{

	 $this->validate($request, [
		'nama' => 'required',
            'telepon' => 'required|numeric',
            'alamat' => 'required',
			'country' => 'required',
			'state' => 'required',
			'kodepos' => 'required|integer',
			'kurir' => 'required',

		  ]);
	

	$pelanggan = new Pelanggan;
    	$pelanggan->nama      = $request->nama;
    	$pelanggan->telepon      = $request->telepon;
    	$pelanggan->provinsi      = $request->country;
    	$pelanggan->kota      = $request->state;
    	$pelanggan->alamat     = $request->alamat;
    	$pelanggan->kodepos      = $request->kodepos;
    	$pelanggan->formid      = $request->formid;
    	$pelanggan->kurir      = $request->kurir;
    	$pelanggan->ongkir = $request->ongkir;
    	$pelanggan->kode = $request->kode;
    	$pelanggan->save();

Cart::destroy();

	$formid = Input::get('formid');
	$notrans = Transaksi::where('formid', '=', $formid )->first();
	
	$transaction = Transaksi::whereHas('produk', function($q)
		{
		  $formid = Input::get('formid');
  		  $q->where('formid', '=', $formid);

		})->get();
	
	$pelanggan = Pelanggan::where('formid', '=', $formid)->first();
	

	$data = RajaOngkir::Provinsi()->find( $request->country);
	
	$country = $request->country;



	return view('pages.invoice', compact('notrans', 'transaction', 'pelanggan', 'data', 'formid', 'country'));
			
	}


	public function pdfview(Request $request)
    {
    	set_time_limit(0);
    	
        $formid = $request->formids;
        $country = $request->country;
        
        $notrans = Transaksi::where('formid', '=', $formid )->first();
	$transaction = Transaksi::whereHas('produk', function($q)
		{
		  $formid = Input::get('formid');
  		  $q->where('formid', '=', $formid);

		})->get();
	
	$pelanggan = Pelanggan::where('formid', '=', $formid)->first();
	

	$data = RajaOngkir::Provinsi()->find( $country);

		view()->share('notrans',$notrans);
		view()->share('transaction',$transaction);
		view()->share('pelanggan',$pelanggan);
		view()->share('data',$data);
		view()->share('formid',$formid);
		view()->share('country',$country);
        
    
	
        
        
            $pdf = PDF::loadView('pages.invoice');
            return $pdf->download('pages.invoice.pdf');
        



        
        
    }

public function show($id)
    {

    	$kategori = Kategori::find($id);
    	$id = $kategori->id;

    	$kategoris = Kategori::all();
    	$produks4 = DB::table('produks')->where('rekomendasi', 'Y')->orderBy('kategori_id', 'desc')->limit(8)->get();
    	$produks = DB::table('produks')->where('kategori_id', '=', $id)->limit(6)->paginate(6);
    	
    	return view ('kategori/kategori', ['kategori'=>$kategori, 'kategoris'=>$kategoris,  'produks'=>$produks, 'produks4'=>$produks4 ]);
    }

public function kami()
    {
$kategoris = Kategori::all();
    	return view ('pages.tentangkami', [ 'kategoris'=>$kategoris ]);
    }

    public function ketentuan()
    {
$kategoris = Kategori::all();
    	return view ('pages.ketentuan', [ 'kategoris'=>$kategoris ]);
    }

    public function panduan()
    {
$kategoris = Kategori::all();
    	return view ('pages.panduan', [ 'kategoris'=>$kategoris ]);
    }

    public function retur()
    {
$kategoris = Kategori::all();
    	return view ('pages.retur', [ 'kategoris'=>$kategoris ]);
    }

    public function testimoni()
    {
$kategoris = Kategori::all();
$testi = Testimoni::orderby('id', 'desc')->limit(2)->get();
$angka= DB::select( DB::raw("SELECT max(id)-1 as ag FROM testimonis"));
foreach ($angka as $ag) {
	$ag1=$ag->ag;
	}
$ags1= Testimoni::where('id','<',$ag1)->limit(2)->get();

$angka2= DB::select( DB::raw("SELECT max(id)-3 as ag FROM testimonis"));
foreach ($angka2 as $ag2) {
	$ag2=$ag2->ag;
	}
$ags2= Testimoni::where('id','<',$ag2)->limit(2)->get();

$angka3= DB::select( DB::raw("SELECT max(id)-5 as ag FROM testimonis"));
foreach ($angka3 as $ag3) {
	$ag3=$ag3->ag;
	}
$ags3= Testimoni::where('id','<',$ag3)->limit(2)->get();

$angka4= DB::select( DB::raw("SELECT max(id)-7 as ag FROM testimonis"));
foreach ($angka4 as $ag4) {
	$ag4=$ag4->ag;
	}
$ags4= Testimoni::where('id','<',$ag4)->limit(2)->get();
    	return view ('pages.testimoni', [ 'kategoris'=>$kategoris, 'testi'=>$testi, 'ags1'=>$ags1, 'ags2'=>$ags2, 'ags3'=>$ags3, 'ags4'=>$ags4 ]);
    }


public function search(Request $request)
    {
    	$kategoris = Kategori::all();
        $query = $request->get('q');
        $hasil = Produk::where('nama_produk', 'LIKE', '%' . $query . '%')->paginate(6);
        $produks4 = DB::table('produks')->where('rekomendasi', 'Y')->orderBy('kategori_id', 'desc')->limit(8)->get();
        return view('kategori/cari', compact('hasil', 'query', 'kategoris', 'produks4'));
    }

 public function alert()
 {
 	 Alert::warning('ID Transaksi tidak tersedia, harap masukkan data yang valid', 'Informasi');
 	 return redirect ('/index');
 }

}






    

   



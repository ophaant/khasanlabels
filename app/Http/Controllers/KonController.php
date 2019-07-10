<?php

namespace App\Http\Controllers;
use App\Konfirmasi;
use App\Produk;
use App\Kategori;
use App\Transaksi;
use App\Pelanggan;
use Alert;

use RajaOngkir;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Telegram\Bot\Laravel\Facades\Telegram;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Input;
use Telegram\Bot\FileUpload\InputFile;
use Redirect;
use Validator;
use PDF;
use Illuminate\Support\Facades\View;


class KonController extends Controller
{
    //
     public function index() 
	{
	$kategoris = Kategori::all();

		return view('pages/konfirmasi', ['kategoris'=>$kategoris]);

}

public function selesai() 
	{
	$kategoris = Kategori::all();
		return view('pages/selesai',['kategoris'=>$kategoris]);

}

public function store(Request $request)
    {
        $kategoris = Kategori::all();
    	$this->validate($request, [
    		'idorder'		 => 'required',
    		
    		'g-recaptcha-response' => 'required|captcha',
    		'featured_img' => 'mimes:jpeg,jpg,png|max:1000'
    		
    	]);

        $query = $request->get('idorder');
        $hasil = Transaksi::where('formid', 'LIKE', '%' . $query . '%')->get();
        
        $photo = $request->file('featured_img');
    	$filename = time(). '.png';
    	$request->file('featured_img')->storeAs('public/produk', $filename);
        
    	$konfirmasi = new Konfirmasi;
    	$konfirmasi->formid     = $request->idorder;
    	$konfirmasi->pesan     = $request->pesan;
    	
      	$konfirmasi->gambar = $filename;
    	if (count($hasil)) {
            # code...

        DB::table('transaksis')->where('formid',$query)->update(['status'=>'Paid']);
        
        
        
    	$konfirmasi->save();

        $text = "Pembayaran Telah Dilakukan\n"
            . "<b>ID Transaksi: </b>\n"
            . "$request->idorder\n"
            . "<b>Message: </b>\n"
            . $request->pesan;

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        Telegram::sendPhoto([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
            'photo' => InputFile::createFromContents(file_get_contents($photo->getRealPath()), str_random(10) . '.' . $photo->getClientOriginalExtension())
        ]);
    	


    	return redirect('/selesai');
    }else {
        Alert::warning('ID Transaksi tidak tersedia, harap masukkan data yang valid', 'Informasi');

        return view('pages.konfirmasi', ['kategoris'=>$kategoris]);
        }
    }


}

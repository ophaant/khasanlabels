<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RajaOngkir;

class CheckController extends Controller
{
    public function index()
	{
	
		$datas = RajaOngkir::Provinsi()->all();
		$kurir = array(
                array('kurir_id' => 'jne', 'kurir' => 'JNE'),
				array('kurir_id' => 'pos', 'kurir' => 'POS'),
				array('kurir_id' => 'tiki', 'kurir' => 'TIKI')
);

// 		$datas = array(
//                 array('code' => 'jne', 'name' => 'Jalur Nugraha Ekakurir (JNE)', 'costs' => 
//                 	array(
//                 	array('service' => 'OKE', 'description' => 'Ongkos Kirim Ekonomis', 'cost' => 
//                 		array(
//                 		array('value' => 42000, 'etd' => '4-5', 'note' => '')
//                 			)
//                 		)


// 		 			,
		 		
//                 	array('service' => 'REG', 'description' => 'Layanan Reguler', 'cost' => 
//                 		array(
//                 		array('value' => 48000, 'etd' => '2-3', 'note' => '')
//                 			)
//                 		),

//                 	array('service' => 'YES', 'description' => 'Yakin Esok Sampai', 'cost' => 
//                 		array(
//                 		array('value' => 104000, 'etd' => '1-1', 'note' => '')
//                 			)
//                 		)


		 			
// )

//                 )
		 
// );
// 		$datas = RajaOngkir::Kota()->find(501);
// 		dd($datas);
// $datak = RajaOngkir::Kota()->byProvinsi(1)->get();

// $data = RajaOngkir::Cost([
// 	'origin' 		=> 501, // id kota asal
// 	'destination' 	=> 114, // id kota tujuan
// 	'weight' 		=> 1700, // berat satuan gram
// 	'courier' 		=> 'jne' // kode kurir pengantar ( jne / tiki / pos )
// ])->get();
		
// dd($data);
		
		return view('pages/checkout', ['datas' => $datas, 'kurir' => $kurir]);
	
	}

	 public function getStateList(Request $request)
    {
    	
    	
    	
    	
    	
    		$data = RajaOngkir::Kota()->byProvinsi($request->country_id)->get();
    		
    		
    		return response()->json($data);
    	
    	
    }


    public function getKurirList(Request $request)
    {
    	
    	
    $tujuan = $request->kota;

    $jenis = $request->kurir_id;
    	
    	
    		$data = RajaOngkir::Cost([
	'origin' 		=> 501, // id kota asal
	'destination' 	=> $tujuan, // id kota tujuan
	'weight' 		=> 1700, // berat satuan gram
	'courier' 		=> $jenis // kode kurir pengantar ( jne / tiki / pos )
])->get();
    		
    		
    		return response()->json($data);
    	
    	
    }

    public function savePelanggan() 
	{

	
	return redirect()->action(
    'HomeController@index'
);

	}


}

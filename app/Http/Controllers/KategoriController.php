<?php

namespace App\Http\Controllers;
use App\Kategori;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function index()
    {
    	
    	//insert biasa
    	//$Kategori = new Kategori;
    	//$Kategori->title = 'judul 3';
    	//$Kategori->description = 'isi dari judul 3';
    	//$Kategori->save();

    	//insert mass assignment
    	// Kategori::create([
    	// 	'title'=>'judul 4',
    	// 	'description'=> 'ini adalah isi dari judul 4'
    	// ]);

    	//update
    	// $Kategori = Kategori::where('title','judul 4')->first();
    	// $Kategori->title = 'judul 5';
    	// $Kategori->save();


    	//update mass assignment
    	// Kategori::find(5)->update([
    	// 	'title' => 'judul baru',
    	// 	'description' => 'ini adalah judul baru'
    	// ]);

    	$kategoris = Kategori::all();
    	
    	return view ('admin/kategori/home',['kategoris'=>$kategoris]);
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

    	$Kategori = Kategori::find($id);
    	return view ('admin/kategori/single', ['kategori'=>$kategori]);
    }


    public function create()
    {
    	
    	return view ('admin/kategori/create');
    }


    public function store(Request $request)
    {
    	$this->validate($request, [
    		'nama_kategori'		 => 'required'
    		
    	]);

    	$kategori = new Kategori;
    	$kategori->nama_kategori      = $request->nama_kategori;
    	
    	$kategori->save();
    	
    	return redirect('admin/kategori');
    }


    public function edit($id)
    {
    	$kategori = Kategori::find($id);
    	return view ('admin/kategori/edit', ['kategori'=>$kategori]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'nama_kategori'		 => 'required'
    		
    	]);
    	$kategori = Kategori::find($id);
    	$kategori->nama_kategori     = $request->nama_kategori;
    	
    	$kategori->save();

    	return redirect('admin/kategori/');
    }

    public function destroy($id)
    {
    	$kategori = Kategori::find($id);
    	$kategori->delete();

    	return redirect('admin/kategori');
    }
}
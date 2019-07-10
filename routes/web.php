<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('/read/{slug}', 'HomeController@showproduk');

Route::get('query', 'HomeController@search');
Route::get('/alert', 'HomeController@alert');

Route::get('/konfirmasi', 'KonController@index');
Route::get('/testi', 'TestiController@index');
Route::get('/kategori/{id}', 'HomeController@show');
Route::get('/tentangkami', 'HomeController@kami');
Route::get('/ketentuan', 'HomeController@ketentuan');
Route::get('/panduan', 'HomeController@panduan');
Route::get('/retur', 'HomeController@retur');
Route::get('/testimoni', 'HomeController@testimoni');
Route::post('/bayar', 'KonController@store');
Route::post('/tesput', 'TestiController@store');
Route::get('/selesai', 'KonController@selesai');

Route::get('produk/cart/{id}', 'HomeController@tambahItem');
Route::get('/cart/delete/{id}', 'HomeController@hapusItem');
Route::get('/cart/add/{id}', 'HomeController@add');
Route::get('/cart/remove/{id}', 'HomeController@remove');
Route::get('cart/checkout', 'HomeController@checkout');
Route::post('/cart/{form_id}/save', ['as'=>'pelanggan.save','uses'=>'HomeController@savePelanggan']);

Route::get('/checkout', 'CheckController@index');
Route::get('/checkout/list', 'CheckController@getStateList');
Route::get('/checkout/kurir', 'CheckController@getKurirList');
Route::post('pdfview', 'HomeController@pdfview');
// Route::get('/bayar/transaksi', 'HomeController@checkout');
// Route::get('/bayar/{form_id}/invoice', 'HomeController@invoice');
// Route::post('/bayar/', 'HomeController@savePelanggan');


Route::get('/admin', 'DashboardController@index');

Route::get('/admin/kategori', 'KategoriController@index');
Route::get('/admin/kategori/create', 'KategoriController@create');
Route::post('/admin/kategori', 'KategoriController@store');
Route::get('/admin/kategori/{id}', 'KategoriController@show');
Route::get('/admin/kategori/{id}/edit', 'KategoriController@edit');
Route::put('/admin/kategori/{id}', 'KategoriController@update');
Route::delete('/admin/kategori/{id}', 'KategoriController@destroy');


Route::get('/admin/pelanggan', 'PelangganController@index');
Route::delete('/admin/pelanggan/{id}', 'PelangganController@destroy');

Route::get('/admin/transaksi', 'TransaksiController@index');
Route::get('/admin/transaksi2', 'TransaksiController@index2');
Route::get('/admin/transaksi/{id}', 'TransaksiController@show');
Route::delete('/admin/transaksi/{id}', 'TransaksiController@destroy');

Route::get('/admin/laporan', 'LaporanController@index');
Route::post('admin/laporan/periode',['as' => 'laporan.show','uses' => 'LaporanController@getPeriode']);


Route::get('/admin/produk', 'ProdukController@index');
Route::get('/admin/produk/create', 'ProdukController@create');
Route::post('/admin/produk', 'ProdukController@store');
Route::get('/admin/produk/{id}', 'ProdukController@show');
Route::get('/admin/produk/{id}/edit', 'ProdukController@edit');
Route::put('/admin/produk/{id}', 'ProdukController@update');
Route::delete('/admin/produk/{id}', 'ProdukController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index2')->name('home');

Route::get('/updated-activity', 'TelegramBotController@updatedActivity');

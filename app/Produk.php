<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // public $timestamps = false;
	protected $fillable = ['nama_produk', 'deskripsi','harga','produk_id','slug_nama'];

	public function transaksi()
  {
    return $this->hasMany('App\Transaksi','produk_id');
  }
}

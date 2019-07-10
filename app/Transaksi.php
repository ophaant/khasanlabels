<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $fillable = ['produk_id', 'formid','qty','total_harga','status'];
	
   public function produk()
  {
   return $this->belongsTo('App\Produk','produk_id');
  }

  public function konfirmasi()
  {
   return $this->belongsTo('App\konfirmasi','formid');
  }
}

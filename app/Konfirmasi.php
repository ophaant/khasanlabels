<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    //
    protected $fillable = ['formid'];

	public function transaksi()
  {
    return $this->hasMany('App\Transaksi','formid');
  }
}

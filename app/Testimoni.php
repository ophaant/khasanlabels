<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    //
    protected $fillable = ['formid'];

	public function konfirmasi()
  {
    return $this->hasMany('App\Konfirmasi','formid');
  }
}

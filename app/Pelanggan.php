<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $fillable = ['nama', 'telepon', 'provinsi', 'kota', 'alamat',    'kodepos', 'kurir', 'created_at', 'updated_at'];
}

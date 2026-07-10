<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LokasiKerja extends Model
{
    protected $table = 'ref.lokasi_kerja';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
}

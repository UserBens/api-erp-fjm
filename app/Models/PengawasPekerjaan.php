<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengawasPekerjaan extends Model
{
    protected $table = 'data.pengawas_pekerjaan';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
}

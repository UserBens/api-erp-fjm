<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LokasiKerjaSubkon extends Model
{
    protected $table = 'ref.perusahaan_subkon';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengawasIntraUser extends Model
{
    protected $table = 'akses.intra_user';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kualifikasi extends Model
{
    protected $table = 'ref.kualifikasi';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMobile extends Model
{
    protected $table = 'mobile.user_mobile';
    protected $primaryKey = 'id_pass';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
}

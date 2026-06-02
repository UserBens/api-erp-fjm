<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalaryMst extends Model
{
    protected $table = 'mobile.salary_mst';
    protected $primaryKey = 'nomor';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeuanganJenis extends Model
{
    use HasFactory;

    protected $table = 'keuangan_jenis';
    protected $guarded = [];
    // protected $fillable = [];

    public $timestamps = false;
}

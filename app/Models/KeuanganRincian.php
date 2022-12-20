<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeuanganRincian extends Model
{
    use HasFactory;

    protected $table = 'keuangan_rincian';
    protected $guarded = [];
    // protected $fillable = [];

    public function jenis()
    {
        return $this->belongsTo(KeuanganJenis::class, 'jenis_id', 'id');
    }
}

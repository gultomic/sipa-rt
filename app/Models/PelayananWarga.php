<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;

class PelayananWarga extends Model
{
    use HasFactory;

    protected $table = 'pelayanan_warga';
    protected $guarded = [];
    // protected $fillable = [];
    protected $casts = [
        'catatan' => AsCollection::class,
    ];

    public function jenis()
    {
        return $this->belongsTo(PelayananJenis::class, 'pelayanan_id', 'id');
    }

    public function warga()
    {
        return $this->belongsTo(DataWarga::class, 'warga_id', 'nik');
    }
}

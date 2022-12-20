<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;

class KartuKeluarga extends Model
{
    use HasFactory;

    protected $table = 'kartu_keluarga';
    protected $guarded = [];
    // protected $fillable = [];
    protected $keyType = 'string';
    protected $casts = [
        'refs' => AsCollection::class,
    ];

    public $incrementing = false;

    public function anggota()
    {
        return $this->hasMany(DataWarga::class, 'nkk', 'nkk');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;

class DataWarga extends Model
{
    use HasFactory;

    protected $table = 'data_warga';
    protected $guarded = [];
    // protected $fillable = [];
    protected $primaryKey = 'nik';
    protected $keyType = 'string';
    protected $casts = [
        'refs' => AsCollection::class,
    ];

    public $incrementing = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;

class PelayananJenis extends Model
{
    use HasFactory;

    protected $table = 'pelayanan_jenis';
    protected $guarded = [];
    // protected $fillable = [];
    // protected $casts = [
    //     'refs' => AsCollection::class,
    // ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HasilPembangunan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'kegiatan',
        'jenis',
        'volume',
        'sumber_dana',
        'pagu',
        'tahun',
        'kecamatan',
    ];

    protected $hidden = [];
}

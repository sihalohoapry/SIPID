<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgresKegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pekerjaan',
        'lokasi',
        'jenis',
        'volume',
        'sumber_dana',
        'nilai_pagu',
        'nilai_kontrak',
        'progres_fisik',
        'progres_keuangan',
        'keterangan',
        'dinas',
        'bidang',
        'tahun',
        'bulan',
    ];

}

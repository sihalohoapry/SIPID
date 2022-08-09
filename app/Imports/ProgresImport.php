<?php

namespace App\Imports;

use App\Models\ProgresKegiatan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProgresImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ProgresKegiatan([
        'nama_pekerjaan' => $row['nama_pekerjaan'],
        'lokasi' => $row['lokasi'],
        'jenis' => $row['jenis'],
        'volume' => $row['volume'],
        'sumber_dana' => $row['sumber_dana'],
        'nilai_pagu' => $row['nilai_pagu'],
        'nilai_kontrak' => $row['nilai_kontrak'],
        'progres_fisik' => $row['progres_fisik'],
        'progres_keuangan' => $row['progres_keuangan'],
        'keterangan' => $row['keterangan'],
        'dinas' => $row['dinas'],
        'bidang' => $row['bidang'],
        'tahun' => $row['tahun'],
        'bulan' => $row['bulan'],
        ]);
    }
}

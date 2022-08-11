<?php

namespace App\Imports;

use App\Models\HasilPembangunan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ImportDataHasil implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new HasilPembangunan([
            'kegiatan' => $row['kegiatan'],
            'jenis' => $row['jenis'],
            'volume' => $row['volume'],
            'sumber_dana' => $row['sumber_dana'],
            'pagu' => $row['pagu'],
            'tahun' => $row['tahun'],
            'kecamatan' => $row['kecamatan'],
            'dinas' => $row['dinas'],
            'bidang' => $row['bidang'],
        ]);
    }
}

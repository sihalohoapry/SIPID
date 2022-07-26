<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RequestProgresKegiatan extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_pekerjaan'=>'nullable|string|max:500',
        'lokasi'=>'nullable|string|max:500',
        'jenis'=>'nullable|string|max:50',
        'volume'=>'nullable|string|max:50',
        'sumber_dana'=>'nullable|string|max:500',
        'nilai_pagu'=>'nullable|numeric',
        'nilai_kontrak'=>'nullable|numeric',
        'progres_fisik'=>'nullable|string|max:500',
        'progres_keuangan'=>'nullable|numeric',
        'keterangan'=>'nullable|string|max:1000',
        'dinas'=>'nullable|string|max:100',
        'bidang'=>'nullable|string|max:100',
        'tahun'=>'nullable|string|max:10',
        'bulan'=>'nullable|string|max:20',
        ];
    }
}

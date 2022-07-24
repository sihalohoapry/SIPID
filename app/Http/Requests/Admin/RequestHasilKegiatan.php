<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RequestHasilKegiatan extends FormRequest
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
            'kegiatan'=>'nullable|string|max:500',
            'jenis'=>'nullable|string|max:100',
            'volume'=>'nullable|string|max:50',
            'sumber_dana'=>'nullable|string|max:50',
            'pagu'=>'nullable|numeric',
            'tahun'=>'nullable|string|max:10',
            'kecamatan'=>'nullable|string|max:50',
            'dinas'=>'nullable|string|max:100',
            'bidang'=>'nullable|string|max:100',
        ];
    }
}

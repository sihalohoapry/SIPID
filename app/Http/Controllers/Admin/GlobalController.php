<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RequestHasilKegiatan;
use App\Models\HasilPembangunan;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function createHasilKegiatan($dinas , $bidang){
        return view('pages.create-hasil-pembangunan',
        [ 'dinas' => $dinas, 'bidang' => $bidang ]);
    }

    public function postHasilKegiatan(RequestHasilKegiatan $request, $dinas, $bidang ){

        $data = $request->all();
        $data['dinas'] = $dinas;
        $data['bidang'] = $bidang;

        HasilPembangunan::create($data);
        return redirect()->route('index-hasil-binamarga')->with('status', 'Berhasil menambahkan hasil pembangunan');

    }
}

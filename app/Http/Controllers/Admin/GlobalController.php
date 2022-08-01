<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RequestHasilKegiatan;
use App\Http\Requests\Admin\RequestProgresKegiatan;
use App\Models\HasilPembangunan;
use App\Models\ProgresKegiatan;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function createHasilKegiatan($dinas , $bidang){
        return view('pages.create-hasil-pembangunan',
        [ 'dinas' => $dinas, 'bidang' => $bidang ]);
    }
    public function createProgresKegiatan($dinas , $bidang){
        return view('pages.create-progres-pembangunan',
        [ 'dinas' => $dinas, 'bidang' => $bidang ]);
    }

    public function postHasilKegiatan(RequestHasilKegiatan $request, $dinas, $bidang ){

        $data = $request->all();
        $data['dinas'] = $dinas;
        $data['bidang'] = $bidang;

        HasilPembangunan::create($data);
        if($bidang == "binamarga"){
            return redirect()->route('index-hasil-binamarga')->with('status', 'Berhasil menambahkan hasil pembangunan');
        }
        if($bidang == "cipta-karya"){
            return redirect()->route('index-hasil-ciptakarya')->with('status', 'Berhasil menambahkan hasil pembangunan');
        }
        if($bidang == "pengairan"){
            return redirect()->route('index-hasil-pengairan')->with('status', 'Berhasil menambahkan hasil pembangunan');
        }

    }
    public function postProgresKegiatan(RequestProgresKegiatan $request, $dinas, $bidang ){

        $data = $request->all();
        $data['dinas'] = $dinas;
        $data['bidang'] = $bidang;

        ProgresKegiatan::create($data);
        if($bidang == "binamarga"){
            return redirect()->route('index-progress-binamarga')->with('status', 'Berhasil menambahkan hasil pembangunan');
        }
        if($bidang == "cipta-karya"){
            return redirect()->route('index-progress-ciptakarya')->with('status', 'Berhasil menambahkan hasil pembangunan');
        }
        if($bidang == "pengairan"){
            return redirect()->route('index-progress-pengairan')->with('status', 'Berhasil menambahkan hasil pembangunan');
        }

    }
}

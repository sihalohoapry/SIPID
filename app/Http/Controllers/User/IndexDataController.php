<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RequestHasilKegiatan;
use App\Http\Requests\Admin\RequestProgresKegiatan;
use App\Models\HasilPembangunan;
use App\Models\ProgresKegiatan;
use Yajra\DataTables\Facades\DataTables;

class IndexDataController extends Controller
{

    public function index()
    {
        $puprProgres = ProgresKegiatan::where('dinas', 'pupr')->count();
        $puprHasil = HasilPembangunan::where('dinas', 'pupr')->count();
        $perhubunganProgres = ProgresKegiatan::where('dinas', 'perhubungan')->count();
        $perhubunganHasil = HasilPembangunan::where('dinas', 'perhubungan')->count();
        $lhProgres = ProgresKegiatan::where('dinas', 'dinas-lingkungan-hidup')->count();
        $lhHasil = HasilPembangunan::where('dinas', 'dinas-lingkungan-hidup')->count();
        $perkimtanProgres = ProgresKegiatan::where('dinas', 'perkim')->count();
        $perkimtanHasil = HasilPembangunan::where('dinas', 'perkim')->count();

        return view('pages.user-dashboard',[
            'puprProgres' => $puprProgres,
            'puprHasil' => $puprHasil,
            'perhubunganProgres' => $perhubunganProgres,
            'perhubunganHasil' => $perhubunganHasil,
            'lhProgres' => $lhProgres,
            'lhHasil' => $lhHasil,
            'perkimtanProgres' => $perkimtanProgres,
            'perkimtanHasil' => $perkimtanHasil,
        ]);
    }
    //PUPR
    public function indexHasilBinaMarga(){
        if (request()->ajax()) {
            $query = HasilPembangunan::query()->where(['dinas'=>"pupr", 'bidang'=>'binamarga']);

            return DataTables::of($query)
            
            ->make();
        }
        return view('pages.user.pupr.bina-marga.index-hasil');
    }

    public function indexProgressBinaMarga(){
        if (request()->ajax()) {
            $query = ProgresKegiatan::query()->where(['dinas'=>"pupr", 'bidang'=>'binamarga']);

            return DataTables::of($query)
            
            
            ->make();
        }
        return view('pages.user.pupr.bina-marga.index-progress');
    }
    //PUPR=> Cipta karya
    public function indexHasilCiptakarya(){
        if (request()->ajax()) {
            $query = HasilPembangunan::query()->where(['dinas'=>"pupr", 'bidang'=>'cipta-karya']);

            return DataTables::of($query)
            
            ->make();
        }
        return view('pages.user.pupr.cipta-karya.index-hasil');
    }
    public function indexProgressCiptakarya(){
        if (request()->ajax()) {
            $query = ProgresKegiatan::query()->where(['dinas'=>"pupr", 'bidang'=>'cipta-karya']);

            return DataTables::of($query)
            
            
            ->make();
        }
        return view('pages.user.pupr.cipta-karya.index-progress');
    }
    //PUPR=> Perairan
    public function indexHasilPengairan(){
        if (request()->ajax()) {
            $query = HasilPembangunan::query()->where(['dinas'=>"pupr", 'bidang'=>'pengairan']);

            return DataTables::of($query)
            
            ->make();
        }
        return view('pages.user.pupr.pengairan.index-hasil');
    }

    public function indexProgressPengairan(){
        if (request()->ajax()) {
            $query = ProgresKegiatan::query()->where(['dinas'=>"pupr", 'bidang'=>'pengairan']);

            return DataTables::of($query)
            
            
            ->make();
        }
        return view('pages.user.pupr.pengairan.index-progress');
    }

    //PERKIMTAN
    //perumahan dan pertanahan
    public function indexHasilPerumahanPertanahan(){
        if (request()->ajax()) {
            $query = HasilPembangunan::query()->where(['dinas'=>"perkim", 'bidang'=>'perumahan-pertanahan']);

            return DataTables::of($query)
            
            ->make();
        }
        return view('pages.user.perkim.pemukimanpertanahan.index-hasil');
    }

    public function indexProgressPerumahanPertanahan(){
        if (request()->ajax()) {
            $query = ProgresKegiatan::query()->where(['dinas'=>"perkim", 'bidang'=>'perumahan-pertanahan']);

            return DataTables::of($query)
            
            
            ->make();
        }
        return view('pages.user.perkim.pemukimanpertanahan.index-progress');
    }
    //plpp
    public function indexHasilPLPP(){
        if (request()->ajax()) {
            $query = HasilPembangunan::query()->where(['dinas'=>"perkim", 'bidang'=>'plpp']);

            return DataTables::of($query)
            
            ->make();
        }
        return view('pages.user.perkim.plpp.index-hasil');
    }

    public function indexProgressPLPP(){
        if (request()->ajax()) {
            $query = ProgresKegiatan::query()->where(['dinas'=>"perkim", 'bidang'=>'plpp']);

            return DataTables::of($query)
            
            
            ->make();
        }
        return view('pages.user.perkim.plpp.index-progress');
    }

    //PERHUB
//lalulintas
    public function indexHasilLaluLintas(){
        if (request()->ajax()) {
            $query = HasilPembangunan::query()->where(['dinas'=>"perhubungan", 'bidang'=>'lalu-lintas']);

            return DataTables::of($query)
            
            ->make();
        }
        return view('pages.user.perhub.lalulintas.index-hasil');
    }

    public function indexProgressLaluLintas(){
        if (request()->ajax()) {
            $query = ProgresKegiatan::query()->where(['dinas'=>"perhubungan", 'bidang'=>'lalu-lintas']);

            return DataTables::of($query)
            
            
            ->make();
        }
        return view('pages.user.perhub.lalulintas.index-progress');
    }

    //perairan
    public function indexHasilPerairan(){
        if (request()->ajax()) {
            $query = HasilPembangunan::query()->where(['dinas'=>"perhubungan", 'bidang'=>'perairan']);

            return DataTables::of($query)
            
            ->make();
        }
        return view('pages.user.perhub.perairan.index-hasil');
    }

    public function indexProgressPerairan(){
        if (request()->ajax()) {
            $query = ProgresKegiatan::query()->where(['dinas'=>"perhubungan", 'bidang'=>'perairan']);

            return DataTables::of($query)
            
            
            ->make();
        }
        return view('pages.user.perhub.perairan.index-progress');
    }

    //LINGKUNGAN HIDUP
 //psp
 public function indexHasilPsp(){
    if (request()->ajax()) {
        $query = HasilPembangunan::query()->where(['dinas'=>"dinas-lingkungan-hidup", 'bidang'=>'pengolahan-sampah-dan-pertamanan']);

        return DataTables::of($query)
        
        
        ->make();
    }
    return view('pages.user.dlhd.index-hasil');
}

public function indexProgressPsp(){
    if (request()->ajax()) {
        $query = ProgresKegiatan::query()->where(['dinas'=>"dinas-lingkungan-hidup", 'bidang'=>'pengolahan-sampah-dan-pertamanan']);

        return DataTables::of($query)
        
        
        ->make();
    }
    return view('pages.user.dlhd.index-progress');
}
}

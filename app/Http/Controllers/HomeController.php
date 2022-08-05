<?php

namespace App\Http\Controllers;

use App\Models\HasilPembangunan;
use App\Models\ProgresKegiatan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $puprProgres = ProgresKegiatan::where('dinas', 'pupr')->count();
        $puprHasil = HasilPembangunan::where('dinas', 'pupr')->count();
        $perhubunganProgres = ProgresKegiatan::where('dinas', 'perhubungan')->count();
        $perhubunganHasil = HasilPembangunan::where('dinas', 'perhubungan')->count();
        $lhProgres = ProgresKegiatan::where('dinas', 'dinas-lingkungan-hidup')->count();
        $lhHasil = HasilPembangunan::where('dinas', 'dinas-lingkungan-hidup')->count();
        $perkimtanProgres = ProgresKegiatan::where('dinas', 'perkimtan')->count();
        $perkimtanHasil = HasilPembangunan::where('dinas', 'perkimtan')->count();

        return view('pages.dashboard',[
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
}

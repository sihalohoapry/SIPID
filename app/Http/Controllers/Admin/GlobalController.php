<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function createHasilKegiatan($dinas , $bidang){
        return view('pages.create-hasil-pembangunan',
        [ 'dinas' => $dinas, 'bidang' => $bidang ]
    );
        
    }
}

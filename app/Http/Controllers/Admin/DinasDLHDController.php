<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RequestHasilKegiatan;
use App\Http\Requests\Admin\RequestProgresKegiatan;
use App\Models\HasilPembangunan;
use App\Models\ProgresKegiatan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DinasDLHDController extends Controller
{
    //psp
    public function indexHasilPsp(){
        if (request()->ajax()) {
            $query = HasilPembangunan::query()->where(['dinas'=>"dinas-lingkungan-hidup", 'bidang'=>'pengolahan-sampah-dan-pertamanan']);

            return DataTables::of($query)
            ->addColumn('action', function ($item) {
                return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                type="button" id="action' .  $item->id . '"
                                    data-toggle="dropdown" 
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    Aksi
                            </button>
                            <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                <a class="dropdown-item" href="' . route('edit-hasil', $item->id) . '">
                                    Sunting
                                </a>
                                <a class="dropdown-item " onclick="return confirm(`Kamu yakin menghapus data ini?`)"
                                href="' . route('delete-hasil', $item->id) . '">
                                    Hapus
                                </a>

                                
                            </div>
                        </div>
                </div>';
            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('pages.dlhd.index-hasil');
    }

    public function indexProgressPsp(){
        if (request()->ajax()) {
            $query = ProgresKegiatan::query()->where(['dinas'=>"dinas-lingkungan-hidup", 'bidang'=>'pengolahan-sampah-dan-pertamanan']);

            return DataTables::of($query)
            ->addColumn('action', function ($item) {
                return '
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                type="button" id="action' .  $item->id . '"
                                    data-toggle="dropdown" 
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    Aksi
                            </button>
                            <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                <a class="dropdown-item" href="' . route('edit-progres', $item->id) . '">
                                    Sunting
                                </a>
                                <a class="dropdown-item " onclick="return confirm(`Kamu yakin menghapus data ini?`)"
                                href="' . route('delete-progres', $item->id) . '">
                                    Hapus
                                </a>

                                
                            </div>
                        </div>
                </div>';
            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('pages.dlhd.index-progress');
    }


    public function deleteHasil($id) {
        $data = HasilPembangunan::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('status', 'Berhasil mengubah data');

    }

    public function editHasil($id) {
        $data = HasilPembangunan::findOrFail($id);
        return view('pages.edit-hasil-pembangunan', [
            'data'=> $data
        ]);
    }

    public function updateHasil(RequestHasilKegiatan $request, $id){
        $item = $request->all();
        $data = HasilPembangunan::findOrFail($id);
        $data->update($item);
        return redirect()->route('index-hasil-psp')->with('status', 'Berhasil mengubah data');

    }


    public function deleteProgres($id) {
        $data = ProgresKegiatan::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('status', 'Berhasil mengubah data');

    }

    public function editProgres($id) {
        $data = ProgresKegiatan::findOrFail($id);
        return view('pages.edit-progres-pembangunan', [
            'data'=> $data
        ]);
    }

    public function updateProgres(RequestProgresKegiatan $request, $id){
        $item = $request->all();
        $data = ProgresKegiatan::findOrFail($id);
        $data->update($item);
        if($data->bidang == "pengolahan-sampah-dan-pertamanan"){
            return redirect()->route('index-progress-psp')->with('status', 'Berhasil mengubah data');
        }
        
    }
}

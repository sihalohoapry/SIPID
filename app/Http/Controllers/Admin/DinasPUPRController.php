<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HasilPembangunan;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class DinasPUPRController extends Controller
{
    public function indexHasilBinaMarga(){
        if (request()->ajax()) {
            $query = HasilPembangunan::query();

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
                                <a class="dropdown-item" href="">
                                    Sunting
                                </a>
                                <form action="" method="POST">
                                    ' . method_field('delete') . csrf_field() . '
                                    <button type="submit" class="dropdown-item text-danger">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                </div>';
            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('pages.pupr.bina-marga.index-hasil');
    }
    public function indexProgressBinaMarga(){
        return view('pages.pupr.bina-marga.index-progress');
    }
}

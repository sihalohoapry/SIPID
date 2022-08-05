<?php

use App\Http\Controllers\Admin\DinasDLHDController;
use App\Http\Controllers\Admin\DinasPerhubController;
use App\Http\Controllers\Admin\DinasPerkimtanController;
use App\Http\Controllers\Admin\DinasPUPRController;
use App\Http\Controllers\Admin\GlobalController;
use App\Http\Controllers\User\IndexDataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::match(["GET", "POST"], "/register", function () {
    return redirect("/login");
})->name("register");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth','admin']);


//PUPR => Bina Marga
Route::get('/bina-marga/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan')->middleware(['auth','admin']);
Route::get('/bina-marga/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan')->middleware(['auth','admin']);
Route::post('/bina-marga/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan')->middleware(['auth','admin']);
Route::post('/bina-marga/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan')->middleware(['auth','admin']);

Route::get('/bina-marga/hasil-kegiatan', [DinasPUPRController::class, 'indexHasilBinaMarga'])->name('index-hasil-binamarga')->middleware(['auth','admin']);
Route::get('/bina-marga/hasil-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteHasil'])->name('delete-hasil')->middleware(['auth','admin']);
Route::get('/bina-marga/edit-hasil-kegiatan/{id}', [DinasPUPRController::class, 'editHasil'])->name('edit-hasil')->middleware(['auth','admin']);
Route::put('/bina-marga/update-hasil-kegiatan/{id}', [DinasPUPRController::class, 'updateHasil'])->name('update-hasil')->middleware(['auth','admin']);

Route::get('/bina-marga/progress-kegiatan', [DinasPUPRController::class, 'indexProgressBinaMarga'])->name('index-progress-binamarga')->middleware(['auth','admin']);
Route::get('/bina-marga/progres-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteProgres'])->name('delete-progres')->middleware(['auth','admin']);
Route::get('/bina-marga/edit-progres-kegiatan/{id}', [DinasPUPRController::class, 'editProgres'])->name('edit-progres')->middleware(['auth','admin']);
Route::put('/bina-marga/update-progres-kegiatan/{id}', [DinasPUPRController::class, 'updateProgres'])->name('update-progres')->middleware(['auth','admin']);

//PUPR => cipta karya
Route::get('/cipta-karya/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-ciptakarya')->middleware(['auth','admin']);
Route::get('/cipta-karya/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-ciptakarya')->middleware(['auth','admin']);
Route::post('/cipta-karya/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-ciptakarya')->middleware(['auth','admin']);
Route::post('/cipta-karya/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-ciptakarya')->middleware(['auth','admin']);

Route::get('/cipta-karya/hasil-kegiatan', [DinasPUPRController::class, 'indexHasilCiptakarya'])->name('index-hasil-ciptakarya')->middleware(['auth','admin']);
Route::get('/cipta-karya/hasil-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteHasil'])->name('delete-hasil')->middleware(['auth','admin']);
Route::get('/cipta-karya/edit-hasil-kegiatan/{id}', [DinasPUPRController::class, 'editHasil'])->name('edit-hasil')->middleware(['auth','admin']);
Route::put('/cipta-karya/update-hasil-kegiatan/{id}', [DinasPUPRController::class, 'updateHasil'])->name('update-hasil')->middleware(['auth','admin']);

Route::get('/cipta-karya/progress-kegiatan', [DinasPUPRController::class, 'indexProgressCiptakarya'])->name('index-progress-ciptakarya')->middleware(['auth','admin']);
Route::get('/cipta-karya/progres-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteProgres'])->name('delete-progres')->middleware(['auth','admin']);
Route::get('/cipta-karya/edit-progres-kegiatan/{id}', [DinasPUPRController::class, 'editProgres'])->name('edit-progres')->middleware(['auth','admin']);
Route::put('/cipta-karya/update-progres-kegiatan/{id}', [DinasPUPRController::class, 'updateProgres'])->name('update-progres')->middleware(['auth','admin']);

//PUPR => pengairan
Route::get('/pengairan/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-pengairan')->middleware(['auth','admin']);
Route::get('/pengairan/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-pengairan')->middleware(['auth','admin']);
Route::post('/pengairan/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-pengairan')->middleware(['auth','admin']);
Route::post('/pengairan/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-pengairan')->middleware(['auth','admin']);

Route::get('/pengairan/hasil-kegiatan', [DinasPUPRController::class, 'indexHasilPengairan'])->name('index-hasil-pengairan')->middleware(['auth','admin']);
Route::get('/pengairan/hasil-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteHasil'])->name('delete-hasil')->middleware(['auth','admin']);
Route::get('/pengairan/edit-hasil-kegiatan/{id}', [DinasPUPRController::class, 'editHasil'])->name('edit-hasil')->middleware(['auth','admin']);
Route::put('/pengairan/update-hasil-kegiatan/{id}', [DinasPUPRController::class, 'updateHasil'])->name('update-hasil')->middleware(['auth','admin']);

Route::get('/pengairan/progress-kegiatan', [DinasPUPRController::class, 'indexProgressPengairan'])->name('index-progress-pengairan')->middleware(['auth','admin']);
Route::get('/pengairan/progres-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteProgres'])->name('delete-progres')->middleware(['auth','admin']);
Route::get('/pengairan/edit-progres-kegiatan/{id}', [DinasPUPRController::class, 'editProgres'])->name('edit-progres')->middleware(['auth','admin']);
Route::put('/pengairan/update-progres-kegiatan/{id}', [DinasPUPRController::class, 'updateProgres'])->name('update-progres')->middleware(['auth','admin']);


//PERHUBUNGAN => LALU LINTAS
Route::get('/lalu-lintas/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-lalu-lintas')->middleware(['auth','admin']);
Route::get('/lalu-lintas/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-lalu-lintas')->middleware(['auth','admin']);
Route::post('/lalu-lintas/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-lalu-lintas')->middleware(['auth','admin']);
Route::post('/lalu-lintas/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-lalu-lintas')->middleware(['auth','admin']);

Route::get('/lalu-lintas/hasil-kegiatan', [DinasPerhubController::class, 'indexHasilLaluLintas'])->name('index-hasil-lalu-lintas')->middleware(['auth','admin']);
Route::get('/lalu-lintas/hasil-kegiatan/delete/{id}', [DinasPerhubController::class, 'deleteHasil'])->name('delete-hasil')->middleware(['auth','admin']);
Route::get('/lalu-lintas/edit-hasil-kegiatan/{id}', [DinasPerhubController::class, 'editHasil'])->name('edit-hasil')->middleware(['auth','admin']);
Route::put('/lalu-lintas/update-hasil-kegiatan/{id}', [DinasPerhubController::class, 'updateHasil'])->name('update-hasil')->middleware(['auth','admin']);

Route::get('/lalu-lintas/progress-kegiatan', [DinasPerhubController::class, 'indexProgressLaluLintas'])->name('index-progres-lalu-lintas')->middleware(['auth','admin']);
Route::get('/lalu-lintas/progres-kegiatan/delete/{id}', [DinasPerhubController::class, 'deleteProgres'])->name('delete-progres')->middleware(['auth','admin']);
Route::get('/lalu-lintas/edit-progres-kegiatan/{id}', [DinasPerhubController::class, 'editProgres'])->name('edit-progres')->middleware(['auth','admin']);
Route::put('/lalu-lintas/update-progres-kegiatan/{id}', [DinasPerhubController::class, 'updateProgres'])->name('update-progres')->middleware(['auth','admin']);

//PERHUBUNGAN => PERAIRAN
Route::get('/perairan/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-perairan')->middleware(['auth','admin']);
Route::get('/perairan/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-perairan')->middleware(['auth','admin']);
Route::post('/perairan/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-perairan')->middleware(['auth','admin']);
Route::post('/perairan/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-perairan')->middleware(['auth','admin']);

Route::get('/perairan/hasil-kegiatan', [DinasPerhubController::class, 'indexHasilPerairan'])->name('index-hasil-perairan')->middleware(['auth','admin']);
Route::get('/perairan/hasil-kegiatan/delete/{id}', [DinasPerhubController::class, 'deleteHasil'])->name('delete-hasil')->middleware(['auth','admin']);
Route::get('/perairan/edit-hasil-kegiatan/{id}', [DinasPerhubController::class, 'editHasil'])->name('edit-hasil')->middleware(['auth','admin']);
Route::put('/perairan/update-hasil-kegiatan/{id}', [DinasPerhubController::class, 'updateHasil'])->name('update-hasil')->middleware(['auth','admin']);

Route::get('/perairan/progress-kegiatan', [DinasPerhubController::class, 'indexProgressPerairan'])->name('index-progress-perairan')->middleware(['auth','admin']);
Route::get('/perairan/progres-kegiatan/delete/{id}', [DinasPerhubController::class, 'deleteProgres'])->name('delete-progres')->middleware(['auth','admin']);
Route::get('/perairan/edit-progres-kegiatan/{id}', [DinasPerhubController::class, 'editProgres'])->name('edit-progres')->middleware(['auth','admin']);
Route::put('/perairan/update-progres-kegiatan/{id}', [DinasPerhubController::class, 'updateProgres'])->name('update-progres')->middleware(['auth','admin']);


//DINAS LINGKUNGAN DAN HIDUP DAERAH => PENGOLAHAN SAMPAH DAN
Route::get('/psp/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-psp')->middleware(['auth','admin']);
Route::get('/psp/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-psp')->middleware(['auth','admin']);
Route::post('/psp/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-psp')->middleware(['auth','admin']);
Route::post('/psp/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-psp')->middleware(['auth','admin']);

Route::get('/psp/hasil-kegiatan', [DinasDLHDController::class, 'indexHasilPsp'])->name('index-hasil-psp')->middleware(['auth','admin']);
Route::get('/psp/hasil-kegiatan/delete/{id}', [DinasDLHDController::class, 'deleteHasil'])->name('delete-hasil')->middleware(['auth','admin']);
Route::get('/psp/edit-hasil-kegiatan/{id}', [DinasDLHDController::class, 'editHasil'])->name('edit-hasil')->middleware(['auth','admin']);
Route::put('/psp/update-hasil-kegiatan/{id}', [DinasDLHDController::class, 'updateHasil'])->name('update-hasil')->middleware(['auth','admin']);

Route::get('/psp/progress-kegiatan', [DinasDLHDController::class, 'indexProgressPsp'])->name('index-progress-psp')->middleware(['auth','admin']);
Route::get('/psp/progres-kegiatan/delete/{id}', [DinasDLHDController::class, 'deleteProgres'])->name('delete-progres')->middleware(['auth','admin']);
Route::get('/psp/edit-progres-kegiatan/{id}', [DinasDLHDController::class, 'editProgres'])->name('edit-progres')->middleware(['auth','admin']);
Route::put('/psp/update-progres-kegiatan/{id}', [DinasDLHDController::class, 'updateProgres'])->name('update-progres')->middleware(['auth','admin']);

//PERKIMTAN => perumahan-pertanahan
Route::get('/perumahan-pertanahan/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan')->middleware(['auth','admin']);
Route::get('/perumahan-pertanahan/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan')->middleware(['auth','admin']);
Route::post('/perumahan-pertanahan/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan')->middleware(['auth','admin']);
Route::post('/perumahan-pertanahan/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan')->middleware(['auth','admin']);

Route::get('/perumahan-pertanahan/hasil-kegiatan', [DinasPerkimtanController::class, 'indexHasilPerumahanPertanahan'])->name('index-hasil-perumahan-pertanahan')->middleware(['auth','admin']);
Route::get('/perumahan-pertanahan/hasil-kegiatan/delete/{id}', [DinasPerkimtanController::class, 'deleteHasil'])->name('delete-hasil')->middleware(['auth','admin']);
Route::get('/perumahan-pertanahan/edit-hasil-kegiatan/{id}', [DinasPerkimtanController::class, 'editHasil'])->name('edit-hasil')->middleware(['auth','admin']);
Route::put('/perumahan-pertanahan/update-hasil-kegiatan/{id}', [DinasPerkimtanController::class, 'updateHasil'])->name('update-hasil')->middleware(['auth','admin']);

Route::get('/perumahan-pertanahan/progress-kegiatan', [DinasPerkimtanController::class, 'indexProgressPerumahanPertanahan'])->name('index-progress-perumahan-pertanahan')->middleware(['auth','admin']);
Route::get('/perumahan-pertanahan/progres-kegiatan/delete/{id}', [DinasPerkimtanController::class, 'deleteProgres'])->name('delete-progres')->middleware(['auth','admin']);
Route::get('/perumahan-pertanahan/edit-progres-kegiatan/{id}', [DinasPerkimtanController::class, 'editProgres'])->name('edit-progres')->middleware(['auth','admin']);
Route::put('/perumahan-pertanahan/update-progres-kegiatan/{id}', [DinasPerkimtanController::class, 'updateProgres'])->name('update-progres')->middleware(['auth','admin']);

//PERKIMTAN => plpp
Route::get('/plpp/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-plpp')->middleware(['auth','admin']);
Route::get('/plpp/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-plpp')->middleware(['auth','admin']);
Route::post('/plpp/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-plpp')->middleware(['auth','admin']);
Route::post('/plpp/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-plpp')->middleware(['auth','admin']);

Route::get('/plpp/hasil-kegiatan', [DinasPerkimtanController::class, 'indexHasilPLPP'])->name('index-hasil-plpp')->middleware(['auth','admin']);
Route::get('/plpp/hasil-kegiatan/delete/{id}', [DinasPerkimtanController::class, 'deleteHasil'])->name('delete-hasil')->middleware(['auth','admin']);
Route::get('/plpp/edit-hasil-kegiatan/{id}', [DinasPerkimtanController::class, 'editHasil'])->name('edit-hasil')->middleware(['auth','admin']);
Route::put('/plpp/update-hasil-kegiatan/{id}', [DinasPerkimtanController::class, 'updateHasil'])->name('update-hasil')->middleware(['auth','admin']);

Route::get('/plpp/progress-kegiatan', [DinasPerkimtanController::class, 'indexProgressPLPP'])->name('index-progress-plpp')->middleware(['auth','admin']);
Route::get('/plpp/progres-kegiatan/delete/{id}', [DinasPerkimtanController::class, 'deleteProgres'])->name('delete-progres')->middleware(['auth','admin']);
Route::get('/plpp/edit-progres-kegiatan/{id}', [DinasPerkimtanController::class, 'editProgres'])->name('edit-progres')->middleware(['auth','admin']);
Route::put('/plpp/update-progres-kegiatan/{id}', [DinasPerkimtanController::class, 'updateProgres'])->name('update-progres')->middleware(['auth','admin']);

//USER
Route::get('/user/dashboard', [IndexDataController::class, 'index'])->name('user-dashboard');

// //pupr
Route::get('/user/bina-marga/hasil-kegiatan', [IndexDataController::class, 'indexHasilBinaMarga'])->name('index-hasil-binamarga-user');
Route::get('/user/bina-marga/progress-kegiatan', [IndexDataController::class, 'indexProgressBinaMarga'])->name('index-progress-binamarga-user');
Route::get('/user/cipta-karya/hasil-kegiatan', [IndexDataController::class, 'indexHasilCiptakarya'])->name('index-hasil-ciptakarya-user');
Route::get('/user/cipta-karya/progress-kegiatan', [IndexDataController::class, 'indexProgressCiptakarya'])->name('index-progress-ciptakarya-user');
Route::get('/user/pengairan/hasil-kegiatan', [IndexDataController::class, 'indexHasilPengairan'])->name('index-hasil-pengairan-user');
Route::get('/user/pengairan/progress-kegiatan', [IndexDataController::class, 'indexProgressPengairan'])->name('index-progress-pengairan-user');
//perhubungan
Route::get('/user/lalu-lintas/hasil-kegiatan', [IndexDataController::class, 'indexHasilLaluLintas'])->name('index-hasil-lalu-lintas-user');
Route::get('/user/lalu-lintas/progress-kegiatan', [IndexDataController::class, 'indexProgressLaluLintas'])->name('index-progress-lalu-lintas-user');
Route::get('/user/perairan/hasil-kegiatan', [IndexDataController::class, 'indexHasilPerairan'])->name('index-hasil-perairan-user');
Route::get('/user/perairan/progress-kegiatan', [IndexDataController::class, 'indexProgressPerairan'])->name('index-progress-perairan-user');
//lingklungan Hidup
Route::get('/user/psp/hasil-kegiatan', [IndexDataController::class, 'indexHasilPsp'])->name('index-hasil-psp-user');
Route::get('/user/psp/progress-kegiatan', [IndexDataController::class, 'indexProgressPsp'])->name('index-progress-psp-user');
//perumahan-pertahanan
Route::get('/user/perumahan-pertanahan/hasil-kegiatan', [IndexDataController::class, 'indexHasilPerumahanPertanahan'])->name('index-hasil-pp-user');
Route::get('/user/perumahan-pertanahan/progress-kegiatan', [IndexDataController::class, 'indexProgressPerumahanPertanahan'])->name('index-progress-pp-user');
Route::get('/user/plpp/hasil-kegiatan', [IndexDataController::class, 'indexHasilPLPP'])->name('index-hasil-plpp-user');
Route::get('/user/plpp/progress-kegiatan', [IndexDataController::class, 'indexProgressPLPP'])->name('index-progress-plpp-user');


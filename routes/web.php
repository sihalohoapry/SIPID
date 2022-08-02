<?php

use App\Http\Controllers\Admin\DinasDLHDController;
use App\Http\Controllers\Admin\DinasPerhubController;
use App\Http\Controllers\Admin\DinasPerkimtanController;
use App\Http\Controllers\Admin\DinasPUPRController;
use App\Http\Controllers\Admin\GlobalController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//PUPR => Bina Marga
Route::get('/bina-marga/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan');
Route::get('/bina-marga/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan');
Route::post('/bina-marga/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan');
Route::post('/bina-marga/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan');

Route::get('/bina-marga/hasil-kegiatan', [DinasPUPRController::class, 'indexHasilBinaMarga'])->name('index-hasil-binamarga');
Route::get('/bina-marga/hasil-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteHasil'])->name('delete-hasil');
Route::get('/bina-marga/edit-hasil-kegiatan/{id}', [DinasPUPRController::class, 'editHasil'])->name('edit-hasil');
Route::put('/bina-marga/update-hasil-kegiatan/{id}', [DinasPUPRController::class, 'updateHasil'])->name('update-hasil');

Route::get('/bina-marga/progress-kegiatan', [DinasPUPRController::class, 'indexProgressBinaMarga'])->name('index-progress-binamarga');
Route::get('/bina-marga/progres-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteProgres'])->name('delete-progres');
Route::get('/bina-marga/edit-progres-kegiatan/{id}', [DinasPUPRController::class, 'editProgres'])->name('edit-progres');
Route::put('/bina-marga/update-progres-kegiatan/{id}', [DinasPUPRController::class, 'updateProgres'])->name('update-progres');

//PUPR => cipta karya
Route::get('/cipta-karya/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-ciptakarya');
Route::get('/cipta-karya/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-ciptakarya');
Route::post('/cipta-karya/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-ciptakarya');
Route::post('/cipta-karya/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-ciptakarya');

Route::get('/cipta-karya/hasil-kegiatan', [DinasPUPRController::class, 'indexHasilCiptakarya'])->name('index-hasil-ciptakarya');
Route::get('/cipta-karya/hasil-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteHasil'])->name('delete-hasil');
Route::get('/cipta-karya/edit-hasil-kegiatan/{id}', [DinasPUPRController::class, 'editHasil'])->name('edit-hasil');
Route::put('/cipta-karya/update-hasil-kegiatan/{id}', [DinasPUPRController::class, 'updateHasil'])->name('update-hasil');

Route::get('/cipta-karya/progress-kegiatan', [DinasPUPRController::class, 'indexProgressCiptakarya'])->name('index-progress-ciptakarya');
Route::get('/cipta-karya/progres-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteProgres'])->name('delete-progres');
Route::get('/cipta-karya/edit-progres-kegiatan/{id}', [DinasPUPRController::class, 'editProgres'])->name('edit-progres');
Route::put('/cipta-karya/update-progres-kegiatan/{id}', [DinasPUPRController::class, 'updateProgres'])->name('update-progres');

//PUPR => pengairan
Route::get('/pengairan/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-pengairan');
Route::get('/pengairan/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-pengairan');
Route::post('/pengairan/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-pengairan');
Route::post('/pengairan/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-pengairan');

Route::get('/pengairan/hasil-kegiatan', [DinasPUPRController::class, 'indexHasilPengairan'])->name('index-hasil-pengairan');
Route::get('/pengairan/hasil-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteHasil'])->name('delete-hasil');
Route::get('/pengairan/edit-hasil-kegiatan/{id}', [DinasPUPRController::class, 'editHasil'])->name('edit-hasil');
Route::put('/pengairan/update-hasil-kegiatan/{id}', [DinasPUPRController::class, 'updateHasil'])->name('update-hasil');

Route::get('/pengairan/progress-kegiatan', [DinasPUPRController::class, 'indexProgressPengairan'])->name('index-progress-pengairan');
Route::get('/pengairan/progres-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteProgres'])->name('delete-progres');
Route::get('/pengairan/edit-progres-kegiatan/{id}', [DinasPUPRController::class, 'editProgres'])->name('edit-progres');
Route::put('/pengairan/update-progres-kegiatan/{id}', [DinasPUPRController::class, 'updateProgres'])->name('update-progres');


//PERHUBUNGAN => LALU LINTAS
Route::get('/lalu-lintas/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-lalu-lintas');
Route::get('/lalu-lintas/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-lalu-lintas');
Route::post('/lalu-lintas/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-lalu-lintas');
Route::post('/lalu-lintas/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-lalu-lintas');

Route::get('/lalu-lintas/hasil-kegiatan', [DinasPerhubController::class, 'indexHasilLaluLintas'])->name('index-hasil-lalu-lintas');
Route::get('/lalu-lintas/hasil-kegiatan/delete/{id}', [DinasPerhubController::class, 'deleteHasil'])->name('delete-hasil');
Route::get('/lalu-lintas/edit-hasil-kegiatan/{id}', [DinasPerhubController::class, 'editHasil'])->name('edit-hasil');
Route::put('/lalu-lintas/update-hasil-kegiatan/{id}', [DinasPerhubController::class, 'updateHasil'])->name('update-hasil');

Route::get('/lalu-lintas/progress-kegiatan', [DinasPerhubController::class, 'indexProgressLaluLintas'])->name('index-progres-lalu-lintas');
Route::get('/lalu-lintas/progres-kegiatan/delete/{id}', [DinasPerhubController::class, 'deleteProgres'])->name('delete-progres');
Route::get('/lalu-lintas/edit-progres-kegiatan/{id}', [DinasPerhubController::class, 'editProgres'])->name('edit-progres');
Route::put('/lalu-lintas/update-progres-kegiatan/{id}', [DinasPerhubController::class, 'updateProgres'])->name('update-progres');

//PERHUBUNGAN => PERAIRAN
Route::get('/perairan/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-perairan');
Route::get('/perairan/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-perairan');
Route::post('/perairan/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-perairan');
Route::post('/perairan/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-perairan');

Route::get('/perairan/hasil-kegiatan', [DinasPerhubController::class, 'indexHasilPerairan'])->name('index-hasil-perairan');
Route::get('/perairan/hasil-kegiatan/delete/{id}', [DinasPerhubController::class, 'deleteHasil'])->name('delete-hasil');
Route::get('/perairan/edit-hasil-kegiatan/{id}', [DinasPerhubController::class, 'editHasil'])->name('edit-hasil');
Route::put('/perairan/update-hasil-kegiatan/{id}', [DinasPerhubController::class, 'updateHasil'])->name('update-hasil');

Route::get('/perairan/progress-kegiatan', [DinasPerhubController::class, 'indexProgressPerairan'])->name('index-progress-perairan');
Route::get('/perairan/progres-kegiatan/delete/{id}', [DinasPerhubController::class, 'deleteProgres'])->name('delete-progres');
Route::get('/perairan/edit-progres-kegiatan/{id}', [DinasPerhubController::class, 'editProgres'])->name('edit-progres');
Route::put('/perairan/update-progres-kegiatan/{id}', [DinasPerhubController::class, 'updateProgres'])->name('update-progres');


//DINAS LINGKUNGAN DAN HIDUP DAERAH => PENGOLAHAN SAMPAH DAN
Route::get('/psp/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-psp');
Route::get('/psp/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-psp');
Route::post('/psp/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-psp');
Route::post('/psp/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-psp');

Route::get('/psp/hasil-kegiatan', [DinasDLHDController::class, 'indexHasilPsp'])->name('index-hasil-psp');
Route::get('/psp/hasil-kegiatan/delete/{id}', [DinasDLHDController::class, 'deleteHasil'])->name('delete-hasil');
Route::get('/psp/edit-hasil-kegiatan/{id}', [DinasDLHDController::class, 'editHasil'])->name('edit-hasil');
Route::put('/psp/update-hasil-kegiatan/{id}', [DinasDLHDController::class, 'updateHasil'])->name('update-hasil');

Route::get('/psp/progress-kegiatan', [DinasDLHDController::class, 'indexProgressPsp'])->name('index-progress-psp');
Route::get('/psp/progres-kegiatan/delete/{id}', [DinasDLHDController::class, 'deleteProgres'])->name('delete-progres');
Route::get('/psp/edit-progres-kegiatan/{id}', [DinasDLHDController::class, 'editProgres'])->name('edit-progres');
Route::put('/psp/update-progres-kegiatan/{id}', [DinasDLHDController::class, 'updateProgres'])->name('update-progres');

//PERKIMTAN => perumahan-pertanahan
Route::get('/perumahan-pertanahan/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan');
Route::get('/perumahan-pertanahan/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan');
Route::post('/perumahan-pertanahan/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan');
Route::post('/perumahan-pertanahan/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan');

Route::get('/perumahan-pertanahan/hasil-kegiatan', [DinasPerkimtanController::class, 'indexHasilPerumahanPertanahan'])->name('index-hasil-perumahan-pertanahan');
Route::get('/perumahan-pertanahan/hasil-kegiatan/delete/{id}', [DinasPerkimtanController::class, 'deleteHasil'])->name('delete-hasil');
Route::get('/perumahan-pertanahan/edit-hasil-kegiatan/{id}', [DinasPerkimtanController::class, 'editHasil'])->name('edit-hasil');
Route::put('/perumahan-pertanahan/update-hasil-kegiatan/{id}', [DinasPerkimtanController::class, 'updateHasil'])->name('update-hasil');

Route::get('/perumahan-pertanahan/progress-kegiatan', [DinasPerkimtanController::class, 'indexProgressPerumahanPertanahan'])->name('index-progress-perumahan-pertanahan');
Route::get('/perumahan-pertanahan/progres-kegiatan/delete/{id}', [DinasPerkimtanController::class, 'deleteProgres'])->name('delete-progres');
Route::get('/perumahan-pertanahan/edit-progres-kegiatan/{id}', [DinasPerkimtanController::class, 'editProgres'])->name('edit-progres');
Route::put('/perumahan-pertanahan/update-progres-kegiatan/{id}', [DinasPerkimtanController::class, 'updateProgres'])->name('update-progres');

//PERKIMTAN => plpp
Route::get('/plpp/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan-plpp');
Route::get('/plpp/create-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createProgresKegiatan'])->name('create-progres-kegiatan-plpp');
Route::post('/plpp/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan-plpp');
Route::post('/plpp/post-progres-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postProgresKegiatan'])->name('post-progres-kegiatan-plpp');

Route::get('/plpp/hasil-kegiatan', [DinasPerkimtanController::class, 'indexHasilPLPP'])->name('index-hasil-plpp');
Route::get('/plpp/hasil-kegiatan/delete/{id}', [DinasPerkimtanController::class, 'deleteHasil'])->name('delete-hasil');
Route::get('/plpp/edit-hasil-kegiatan/{id}', [DinasPerkimtanController::class, 'editHasil'])->name('edit-hasil');
Route::put('/plpp/update-hasil-kegiatan/{id}', [DinasPerkimtanController::class, 'updateHasil'])->name('update-hasil');

Route::get('/plpp/progress-kegiatan', [DinasPerkimtanController::class, 'indexProgressPLPP'])->name('index-progress-plpp');
Route::get('/plpp/progres-kegiatan/delete/{id}', [DinasPerkimtanController::class, 'deleteProgres'])->name('delete-progres');
Route::get('/plpp/edit-progres-kegiatan/{id}', [DinasPerkimtanController::class, 'editProgres'])->name('edit-progres');
Route::put('/plpp/update-progres-kegiatan/{id}', [DinasPerkimtanController::class, 'updateProgres'])->name('update-progres');



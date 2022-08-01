<?php

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

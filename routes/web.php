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

Route::get('/bina-marga/create-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'createHasilKegiatan'])->name('create-hasil-kegiatan');
Route::post('/bina-marga/post-hasil-kegiatan/{dinas}/{bidang}', [GlobalController::class, 'postHasilKegiatan'])->name('post-hasil-kegiatan');

Route::get('/bina-marga/hasil-kegiatan', [DinasPUPRController::class, 'indexHasilBinaMarga'])->name('index-hasil-binamarga');
Route::get('/bina-marga/hasil-kegiatan/delete/{id}', [DinasPUPRController::class, 'deleteHasil'])->name('delete-hasil');
Route::get('/bina-marga/edit-hasil-kegiatan/{id}', [DinasPUPRController::class, 'editHasil'])->name('edit-hasil');
Route::put('/bina-marga/update-hasil-kegiatan/{id}', [DinasPUPRController::class, 'updateHasil'])->name('update-hasil');
Route::get('/bina-marga/progress-kegiatan', [DinasPUPRController::class, 'indexProgressBinaMarga'])->name('index-progress-binamarga');

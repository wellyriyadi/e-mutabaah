<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MutabaahController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingpageController;

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




Route::get('/login',[AuthController::class,'index']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/',[LandingpageController::class,'index']);

Route::group(['middleware'=>'admin'],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
    Route::get('/mutabaah/lihat',[MutabaahController::class,'lihat']);
    Route::get('/nilai/lihat',[NilaiController::class,'lihat']);

    Route::group(['prefix'=>'santri'],function(){
        Route::get('/lihat',[SantriController::class,'lihat']);
        Route::post('/simpan',[SantriController::class,'simpanSantri'])->name('simpan-santri');
        Route::get('/edit/{id}',[SantriController::class,'editSantri'])->name('edit-santri');
    });

    Route::group(['prefix'=>'guru'],function(){
        Route::get('/lihat',[GuruController::class,'lihat']);
        Route::post('/simpan',[GuruController::class,'simpanGuru'])->name('simpan-guru');
        Route::get('/edit/{id}',[GuruController::class,'editGuru'])->name('edit-guru');
    });

    Route::group(['prefix'=>'kelas'],function(){
        Route::get('/lihat',[KelasController::class,'lihat']);
        Route::post('/simpan',[KelasController::class,'simpanKelas'])->name('simpan-kelas');
        Route::get('/edit/{id}',[KelasController::class,'editKelas'])->name('edit-kelas');
    });

    Route::group(['prefix'=>'mapel'],function(){
        Route::get('/lihat',[MapelController::class,'lihat']);
        Route::post('/simpan',[MapelController::class,'simpanMapel'])->name('simpan-mapel');
        Route::get('/edit/{id}',[MapelController::class,'editMapel'])->name('edit-mapel');
    });

    Route::group(['prefix'=>'informasi'],function(){
        Route::get('/lihat',[InformasiController::class,'lihat']);
        Route::post('/simpan',[InformasiController::class,'simpanInformasi'])->name('simpan-informasi');
        Route::post('/update',[InformasiController::class,'updateInformasi'])->name('update-informasi');
        Route::get('/edit/{id}',[InformasiController::class,'editInformasi'])->name('edit-informasi');
    });
});
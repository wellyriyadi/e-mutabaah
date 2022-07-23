<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MutabaahController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\GuruController;

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

Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::get('/mutabaah/lihat',[MutabaahController::class,'lihat']);
Route::get('/nilai/lihat',[NilaiController::class,'lihat']);

Route::group(['prefix'=>'santri'],function(){
    Route::get('/lihat',[SantriController::class,'lihat']);
    Route::post('/simpan',[SantriController::class,'simpanSantri'])->name('simpan-santri');
});

Route::group(['prefix'=>'guru'],function(){
    Route::get('/lihat',[GuruController::class,'lihat']);
    Route::post('/simpan',[GuruController::class,'simpanGuru'])->name('simpan-guru');
});

Route::get('/kelas/lihat',[KelasController::class,'lihat']);
Route::get('/mapel/lihat',[MapelController::class,'lihat']);
Route::get('/guru/lihat',[GuruController::class,'lihat']);
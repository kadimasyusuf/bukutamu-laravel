<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KeluarController;

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

Route::get('/login', [LoginController::class,'index']);
Route::get('/dashboard', [DashboardController::class,'index']);

Route::get('/pegawai', [PegawaiController::class,'index']);
Route::get('/pegawai/form/{aksi}', [PegawaiController::class,'form']);
Route::post('/pegawai/act-add', [PegawaiController::class,'act_add']);
Route::post('/pegawai/act-update', [PegawaiController::class,'act_update']);
Route::get('/pegawai/hapus', [PegawaiController::class,'hapus']);

Route::get('/pengunjung', [PengunjungController::class,'index']);
Route::get('/pengunjung/form/{aksi}', [PengunjungController::class,'form']);
Route::post('/pengunjung/act-add', [PengunjungController::class,'act_add']);
Route::post('/pengunjung/act-update', [PengunjungController::class,'act_update']);
Route::post('/pengunjung/hapus', [PengunjungController::class,'hapus']);

Route::get('/laporan', [LaporanController::class,'index']);
Route::get('/laporan/detail', [LaporanController::class,'detail']);
Route::get('/laporan/detail/{id}', [LaporanController::class,'detail']);
Route::get('/laporan/hapus/{id}', [LaporanController::class,'hapus']);


Route::get('/pengguna', [PenggunaController::class,'index']);
Route::get('/profil', [ProfilController::class,'index']);
Route::get('/keluar', [KeluarController::class,'index']);




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\CashController;
use App\Http\Controllers\PembayaranController;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

Route::resource('mobil',MobilController::class);
Route::delete('{id}/mobil/delete' ,  [MobilController::class, 'destroy']);
Route::get('{id}/mobil/edit',  [MobilController::class, 'edit']);
Route::patch('{id}/mobil/edit',  [MobilController::class, 'update']);

Route::resource('cash',CashController::class);
// Route::get('/faktur', [CashController::class, 'hasil']);
Route::get('/faktur', [CashController::class, 'hasil']);
Route::get('/faktur/cetak', [CashController::class, 'faktur']);

Route::get('/pembayaran', [PembayaranController::class, 'index']);

//pembeli
Route::get('/pembeli', [PembeliController::class, 'index']);
Route::get('/pembeli/create',  [PembeliController::class, 'create']);
Route::post('/pembeli/store',  [PembeliController::class, 'store']);
Route::get('{id}/pembeli/edit',  [PembeliController::class, 'edit']);
Route::patch('{id}/pembeli/edit',  [PembeliController::class, 'update']);
Route::delete('{id}/pembeli/delete' ,  [PembeliController::class, 'destroy']);



?>
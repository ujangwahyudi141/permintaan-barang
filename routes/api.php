<?php

use App\Http\Controllers\API\barangbyKategoriController;
use App\Http\Controllers\API\dataUserController;
use App\Http\Controllers\API\Dummy_Controller;
use App\Http\Controllers\API\kategoriBarangController;
use App\Http\Controllers\API\Permintaan_barangController;
use App\Http\Controllers\API\Sementara;
use App\Http\Controllers\API\stok_barangController;
use App\Http\Controllers\API\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('dapatkan_dataBarang',stok_barangController::class);
Route::get('data_permintaan',[Permintaan_barangController::class,'index']);
Route::resource('barangbyKategori',barangbyKategoriController::class);
Route::resource('datauser',dataUserController::class);
Route::resource('kategoriBarang',kategoriBarangController::class);

Route::resource('dummy',Sementara::class);
Route::resource('datauser',UserController::class);

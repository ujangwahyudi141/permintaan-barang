<?php
use App\Http\Controllers\LoginController;
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
    return view('login');
});

Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::post('postlogin',[LoginController::class,'postlogin'])->name('postlogin');

Route::get('/user', function () {
    return view('home');
})->name('home');

Route::get('/admin_warehouse', function () {
    return view('admin_warehouse/home_warehouse');
});

Route::get('/manager_warehouse', function () {
    return view('manager_warehouse/home_manager');
});

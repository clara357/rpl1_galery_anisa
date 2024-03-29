<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleriController;

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
Route::get('/',[UserController::class,'index'])->name('login');
Route::post('/simpanreg',[UserController::class,'saveRegister']);
Route::get('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'postlogin']);
Route::resource('galeri',GaleriController::class)->middleware('auth');
Route::get('/logout',[UserController::class,'logout']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ImageController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register',[Clients::class,'usersRegister'])->name('register');
Route::post('/usrsave',[Clients::class,'usrsave'])->name('usrsave');
Route::get('/list',[Clients::class, 'clientList'])->name('list');
Route::get('/delete/{id}',[Clients::class,'delete'])->name('delete');
Route::get('/edit/{id}',[Clients::class,'edit'])->name('edit');
Route::post('/update',[Clients::class,'update'])->name('update');
Route::get('/ajaxform/{age?}',[AjaxController::class,'index'])->name('ajaxform');
Route::post('/ajaxpost',[AjaxController::class,'ajaxpost']);
Route::get('/uploadimage',[ImageController::class,'imageView'])->name('uploadimage');
Route::post('/uploadimage',[ImageController::class,'uploadImage'])->name('uploadimage');

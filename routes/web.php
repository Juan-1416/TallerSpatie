<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('Template.Template');
});

//Route::resource('user', UserController::class);

// Route::resource('index', UserController::class);

Route::get('/index',[App\Http\Controllers\UserController::class,'index'])->name('index');
Route::get('/user.create',[App\Http\Controllers\UserController::class,'create'])->name('user.create');
Route::post('/user.store',[App\Http\Controllers\UserController::class,'store'])->name('user.store');
Route::get('/user.edit',[App\Http\Controllers\UserController::class,'edit'])->name('user.edit');
Route::get('/user.destroy',[App\Http\Controllers\UserController::class,'destroy'])->name('user.destroy');

Route::get('/roles',[App\Http\Controllers\UserController::class,'roles'])->name('user.index');



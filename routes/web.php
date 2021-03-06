<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home',[PostController::class, 'index'])->name('home');
Route::get('/post/{post:slug}',[PostController::class,'show']);
Route::get('/blog/create',[PostController::class,'create']);
Route::post('/post/store',[PostController::class,'store']);
Route::get('/blog/delete/{post:slug}',[PostController::class,'delete']);
Route::post('/update/{post:slug}',[PostController::class,'update']);
Route::get('/logout',[HomeController::class,'destory']);


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

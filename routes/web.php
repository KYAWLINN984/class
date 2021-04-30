<?php

use App\Http\Controllers\StuentController;
use App\Models\Stuent;
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

Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//This is studentpost route
Route::get('/post',[StuentController::class,'index'])->name('post');
Route::post('/do_post',[StuentController::class,'store'])->name('do_post');

//This is for laravel route




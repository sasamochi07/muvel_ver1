<?php

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

// Route::get('/', function () {
//     return view('foryou');
// });

Route::get('/', 'App\Http\Controllers\MusicController@index');

Route::get('/musicplay/{music}', 'App\Http\Controllers\MusicController@show');

Route::get('discover/', 'App\Http\Controllers\MusicController@select')->name('select');

// Route::get('list/', 'App\Http\Controllers\MusicController@select')->name('select');


//ログイン機能のやつ
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

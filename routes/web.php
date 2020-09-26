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
//     return view('welcome');
// });

Route::get('/', 'RSSController@index');
Route::get('/cari', 'RSSController@cari');
Route::get('/hapusBerita', 'RSSController@hapusBerita');
Route::get('/addBerita', 'RSSController@addBerita');
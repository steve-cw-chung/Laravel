<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

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

Route::get('/', '\App\Http\Controllers\PagesController@home');

Route::get('/about', '\App\Http\Controllers\PagesController@about');


Route::get('/cards', '\App\Http\Controllers\CardsController@index');
Route::get('/cards/{card}', '\App\Http\Controllers\CardsController@show');
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','App\Http\Controllers\LoginController@showForm');
Route::post('/login','App\Http\Controllers\LoginController@authenticate');
Route::get('/user/register','App\Http\Controllers\RegisterController@showForm');
Route::post('/user/register','App\Http\Controllers\RegisterController@store');
Route::get('/logout','App\Http\Controllers\LoginController@logout');

Route::get('/map','App\Http\Controllers\MapController@index');


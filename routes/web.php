<?php

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


Route::get('/home','HomeController')

//controller digunakan sebagai pengatur alur program
//Latihan Controller
Route::get('test','PrakerinController@percobaan');
Route::get('praktek','PrakerinController@praktek');
Route::get('prakerin','PrakerinController@prakerin');
Route::get('kerkom','PrakerinController@kerkom');
Route::get('ujikom','PrakerinController@ujikom');
Route::get('halaman/{id}','PrakerinController@param');




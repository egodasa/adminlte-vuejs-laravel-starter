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
Route::get('vue', function () {
    return view('halamanvue');
});
Route::get('vue2', function () {
    return view('halamanvue2');
});
Route::get('form', function () {
    return view('halamanform');
});
Route::get('tabel', function () {
    return view('tabel');
});
Route::group(['prefix'=>'api/dosen'],function(){
	Route::get('/','API\Dosen@index');
	Route::get('/{id}','API\Dosen@show');
	Route::post('/','API\Dosen@store');
	Route::delete('/{id}','API\Dosen@destroy');
	Route::put('/{id}','API\Dosen@update');
});

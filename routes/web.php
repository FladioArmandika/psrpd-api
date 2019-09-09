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
})->name('welcome');


Route::get('/a', 'api\PegawaiController@getAll');

Route::post('/pegawai/add', 'api\PegawaiController@addPegawai')->name('pegawai.add');
Route::get('/pegawai/{idpegawai}','api\PegawaiController@getPegawai')->name('pegawai.get');


Route::get('/tes/add', 'TesController@getFormPegawai');

Route::group(array('prefix'=>'p'), function() {
    Route::get('/','api\PegawaiController@getAll');

});

Route::group(array('prefix'=>'arsip/{idpegawai}'), function() {

    Route::group(array('prefix'=>'cpns'), function() {
        Route::get('/', 'api\CpnsController@getAll')->name('arsip.cpns.getall');
    });

    Route::group(array('prefix'=>'konversinip'), function() {
        Route::get('/', 'api\KonversiNipController@getAll')->name('arsip.konversinip.getall');
    });

});



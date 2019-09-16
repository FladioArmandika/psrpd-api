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


Route::get('/tes/add', 'TesController@getFormPegawai');


Route::get('/login', 'api\PegawaiController@login')->name('pegawai.login');

Route::group(array('prefix'=>'p'), function() {
    Route::get('/','api\PegawaiController@getAll');

    Route::group(array('prefix'=>'{idpegawai}'), function() {
        Route::get('/','api\PegawaiController@getPegawai')->name('pegawai.get');
        Route::get('/imgprofile', 'api\PegawaiController@getImageProfile');
    });
});

Route::group(array('prefix'=>'arsip/{idpegawai}'), function() {

    Route::group(array('prefix'=>'cpns'), function() {
        Route::get('/', 'api\CpnsController@getAll')->name('arsip.cpns.getall');
    });

    // Arsip KonversiNip
    Route::group(array('prefix'=>'konversinip'), function() {
        Route::get('/', 'api\KonversiNipController@getAll')->name('arsip.konversinip.getall');
        Route::get('/add', 'api\KonversiNipController@add')->name('arsip.konversinip.add');
        Route::get('/imgkonversinip', 'api\KonversiNipController@getImageKonversiNip')->name('arsip.konversinip.getimgkonversinip');
    });

    // Arsip CPNS
    Route::group(array('prefix'=>'cpns'), function() {
        Route::get('/', 'api\CpnsController@getAll')->name('arsip.cpns.getall');
        Route::get('/add', 'api\CpnsController@add')->name('arsip.cpns.add');
        Route::get('/imglamaran', 'api\CpnsController@getImageLamaran')->name('arsip.cpns.getimglamaran');
    });

    // Arsip PNS
    Route::group(array('prefix'=>'pns'), function() {
        Route::get('/', 'api\PnsController@getAll')->name('arsip.pns.getall');
        Route::get('/add', 'api\PnsController@add')->name('arsip.pns.add');
        Route::get('/basumpah', 'api\PnsController@getImgBaSumpah')->name('arsip.pns.getbasumpah');
        Route::get('/penambahanmasakerja', 'api\PnsController@getImgPenambahanMasaKerja')->name('arsip.pns.getpenambahanmasakerja');
    });

    // Arsip Diklat Teknis
    Route::group(array('prefix'=>'diklatteknis'), function() {
        Route::get('/', 'api\DiklatTeknisController@getAll')->name('arsip.diklatteknis.getall');
        Route::get('/add', 'api\DiklatTeknisController@add')->name('arsip.diklatteknis.add');
        Route::get('/diklatteknis', 'api\DiklatTeknisController@getImgDiklatTeknis')->name('arsip.diklatteknis.getdiklatteknis');
    });

    // Arsip Diklat Struktural
    Route::group(array('prefix'=>'diklatstruktural'), function() {
        Route::get('/', 'api\DiklatStrukturalController@getAll')->name('arsip.diklatstruktural.getall');
        Route::get('/add', 'api\DiklatStrukturalController@add')->name('arsip.diklatstruktural.add');
        Route::get('/kategori/{kategori}', 'api\DiklatStrukturalController@getByKategori')->name('arsip.diklatstruktural.getbykategori');
        Route::get('/diklatstruktural', 'api\DiklatStrukturalController@getImgDiklatStruktural')->name('arsip.diklatstruktural.getdiklatstruktural');
    });

    // Arsip Diklat Fungsional
    Route::group(array('prefix'=>'diklatfungsional'), function() {
        Route::get('/', 'api\DiklatTeknisController@getAll')->name('arsip.diklatfungsional.getall');
        Route::get('/add', 'api\DiklatTeknisController@add')->name('arsip.diklatfungsional.add');
        Route::get('/diklatfungsional', 'api\DiklatTeknisController@getImgDiklatFungsional')->name('arsip.diklatfungsional.getimgdiklatfungsional');
    });


});



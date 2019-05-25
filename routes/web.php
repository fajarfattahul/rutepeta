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

Route::get('/peta', 'PetaController@index')->name('indexpeta');

Route::get('/maps', 'MapsController@index')->name('maps');

//CRUD Admin
Route::group(['namespace' => 'admin'], function () {
    //Admin
    Route::group(['prefix' => 'admin'], function(){
        //User
        Route::group(['prefix' => 'user'], function(){
            Route::get('/', 'UserController@index')->name('user_home');
            Route::get('/create', 'UserController@create')->name('user_create');
            Route::post('/store', 'UserController@store')->name('user_store');
            Route::get('/edit/{id?}', 'UserController@edit')->name('user_edit');
            Route::post('/update/{id?}', 'UserController@update')->name('user_update');
            Route::get('/delete/{id?}', 'UserController@delete')->name('user_delete');
        });

        //Lokasi
        Route::group(['prefix' => 'lokasi'], function(){
            Route::get('/', 'LokasiController@index')->name('lokasi_home');
            Route::get('/create', 'LokasiController@create')->name('lokasi_create');
            Route::post('/store', 'LokasiController@store')->name('lokasi_store');
            Route::get('/edit/{id?}', 'LokasiController@edit')->name('lokasi_edit');
            Route::post('/update/{id?}', 'LokasiController@update')->name('lokasi_update');
            Route::get('/delete/{id?}', 'LokasiController@delete')->name('lokasi_delete');
        });

        //Pemasaran
        Route::group(['prefix' => 'pemasaran'], function(){
            Route::get('/', 'PemasaranController@index')->name('pemasaran_home');
            Route::get('/create', 'PemasaranController@create')->name('pemasaran_create');
            Route::post('/store', 'PemasaranController@store')->name('pemasaran_store');
            Route::get('/edit/{id?}', 'PemasaranController@edit')->name('pemasaran_edit');
            Route::post('/update/{id?}', 'PemasaranController@update')->name('pemasaran_update');
            Route::get('/delete/{id?}', 'PemasaranController@delete')->name('pemasaran_delete');
        });

        //Laporan
        Route::group(['prefix' => 'laporan'], function(){
            Route::get('/', 'LaporanController@index')->name('laporan_home');
            Route::get('/create', 'LaporanController@create')->name('laporan_create');
            Route::post('/store', 'LaporanController@store')->name('laporan_store');
            Route::get('/edit/{id?}', 'LaporanController@edit')->name('laporan_edit');
            Route::post('/update/{id?}', 'LaporanController@update')->name('laporan_update');
            Route::get('/delete/{id?}', 'LaporanController@delete')->name('laporan_delete');
        });
    });
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
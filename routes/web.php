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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * mendapatkan url atau route baru
 * untuk master barang
 */

Route::group(['prefix'=>'deposit'],function(){
    Route::get('/index','Deposit\DepositController@index')->name('deposit.index');
    Route::get('/create','Deposit\DepositController@create')->name('deposit.create');
    Route::post('/store', 'Deposit\DepositController@store')->name('deposit.store');  
    Route::get('/tambah-saldo/{id}','Deposit\TambahSaldoController@create')->name('tambah-saldo');
    Route::get('/kurang-saldo/{id}','Deposit\KurangSaldoController@create')->name('kurangsaldo');
    Route::patch('update/{deposit}','Deposit\DepositController@update')->name('deposit.update');
    Route::patch('kurang-saldo/{deposit}','Deposit\KurangSaldoController@update')->name('kurang-saldo.update');
});

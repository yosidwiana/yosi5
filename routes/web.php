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

Route::get('kategori', function () {
    return "hello user with id";
});
Route::resource('kategori', 'KategoriController')->except(['destroy']);
Route::get('/lihatdata', 'crud@index')->name('lihatdata');
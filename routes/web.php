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


Route::post('tambahkategori','index2Controller@store');
Route::get('tambahdata','index2Controller@create');
Route::get('hapuskategori/{id}','index2Controller@destroy');
Route::get('editkategori/{id}','index2Controller@edit');
Route::post('updatekategori/{id}','index2Controller@update');

Route::get('kategori', function () {
    return "hello user with id";
});
Route::resource('category', 'index2Controller');


Route::get('/lihatdata', 'crud@index')->name('lihatdata');

Route::get('dashboard', function () {
    return view('dashboard.index');
});

Route::get('dashboard2', function () {
    return view('dashboard.dashboard');
});

Route::get('create', function () {
    return view('create');
});

Route::get('edit', function () {
    return view('edit');
});

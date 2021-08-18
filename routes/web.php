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
Route::prefix('cities')->group(function () {

    Route::get('/', 'CitiesController@index')->name('city.list');

    Route::get('/delete/{id}', 'CitiesController@delete')->name('city.delete');

    Route::get('/form-update/{id}', 'CitiesController@formAdd')->name('city.form-add');

    Route::post('/add', 'CitiesController@store')->name('city.add');

    Route::post('/update/{id}', 'CitiesController@update')->name('city.update');
});

Route::prefix('Customer')->group(function () {
    Route::get('/', 'CustomerController@index')->name('customer.list');
});

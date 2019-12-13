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

Route::Resource('/customers','CustomersController');
Route::Resource('/pet','PetController');
Route::Resource('/caregiver','CaregiverController');

//Route::get('/customers','CustomersController@index');

Route::get('/', function () {
    return view('pethome');
});


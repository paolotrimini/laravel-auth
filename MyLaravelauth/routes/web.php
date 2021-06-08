<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'GuestController@home')
    -> name('home');

Route::get('/car/edit/{id}', 'LoggedController@edit')
    -> name('car-edit');

Route::post('/car/update/{id}', 'LoggedController@update')
    -> name('car-update');

Route::get('/test', 'GuestController@test');





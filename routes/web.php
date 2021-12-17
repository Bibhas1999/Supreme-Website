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
    return view('frontend.layouts.home');
});

Route::get('/appointments', function () {
    return view('frontend.appointments');
});

Route::get('/appointments','AppointmentController@view')->name('apps.view');
Route::get('/appointments/add/{id}','AppointmentController@add')->name('apps.add');
Route::post('/appointments/store/','AppointmentController@store')->name('apps.store');
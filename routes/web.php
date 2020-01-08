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

Route::get('/', function () { return view('welcome'); })->middleware('auth');

Auth::routes();

//Dashboard for simple user
Route::get('/home', 'HomeController@index')->name('home');

//New appointment page for simple user
Route::get('/new-appointment', 'AppointmentsController@new');

//Submit new appointment for simple user
Route::post('/submit-appointment', 'AppointmentsController@submit');

//Dashboard for admin user
Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

//Get all apointments for specific user in administrator panel
Route::get('/user/{id}', 'AdminController@appointments')
    ->middleware('is_admin');

//Admin aprove appointment
Route::get('/aprove/{id}' , 'AdminController@aprove')
    ->middleware('is_admin');

//Admin reject appointment
Route::get('/reject/{id}' , 'AdminController@reject')
    ->middleware('is_admin');

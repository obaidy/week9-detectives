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
    return view('index');
})->name('index');

Route::get('/detective/{detective_slug}', 'DetectiveController@show')->name('show');

Route::get('/detective' , 'DetectiveController@index');

Route::get('/detective/{detective_slug}/hire', 'DetectiveController@create')->name('hire.create');
Route::post('/detective/{detective_slug}' , 'DetectiveController@store')->name('hire.store');



Auth::routes();

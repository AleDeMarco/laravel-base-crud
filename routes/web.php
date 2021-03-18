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

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::resource('horses', 'HorseController');

Route::get('horses', 'HorseController@index')->name('horses.index');
Route::post('horses', 'HorseController@store')->name('horses.store');

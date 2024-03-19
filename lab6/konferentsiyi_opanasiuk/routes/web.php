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
    return view('start');
});

Route::get('kafedry_add', function () {
    return view('kafedry_add');
});

Route::post('/kafedry_add', 'App\Http\Controllers\kafedry_controller@submit')->name('kafedry_add');

Route::get('/kafedry', 'App\Http\Controllers\kafedry_controller@kafedry')->name('kafedry');

Route::get('/kafedry_edit/{id_kafedry}', 'App\Http\Controllers\kafedry_controller@kafedry_edit')->name('kafedry_edit');

Route::post('/kafedry_edit/{id_kafedry}', 'App\Http\Controllers\kafedry_controller@kafedry_edit_submit')->name('kafedry_edit_submit');

Route::get('/kafedry_del/{id_kafedry}', 'App\Http\Controllers\kafedry_controller@kafedry_del_submit')->name('kafedry_del');

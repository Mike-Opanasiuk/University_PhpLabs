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

Route::get('/kafedry_filter', 'App\Http\Controllers\kafedry_controller@kafedry_filter')->name('kafedry_filter');

Route::get('/spivrobitnyky', 'App\Http\Controllers\spivrobitnyky_controller@spivrobitnyky')->name('spivrobitnyky');

Route::get('/spivrobitnyky_add', 'App\Http\Controllers\spivrobitnyky_controller@spivrobitnyky_add')->name('spivrobitnyky_add');

Route::post('/spivrobitnyky_add', 'App\Http\Controllers\spivrobitnyky_controller@submit')->name('spivrobitnyky_add_post');

Route::get('/spivrobitnyky_edit/{id_spivrobitnyky}', 'App\Http\Controllers\spivrobitnyky_controller@spivrobitnyky_edit')->name('spivrobitnyky_edit');

Route::post('/spivrobitnyky_edit/{id_spivrobitnyky}', 'App\Http\Controllers\spivrobitnyky_controller@spivrobitnyky_edit_submit')->name('spivrobitnyky_edit_submit');

Route::get('/spivrobitnyky_del/{id_spivrobitnyky}', 'App\Http\Controllers\spivrobitnyky_controller@spivrobitnyky_del_submit')->name('spivrobitnyky_del');

Route::get('/konferentsiyi_filter', function () {
    return view('konferentsiyi_filter');
});

Route::get('/konferentsiyi', 'App\Http\Controllers\konferentsiyi_controller@konferentsiyi')->name('konferentsiyi');

Route::get('/konferentsiyi_add', 'App\Http\Controllers\konferentsiyi_controller@konferentsiyi_add')->name('konferentsiyi_add');

Route::post('/konferentsiyi_add', 'App\Http\Controllers\konferentsiyi_controller@submit')->name('konferentsiyi_add_post');

Route::get('/konferentsiyi_edit/{id_konferentsiyi}', 'App\Http\Controllers\konferentsiyi_controller@konferentsiyi_edit')->name('konferentsiyi_edit');

Route::post('/konferentsiyi_edit/{id_konferentsiyi}', 'App\Http\Controllers\konferentsiyi_controller@konferentsiyi_edit_submit')->name('konferentsiyi_edit_submit');

Route::get('/konferentsiyi_del/{id_konferentsiyi}', 'App\Http\Controllers\konferentsiyi_controller@konferentsiyi_del_submit')->name('konferentsiyi_del');

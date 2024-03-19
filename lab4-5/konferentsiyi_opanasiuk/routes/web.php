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

// пункти 11-12
//Route::post('kafedry_add', function () {
//    // return Request::all(); // у форматі об'єкту
//    return dd(Request::all()); // у форматі масиву
//})->name('kafedry_add');

// пункт 17
Route::post('/kafedry_add', 'App\Http\Controllers\kafedry_controller@submit')->name('kafedry_add');

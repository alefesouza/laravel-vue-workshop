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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/sum/{valor1}/{valor2}', function($value1, $value2) {
//     $result = $value1 + $value2;

//     return view('result', ['result' => $result]);
// });

// Route::get('/hello', 'HomeController@hello');

// Route::get('/users', 'HomeController@users');

// Route::get('/vue', function () {
//     return view('vue');
// });

Route::get('/{any}', function () {
    return view('vue');
})->where('any', '.*');

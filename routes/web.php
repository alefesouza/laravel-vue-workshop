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

// Route::get('/hello', function() {
//     return 'Hello World';
// });

// Route::get('/soma/{num1}/{num2}', function($num1, $num2) {
//     return $num1 + $num2;
// });

// Route::get('/exemplo/{numero}', 'ExemploController@index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{any}', function () {
    return view('vue');
})->where('any', '.*');

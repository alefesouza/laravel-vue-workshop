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

Route::get('hello/{nome}', function($nome) {
    return 'Hello ' . $nome;
});

Route::get('soma/{num1}/{num2}', function($num1, $num2) {
    $soma = $num1 + $num2;

    echo $soma;
});

// Route::get('exemplo/{numero}', function($numero) {
//     $numArray = [5, 6, 9, 8, 4, 5, 1];

//     return view('exemplo', [
//         'numero' => $numero,
//         'numArray' => $numArray
//     ]);
// });

Route::get('exemplo/{numero}', 'ExemploController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('vue', function() {
//     return view('vue');
// });

Route::get('/{any}', function () {
    return view('vue');
})->where('any', '.*');

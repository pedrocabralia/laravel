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

    $arr = ['1','2','3','4'];
        return view('welcome', ['arr' => $arr]);  //mandando dados para a view
});

Route::get('/contact', function () {
    return view('contact');
});

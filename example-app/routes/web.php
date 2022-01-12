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
    $search  = request('search');  //adding  an variable to keep the search of user

    return view('contact',['search' =>  $search]);
});

Route::get('/product/{id}', function ($id) {  //with {} this make mandatory to pass the parameters
    
      
      

      return view('product',['id'=>$id]);
});

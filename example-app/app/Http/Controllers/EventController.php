<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{ 
     public function index(){    //action of the /
 
         
        return view('welcome');

     }

     public function create(){ //action of the}
    //

       return view('create');


}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{ 
     public function index(){    //action of the /
 
        $events = Event::all();  //pegando todos os eventos do  banco
        return view('welcome',['events'=>$events]); //passando para a view

     }

     public function create(){ //action of the}
    //

       return view('create');


}
}

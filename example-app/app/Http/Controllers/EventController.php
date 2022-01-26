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

     public function create()
     { //action of the}
    //

       return view('create');
       


     }

     public function store(Request $request){     //function that is responsavel to store the informations

         $event = new Event;

         $event->title = $request->title;
         $event->city = $request->city;
         $event->description = $request->description;
         $event->private = $request->private;
     
         $event->save();


         return redirect('/')->with('msg','event created successfully');



     }
}

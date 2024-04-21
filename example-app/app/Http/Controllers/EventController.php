<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\events;

class EventController extends Controller
{
    public function index(){
        
     $events = events::all(); /** se conecta ao banco buscando TODOS os dados */

     return view('welcome',['events'=> $events]);
}

public function create(){

    Return view ('events.create');
}
}

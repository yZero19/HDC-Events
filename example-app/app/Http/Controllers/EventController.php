<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        
        $nome = "mateus"; /* criando variavel*/

    return view('welcome', ['nome' => $nome]); /*passando a variavel pela rota e destinando o valor a view "welcome"*/


}

public function create(){

    Return view ('events.create');
}
}

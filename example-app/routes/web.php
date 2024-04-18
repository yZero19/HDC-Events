<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController; /*importanto controller*/

Route::get('/',  [EventController::class, 'index']); /*fazendo uso da controler */
Route::get('/events/create',  [EventController::class, 'create']); /*fazendo uso da controler */


/* a / significa o home nesse caso por ser a pagina original */

Route::get('/contato', function () { /* criando nova rota com o get recebendo  */
    return view('Contato'); /* ao acessar aquela rota retorna essa view*/
});

Route::get('/produtos', function (){

        $busca = request('search');
        return view('produtos', ['busca' => $busca]); /* criando variação de tela se o usuario estiver buscando pelo */
});

Route::get('/produtos/{id}', function ($id) {
    return view('produtos', ['id'=> $id]); /* cria uma tela derivada do produto usando o id como separador */
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { /* a / significa o home nesse caso por ser a pagina original */
    
    $nome = "mateus"; /* criando variavel*/

    return view('welcome', ['nome' => $nome]); /*passando a variavel pela rota e destinando o valor a view "welcome"*/


});

Route::get('/contato', function () { /* criando nova rota com o get recebendo  */
    return view('Contato'); /* ao acessar aquela rota retorna essa view*/
});

Route::get('/produto', function (){
    return view('produto');
});
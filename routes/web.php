<?php

use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\Route;

// DB::connection()->getPdo();
//echo "conectado ao banco". DB::connection()->getDataBaseName();

Route::get('/', function () {
    echo 'Esta rota não tem nada a ver com o processo de login. Esta rota não verifica se o usuário está logado.';

})->middleware(['auth']);

// Route::post('/login', function(){
//     echo "você logou essa é sua home";

//     //return view('home');

// });

//quando inclui-se ->middleware(['auth']); ele não loga. Por quê?
//->name('login')

// Route::get('/register', function(){
//     return view('auth.register');
//     //echo "testando botão de solicitar acesso";
// });

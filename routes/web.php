<?php

use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

    // DB::connection()->getPdo();
    // echo "conectado ao banco". DB::connection()->getDataBaseName();

});

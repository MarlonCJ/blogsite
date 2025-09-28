<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola',function(){
    return view('hola');
});

// crear ruta dinamica con parametro

Route::get('/saludo/{nombre}', function($nombre){
    return "Hola, $nombre. Bienvenido a Laravel";
});

// pasar datos a una vista

Route::get('/saludo/{nombre}',function($nombre){
    return view('Hola', ['nombre' => $nombre]);
});

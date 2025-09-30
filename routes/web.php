<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola',function(){
    return view('hola');
});

// crear ruta dinamica con parametro

// Route::get('/saludo/{nombre}', function($nombre){
//     return "Hola, $nombre. Bienvenido a Laravel";
// });

// pasar datos a una vista

Route::get('/saludo/{nombre}',function($nombre){
    return view('Hola', ['nombre' => $nombre]);
});


// Ejercicios leccion 2

Route::get('/pagina/{numero}',function($numero){
    return view('pagina', ['valor'=>$numero] );
});


//ruta basica

Route::get('/acerca',function(){
    return "Esta es la página Acerca de";
});

//Ruta con parametro obligatorio

// Route::get('/usuario/{$id}',function($id){
//     return "Mostrando usuario con ID: $id";
// });

Route::get('/usuario/{id}',function($id){
    return "Mostrando usuario con ID: $id";
});


//Ruta con parametro opcional

Route::get('/producto/{nombre?}',function($nombre = 'Desconocido'){
    return "Producto: $nombre";
});

// enviar datos a una vista

Route::get('/perfil/{nombre}', function($nombre){
    return view('perfil', ['nombre' => $nombre]);
});
<?php


use Illuminate\Support\Facades\Route;

Route::get('/comiendo', function () {
    return ['mensaje' => 'Hola desde la API 🚀'];
});

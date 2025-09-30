<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function perfil($nombre,$edad){

        return view('perfil',[
            'nombre' => $nombre,
            'edad' => $edad
        ]);
    }
    
    public function listado(){

        $usuarios = ['Marlon','Ana','Carlos','Luisa'];
        return view('usuarios',['usuarios' => $usuarios]);
    }


}

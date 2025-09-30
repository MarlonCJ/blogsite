@extends('layouts.app')

@section('titulo', 'Lista de usuarios')

@section('contenido')
    <h2>Usuarios</h2>
    <ul>
        @foreach($usuarios as $usuario)
            <li>{{ $usuario }}</li>
        @endforeach
    </ul>
@endsection
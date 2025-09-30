@extends('layouts.app')

@section('titulo', 'Perfil')

@section('contenido')
    <h2>Perfil de {{ $nombre }}</h2>
    <p>Edad: {{ $edad }}</p>

    @if($edad < 18)
        <x-alerta>
            Este usuario es menor de edad.
        </x-alerta>
    @endif
@endsection
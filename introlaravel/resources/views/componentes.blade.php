@extends('layouts.plantillas')

@section('titulo', 'Componentes Blade')

@section('contenido')
<x-card encabezado="componente" titulo="Dinamico" textoBoton="Guardar">
</x-card>
soy el contenido del primero
<x-card encabezado="componente2" titulo="Dinamico 2" textoBoton="No Guardar">
</x-card>
otro gato
@endsection

@extends('layouts.plantillas')
@section('titulo','componentes Blade')

@section('contenido')
<x-Card> encabezado="componente" "titulo=Dinamico" textoBoton="Guardar"</x-Card>
soy el contenido del primero
<x-Card>encabezado="componente2" "titulo=Dinamico 2"textoBoton="No Guardar" </x-Card>
otro gato
<x-Card> </x-Card>

@endsection
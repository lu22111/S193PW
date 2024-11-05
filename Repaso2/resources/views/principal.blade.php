@extends('layouts.plantilla')

@section('titulo', 'Noticias')

@section('contenido')
    <div class="card" style="width: auto;">
        <div class="card-body">
            <h5 class="card-title">Mejoras libros del 2024</h5>
            <p class="card-text">
                <img src="{{ asset('imagenes/libro.jpg') }}" class="card-img-top img-fluid" style="max-width: 50%;" alt="Imagen de la biblioteca">
                <br><br>
                En 2024, la industria editorial ha dado un salto cuántico con la introducción de los "Libros Inteligentes". Estos innovadores libros no solo contienen texto, sino que también están equipados con inteligencia artificial que permite a los lectores interactuar con el contenido de maneras nunca antes vistas.
            </p>
        </div>
    </div>
@endsection

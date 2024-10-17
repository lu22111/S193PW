@extends('layouts.plantilla')
@section('titulo','portada')
@section('contenido')

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Practica Repaso :</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Alumno :Maria Guadalupe Gonzalez Salinas </h6>
    <p class="card-text">Materia :Programacion web </p>
    <p class="card-text">Profesor  : Ivan Isay Guerra Lopez  </p>
    <a href ="{{route('rutaRepaso1')}}" class="btn btn-primary">Repaso</a>

  </div>
</div>
@endsection
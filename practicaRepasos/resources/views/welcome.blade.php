@extends('layouts.plantilla')
@section('titulo','portada')
@section('contenido')


<div class="card" style="width: 18rem;">
    <img src="{{asset('imagenes\UPQ-logo.jpg')}}" class="img-fluid custom-logo" alt="UPQ logo"> 
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="text-danger card-title">Practica Repaso :</h5>
    <h6 class="text-primary card-subtitle mb-2 ">Alumno :Maria Guadalupe Gonzalez Salinas </h6>
    <p class="card-text">Materia :Programacion web </p>
    <p class="card-text">Profesor  : Ivan Isay Guerra Lopez  </p>
    <a href ="{{route('rutaRepaso1')}}" class="btn btn-primary">Repaso</a>

  </div>
</div>
@endsection
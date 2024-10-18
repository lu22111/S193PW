@extends('layouts.plantilla')

@section('titulo','Repaso')

@section('contenido')
<div>
<form action="{{route('ruta1')}}" method="POST">@csrf
  <div class="mb-3">
    <label  class="form-label">Convertidor MG a GB</label>
    <input type="number" class="form-control" name="dato" aria-describedby=>
    <div  class="form-text">ingresa un numero  </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Resultado:{{$convertir ?? '0'}}</label>

  </div>


  
  <button type="submit" class="btn btn-primary">GB</button>
</form>
</div>

<div>
<form action="{{route('ruta2')}}" method="POST">@csrf
  <div class="mb-3">
    <label  class="form-label">Convertidor GB A MG </label>
    <input type="number" class="form-control" name="dato" aria-describedby=>
    <div  class="form-text">ingresa un numero  </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Resultado:{{$convertir1 ?? '0'}}</label>

  </div>
  <button type="submit" class="btn btn-secondary">MG</button>
</form>
</div>




<div>
<form action="{{route('ruta3')}}" method="POST">@csrf
  <div class="mb-3">
    <label  class="form-label">Convertidor GB A TB </label>
    <input type="number" class="form-control" name="dato" aria-describedby=>
    <div  class="form-text">ingresa un numero  </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Resultado:{{$convertir2 ?? '0'}}</label>

  </div>

  
  <button type="submit" class="btn btn-danger">TB</button>
</form>
</div>




<div>
<form action="{{route('ruta4')}}" method="POST">@csrf
  <div class="mb-3">
    <label  class="form-label">Convertidor TB A GB </label>
    <input type="number" class="form-control" name="dato" aria-describedby=>
    <div  class="form-text">ingresa un numero  </div>
  </div>
  <div class="mb-3">
    <label class="form-label">Resultado:{{$convertir3 ?? '0'}}</label>

  </div>

  
  <button type="submit" class="btn btn-warning">GB</button>
</form>
</div>
@endsection
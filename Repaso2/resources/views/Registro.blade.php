@extends('layouts.plantilla')
@section('titulo','Noticias')
@section('contenido')
<div class="container-fluid d-flex justify-content-center align-items-center">

    <form class="w-50">
        <div class="mb-3 text-center">
            <label class="form-label text-center">ISBN</label>
            <input type="number" class="form-control" name="Isbn" required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Titulo</label>
            <input type="text" class="form-control" name="Titulo" required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Autor</label>
            <input type="email" class="form-control" required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Paginas</label>   
            <input type="number" class="form-control" required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Año</label>
            <input type="number" class="form-control" required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Editorial</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Email de la Editorial</label>
            <input type="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Libro</button>
    </form>

</div>
@endsection
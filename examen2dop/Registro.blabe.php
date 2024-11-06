@extends('layouts.plantilla')
@section('titulo','Prenda')

@section('titulo', 'Prenda')

@section('contenido')
<div class="container-fluid d-flex justify-content-center align-items-center">
    @if(session('Exito'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Se guardó con éxito",
                text: '{{ session('Exito') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
    <form class="w-50">
        <div class="mb-3 text-center">
            <label class="form-label text-center">Prenda</label>
            <input type="number" class="form-control" name="Prenda" required>
            <small class="text-danger fst-italic">{{$errors->first('Prenda')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">color</label>
            <input type="email" class="form-control" name="color"required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">cantidad</label>   
            <input type="number" class="form-control"name="cantidad" required>
        </div>
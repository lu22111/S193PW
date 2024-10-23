@extends('layouts.plantillas')
@section('contenido')
{{--@dump($id)--}}
<!-- Inicia Tarjeta con formulario -->
<div class="container mt-5 col-md-6">
    @if(session('exito'))
    <x-Alert tipo="success">{{session('exito')}}</x-Alert>
    @endif
    @session('exito')
    <x-Alert tipo="warning">{{$value}}</x-Alert>
    @endsession
    @session('exito')
    {!<script>
    Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})</script>!}
    @endsession
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            Registro de Clientes
        </div>
        <div class="card-body text-justify">

            <form action ="\enviarCliente" method="POST">
                @csrf


                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="txtnombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" name="txtapellido">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input type="email" class="form-control" name="txtcorreo">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="number" class="form-control" name="txttelefono">
                </div>
                <div class="d-grid gap-2 mt-2 mb-1">
                    <button type="submit" class="btn btn-success btn-sm">Guardar Cliente</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Finaliza Tarjeta con formulario -->
 @endsection

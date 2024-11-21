@extends('layouts.plantillas')
@section('contenido')

<div class="container mt-5 col-md-6">
    @if(session('success'))
    <x-Alert tipo="success">{{ session('success') }}</x-Alert>
    @endif

    @session('success')
    <x-Alert tipo="warning">{{ $value }}</x-Alert>
    @endsession

    @session('success')
    <script>
        Swal.fire({
            title: 'Respuesta !',
            text: '{{ $value }}',
            icon: 'success',
            confirmButtonText: 'Cool'
        });
    </script>
    @endsession

    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            {{ __('Registro de Clientes') }}
        </div>
        <div class="card-body text-justify">
            @foreach($clientes as $cliente)
            <form id="Edicion_registro" action="{{ route('clientes.update', [$cliente->id]) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">{{ __('Nombre') }}:</label>
                    <input type="text" class="form-control" name="txtnombre" value="{{ $cliente->nombre }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label"> {{ __('Apellido') }}:</label>
                    <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label"> {{ __('Correo') }}:</label>
                    <input type="text" class="form-control" name="txtcorreo" value="{{ $cliente->correo }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">{{ __('Telefono') }}:</label>
                    <input type="text" class="form-control" name="txttelefono" value="{{ $cliente->telefono }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                </div>
                <div class="d-grid gap-2 mt-2 mb-1">
                    <button id="Edicion" type="button" class="btn btn-success btn-sm">
                        {{ __('Guardar Cliente') }}
                    </button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>

<script>
    document.getElementById('Edicion').addEventListener('click', function(event) {
        event.preventDefault();
        Swal.fire({
            title: '¿Seguro que desea actualizar el registro?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: '¡Sí, actualizar!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('Edicion_registro').submit();
            }
        });
    });
</script>

@endsection

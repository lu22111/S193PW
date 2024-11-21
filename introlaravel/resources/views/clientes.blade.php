@extends('layouts.plantillas')

@section('contenido')

@if(session('success'))
    <script>
        Swal.fire({
            title: "¡Éxito!",
            text: '{{ session('success') }}',
            icon: "success",
            confirmButtonText: "Aceptar"
        });
    </script>
@endif

@if(session('error'))
    <script>
        Swal.fire({
            title: "¡Error!",
            text: '{{ session('error') }}',
            icon: "error",
            confirmButtonText: "Aceptar"
        });
    </script>
@endif

<div class="container mt-5 col-md-8">
    @foreach($clientes as $cliente)
        <div class="card text-justify font-monospace mt-4">
            <div class="card-header fs-5 text-primary">
                {{ $cliente->nombre }}
            </div>
            <div class="card-body">
                <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                <p class="card-text fw-lighter">{{ $cliente->telefono }}</p>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">
                    {{ __('Actualizar') }}
                </a>
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" id="Eliminar_cliente_{{ $cliente->id }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmarEliminacion({{ $cliente->id }})">
                        {{ __('Eliminar') }}
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<script>
    function confirmarEliminacion(clienteId) {
        Swal.fire({
            title: '¿Seguro que desea eliminar el registro?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: '¡Sí, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Cambiar el método del formulario a DELETE
                const form = document.getElementById(`Eliminar_cliente_${clienteId}`);
                const inputMethod = document.createElement('input');
                inputMethod.type = 'hidden';
                inputMethod.name = '_method';  // Nombre del campo que Laravel usa para métodos HTTP
                inputMethod.value = 'DELETE';  // Establecer el valor a 'DELETE'

                form.appendChild(inputMethod);  // Agregar el campo _method al formulario
                form.submit();  // Enviar el formulario
            }
        });
    }
</script>

@endsection


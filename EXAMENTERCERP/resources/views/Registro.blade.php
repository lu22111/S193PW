<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Prendas</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center">
@session('Exito')
    <script>
        Swal.fire({
        title: "Respuesta del Servidor!",
        text: '{{$value}}',
        icon: "success"
        });
    </script>
    @endsession
    <h1>guardar</h1>
    <form class="w-50" action="{{route('guardar')}}" method="POST">
    @csrf
        <div class="mb-3 text-center">
            <label class="form-label text-center">Prenda</label>
            <input type="text" class="form-control" name="Prenda" required>
            <small class="text-danger fst-italic">{{$errors->first('Prenda')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">color</label>
            <input type="text" class="form-control" name="Color"required>
            <small class="text-danger fst-italic">{{$errors->first('color')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">cantidad</label>   
            <input type="number" class="form-control"name="Cantidad" required>
            <small class="text-danger fst-italic">{{$errors->first('cantidad')}}</small>
        </div>
        <button type="submit">Guardar</button>
    </form>
    <h1>editar</h1>
    <form class="w-50" action="{{route('editar')}}" method="POST">
        @csrf
        <div class="mb-3 text-center">
            <label class="form-label text-center">id</label>
            <input type="number" class="form-control" name="id" required>
            <small class="text-danger fst-italic">{{$errors->first('id')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label text-center">Prenda</label>
            <input type="text" class="form-control" name="Prenda" required>
            <small class="text-danger fst-italic">{{$errors->first('Prenda')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">color</label>
            <input type="text" class="form-control" name="Color"required>
            <small class="text-danger fst-italic">{{$errors->first('color')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">cantidad</label>   
            <input type="number" class="form-control"name="Cantidad" required>
            <small class="text-danger fst-italic">{{$errors->first('cantidad')}}</small>
        </div>
        <button type="submit">Guardar</button>
    </form>
    <h1>borrar</h1>
    <form class="w-50" action="{{route('borrar')}}" method="POST">
    @csrf
    <div class="mb-3 text-center">
            <label class="form-label text-center">id</label>
            <input type="number" class="form-control" name="id" required>
            <small class="text-danger fst-italic">{{$errors->first('id')}}</small>
        </div>
        <button type="submit">Guardar</button>
    </form>
        </body>
</html>
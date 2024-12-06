<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copnsulta de Prendas</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

@foreach ($consulta as $prenda)
<div class="card text-justify font-monospace mt-4">
    <div class="card-header fs-5 text-primary">
        {{$prenda->prenda}}
    </div>
    <div class="card-body">
        <h5 class="fw-bold">{{$prenda->color}}</h5>
        <p class="card-text fw-lighter">{{$prenda->cantidad}}</p>
    </div>
</div>

@endforeach


</body>
</html>
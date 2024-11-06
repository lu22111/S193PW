<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}"> 
    @vite(['resources/js/app.js'])
    <title>Registro prendas </title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href=" {{ route('rutainicio') }}" class="navbar-brand">Turista sin Hops</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('rutaprendas) }}" class="nav-link" aria-current="page" href="#">Prendas</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('rutacolor ') }}" class="nav-link" >color</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
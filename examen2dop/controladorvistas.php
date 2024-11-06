<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidorCliente;
class ControladorVistas extends Controller
{
    // Usamos este controlador para administrar la lógica de las vistas
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('prendas');
    }

    public function procesadorCliente(ValidorCliente $peticion)
    {
        $validacion = $peticion->validate([
            'prenda' => 'required|min:4|max:200',
            'color' => 'required',
            'cantidad' => 'required|numeric',
        ]);}
    }
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('clientes');
    }

    public function procesadorCliente(Request $peticion)
    {
        //return ':)Si llegó la info del cliente :)';//
        //return $peticion ->all();//
        return $peticion ->ip();

    }
}

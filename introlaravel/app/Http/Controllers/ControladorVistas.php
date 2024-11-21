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
        // Assuming you want to show a form for the client
        return view('formulario'); // Ensure you have a 'formulario.blade.php' view
    }

    public function consulta()
    {
        return view('Cliente');
    }

    public function procesadorCliente(ValidorCliente $peticion)
    {
        // No need for manual validation since 'ValidorCliente' already handles it
        $usuarios = $peticion->input('txtnombre');

        // Flash success message
        session()->flash('exito', 'Se guardó la información correctamente: ' . $usuarios);

        // Redirect to a named route
        return redirect()->route('rutaForm'); // Make sure 'rutaForm' is a valid named route in your 'web.php'
    }
}

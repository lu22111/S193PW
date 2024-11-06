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
        return view('clientes');
    }

    public function procesadorCliente(ValidorCliente $peticion)
    {
        $validacion = $peticion->validate([
            'prenda' => 'required|min:4|max:20',
            'color' => 'required',
            'cantidad' => 'required|numeric',
        ]);

        $usuarios = $peticion->input('txtnombre');
        session()->flash('exito', 'Se guardó la preda: ' . $usuarios);
        return to_route('rutaForm');

        // //return ':)Si llegó la info del cliente :)';//
        // //return $peticion ->all();//
        // return $peticion ->ip();
        //return redirect('/');//

        //return redirect()->route('rutaclientes');//
        //return back();//
        //$id=[['usuario'=>1],['usuario'=>2]];
        // return view('formulario', compact('id'));
    }
}

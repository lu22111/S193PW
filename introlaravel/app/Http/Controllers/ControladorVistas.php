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
        // //return ':)Si llegó la info del cliente :)';//
        // //return $peticion ->all();//
        // return $peticion ->ip();
        //return redirect('/');//

        //return redirect()->route('rutaclientes');//
        //return back();//
        //$id=[['usuario'=>1],['usuario'=>2]];
       // return view('formulario',compact('id'));
$usuarios= $peticion->input('txtnombre');
session()->flash('exito','se guardo el usuario:'.$usuarios);
return to_route('rutaForm');
    }
}//


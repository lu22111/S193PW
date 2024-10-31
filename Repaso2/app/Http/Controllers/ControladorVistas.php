<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarLibro;
class ControladorVistas extends Controller

{
    public function principal(){
        return view('principal');
    }
    public function Registro(){
        return view('Registro');
    }
    public function Guardarlibro(ValidarLibro $peticion){ 
        $Libro = $peticion->input('Titulo');
        session()->flash('Exito','Se guardo con exito:' .$Libro);
        return to_route('rutaregistro');
    }
}

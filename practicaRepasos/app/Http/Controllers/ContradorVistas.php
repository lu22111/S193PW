<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContradorVistas extends Controller
{
  
    public function inicio(){
        return view('welcome');
    }

    public function repaso(){
        return view('Repaso');

    }
//mg a GB
    public function calculadora(Request $convertir){
        $dato = $convertir->dato;
        $resultado = $dato / 1024;
        return view('Repaso', ['convertir' => $resultado]);
    }
//Gb a MG
public function calculadora1(Request $convertir){

    $dato = $convertir->dato;
    $resultado = $dato * 1024;
    return view('Repaso', ['convertir1' => $resultado]);
}

    
//GB A TB
public function calculadora2(Request $convertir){

    $dato = $convertir->dato;
    $resultado = $dato / 1024;
    return view('Repaso', ['convertir2' => $resultado]);
}


//tb a Gb 

public function calculadora3(Request $convertir){

    $dato = $convertir->dato;
    $resultado = $dato * 1024;
    return view('Repaso', ['convertir3' => $resultado]);
}
    }



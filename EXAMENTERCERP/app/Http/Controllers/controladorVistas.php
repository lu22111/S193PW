<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controladorVistas extends Controller
{
    public function registro(){
        return view("Registro");
    }
    public function guardar(Request $request){
        $prenda = $request->validate([
            "Prenda"=> "required",
            "Color"=> "required",
            "Cantidad"=> "required|numeric|min:1",
        ]);
        DB::table("prendas")->insert([
            "prenda"=> $request->input("Prenda"),
            "color"=> $request->input("Color"),
            "cantidad"=> $request->input("Cantidad"),
        ]);
        $prenda = $request->input("Prenda");
        $color = $request->input("Color");
        session()->flash('Exito','Se guardo '.$prenda.' '.$color);
        return view("Registro");
    }
    
    public function editar(Request $request){
        $prenda = $request->validate([
            "id"=> "required",
            "Prenda"=> "required",
            "Color"=> "required",
            "Cantidad"=> "required|numeric|min:1",
        ]);
        $id = $request->input("id");
        DB::table("prendas")->whereId($id)->update([
            "prenda"=> $request->input("Prenda"),
            "color"=> $request->input("Color"),
            "cantidad"=> $request->input("Cantidad"),
        ]);
        $prenda = $request->input("Prenda");
        $color = $request->input("Color");
        session()->flash('Exito','Se actualizo '.$prenda.' '.$color);
        return view("Registro");
    }
    
    public function eliminar(Request $request){
        $id = $request->input("id");
        $eliminar = DB::select('select * from prendas where id ='.$id.'');
        $prenda = $eliminar[0]->prenda;
        $color = $eliminar[0]->color;
        DB::table('prendas')->delete($id);
        session()->flash('Exito','Se elimino la prenda '.$prenda.' '.$color);
        return view('Registro');
    
    }
    
    public function consulta(){
        
        $consulta = DB::select('select * from prendas');
        return view('consulta',compact('consulta'));
    
    }
}

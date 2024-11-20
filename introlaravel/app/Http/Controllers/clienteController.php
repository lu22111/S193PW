<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    $clientes = DB::table('clientes')->get();
    return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('formulario');
    }

    /**
     * aqui me aviento el insert
     */
    public function store(Request $request)
    {
        DB::tabla('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono-'),
            "create_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = DB::table('clientes')->find($id);
       return view('clientes.edit', compact('cliente'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtcorreo' => 'required|email|unique:clientes,correo,' . $id,
            'txttelefono' => 'required|string|max:15',

        ]);
        $cliente = Cliente::findOrFail($id);  // Encuentra el cliente por ID
        $cliente->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
        ]);
    
        return redirect()->route('clientes.index')
        ->with('success', 'Cliente actualizado correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    DB::table('clientes')->where('id', $id)->delete();

  
    return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');
}

}

    


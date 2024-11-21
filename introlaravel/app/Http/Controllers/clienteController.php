<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Cliente;


class clienteController extends Controller
{
    /**
     * Mostrar una lista de clientes.
     */
    public function index()
    {
        $clientes = DB::table('clientes')->get();
        return view('clientes', compact('clientes'));
    }

    /**
     * Mostrar el formulario para crear un nuevo cliente.
     */
    public function create()
    {
        return view('Formulario');
    }

    /**
     * Almacenar un nuevo cliente en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtcorreo' => 'required|email|unique:clientes,correo',
            'txttelefono' => 'required|string|max:15',
        ]);

        DB::table('clientes')->insert([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('rutaForm')->with('success', 'Cliente creado exitosamente.');
    }

    /**
     * Mostrar el formulario para editar un cliente existente.
     */
    public function edit(string $id)
    {
        $clientes =DB::select('select *from clientes where id ='.$id.'');
        return view('edit', compact('clientes'));
    }

    /**
     * Actualizar un cliente existente en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtcorreo' => 'required|email|unique:clientes,correo,' . $id,
            'txttelefono' => 'required|string|max:15',
        ]);

        DB::table('clientes')->where('id', $id)->update([
            'nombre' => $request->input('txtnombre'),
            'apellido' => $request->input('txtapellido'),
            'correo' => $request->input('txtcorreo'),
            'telefono' => $request->input('txttelefono'),
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('rutaCliente')->with('success', 'Cliente actualizado correctamente.');
    }

    /**
     * Eliminar un cliente existente de la base de datos.
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
    
        // Realiza la eliminación
        $cliente->delete();
    
        // Redirige con mensaje de éxito
        return redirect()->route('rutaCliente')->with('success', 'Cliente eliminado correctamente.');
    }
}    

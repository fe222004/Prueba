<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
      public function store(Request $request){

        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'cedula' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
        ]);

        $cliente = new Cliente();
        $cliente->name = $request -> name;
        $cliente->email = $request -> email;
        $cliente->cedula = $request -> cedula;
        $cliente->telefono = $request -> telefono;
        $cliente->direccion = $request -> direccion;

        $cliente->save();

    }

    public function index(){
        $clientes = Cliente::all();

        return redirect()->route('cliente.index')->with('success','Tarea creada Correctamente');
    }
}

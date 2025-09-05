<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function store(Request $request){

        $request -> validate([
            'nombre' => 'required',
            'email' => 'required',
            'cedula' => 'required',
            'telefono' => 'required',
            'direccion' => 'required'
        ]);

        $cliente = new Cliente;
        $cliente->nombre = $request -> nombre;
        $cliente->email = $request -> email;
        $cliente->cedula = $request -> cedula;
        $cliente->telefono = $request -> telefono;
        $cliente->direccion = $request -> direccion;

        $cliente->save();

    }

    public function index(){
        $clientes = Cliente::all();

        return $clientes;
    }
}

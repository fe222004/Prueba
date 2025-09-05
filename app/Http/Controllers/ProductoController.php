<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
     public function store(Request $request){

        $request -> validate([
            'name' => 'required',
            'precio' => 'required'
        ]);

        $producto = new Producto();
        $producto->name = $request -> name;
        $producto->precio = $request -> precio;

        $producto->save();

    }

    public function index(){
        $productos = Producto::all();

     return redirect()->route('product.index')->with('success','Tarea creada Correctamente');

    }
}

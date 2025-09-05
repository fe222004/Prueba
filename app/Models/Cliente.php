<?php

namespace App\Models;

use App\Http\Controllers\Factura;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre', 'email', 'cedula', 'telefono','direccion' ];

    public function facturas(){
        return $this->hasMany(Factura::class);
    }

}

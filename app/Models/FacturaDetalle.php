<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacturaDetalle extends Model
{
    protected $fillable = ['factura_id', 'producto_id', 'cantidad', 'precio', 'subtotal' ];

    public function factura(){
        return $this->belongsTo(FacturaCabecera::class);
    }

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}

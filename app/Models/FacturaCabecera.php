<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacturaCabecera extends Model
{
     protected $fillable = ['cliente_id', 'total' ];


    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

     public function detalles(){
        return $this->hasMany(FacturaDetalle::class);
    }
}

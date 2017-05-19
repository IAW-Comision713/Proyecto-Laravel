<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Preestablecido;

class Aguja extends Model
{

    //Acá van los métodos de obtener todos menos el vacío. Ver Laracast 7
    public function scopeGetAgujas($query) {
        
        $idvacio = Preestablecido::where('nombre', 'Vacio')->pluck('agujas')->first();
        
        return $query->where('id', '<>', $idvacio);
    }
    
    
}

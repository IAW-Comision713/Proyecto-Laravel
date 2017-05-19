<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Preestablecido;

class Fondo extends Model
{
    //
    public function scopeGetFondos($query) {
        
        $idvacio = Preestablecido::where('nombre', 'Vacio')->pluck('fondo')->first();
        
        return $query->where('id', '<>', $idvacio);
    }
}

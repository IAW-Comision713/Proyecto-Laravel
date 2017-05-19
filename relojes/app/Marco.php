<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Preestablecido;

class Marco extends Model
{
    //
    public function scopeGetMarcos($query) {
        
        $idvacio = Preestablecido::where('nombre', 'Vacio')->pluck('marco')->first();
        
        return $query->where('id', '<>', $idvacio);
    }
}

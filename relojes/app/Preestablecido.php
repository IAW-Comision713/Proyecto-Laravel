<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preestablecido extends Model
{
    //
    public function scopeGetPreestablecidos($query) {
        
        return $query->where('nombre', '<>', 'Vacio');
    }
    
    public static function getVacio() {
        
        return Preestablecido::where('nombre', 'Vacio');
    }
}

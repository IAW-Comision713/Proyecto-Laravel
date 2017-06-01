<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Preestablecido;

class Fondo extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'imagen',
    ];
    
    public function scopeGetFondos($query) {
        
        $idvacio = Preestablecido::where('nombre', 'Vacio')->pluck('fondo')->first();
        
        return $query->where('id', '<>', $idvacio);
    }

    public static function plural() {

        return 'fondos';
    }
}

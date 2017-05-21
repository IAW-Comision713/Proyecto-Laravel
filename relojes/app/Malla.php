<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Preestablecido;

class Malla extends Model
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
    
    public function scopeGetMallas($query) {
        
        $idvacio = Preestablecido::where('nombre', 'Vacio')->pluck('malla')->first();
        
        return $query->where('id', '<>', $idvacio);
    }
}

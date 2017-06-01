<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Preestablecido;

class Marco extends Model
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
    
    public function scopeGetMarcos($query) {
        
        $idvacio = Preestablecido::where('nombre', 'Vacio')->pluck('marco')->first();
        
        return $query->where('id', '<>', $idvacio);
    }

    public static function plural() {

        return 'marcos';
    }
}

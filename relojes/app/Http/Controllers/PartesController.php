<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Malla;
use App\Fondo;
use App\Marco;
use App\Aguja;
use App\Preestablecido;

class PartesController extends Controller
{
    //
    public function jsonPartes() {
        
        $malla = Malla::getMallas()->get();
        $fondo = Fondo::getFondos()->get();
        $marco = Marco::getMarcos()->get();
        $agujas = Aguja::getAgujas()->get();
        
        $listado = array();
        $listado["Malla"] = $malla;
        $listado["Fondo"] = $fondo;
        $listado["Marco"] = $marco;
        $listado["Agujas"] = $agujas;
        
        return $listado;
    }
    
    public function jsonVacio() {
        
        $p = Preestablecido::getVacio();
        
        $malla = Malla::find($p->pluck('malla'))->first();
        $fondo = Fondo::find($p->pluck('fondo'))->first();
        $marco = Marco::find($p->pluck('marco'))->first();
        $agujas = Aguja::find($p->pluck('agujas'))->first();
        
        $listado = new Preestablecido;
        $listado->Malla = $malla;
        $listado->Fondo = $fondo;
        $listado->Marco = $marco;
        $listado->Agujas = $agujas;
        
        return $listado;
    }
    
    public function jsonPreestablecidos() {
        
        $listado = array();
        
        foreach(Preestablecido::getPreestablecidos()->get() as $p) {
            
            $nombre = $p->nombre;
            
            $malla = Malla::find($p->malla);
            $fondo = Fondo::find($p->fondo);
            $marco = Marco::find($p->marco);
            $agujas = Aguja::find($p->agujas);
            
            $pre = new Preestablecido;
            $pre->Malla = $malla;
            $pre->Fondo = $fondo;
            $pre->Marco = $marco;
            $pre->Agujas = $agujas;
            
            $listado[$nombre] = $pre;
        }
        
        return $listado;
    }
}

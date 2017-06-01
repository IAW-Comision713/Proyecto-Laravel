<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Malla;
use App\Fondo;
use App\Marco;
use App\Agujas;
use App\Preestablecido;

class DisenoController extends Controller
{
	private $pre;

    public function getModeloURL($malla, $fondo, $marco, $agujas) {

        $this->pre = new Preestablecido;
        $this->pre->Malla = Malla::find($malla);
        $this->pre->Fondo = Fondo::find($fondo);
        $this->pre->Marco = Marco::find($marco);
        $this->pre->Agujas = Agujas::find($agujas);

		return $this->pre;
    }

    public function getModeloVacioURL() {
            
        $p = Preestablecido::getVacio();
            
        $malla = Malla::find($p->pluck('malla'))->first();
        $fondo = Fondo::find($p->pluck('fondo'))->first();
        $marco = Marco::find($p->pluck('marco'))->first();
        $agujas = Agujas::find($p->pluck('agujas'))->first();
            
        $this->pre = new Preestablecido;
        $this->pre->Malla = $malla;
        $this->pre->Fondo = $fondo;
        $this->pre->Marco = $marco;
        $this->pre->Agujas = $agujas;
        
        return $this->pre;
    }
}

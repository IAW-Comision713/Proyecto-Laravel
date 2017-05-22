<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Malla;
use App\Fondo;
use App\Marco;
use App\Aguja;
use App\Preestablecido;

class DisenoController extends Controller
{
	private $pre;

    public function createModeloURL($malla, $fondo, $marco, $agujas) {

    	$this->pre = new Preestablecido;
    	$this->pre->Malla = Malla::find($malla);
        $this->pre->Fondo = Fondo::find($fondo);
        $this->pre->Marco = Marco::find($marco);
        $this->pre->Agujas = Aguja::find($agujas);

        return redirect('diseno')->with('Modelo', $this->pre);
    }

    public function getModeloURL() {

    	if(!isset($this->pre)) {

    		$p = Preestablecido::getVacio();
    		
    		$malla = Malla::find($p->pluck('malla'))->first();
    		$fondo = Fondo::find($p->pluck('fondo'))->first();
    		$marco = Marco::find($p->pluck('marco'))->first();
    		$agujas = Aguja::find($p->pluck('agujas'))->first();
    		
    		$this->pre = new Preestablecido;
    		$this->pre->Malla = $malla;
    		$this->pre->Fondo = $fondo;
    		$this->pre->Marco = $marco;
    		$this->pre->Agujas = $agujas;
    	}
		
		return response()->json($this->pre);
    }
}

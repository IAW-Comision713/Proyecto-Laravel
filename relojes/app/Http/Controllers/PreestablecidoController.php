<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Preestablecido;

class PreestablecidoController extends Controller
{
    public function guardarPreestablecido(Request $request) {

    	/*$this.validate(request(), [

    		'name' => 'required',
    		'pre' => 'required'
    	]);*/

    	$nuevopre = new Preestablecido;

    	$modelo = request('pre');

    	$nuevopre->nombre = request('name');
    	$nuevopre->malla = $modelo['Malla']['id'];
    	$nuevopre->fondo = $modelo['Fondo']['id'];
    	$nuevopre->marco = $modelo['Marco']['id'];
    	$nuevopre->agujas = $modelo['Agujas']['id'];
    	$nuevopre->usuario = Auth::id();

		$nuevopre->save();
    }
}

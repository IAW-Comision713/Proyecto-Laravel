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
    		'pre.Malla.id' => 'required',
    		'pre.Fondo.id' => 'required',
    		'pre.Marco.id' => 'required',
    		'pre.Agujas.id' => 'required',
    	]);*/

        $modelo = request('pre');

        $nuevopre = Preestablecido::updateOrCreate(
                        ['nombre' => request('name'), 'usuario' => Auth::id()],
                        [   'malla' => $modelo['Malla']['id'],
                            'fondo' => $modelo['Fondo']['id'],
                            'marco' => $modelo['Marco']['id'],
                            'agujas' => $modelo['Agujas']['id'] ]
                    );
    }

    public function eliminarPreestablecido(Request $request) {

        $elimpre = Preestablecido::getPreestablecidos()->where([
                                                        ['usuario', '=', Auth::id()],
                                                        ['nombre', '=', request('name')]
                                                        ]);

        $elimpre->delete();
    }
}

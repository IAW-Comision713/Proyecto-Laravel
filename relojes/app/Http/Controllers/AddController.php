<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use App\Aguja;
use App\Fondo;
use App\Marco;
use App\Malla;
use App\Preestablecido;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // /add
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // /add/create
        return view('parte');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST /add
        $this->validate($request, [
            'nombre'=>'required',
            'imagen'=>'required',
            'parte'=>'required']);

        
        $parte = $request->parte;
        //$ruta='img/partes/'.strtolower($parte).'/'.$request->imagen;


        switch ($parte) {
            case 'Aguja':

                    if (isset($_FILES["fileimagen"]["tmp_name"])){
                        $tmp_name = $_FILES['fileimagen']['tmp_name'];
                        move_uploaded_file($tmp_name, 'img/partes/agujas/'.$request->imagen);
                    }
                    else throw new Exception("La parte no pudo ser cargada!");

                    Aguja::create([
                        'nombre'=>$request->nombre,
                        'imagen'=>'img/partes/agujas/'.$request->imagen,
                        ]);
                    
                    break;
            case 'Fondo':

                    if (isset($_FILES["fileimagen"]["tmp_name"])){
                        $tmp_name = $_FILES['fileimagen']['tmp_name'];
                        move_uploaded_file($tmp_name, 'img/partes/fondos/'.$request->imagen);
                    }
                    else throw new Exception("La parte no pudo ser cargada!");

                    Fondo::create([
                        'nombre'=>$request->nombre,
                        'imagen'=>'img/partes/fondos/'.$request->imagen,
                        ]);
                    
                    break;
            case 'Malla':

                    if (isset($_FILES["fileimagen"]["tmp_name"])){
                        $tmp_name = $_FILES['fileimagen']['tmp_name'];
                        move_uploaded_file($tmp_name, 'img/partes/mallas/'.$request->imagen);
                    }
                    else throw new Exception("La parte no pudo ser cargada!"); 

                    Malla::create([
                        'nombre'=>$request->nombre,
                        'imagen'=>'img/partes/mallas/'.$request->imagen,
                        ]);
                                      
                    break;
            case 'Marco':

                    if (isset($_FILES["fileimagen"]["tmp_name"])){
                        $tmp_name = $_FILES['fileimagen']['tmp_name'];
                        move_uploaded_file($tmp_name, 'img/partes/marcos/'.$request->imagen);
                    }
                    else throw new Exception("La parte no pudo ser cargada!");

                    Marco::create([
                        'nombre'=>$request->nombre,
                        'imagen'=>'img/partes/marcos/'.$request->imagen,
                        ]);
                    
                    break;
        }



        return redirect('/parte/create')->with('message','Parte agregada con éxito!!');       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // GET /add/id
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // GET /add/id/edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //PATCH /add/id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->validate($request, [
            'nombreparte'=>'required',
            'parte'=>'required']);

        //if(is_null(request('nombreparte')) || is_null(request('parte')));
        //    return redirect('/parte/create#eliminarparte')->with('message', 'No se seleccionó ninguna parte!!');

        $Model;
        $nombreparte = request('nombreparte');

        //Solución rara para no cambiarle el nombre al modelo. Caso único en el que nombreparte sea Agujas
        if(substr($nombreparte, -1) == 's')
            $Model = substr($nombreparte, 0, -1);
        else
            $Model = $nombreparte;


        $NamespacedModel = '\\App\\' . $Model;

        if(Preestablecido::where(Str::lower($Model), request('parte'))->exists()) {

            return redirect('/parte/create#eliminarparte')->with('message', 'No es posible eliminar una parte que compone un modelo preestablecido!!');
        }
        else {

            $parte = $NamespacedModel::find(request('parte'));
            
            File::delete('img/partes/'.Str::lower($Model).'s/'.$parte->imagen);

            $parte->delete();

            return redirect('/parte/create#eliminarparte')->with('message', 'Parte eliminada con éxito!!');
        }

    }
}

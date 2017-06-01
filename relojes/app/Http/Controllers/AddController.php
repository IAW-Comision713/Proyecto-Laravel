<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use App\Agujas;
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

        $NamespacedModel = '\\App\\' . $parte;

        if (isset($_FILES["fileimagen"]["tmp_name"])) {
            
            $tmp_name = $_FILES['fileimagen']['tmp_name'];
            move_uploaded_file($tmp_name, 'img/partes/'.$NamespacedModel::plural().'/'.$request->imagen);
        }
        else throw new Exception("La parte no pudo ser cargada!");

        $NamespacedModel::create([
            'nombre'=>$request->nombre,
            'imagen'=>'img/partes/'.$NamespacedModel::plural().'/'.$request->imagen,
            ]);

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

        $Model = request('nombreparte');

        $NamespacedModel = '\\App\\' . $Model;

        if(Preestablecido::where(Str::lower($Model), request('parte'))->exists()) {

            return redirect('/parte/create#eliminarparte')->with('message', 'No es posible eliminar una parte que compone un modelo preestablecido!!');
        }
        else {

            $parte = $NamespacedModel::find(request('parte'));
            
            File::delete($parte->imagen);

            $parte->delete();

            return redirect('/parte/create#eliminarparte')->with('message', 'Parte eliminada con éxito!!');
        }
    }
}

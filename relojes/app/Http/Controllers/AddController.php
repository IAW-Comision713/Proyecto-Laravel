<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aguja;
use App\Fondo;
use App\Marco;
use App\Malla;

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

        
        $parte=$request->parte;
        //$ruta='img/partes/'.strtolower($parte).'/'.$request->imagen;


        switch ($parte) {
            case 'Aguja':
                    Aguja::create([
                        'nombre'=>$request->nombre,
                        'imagen'=>'img/partes/agujas/'.$request->imagen,
                        ]);
                    if (isset($_FILES["fileimagen"]["tmp_name"])){
                        $tmp_name = $_FILES['fileimagen']['tmp_name'];
                        move_uploaded_file($tmp_name, 'img/partes/agujas/'.$request->imagen);
                    }
                    else throw new Exception("Upload Failed!");
                    
                    break;
            case 'Fondo':
                    Fondo::create([
                        'nombre'=>$request->nombre,
                        'imagen'=>'img/partes/fondos/'.$request->imagen,
                        ]);
                    if (isset($_FILES["fileimagen"]["tmp_name"])){
                        $tmp_name = $_FILES['fileimagen']['tmp_name'];
                        move_uploaded_file($tmp_name, 'img/partes/fondos/'.$request->imagen);
                    }
                    else throw new Exception("Upload Failed!");
                    break;
            case 'Malla':
                    Malla::create([
                        'nombre'=>$request->nombre,
                        'imagen'=>'img/partes/mallas/'.$request->imagen,
                        ]);
                    if (isset($_FILES["fileimagen"]["tmp_name"])){
                        $tmp_name = $_FILES['fileimagen']['tmp_name'];
                        move_uploaded_file($tmp_name, 'img/partes/mallas/'.$request->imagen);
                    }
                    else throw new Exception("Upload Failed!");                   
                    break;
            case 'Marco':
                    Marco::create([
                        'nombre'=>$request->nombre,
                        'imagen'=>'img/partes/marcos/'.$request->imagen,
                        ]);
                    if (isset($_FILES["fileimagen"]["tmp_name"])){
                        $tmp_name = $_FILES['fileimagen']['tmp_name'];
                        move_uploaded_file($tmp_name, 'img/partes/marcos/'.$request->imagen);
                    }
                    else throw new Exception("Upload Failed!");
                    break;
        }



        return redirect('/parte/create');       
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
    public function destroy($id)
    {
        //DELETE /add/id
    }
}

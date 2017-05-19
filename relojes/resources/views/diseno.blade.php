@extends('layouts.layout')

@section('title')

    Diseñá tu propio reloj

@endsection

@section('css')

    <link type="text/css" rel="stylesheet" href="css/estilospartes.css">

@endsection

@section('scripts')

    <script language="javascript" src="js/html2canvas.js"></script>
    <script language="javascript" src="js/FileSaver.js"></script>

@endsection

@section('content')
   
        <div id="contenedor" class="container z-depth-4 row">           
            <div class="col s4">
                <ul class="collapsible" data-collapsible="accordion" id="partes">                      
                </ul>
            </div>           
            
            <div id="reloj" class="col s4">
            </div>
            
            <div id="botonera-preestablecidos" class="col s4">
            </div>
            
            <div id="botonera" class="s2 ">
                <button id="btnDesechar" class="btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Desechar diseño" onclick="limpiarReloj()"><i class="material-icons large" >delete</i></button>                
                <button id="btnFav" class="  btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar como favorito" onclick="addFavoritos()"><i class="material-icons large">star</i></button>
                <button id="btnAplicar" class="  btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Aplicar favorito" onclick="aplicarFavorito()"><i class="material-icons large">restore</i></button>
                <button id="btnDescargar" class="  btn-floating tooltipped " data-position="top" data-delay="50" data-tooltip="Descargar" onclick="descargarimagen()"><i class="material-icons large">system_update_alt</i></button>    
            </div>
        </div>

@endsection

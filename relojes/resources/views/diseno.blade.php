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
        
        <div id="contenedor" class="container row">      

        <h4>Diseño (después pienso algo para poner aca pero quedaba medio vacio)</h4>

            <div class="col s4">
                <ul class="collapsible" data-collapsible="accordion" id="partes">                      
                </ul>
            </div>           
            
            <div id="reloj" class="col s3 z-depth-3">
            </div>
            
            <div id="botonera" class="col s1">
                <button id="btnDesechar" class="btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Desechar diseño" onclick="limpiarReloj()"><i class="material-icons large" >delete</i></button>

                <p>

                <button id="btnFav" class="  btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar como favorito" onclick="addFavoritos()"><i class="material-icons large">star</i></button>

                <p>

                <button id="btnAplicar" class="  btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Aplicar favorito" onclick="aplicarFavorito()"><i class="material-icons large">restore</i></button>

                <p>

                <button id="btnDescargar" class="  btn-floating tooltipped " data-position="top" data-delay="50" data-tooltip="Descargar" onclick="descargarimagen()"><i class="material-icons large">system_update_alt</i></button>

                <p>

                <button id="btnGuardar" class="  btn-floating tooltipped " data-position="top" data-delay="50" data-tooltip="Guardar en Mis Modelos" onclick="actualizarpusuario()"><i class="material-icons large">save</i></button>  
            </div>

            <div id="preestablecidos" class="col s4">

                <div id="botonera-preestablecidos">               

                    <h5>Modelos preestablecidos</h5>

                </div>


                @if(!Auth::guest())

                <div id="usuario-preestablecidos">
                    
                    <h5>Mis modelos</h5>

                    <script>
                        preestablecidosusuario();
                    </script>

                </div>

                @endif

            </div>

            
        </div>

@endsection

@extends('layouts.layout')

@section('title')

    Diseñá tu propio reloj - Oh!Clock

@endsection

@section('css')

    <link type="text/css" rel="stylesheet" href="{{ asset('css/estilospartes.css') }}">

@endsection

@section('scripts')

    <script type="text/javascript" src="{{ asset('js/funcionesJavaScript.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/html2canvas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/FileSaver.js') }}"></script>

@endsection

@section('content')
        
        <div id="contenedor" class="container row">      

        <h4>Armá un reloj a tu medida</h4>

            <div class="col s4">
                <ul class="collapsible" data-collapsible="accordion" id="partes">                      
                </ul>
            </div>           
            
            <div id="reloj" class="col s3 z-depth-3">
            </div>
            
            <div id="botonera" class="col s1">
                <button id="btnDesechar" class="btn-floating tooltipped" data-position="top" data-delay="50" data-tooltip="Desechar diseño" onclick="limpiarReloj()"><i class="material-icons large" >delete</i></button>

                <p>

                <button id="btnDescargar" class="  btn-floating tooltipped " data-position="top" data-delay="50" data-tooltip="Descargar" onclick="descargarimagen()"><i class="material-icons large">system_update_alt</i></button>

                <p>

                <div id="compartir-box">

                    <button id="btnCompartir" class="  btn-floating tooltipped " data-position="top" data-delay="50" data-tooltip="Compartir" onclick="mostrarlink()"><i class="material-icons large">share</i></button>

                    <div id="compartir-form" class="z-depth-3 scale-transition scale-out">

                        <div class="input-field">
                            <input id="linkmodelo" type="text" readonly="">
                            <label for="linkmodelo">Copiá y pegá el link para compartir</label>
                        </div>
                        <br>
                        <button class="btn waves-effect waves-light" type="submit" name="action" onclick="copiarLink()">
                            Copiar
                            <i class="material-icons right">content_copy</i>
                        </button>

                    </div>
                </div>
                
                <p>
                
                <div id="guardar-box">
                    <button id="btnGuardar" class="  btn-floating tooltipped " data-position="top" data-delay="50" data-tooltip="Guardar en Mis Modelos" onclick="mostrarguardar()"><i class="material-icons large">save</i></button>

                    <div id="guardar-form" class="z-depth-3 scale-transition scale-out">

                        <div class="input-field">
                            <input id="nombremodelo" type="text" class="validate" minlength="1" maxlength="50" required>
                            <label for="nombremodelo" data-error="El nombre del modelo no es válido!">Nombre de tu modelo</label>
                        </div>
                        <br>
                        <button class="btn waves-effect waves-light" type="submit" name="action" onclick="guardarModelo()">
                            Guardar
                            <i class="material-icons right">send</i>
                        </button>
                    </div> 
                </div>

                


                 
            </div>

            <div id="preestablecidos" class="col s4">
            @if(Auth::id() != 1)
                <div id="botonera-preestablecidos">               

                    <h5>Modelos preestablecidos</h5>

                </div>
                @endif

                <div id="usuario-preestablecidos">
                    
                    <h5>Mis modelos</h5>
                    <div id="div-usuario-preestablecidos">
                    </div>
                </div>

               

            </div>

            
        </div>

@endsection

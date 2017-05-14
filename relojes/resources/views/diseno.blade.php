<!DOCTYPE html>
<html>
    <head>
        <title>Diseñá tu propio reloj</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" href="img/favicon.ico">
        
        <link type="text/css" rel="stylesheet" href="css/materialize.css">
        <link id="estilo" type="text/css" rel="stylesheet" href="css/estilo1.css" media="screen">
        <link type="text/css" rel="stylesheet" href="css/estilospartes.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        
        <script language="javascript" src="js/jquery-3.2.1.js"></script>
        <script language="javascript" src="js/materialize.js"></script>
        <script language="javascript" src="js/jQueryAjax.js"></script>
        <script language="javascript" src="js/funcionesJavaScript.js"></script>
        <script language="javascript" src="js/html2canvas.js"></script>
        <script language="javascript" src="js/FileSaver.js"></script>
    </head>
    <body>
        <div id="contenedor" class="container z-depth-4 row">
            <nav class="nav-extended " id="barra">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo"><img id="img-logo" src="img/logo.png" alt="logo">Clock</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                      <li><a href="readme.html">Readme</a></li>
                      <li>
                        <a class='dropdown-button' href='#' data-activates='dropdownestilos'>Estilo<i class="material-icons right">arrow_drop_down</i></a>
                    
                        <ul id='dropdownestilos' class='dropdown-content'>
                            <li><a href="javascript:cambiarestilo(1);">Estilo 1</a></li>
                            <li><a href="javascript:cambiarestilo(2);">Estilo 2</a></li>
                        </ul>
                      </li>
                    </ul>                    
                </div>
                <div class="nav-wrapper" id="barra1">
                  <div class="col s12">
                    <a href="index.html" class="breadcrumb">Home</a>
                    <a href="diseno.html" class="breadcrumb">Diseño</a>                                       
                  </div>
                </div>
            </nav>            
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
    </body>
</html>

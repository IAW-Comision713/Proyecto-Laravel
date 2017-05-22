@extends('layouts.layout')

@section('title')

    Oh!Clock - Diseño personalizado de relojes

@endsection

@section('scripts')

    <script type="text/javascript" src="{{ asset('js/funcionesJavaScript.js') }}"></script>
    <script language="javascript" src="js/html2canvas.js"></script>
    <script language="javascript" src="js/FileSaver.js"></script>

@endsection

@section('content')

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center text-lighten-2">Diseñá tu propio reloj</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Más de 500 combinaciones posibles, armalo a tu medida!</h5>
                </div>
                <div class="row center">
                    <a id="btnCrear" href="{{ route('diseno') }}" class="btn-large waves-effect darken-4">Crear mi reloj</a>
                </div>
                <br><br>
            </div>
        </div>
            <div class="parallax"><img src="img/fondofeliz.png" alt="Reloj feliz"></div>
        </div>
        
        <div class="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center amber-text text-darken-3"><i class="material-icons">web</i></h2>
                            <h5 class="center">Proyecto 1</h5>
                            <p class="light">Segunda parte del proyecto de la materia Ingeniería de Aplicaciones Web</p>
                        </div>
                    </div>
                    
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center amber-text text-darken-3"><i class="material-icons">group</i></h2>
                            <h5 class="center">Qué hicimos</h5>
                            
                            <p class="light">Nuestro producto elegido es un reloj de pulsera, al que se le puede personalizar la malla, el marco, el fondo (que contiene los números) y las agujas. Una vez armado el reloj es posible descargar una imagen del modelo o guardarla como favorito para que las opciones elegidas sean restauradas al volver a visitar la página.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center amber-text text-darken-3"><i class="material-icons">view_headline</i></h2>
                            <h5 class="center">Read me</h5>

                            <p class="light">Leé el Readme para saber más sobre la comisión, decisiones de diseño, cambios desde el Proyecto 0, librerías usadas y otros datos importantes.</p>
                            
                            <a href="readme.html" class="btn waves-effect waves-light light-blue darken-4 ">Read me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

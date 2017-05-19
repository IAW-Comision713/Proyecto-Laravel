@extends('layouts.layout')

@section('title')

    Readme - Oh! Clock

@endsection

@section('content')

    <div class="container">
        <div class="section">
            <b>Comisión 713 IAW-DCIC: Boruta Daiana, Rapetti Carolina.</b><br>
            <br>
            En esta entrega del proyecto se realizaron los siguientes cambios en el modelo JSON:<br>
            - Las partes personalizables del reloj que finalmente se definieron son marco, malla, numeros y agujas.<br>
            Cada parte se compone de tres atributos: id, nombre e imagen(que contiene src de la imagen asociada a cada opcion).<br>
            Se definieron algunos modelos con valores preestablecidos para cada parte.<br>
            <br>
            En cuanto a la funcionalidad, se cambio la opción de compartir el link de la personalización por la opción de guardar el modelo elegido como favorito.<br>
            Además se adicionó la opción de descargar la imagen del reloj diseñado.<br>
            <br>
            Se utilizaron las siguientes librerias extra:<br>
            - Html2canvas<br>
            - Materialize<br>
            - FileSaver<br>
        </div>
    </div>

@endsection

@extends('layouts.layout')

@section('title')

    Readme - Oh! Clock

@endsection

@section('scripts')

    <script type="text/javascript" src="{{ asset('js/funcionesJavaScript.js') }}"></script>
    <script language="javascript" src="js/html2canvas.js"></script>
    <script language="javascript" src="js/FileSaver.js"></script>

@endsection

@section('content')

    <div class="container">
        <div class="section">
            <h5>Datos de la comisión</h5>
            <b>Comisión 713</b>
            <ul>
                <li><i class="tiny material-icons">label</i>Boruta, Daiana María - LU: 99 858</li>
                <li><i class="tiny material-icons">label</i>Rapetti, Sofía Carolina - LU: 105 444</li>
            </ul>
            Ingeniería de Aplicaciones Web - Departamento de Ciencias e Ingeniería de la Computación - Universidad Nacional del Sur

        </div>
        <div class="divider"></div>
        <div class="section">
            <h5>Cambios desde el proyecto 0</h5>
            En esta entrega del proyecto se realizaron los siguientes cambios en el modelo JSON:<br>
            - Las partes personalizables del reloj que finalmente se definieron son: Marco, Malla, Fondo y Agujas.<br>
            - Cada parte se compone de tres atributos: id, nombre e imagen(que contiene src de la imagen asociada a cada opcion).<br>
            - Se definieron algunos modelos con valores preestablecidos para cada parte.<br>
            <p>
            En cuanto a la funcionalidad, se cambió la opción de compartir el link de la personalización por la opción de guardar y reestablecer el modelo elegido como favorito en el Local Storage<br>
            Además se agregó la opción de descargar la imagen del reloj diseñado.<br>
            <p>
            Se utilizaron las siguientes librerías adicionales:<br>
            - Materialize: Como complemento de Materialize CSS, para dar animación a distintos componentes.<br>
            - Html2canvas: Para generar la imagen a descargar.<br>
            - FileSaver: Se utiliza para descargar la imagen del reloj en caso de que el navegador no soporte dicha función JavaScript.
        </div>
        <div class="divider"></div>
        <div class="section">
            <h5>Cambios desde el proyecto 1</h5>
            En esta entrega del proyecto no se realizaron mayores cambios en el modelo JSON, la única diferencia es que éste se obtiene ahora a partir de un controlador de Laravel, que a su vez lo arma según los datos de la base de datos.
            <p>
            En cuanto a funcionalidad, además de lo requerido por el proyecto:<br>
            - Se eliminó la opción de guardar y reestablecer favorito a través del Local Storage, ya que quedaba obsoleta con el nuevo requerimiento de guardar modelos preestablecidos (no sólo uno).<br>
            - Los modelos que almacena/elimina el usuario administrador, son los modelos que éste maneja como propios. Es decir, los modelos que guarde el administrador serán visibles para todos los usuarios y visitantes, y los modelos que elimine serán eliminados de la lista de preestablecidos para todos los usuarios y visitantes.<br>
            - A la hora de agregar partes, se asume que el administrador conoce los lineamientos que debe seguir (dimensiones, posición de los elementos, partes que conforman cada capa, etc) cuando introduce una nueva imagen.<br>
            - A la hora de eliminar partes, dicha acción no será posible si la parte a eliminar conforma algún modelo preestablecido.<br>
            - El link para compartir el modelo de reloj actual es generado sólo si el reloj está terminado, esto es, ninguna parte pertenece al "modelo vacío". Si no, el link direccionará a la página principal. Sin embargo, es posible guardar modelos sin terminar para permitir completarlos posteriormente.
            <p>
            <b>Credenciales administrador:</b>
            <br>
            mail: admin@admin.com
            <br>
            pass: admin0
        </div>
    </div>

@endsection

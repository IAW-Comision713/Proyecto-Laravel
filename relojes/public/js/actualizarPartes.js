var personalizables;

$(function() {
    
     $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

     $.ajax({
        url: "/partes/jsonPartes",
        context: document.body,
        success: function (data) {
            personalizables = data;
            cargaropcionespartes("#selectparte");

            cargaropcionespartes("#selectparteelim");

            $("#selectparteelim").on('change', function() {

                mostrarpartes($("#selectparteelim").val());
            });
        }
    });

    $('select').material_select();
 });

function cargaropcionespartes(sel) {

    selector = $(sel);

    for(var parte in personalizables) {

        var opcion = $("<option></option>");
        opcion.attr("value", parte);
        opcion.text(parte);
        selector.append(opcion);
    }

    $('select').material_select();
}

function mostrarpartes(parte) {

    selector = $("#parteelim");
    selector.empty();

    var index;
    for(index = 0; index < personalizables[parte].length; index++) {

        var opcion = $("<option></option>");
        opcion.attr("value", personalizables[parte][index].id);
        opcion.text(personalizables[parte][index].nombre);
        selector.append(opcion);
    }

    $('select').material_select();
}
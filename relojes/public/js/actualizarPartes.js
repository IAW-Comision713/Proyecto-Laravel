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
            mostrarPartes(data);
        }
    });

     $(document).ready(function() {
        $('select').material_select();
    });

     
 });

function mostrarPartes(data){
    for(var parte in data) {
        
        var sel = $("<select></select>");
        sel.attr("name", parte);
        var index= $("<option disabled selected></option>");
        index.attr("value","");
        index.text("Seleccionar ".concat(parte));
        sel.append(index);
        var i;
        for(i=0; i<data[parte].length;i++){
            var item = $("<option></option>");
            var aux=data[parte];
            item.attr("value",aux[i].nombre);
            item.text(aux[i].nombre);

            sel.append(item);
        }        
        
        $("#panelEliminar").append(sel);  

    }

$(document).ready(function() {
        $('select').material_select();
    });
    
}
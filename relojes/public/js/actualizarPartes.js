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

     $(document).ready(function(){
        $('.carousel').carousel();
    });
 });

function mostrarPartes(data){
    for(var parte in data) {
        
        var carr = $("<div></div>");
        carr.attr("class", "carousel");
        var i;
        for(i=0; i<data[parte].length;i++){
            var item = $("<a></a>");
            item.attr("class","carousel-item");
            var imagen=$("<img></img>");
            imagen.attr("href","#");
            var aux=data[parte];
            imagen.attr("src",aux[i].imagen);

            item.append(imagen);
            carr.append(item);
        }        
        
        $("#panelEliminar").append(carr);    
    }

    
}
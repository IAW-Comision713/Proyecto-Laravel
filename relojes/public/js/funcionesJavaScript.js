var personalizables;
var modelo;
var preestablecidos;
var preusuario;
var modelovacio;
var nommod;

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
            cargarpartes(data);
        }
    });
    
    $.ajax({
        url: "/partes/jsonPreestablecidos",
        context: document.body,
        success: function (data) {
            preestablecidos = data;
            cargarmenupreestablecidos(data.length);
        }
    });    
    
    $.ajax({
        url: "/partes/jsonVacio",
        context: document.body,
        success: function (data) {
            
            modelovacio = data;
        }
    });
    
    $('.parallax').parallax();
    $('.collapsible').collapsible();
    
    
    if(localStorage.getItem("estilo") !== null){ 
        
        cambiarestilo(localStorage.getItem("estilo"));
    }

    isLoggedIn(cargarpreestablecidosusuario);

    $.ajax({
        url: "/diseno/getModeloURL",
        context: document.body,
        success: function (data) {
            
            modelo = data;
            cargarmodelo(data);
        }
    });
});

function isLoggedIn(callback, attr) {

    var logged = false;

    $.ajax({
            url: "/user/loggedin",
            context: document.body,
            success: function (data) {

                logged = (data === "true");

                callback(logged, attr);
            }
    });
}

function cargarpartes(data) {
      
    for(var parte in data) {
        
        var item = $("<li></li>");
        
        cargarmenu(parte, item);
        cargaropciones(parte, data[parte], item);
        
        $("#partes").append(item);
        
        var imagen = $("<img id="+parte+" class='parte' src=img/vacio.png alt='Parte de un reloj'>");
        
        $("#reloj").append(imagen);
    }
}

function cargarmenu(parte, item) {
    
     var link = $("<div></div>").attr("class", "collapsible-header").text(parte);
     
     item.append(link);
}

function cargaropciones(nombre, opciones, li) {
    
    var div = $("<div></div>").attr("class", "collapsible-body");
    
    li.append(div);
    
    var lista = $("<ul></ul>");
    
    var index;
    var item;
    for (index = 0; index < opciones.length; ++index) {
        
        var nom = opciones[index];

        var item = $("<li></li>").attr("class", "opcionparte").attr("tabindex", index);
        var opcion = $("<div></div>").text(opciones[index].nombre);
        item.append(opcion);
        lista.append(item);
        
        opcion.on("click", {"nombre":nombre, "op":nom}, function(e) {
            
            actualizarReloj(e.data.nombre, e.data.op);
        });      
    }
    
    div.append(lista);
}

function actualizarReloj(parte, elegido) {
    
    modelo[parte] = elegido;
    
    $("#"+parte).attr('src', elegido.imagen);
}

function cargarmenupreestablecidos(cant) {
    
    var lista = $("<ul></ul>");
    
    for(var p in preestablecidos) {
        
        var item = $("<li></li>");
        var opcion = $("<a></a>").text(p);
        opcion.attr("class", "waves-effect btn ancho");
        item.append(opcion);
        lista.append(item);
        
        opcion.on("click", {"id": p}, function(e) {
            
            cargarpreestablecido(e.data.id);
        });
    }
    
    $("#botonera-preestablecidos").append(lista);
}

function cargarpreestablecidosusuario(logged) {

    if(logged) {

        $.ajax({
            url: "/partes/jsonUsuarioPreestablecidos",
            context: document.body,
            success: function (data) {
                
                preusuario = data;
                preestablecidosusuario();
            }
        });
    }
    else if(localStorage.getItem("mismodelos") !== null) {

        preusuario = JSON.parse(localStorage.getItem("mismodelos"));
        preestablecidosusuario();
    }
    else {

        preusuario = {};
    }
}

function preestablecidosusuario() {

    var lista = $("<ul></ul>");
    
    for(var p in preusuario) {
    
        var item = $("<li></li>");
        
        var opcion = $("<a></a>").text(p);
        opcion.attr("class", "waves-effect btn ancho");
        item.append(opcion);

        var eliminar = $("<a></a>");
        var icono = $("<i></i>").attr("class", "material-icons").text("clear");
        eliminar.attr("class", "waves-effect btn angosto");
        eliminar.append(icono);
        item.append(eliminar);

        lista.append(item);

        opcion.on("click", {"id": p}, function(e) {
    
            cargarmodelousuario(e.data.id);
        });

        eliminar.on("click", {"id": p}, function(e) {
    
            borrarModelo(e.data.id);
        });
    }
    
    $("#div-usuario-preestablecidos").empty();
    $("#div-usuario-preestablecidos").append(lista);
}

function limpiarReloj(){
    
    cargarmodelo(modelovacio);
}

function cargarmodelo(mod) {
    
    for(var parte in mod) {
        
        actualizarReloj(parte, mod[parte]);
    }
}

function cargarpreestablecido(id) {
        
    cargarmodelo(preestablecidos[id]);
}

function cargarmodelousuario(id) {

    cargarmodelo(preusuario[id]);
}

function addFavoritos(){
    if(localStorage.getItem("favorito")!==null){
        
        Materialize.toast('Favorito reemplazado!', 4000);
    }
    else{
        
        Materialize.toast('Marcado como favorito!', 4000);       
    }
    
    localStorage.setItem("favorito", JSON.stringify(modelo));
}

function aplicarFavorito() {
    
    if(localStorage.getItem("favorito")!==null){
       
        cargarmodelo(JSON.parse(localStorage.getItem("favorito")));
        
        Materialize.toast('Favorito cargado!', 4000);
    }
    else {
        
        Materialize.toast('No hay un modelo favorito guardado!', 4000);
              
    }
}

function descargarimagen() { 
        html2canvas($("#reloj"), {
            onrendered: function(canvas) {
                theCanvas = canvas;

                canvas.toBlob(function(blob) {
					saveAs(blob, "Mireloj.png"); 
				});
            }
        });
 }
 
 function cambiarestilo(id) {
   
        $("#estilo").attr("href", "css/estilo"+id+".css");
        localStorage.setItem("estilo", id);
        
        $('.dropdown-button').dropdown('close');
 }

function mostrarguardar() { 
    
    $("#guardar-form").toggleClass("scale-out scale-in");
}

function guardarModelo() {

    nommod = $("#nombremodelo").val();

    if (nommod == "")
        Materialize.toast('Tu modelo no tiene nombre!!', 4000);
    else {

        preusuario[nommod] = {};
        Object.assign(preusuario[nommod], modelo);

        mostrarguardar();

        isLoggedIn(almacenarModelo);
    }
}

function almacenarModelo(logged) {

    if(logged) {

        $.ajax({
        
            method: "post",
            url: "/preestablecido/guardarPreestablecido",
            data: {name: nommod, pre: modelo},
            success: function (data) {
            
                Materialize.toast('Modelo guardado!', 4000);
                preestablecidosusuario();
            }
        });
    }
    else {

        localStorage.setItem("mismodelos", JSON.stringify(preusuario));
        Materialize.toast('Modelo guardado localmente!', 4000);
        preestablecidosusuario();
    }
}

function borrarModelo(mod) {
    
    delete preusuario[mod];

    isLoggedIn(eliminarModelo, mod);
}

function eliminarModelo(logged, mod) {

    if(logged) {

        $.ajax({
        
            method: "post",
            url: "/preestablecido/eliminarPreestablecido",
            data: {name: mod},
            success: function (data) {
            
                Materialize.toast('Modelo eliminado!', 4000);
                preestablecidosusuario();
            }
        });
    }
    else {

        localStorage.setItem("mismodelos", JSON.stringify(preusuario));
        Materialize.toast('Modelo eliminado localmente!', 4000);
        preestablecidosusuario();
    }

}



$(function() {

	$('.parallax').parallax();

	if(localStorage.getItem("estilo") !== null){ 
        
        cambiarestilo(localStorage.getItem("estilo"));
    }
});

function cambiarestilo(id) {
   
    $("#estilo").attr("href", assetBaseUrl+"css/estilo"+id+".css");
    localStorage.setItem("estilo", id);
        
    $('.dropdown-button').dropdown('close');
 }

 function mostrarPopup() {

 	alert("IAW - Comisión 713\n\n"
 		+"Daiana Boruta, LU: 99858\n"
 		+"Carolina Rapetti, LU: 105444\n\n"
 		+"Primer cuatrimestre 2017");
 }
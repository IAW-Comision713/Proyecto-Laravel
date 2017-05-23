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
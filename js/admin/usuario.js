function validarAccesoSisacse(){

	var usuario = $('#usuario').val();
	var pass = $('#pass').val();
	var funcion ="validarAccesoSisacse";
	var url="../../controlador/action.php";
		$.ajax({
		 url: url,
		 type:"post",
		 dataType:'json',
		 data:{usuario:usuario,pass:pass,funcion:funcion},
		 beforeSend: function(){

		 	$('.shadow').css('display','block');

		 },
		 success: function(data){
		 	console.log(data);

		 	if($.trim(data.resultado)=="Bienvenido, al Sistema de Interoperabilidad de servicios"){
		 		$(".shadow").css('display','none');
		 		//alert(data.resultado);
			location.href="../principal/dashboard.php";

        		
   			
		 	}else{
		 	
        		$(".shadow").css('display','none');
   		
		 		$('#eror').html(data.resultado);

		 	   $(".alert").css('display','block');

		 	}
		 }		
		});
}

$(document).ready(function(){
$('#usuario').keypress(function(e) {
    if(e.which == 13) {
        validarAccesoSisacse();
    }
});

$('#pass').keypress(function(e) {
    if(e.which == 13) {
        validarAccesoSisacse();
    }
});
});
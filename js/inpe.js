function getantecedentes(){
	var url ="../../controlador/inpe_controlador.php";
	
	var paterno = $('#paterno').val();
	var materno = $('#materno').val();
	var nombre = $('#nombre').val();

	if(paterno==""){
		alert("Ingrese un apellido paterno");
		return false;
	}

	if(materno==""){
		alert("Ingrese un apellido materno");
		return false;
	}

	if(nombre==""){
		alert("Ingrese un nombre");
		return false;
	}

	var funcion ="getantecedentesjudiciales";
		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,paterno:paterno,materno:materno,nombre:nombre},
		beforeSend:function(){
			$('#loading').css('display','block');
		},
		success:function(resp){
			console.log(resp);
			$('#loading').css('display','none');
			$('#tabla').remove();
			var cont=1;

				$('#t').append("<table id='tabla' class='table table-bordered table-condensed table-hover'>"+
						"<thead>"+
							"<tr style='background-color: #414852;color: #fff;font-weight: bold;'>"+
							    "<th class='text-center' style='width: 2%;'>Item</th>"+
							    "<th class='text-center' style='width: 25%;'>Nombre</th>"+
								"<th class='text-center'>Mensaje</th>"+
							"</tr>"+
					    "</thead>"+
					    "<tbody>");
		$.each(resp, function(i, value) {
   			
				$('#t tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center'>"+paterno+" "+materno+" "+nombre+"</td>"+
					"<td class='text-center' >"+value.getAntecedenteJudicialReturn+"</td></tr>");	
				    
				cont++;

		});

			}	
	});

}
function getconsultardocumento(){
		var url ="../../controlador/migraciones_controlador.php";
	
	var institucion = $('#institucion').val();
	var mac = $('#mac').val();
	var ip = $('#ip').val();
	var tipodocumento =$('#tipodocumento').val();
	var documento =$('#documento').val();

	if(documento==""){
		alert("Ingrese un número de documento de extrangería");
		return false;
	}



	var funcion ="getconsultasmigraciones";
		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,documento:documento,institucion:institucion,mac:mac,ip:ip,tipodocumento:tipodocumento},
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
							    "<th class='text-center' style='width: 15%;'>Nombres</th>"+
							    "<th class='text-center' style='width: 15%;'>Apellido Paterno</th>"+
							    "<th class='text-center' style='width: 15%;'>Apellido Materno</th>"+
								"<th class='text-center'>Calidad migratoria</th>"+
							"</tr>"+
					    "</thead>"+
					    "<tbody>");
		$.each(resp.rows, function(i, value) {
			if(value.strNumRespuesta=="0000"){
				$('#t tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center'>"+value.strNombres+"</td>"+
					"<td class='text-center'>"+value.strPrimerApellido+"</td>"+
					"<td class='text-center'>"+value.strSegundoApellido+"</td>"+
					"<td class='text-center' >"+value.strCalidadMigratoria+"</td></tr>");	
				    
				cont++;
			}else if(value.strNumRespuesta=="0001"){
				$('#t tbody').append("<tr>"+
					"<td colspan ='5' class='text-center' >Sin error, no se encontraron datos del Carnet de Extranjería o el Carnet de Extranjería no está vigente</td></tr>");	
				    
				cont++;
			}else if(value.strNumRespuesta=="0002"){
				$('#t tbody').append("<tr>"+
					"<td colspan ='5' class='text-center' >Con error, sin conexión</td></tr>");	
				    
				cont++;
			}
			else if(value.strNumRespuesta=="0003"){
				$('#t tbody').append("<tr>"+
					"<td colspan ='5' class='text-center' >Con error, transacción no exitosa</td></tr>");	
				    
				cont++;
			}else if(value.strNumRespuesta=="0005"){
				$('#t tbody').append("<tr>"+
					"<td colspan ='5' class='text-center' >Con error, no está permitido realizar la consulta con los valores de IP, MAC ADDRES y CODIGO DE INSTITUCION ingresados</td></tr>");	
				    
				cont++;
			}
			else if(value.strNumRespuesta=="0006"){
				$('#t tbody').append("<tr>"+
					"<td colspan ='5' class='text-center' >Con error, el tipo de documento ingresado no es el correcto</td></tr>");	
				    
				cont++;
			}
			else if(value.strNumRespuesta=="0007"){
				$('#t tbody').append("<tr>"+
					"<td colspan ='5' class='text-center' >Con error, la información del documento consultado no puede ser mostrada porque pertenece a un menor de edad</td></tr>");	
				    
				cont++;
			}
			
		});

			}	
	});
}
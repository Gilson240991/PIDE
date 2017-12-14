function getanteccedentespenales(){
	var url ="../../controlador/poderjudicial_controlador.php";
	var paterno = $('#paterno').val();
	var materno = $('#materno').val();
	var nombre1 = $('#nombre1').val();
	var nombre2 = $('#nombre2').val();
	var nombre3 = $('#nombre3').val();
	var dni = $('#dni').val();
	var motivo = $('#motivo').val();
	var entidad = $('#entidad').val();
	var rucentidad = $('#rucentidad').val();
	var ippublica = $('#ippublica').val();
	var dniconsult =$('#dniconsult').val();
	var nombrepc = $('#nombrepc').val();
	var ip = $('#ip').val();
	var nombreusuario = $('#nombreusuario').val();
	var mac = $('#mac').val();

	if(paterno==""){
		alert("Ingrese un apellido paterno");
		$('#paterno').focus();
		return false;
	}
	if(materno==""){
		alert("Ingrese un apellido materno");
		$('#materno').focus();
		return false;
	}
	if(nombre1==""){
		alert("Ingrese un primer nombre");
		$('#nombre1').focus();
		return false;
	}

	if(dni==""){
		alert("Ingrese el DNI del consultado");
		$('#dni').focus();
		return false;
	}

	if(dniconsult==""){
		alert("Ingrese el DNI del consultante");
		$('#dni').focus();
		return false;
	}
	
	var funcion ="getantecedentespenales";
		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,paterno:paterno,materno:materno,nombre1:nombre1,nombre2:nombre2,nombre3:nombre3,dni:dni,motivo:motivo,entidad:entidad,rucentidad:rucentidad,ippublica:ippublica,dniconsult:dniconsult,nombrepc:nombrepc,ip:ip,nombreusuario:nombreusuario,mac:mac},
		beforeSend:function(){
			$('#loading').css('display','block');
		},
		success:function(resp){
			console.log(resp);
			$('#loading').css('display','none');
			$('#tabla').remove();
			var cont=1;

				$('#t').append("<table id='tabla' class='table table-bordered table-condensed table-hover table-sm' style='margin-top: 10px;'>"+
						"<thead>"+
							"<tr style='background-color: #414852;color: #fff;font-weight: bold;'>"+
								"<th>Item</th>"+
								"<th>Nombre</th>"+
								"<th>Mensaje</th>"+
							    "</tr>"+
					    "</thead>"+
					    "<tbody>");
		$.each(resp, function(i, value) {
   			
   					
   					$('#t tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+nombre1+" "+nombre2+" "+nombre3+" "+paterno+" "+materno+"</td>"+
					"<td class='text-center' >"+value.xMensajeRespuesta+"</td></tr></tbody></table>");
   			
       			cont++;
		});

			}	
	});
}
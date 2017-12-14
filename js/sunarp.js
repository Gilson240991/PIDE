function buscaraeronave(){
	var url ="../../controlador/sunarp_controlador.php";
	
	var matricula = $('#matricula').val();

	if(matricula==""){
		alert("Ingrese un número de matrícula");
		return false;
	}

	var funcion ="buscaraeronave";

		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,matricula:matricula},
		beforeSend:function(){
			$('#loading').css('display','block');
		},
		success:function(resp){
			console.log(resp);
			$('#loading').css('display','none');
			$('#tabla').remove();
			var cont=1;

				$('#t').append("<table id='tabla' class='table table-bordered table-condensed table-hover table-sm'>"+
						"<thead>"+
							"<tr style='background-color: #414852;color: #fff;font-weight: bold;'>"+
							    "<th class='text-center' style='width: 2%;'>Item</th>"+
								"<th class='text-center' style='width: 5%;'>Matrícula</th>"+
								"<th class='text-center' style='width: 5%;'>Oficina</th>"+
								"<th style='width: 12%;'>Nº Partida</th>"+
								"<th style='width: 12%;'>Registro</th>"+
								"<th class='text-center' style='width: 12%;'>Libro</th>"+
								"<th class='text-center' style='width: 12%;'>Nº Serie</th>"+
								"<th class='text-center' style='width: 12%;'>Modelo</th>"+
								"<th class='text-center' style='width: 12%;'>Folios</th>"+

							"</tr>"+
					    "</thead>"+
					    "<tbody>");
				var cont2=1;
		$.each(resp, function(i, value) {
			if(value.error!=undefined){
					$('#t tbody').append("<td colspan='9'><b>Error: </b>"+value.error+"</td></tr></tbody></table>");

					}else{
						if(value.cantidadfolio==0){
				if(value.matricula!=null){
$('#t tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.matricula+"</td>"+
					"<td class='text-center' >"+value.oficina+"</td>"+
					"<td class='text-center' >"+value.numeroPartida+"</td>"+
					"<td class='text-center' >"+value.registro+"</td>"+
					"<td class='text-center' >"+value.libro+"</td>"+
					"<td class='text-center' >"+value.numeroSerie+"</td>"+
					"<td class='text-center' >"+value.modelo+"</td>"+
					"<td class='text-center' >- Ninguno -</td></tr>");
				    
				cont++;
				}else{
					$('#t tbody').append("<td colspan='9'><b>Error: </b>Número de matrícula ingresado incorrecto por favor corregir.</td></tr></tbody></table>");
				}
			}else{

				if(value.matricula!=null){
					if(value.numeroSerie==null){
						var serie = "--------";
					}else{
						var serie =value.numeroSerie;
					}

					//modelo
					if(value.modelo==null){
						var modelo = "--------";
					}else{
						var modelo =value.modelo;
					}


$('#t tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.matricula+"</td>"+
					"<td class='text-center' >"+value.oficina+"</td>"+
					"<td class='text-center' >"+value.numeroPartida+"</td>"+
					"<td class='text-center' >"+value.registro+"</td>"+
					"<td class='text-center' >"+value.libro+"</td>"+
					"<td class='text-center' >"+serie+"</td>"+
					"<td class='text-center' >"+modelo+"</td>"+
					"<td class='text-center' ><a href='#' data-toggle='modal' data-target='#folios-modal'>Ver</></td></tr>");
				    
				cont++;
				}else{
					$('#t tbody').append("<td colspan='7'>Número de matrícula ingresado incorrecto por favor corregir.</td></tr></tbody></table>");
				}

					if(value.cantidadfolio>1){
$.each(value.tomoFolio.tomoFolio,function(m,n){
					$('#propietarios tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont2+"</th>"+
					"<td class='text-center' >"+n+"</td></tr>");
					cont2++;
				});
				}
				else{
$.each(value.propietarios,function(m,n){
					$('#propietarios tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont2+"</th>"+
					"<td class='text-center' >"+n+"</td></tr>");
					cont2++;
				});
				}


			}
   					
					}
			


		});

			}	
	});
}
function buscarRazonSocial(){
	var url ="../../controlador/sunarp_controlador.php";
	
	var razon = $('#razon').val();

	if(razon==""){
		alert("Ingrese una razón social");
		return false;
	}

	var funcion ="listarPorRazonSocial";
		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,razon:razon},
		beforeSend:function(){
			$('#loading').css('display','block');
		},
		success:function(resp){
			console.log(resp);
			$('#loading').css('display','none');
			$('#tabla').remove();
			var cont=1;

				$('#t').append("<table id='tabla' class='table table-bordered table-condensed table-hover table-sm'>"+
						"<thead>"+
							"<tr style='background-color: #414852;color: #fff;font-weight: bold;'>"+
							    "<th class='text-center' style='width: 2%;'>Item</th>"+
								"<th class='text-center' style='width: 15%;'>Zona</th>"+
								"<th class='text-center' style='width: 4%;'>Oficina</th>"+
								"<th class='text-center'style='width: 3%;'>Partida</th>"+
								"<th class='text-center' style='width: 3%;'>Ficha</th>"+
								"<th class='text-center' style='width: 10%;'>Tipo</th>"+
								"<th class='text-center' style='width: 20%;'>Denominación</th>"+
							"</tr>"+
					    "</thead>"+
					    "<tbody>");
				if(resp.row!=null){

		$.each(resp.row, function(i, value) {
			if(value.partida!=undefined){
   							var partida=value.partida;
   						}else{
   							var partida="----------";
   						}

   						if(value.ficha!=undefined){
   							var ficha =value.ficha;
   						}else{
   							var ficha ="----------";
   						}
			if(value.error!=undefined){
					$('#t tbody').append("<td colspan='7'>"+value.error+"</td></tr></tbody></table>");
			}else{
				$('#t tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.zona+"</td>"+
					"<td class='text-center' >"+value.oficina+"</td>"+
					"<td class='text-center' >"+partida+"</td>"+
					"<td class='text-center' >"+ficha+"</td>"+
					"<td class='text-center' >"+value.tipo+"</td>"+
					"<td class='text-center' >"+value.denominacion+"</td></tr>");	
				    
				cont++;
				

		
			}

			
   					
   		});				

	}else{
					$('#t tbody').append("<td colspan='7'>No existen resultados para esta razón social</td></tr></tbody></table>");
				}


			}	
	});


}
function titularidad(){
	var url ="../../controlador/sunarp_controlador.php";
	
    var tipo = $('#condicion').val();
	var condicion = $('#buscartitularidad').attr('data-condicion');

	if(tipo==""){
	alert("Ingrese un tipo de participante");
	return false;
	}

	if(condicion =='natural'){
		
		var paterno = $('#paterno').val();
		var materno = $('#materno').val();
		var nombres = $('#nombres').val();

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

	if(nombres==""){
		alert("Ingrese los nombres");
		$('#nombres').focus();
		return false;
	}

	var funcion ="titularidad";
		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,paterno:paterno,materno:materno,nombres:nombres,condicion:tipo},
		beforeSend:function(){
			$('#loading').css('display','block');
		},
		success:function(resp){
			console.log(resp);
			$('#loading').css('display','none');
			$('#tabla').remove();
			var cont=1;
				$('#titularidad').append("<table id='tabla' class='table table-bordered table-condensed table-hover table-sm'>"+
						"<thead>"+
							"<tr style='background-color: #414852;color: #fff;font-weight: bold;'>"+
								"<th class='text-center' style='width: 2%;'>Item</th>"+
								"<th class='text-center' style='width: 5%;'>Registro</th>"+
								"<th class='text-center' style='width: 5%;'>Libro</th>"+
								"<th style='width: 12%;'>Apellido paterno</th>"+
								"<th class='text-center'style='width: 15%;'>Apellido materno</th>"+
								"<th style='width: 12%;'>Nombre</th>"+
								"<th style='width: 12%;'>Tipo Documento</th>"+
								"<th class='text-center' style='width: 12%;'>Nº documento</th>"+
								"<th class='text-center' style='width: 12%;'>Nº Partida</th>"+
								"<th class='text-center' style='width: 12%;'>Nº placa</th>"+
								"<th class='text-center' style='width: 12%;'>Estado</th>"+
								"<th class='text-center' style='width: 12%;'>Zona</th>"+
								"<th class='text-center' style='width: 12%;'>Oficina</th>"+
								"<th class='text-center' style='width: 12%;'>Dirección</th>"+
							"</tr>"+
					    "</thead>"+
					    "<tbody>");
				if(resp.cantidad>1){
$.each(resp.row[0], function(i, value) {
   		
   		if(value.numeroPlaca!=undefined){
   		var placa = value.numeroPlaca;
   		}else{
   			var placa="--------";
   		}
$('#titularidad tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.registro+"</td>"+
					"<td class='text-center' >"+value.libro+"</td>"+
					"<td class='text-center' >"+value.apPaterno+"</td>"+
					"<td class='text-center' >"+value.apMaterno+"</td>"+
					"<td class='text-center' >"+value.nombre+"</td>"+
					"<td class='text-center' >"+value.tipoDocumento+"</td>"+
					"<td class='text-center' >"+value.numeroDocumento+"</td>"+
					"<td class='text-center' >"+value.numeroPartida+"</td>"+
					"<td class='text-center' >"+placa+"</td>"+
					"<td class='text-center' >"+value.estado+"</td>"+
					"<td class='text-center' >"+value.zona+"</td>"+
					"<td class='text-center' >"+value.oficina+"</td>"+
					"<td class='text-center' >"+value.direccion+"</td></tr>");				    
				cont++;
				



		});

				}else if(resp.cantidad==1){
					$.each(resp.row, function(i, value) {
   				if(value.numeroPlaca!=undefined){
   		var placa = value.numeroPlaca;
   		}else{
   			var placa="--------";
   		}
$('#titularidad tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.registro+"</td>"+
					"<td class='text-center' >"+value.libro+"</td>"+
					"<td class='text-center' >"+value.apPaterno+"</td>"+
					"<td class='text-center' >"+value.apMaterno+"</td>"+
					"<td class='text-center' >"+value.nombre+"</td>"+
					"<td class='text-center' >"+value.tipoDocumento+"</td>"+
					"<td class='text-center' >"+value.numeroDocumento+"</td>"+
					"<td class='text-center' >"+value.numeroPartida+"</td>"+
					"<td class='text-center' >"+placa+"</td>"+
					"<td class='text-center' >"+value.estado+"</td>"+
					"<td class='text-center' >"+value.zona+"</td>"+
					"<td class='text-center' >"+value.oficina+"</td>"+
					"<td class='text-center' >"+value.direccion+"</td></tr>");				    
				cont++;
				



		});

				}else if(resp.cantidad==0){
					$('#titularidad tbody').append("<tr>"+
					"<td colspan='14'><b>Error: </b>Ocurrio algún error en la consulta</td></tr>");
				}
		


			}	
	});


	}else if(condicion =='juridico'){


		var razon = $('#razon').val();	
		if(razon==""){
		alert("Ingresa una razón social");
		$('#razon').focus();
		return false;
	}

	var funcion ="titularidadjuridica";
		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,razon:razon,condicion:tipo},
		beforeSend:function(){
			$('#loading').css('display','block');
		},
		success:function(resp){
			console.log(resp);
			$('#loading').css('display','none');
			$('#tabla').remove();
			var cont=1;
				$('#titularidad-juridico').append("<table id='tabla' class='table table-bordered table-condensed table-hover table-sm'>"+
						"<thead>"+
							"<tr style='background-color: #414852;color: #fff;font-weight: bold;'>"+
								"<th class='text-center' style='width: 2%;'>Item</th>"+
								"<th class='text-center' style='width: 5%;'>Registro</th>"+
								"<th class='text-center' style='width: 5%;'>Libro</th>"+
								"<th style='width: 12%;'>Razon Social</th>"+
								"<th style='width: 12%;'>Tipo Documento</th>"+
								"<th class='text-center' style='width: 12%;'>Nº documento</th>"+
								"<th class='text-center' style='width: 12%;'>Nº Partida</th>"+
								"<th class='text-center' style='width: 12%;'>Nº placa</th>"+
								"<th class='text-center' style='width: 12%;'>Estado</th>"+
								"<th class='text-center' style='width: 12%;'>Zona</th>"+
								"<th class='text-center' style='width: 12%;'>Oficina</th>"+

								"<th class='text-center' style='width: 12%;'>Dirección</th>"+
							"</tr>"+
					    "</thead>"+
					    "<tbody>");
				if(resp.cantidad>1){
$.each(resp.row[0], function(i, value) {
	if(value.numeroPlaca!=undefined){
   		var placa = value.numeroPlaca;
   		}else{
   			var placa="--------";
   		}
   				
$('#titularidad-juridico tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.registro+"</td>"+
					"<td class='text-center' >"+value.libro+"</td>"+
					"<td class='text-center' >"+value.razonSocial+"</td>"+
					"<td class='text-center' >"+value.tipoDocumento+"</td>"+
					"<td class='text-center' >"+value.numeroDocumento+"</td>"+
					"<td class='text-center' >"+value.numeroPartida+"</td>"+
					"<td class='text-center' >"+placa+"</td>"+
					"<td class='text-center' >"+value.estado+"</td>"+
					"<td class='text-center' >"+value.zona+"</td>"+
					"<td class='text-center' >"+value.oficina+"</td>"+
					"<td class='text-center' >"+value.direccion+"</td></tr>");				    
				cont++;
				



		});

				}else if(resp.cantidad==1){
					$.each(resp.row, function(i, value) {
   				if(value.numeroPlaca!=undefined){
   		var placa = value.numeroPlaca;
   		}else{
   			var placa="--------";
   		}
$('#titularidad-juridico tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.registro+"</td>"+
					"<td class='text-center' >"+value.libro+"</td>"+
					"<td class='text-center' >"+value.razonSocial+"</td>"+
					"<td class='text-center' >"+value.tipoDocumento+"</td>"+
					"<td class='text-center' >"+value.numeroDocumento+"</td>"+
					"<td class='text-center' >"+value.numeroPartida+"</td>"+
					"<td class='text-center' >"+placa+"</td>"+
					"<td class='text-center' >"+value.estado+"</td>"+
					"<td class='text-center' >"+value.zona+"</td>"+
					"<td class='text-center' >"+value.oficina+"</td>"+
					"<td class='text-center' >"+value.direccion+"</td></tr>");				    
				cont++;
				



		});

				}else if(resp.cantidad==0){
			
					$('#titularidad-juridico tbody').append("<tr>"+
					"<td colspan='12'><b>Error: </b>Ocurrio algún error en la consulta</td></tr>");
				
				}
		


			}	
	});

	}




}
function cambiardeformulario(){
	 $('#condicion option:selected').each(function () {
        var seleccion = $(this).val();


        if(seleccion == "N"){
        	$('#form-natural').css('display','block');
        	$('#form-juridico').css('display','none');
        	$('#buscartitularidad').attr('data-condicion','natural');
        	$('#tabla').remove();
        	//limpiar campos
        	$('#paterno').val("");
        	$('#materno').val("");
        	$('#nombres').val("");
        	$('#paterno').focus();
        }else if(seleccion == "J"){
        	$('#form-juridico').css('display','block');
        	$('#form-natural').css('display','none');
        	$('#buscartitularidad').attr('data-condicion','juridico');
        	$('#tabla').remove();
        	$('#razon').val("");
        	$('#razon').focus();
        }else{
        	$('#form-natural').css('display','block');
        	$('#buscartitularidad').attr('data-condicion','natural');
        	$('#tabla').remove();
        	$('#paterno').focus();

        }
    });
}

function listarAsientos(){
	var url ="../../controlador/sunarp_controlador.php";
	
	var zona = $('#oficina option:selected').attr('data-zona');
	var oficina = $('#oficina').val();
	var partida = $('#partida').val();
	var registro = $('#registro').val();

	if(oficina==""){
		alert("Ingrese una oficina");
		return false;
	}

	if(partida==""){
		alert("Ingrese una partida");
		$('#partida').focus();
		return false;
	}

	if(registro==""){
		alert("Ingrese un registro");
		$('#registro').focus();
		return false;
	}

	var funcion ="listarAsientos";

		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,zona:zona,oficina:oficina,partida:partida,registro:registro},
		beforeSend:function(){
			$('#loading').css('display','block');
		},
		success:function(resp){
			console.log(resp);
			$('#loading').css('display','none');
			$('#tabla').remove();
			$('#asientos').remove();
			$('#asientos-tabla tbody').remove();

			$('#fichas').remove();
			$('#fichas-tabla tbody').remove();

			$('#folios').remove();
			$('#folios-tabla tbody').remove();
			var cont=1;
			var cont2=1;

				$('#asientos-master').append("<table id='tabla' class='table table-bordered table-condensed table-hover table-sm'>"+
						"<thead>"+
							"<tr style='background-color: #414852;color: #fff;font-weight: bold;'>"+
								"<th class='text-center' style='width: 2%;'>Item</th>"+
								"<th class='text-center' style='width: 5%;'>Transacción</th>"+
								"<th style='width: 12%;'>Número total páginas</th>"+
								"<th class='text-center' style='width: 15%;'>Asientos</th>"+
								"<th class='text-center' style='width: 12%;'>Fichas</th>"+
								"<th class='text-center' style='width: 12%;'>Folios</th>"+
							"</tr>"+
					    "</thead>"+
					    "<tbody>");
		$.each(resp, function(i, value) {
			if(value.error!=undefined){
				$('#asientos-master tbody').append("<td colspan='7'><b>Error: </b>"+value.error+"</td></tr></tbody></table>");
			}else{
   					if(value.transaccion!=0){
$('#asientos-master tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.transaccion+"</td>"+
					"<td class='text-center' >"+value.nroTotalPag+"</td>"+

					"<td class='text-center' ><a href='#' data-toggle='modal' data-target='#asientos-modal'>Ver ("+value.cantidadasientos+") </a></td>"+
					"<td class='text-center' ><a href='#' data-toggle='modal' data-target='#fichas-modal'>Ver ("+value.cantidadfichas+")</a></td>"+
					"<td class='text-center' ><a href='#' data-toggle='modal' data-target='#folios-modal'>Ver ("+value.cantidadfolios+")</a></td></tr></tbody></table>");
				    
				cont++;
				}else{
					$('#asientos-master tbody').append("<td colspan='7'>No existen resultados para este asiento</td></tr></tbody></table>");
				}

				if(value.cantidadasientos>1){
					$('#asientos-tabla').append("<table class='table table-bordered table-condensed table-hover table-sm' id='asientos'>"+
						"<thead><tr><th>Lista de asientos</th><th>Imagen</th></tr></thead><tbody>");
				  for(var i=1;i<=value.cantidadasientos;i++){


          
         
					$('#asientos-tabla tbody').append("<tr data-tt-id='"+i+"'>"+
					"<td>Asiento Nº "+i+"</td><td></td></tr>");
					$('#asientos-tabla tbody').append("<tr data-tt-id='"+i+".1' data-tt-parent-id='"+i+"'>"+
					"<td><b>Id de imagen : </b>"+value.listAsientos[i-1].idImgAsiento+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".2' data-tt-parent-id='"+i+"'>"+
					"<td><b>Nº de página : </b>"+value.listAsientos[i-1].numPag+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".3' data-tt-parent-id='"+i+"'>"+
					"<td><b>Tipo : </b>"+value.listAsientos[i-1].tipo+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".4' data-tt-parent-id='"+i+"'>"+
					"<td><b>Páginas</b> ("+value.cantidadpaginas[i-1]+")</td><td></td></tr>");

					if(value.cantidadpaginas[i-1]==1){
						for(var j =1;j<=value.cantidadpaginas[i-1];j++){

						$('#asientos-tabla tbody').append("<tr data-tt-id='"+i+"."+j+".1' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página de referencia : </b>"+value.listAsientos[i-1].listPag.nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listAsientos[i-1].idImgAsiento+"&tipo="+value.listAsientos[i-1].tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listAsientos[i-1].listPag.nroPagRef+"&pagina="+value.listAsientos[i-1].listPag.pagina+"' target='_blank'>VER ASIENTO</a></td></tr>"+
						"<tr data-tt-id='"+i+"."+j+".2' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página : </b>"+value.listAsientos[i-1].listPag.pagina+"</td><td></td></tr>");
					}
					}else{
						for(var m =1;m<=value.cantidadpaginas[i-1];m++){
							$('#asientos-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4' data-tt-parent-id='"+i+".4'>"+
					"<td><b>Página "+m+"</b></td><td></td></tr>");

							$('#asientos-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4.1' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página de referencia : </b>"+value.listAsientos[i-1].listPag[m-1].nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listAsientos[i-1].idImgAsiento+"&tipo="+value.listAsientos[i-1].tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listAsientos[i-1].listPag[m-1].nroPagRef+"&pagina="+value.listAsientos[i-1].listPag[m-1].pagina+"' target='_blank'>VER ASIENTO</a></td></tr>"+
							"<tr data-tt-id='"+i+"."+m+".4.2' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página : </b>"+value.listAsientos[i-1].listPag[m-1].pagina+"</td><td></td></tr>");
					}
					}
					
					
									}

			$('#asientos-tabla').append("<tbody></table>");
				$('body').append("<script src='../../js/jquery.treetable.js'></script>"+
                  "<script>$('#asientos').treetable({expandable:true});</script>"+
		 		  "<script>$('#folios').treetable({expandable:true});</script>");
				}else{
						$('#asientos-tabla').append("<table class='table table-bordered table-condensed table-hover table-sm' id='asientos'>"+
						"<thead><tr><th>Lista de asientos</th><th>Imagen</th></tr></thead><tbody>");
				  for(var i=1;i<=value.cantidadasientos;i++){


          
         
					$('#asientos-tabla tbody').append("<tr data-tt-id='"+i+"'>"+
					"<td>Asiento Nº "+i+"</td><td></td></tr>");
					$('#asientos-tabla tbody').append("<tr data-tt-id='"+i+".1' data-tt-parent-id='"+i+"'>"+
					"<td><b>Id de imagen : </b>"+value.listAsientos.idImgAsiento+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".2' data-tt-parent-id='"+i+"'>"+
					"<td><b>Nº de página : </b>"+value.listAsientos.numPag+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".3' data-tt-parent-id='"+i+"'>"+
					"<td><b>Tipo : </b>"+value.listAsientos.tipo+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".4' data-tt-parent-id='"+i+"'>"+
					"<td><b>Páginas</b> ("+value.cantidadpaginas+")</td><td></td></tr>");

					if(value.cantidadpaginas==1){
						for(var j =1;j<=value.cantidadpaginas;j++){

						$('#asientos-tabla tbody').append("<tr data-tt-id='"+i+"."+j+".1' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página de referencia : </b>"+value.listAsientos.listPag.nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listAsientos.idImgAsiento+"&tipo="+value.listAsientos.tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listAsientos.listPag.nroPagRef+"&pagina="+value.listAsientos.listPag.pagina+"' target='_blank'>VER ASIENTO</a></td></tr>"+
						"<tr data-tt-id='"+i+"."+j+".2' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página : </b>"+value.listAsientos.listPag.pagina+"</td></td></td></tr>");
					}
					}else{
						for(var m =1;m<=value.cantidadpaginas;m++){
							$('#asientos-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4' data-tt-parent-id='"+i+".4'>"+
					"<td><b>Página "+m+"</b></td></td></tr>");

							$('#asientos-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4.1' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página de referencia : </b>"+value.listAsientos.listPag[m-1].nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listAsientos.idImgAsiento+"&tipo="+value.listAsientos.tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listAsientos.listPag[m-1].nroPagRef+"&pagina="+value.listAsientos.listPag[m-1].pagina+"' target='_blank'>VER ASIENTO</a></td></tr>"+
							"<tr data-tt-id='"+i+"."+m+".4.2' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página : </b>"+value.listAsientos.listPag[m-1].pagina+"</td><td></td></tr>");
					}
					}
					
					
									}

			$('#asientos-tabla').append("<tbody></table>");
				$('body').append("<script src='../../js/jquery.treetable.js'></script>"+
                  "<script>$('#asientos').treetable({expandable:true});</script>"+
		 		  "<script>$('#folios').treetable({expandable:true});</script>");
				}
			

			//fichas

			if(value.cantidadfichas>1){
				$('#fichas-tabla').append("<table class='table table-bordered table-condensed table-hover table-sm' id='fichas'>"+
						"<thead><tr><th>Lista de fichas</th><th>Imagen</th></tr></thead><tbody>");
				  for(var i=1;i<=value.cantidadfichas;i++){
         
					$('#fichas-tabla tbody').append("<tr data-tt-id='"+i+"'>"+
					"<td>Ficha Nº "+i+"</td><td></td></tr>");
					$('#fichas-tabla tbody').append("<tr data-tt-id='"+i+".1' data-tt-parent-id='"+i+"'>"+
					"<td><b>Id de imagen : </b>"+value.listFichas[i-1].idImgFicha+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".2' data-tt-parent-id='"+i+"'>"+
					"<td><b>Nº de página : </b>"+value.listFichas[i-1].numPag+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".3' data-tt-parent-id='"+i+"'>"+
					"<td><b>Tipo : </b>"+value.listFichas[i-1].tipo+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".4' data-tt-parent-id='"+i+"'>"+
					"<td><b>Páginas</b> ("+value.cantidadpaginas[i-1]+")</td><td></td></tr>");

					if(value.cantidadfichaslista[i-1]==1){
						for(var j =1;j<=value.cantidadfichaslista[i-1];j++){

						$('#fichas-tabla tbody').append("<tr data-tt-id='"+i+"."+j+".1' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página de referencia : </b>"+value.listFichas[i-1].listPag.nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listFichas[i-1].idImgFicha+"&tipo="+value.listFichas[i-1].tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listFichas[i-1].listPag.nroPagRef+"&pagina="+value.listFichas[i-1].listPag.pagina+"' target='_blank'>VER FICHA</a></td></tr>"+
						"<tr data-tt-id='"+i+"."+j+".2' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página : </b>"+value.listFichas[i-1].listPag.pagina+"</td><td></td></tr>");
					}
					}else{
						for(var m =1;m<=value.cantidadfichaslista[i-1];m++){
							$('#fichas-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4' data-tt-parent-id='"+i+".4'>"+
					"<td><b>Página "+m+"</b></td><td></td></tr>");

							$('#fichas-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4.1' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página de referencia : </b>"+value.listFichas[i-1].listPag[m-1].nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listFichas[i-1].idImgFicha+"&tipo="+value.listFichas[i-1].tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listFichas[i-1].listPag.nroPagRef+"&pagina="+value.listFichas[i-1].listPag.pagina+"' target='_blank'>VER FICHA</a></td></tr>"+
							"<tr data-tt-id='"+i+"."+m+".4.2' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página : </b>"+value.listFichas[i-1].listPag[m-1].pagina+"</td><td></td></tr>");
					}
					}
					
					
									}
				  	$('body').append("<script src='../../js/jquery.treetable.js'></script>"+
  						"<script>$('#fichas').treetable({expandable:true});</script>");
			}else{
					$('#fichas-tabla').append("<table class='table table-bordered table-condensed table-hover table-sm' id='fichas'>"+
						"<thead><tr><th>Lista de fichas</th><th>Imagen</th></tr></thead><tbody>");
				  for(var i=1;i<=value.cantidadfichas;i++){
         
					$('#fichas-tabla tbody').append("<tr data-tt-id='"+i+"'>"+
					"<td>Ficha Nº "+i+"</td><td></td></tr>");
					$('#fichas-tabla tbody').append("<tr data-tt-id='"+i+".1' data-tt-parent-id='"+i+"'>"+
					"<td><b>Id de imagen : </b>"+value.listFichas.idImgFicha+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".2' data-tt-parent-id='"+i+"'>"+
					"<td><b>Nº de página : </b>"+value.listFichas.numPag+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".3' data-tt-parent-id='"+i+"'>"+
					"<td><b>Tipo : </b>"+value.listFichas.tipo+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".4' data-tt-parent-id='"+i+"'>"+
					"<td><b>Páginas</b> ("+value.cantidadfichaslista+")</td><td></td></tr>");

					if(value.cantidadfichaslista==1){
						for(var j =1;j<=value.cantidadfichaslista;j++){

						$('#fichas-tabla tbody').append("<tr data-tt-id='"+i+"."+j+".1' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página de referencia : </b>"+value.listFichas.listPag.nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listFichas.idImgFicha+"&tipo="+value.listFichas.tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listFichas.listPag.nroPagRef+"&pagina="+value.listFichas.listPag.pagina+"' target='_blank'>VER FICHA</a></td></tr>"+
						"<tr data-tt-id='"+i+"."+j+".2' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página : </b>"+value.listFichas.listPag.pagina+"</td><td></td></tr>");
					}
					}else{
						for(var m =1;m<=value.cantidadfichaslista;m++){
							$('#fichas-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4' data-tt-parent-id='"+i+".4'>"+
					"<td><b>Página "+m+"</b></td><td></td></tr>");

							$('#fichas-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4.1' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página de referencia : </b>"+value.listFichas.listPag[m-1].nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listFichas.idImgFicha+"&tipo="+value.listFichas.tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listFichas.listPag[m-1].nroPagRef+"&pagina="+value.listFichas.listPag[m-1].pagina+"' target='_blank'>VER FICHA</a></td></tr>"+
							"<tr data-tt-id='"+i+"."+m+".4.2' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página : </b>"+value.listFichas.listPag[m-1].pagina+"</td><td></td></tr>");
					}
					}
					
					
									}
				  	$('body').append("<script src='../../js/jquery.treetable.js'></script>"+
  						"<script>$('#fichas').treetable({expandable:true});</script>");
			}

			//folios
		if(value.cantidadfolios>1){
				$('#folios-tabla').append("<table class='table table-bordered table-condensed table-hover table-sm' id='folios'>"+
						"<thead><tr><th>Lista de folios</th><th>Imagen</th></tr></thead><tbody>");
				  for(var i=1;i<=value.cantidadfolios;i++){
         
					$('#folios-tabla tbody').append("<tr data-tt-id='"+i+"'>"+
					"<td>Folio Nº "+i+"</td><td></td></tr>");
					$('#folios-tabla tbody').append("<tr data-tt-id='"+i+".1' data-tt-parent-id='"+i+"'>"+
					"<td><b>Id de imagen : </b>"+value.listFolios[i-1].idImgFolio+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".2' data-tt-parent-id='"+i+"'>"+
					"<td><b>Nº de página : </b>"+value.listFolios[i-1].nroPagRef+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".3' data-tt-parent-id='"+i+"'>"+
					"<td><b>Tipo : </b>"+value.listFolios[i-1].tipo+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".4' data-tt-parent-id='"+i+"'>"+
					"<td><b>Páginas</b> ("+value.cantidadfolioslista[i-1]+")</td><td></td></tr>");

					if(value.cantidadfolioslista[i-1]==1){
						for(var j =1;j<=value.cantidadfolioslista[i-1];j++){

						$('#folios-tabla tbody').append("<tr data-tt-id='"+i+"."+j+".1' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página de referencia : </b>"+value.listFolios[i-1].listPag.nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listFolios[i-1].idImgFolio+"&tipo="+value.listFolios[i-1].tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listFolios[i-1].listPag.nroPagRef+"&pagina="+value.listFolios[i-1].listPag.pagina+"' target='_blank'>VER FOLIO</a></td></tr>"+
						"<tr data-tt-id='"+i+"."+j+".2' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página : </b>"+value.listFolios[i-1].listPag.pagina+"</td><td></td></tr>");
					}
					}else{
						for(var m =1;m<=value.cantidadfolioslista[i-1];m++){
							$('#folios-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4' data-tt-parent-id='"+i+".4'>"+
					"<td><b>Página "+m+"</b></td><td></td></tr>");

							$('#folios-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4.1' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página de referencia : </b>"+value.listFolios[i-1].listPag[m-1].nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listFolios[i-1].idImgFolio+"&tipo="+value.listFolios[i-1].tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listFolios[i-1].listPag[m-1].nroPagRef+"&pagina="+value.listFolios[i-1].listPag[m-1].pagina+"' target='_blank'>VER FOLIO</a></td></tr>"+
							"<tr data-tt-id='"+i+"."+m+".4.2' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página : </b>"+value.listFolios[i-1].listPag[m-1].pagina+"</td><td></td></tr>");
					}
					}
					
					
									}
				  	$('body').append("<script src='../../js/jquery.treetable.js'></script>"+
  						"<script>$('#folios').treetable({expandable:true});</script>");
			}else{
					$('#folios-tabla').append("<table class='table table-bordered table-condensed table-hover table-sm' id='folios'>"+
						"<thead><tr><th>Lista de folios</th><th>Imagen</th></tr></thead><tbody>");
				  for(var i=1;i<=value.cantidadfolios;i++){
         
					$('#folios-tabla tbody').append("<tr data-tt-id='"+i+"'>"+
					"<td>Ficha Nº "+i+"</td><td></td></tr>");
					$('#folios-tabla tbody').append("<tr data-tt-id='"+i+".1' data-tt-parent-id='"+i+"'>"+
					"<td><b>Id de imagen : </b>"+value.listFolios.idImgFolio+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".2' data-tt-parent-id='"+i+"'>"+
					"<td><b>Nº de página : </b>"+value.listFolios.nroPagRef+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".3' data-tt-parent-id='"+i+"'>"+
					"<td><b>Tipo : </b>"+value.listFolios.tipo+"</td><td></td></tr>"+
					"<tr data-tt-id='"+i+".4' data-tt-parent-id='"+i+"'>"+
					"<td><b>Páginas</b> ("+value.cantidadfolioslista+")</td><td></td></tr>");

					if(value.cantidadfolioslista==1){
						for(var j =1;j<=value.cantidadfolioslista;j++){

						$('#folios-tabla tbody').append("<tr data-tt-id='"+i+"."+j+".1' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página de referencia : </b>"+value.listFolios.listPag.nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listFolios.idImgFolio+"&tipo="+value.listFichas.tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listFolios.listPag.nroPagRef+"&pagina="+value.listFolios.listPag.pagina+"' target='_blank'>VER FOLIO</a></td></tr>"+
						"<tr data-tt-id='"+i+"."+j+".2' data-tt-parent-id='"+i+".4'>"+
						"<td><b>Página : </b>"+value.listFolios.listPag.pagina+"</td><td></td></tr>");
					}
					}else{
						for(var m =1;m<=value.cantidadfolioslista;m++){
							$('#folios-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4' data-tt-parent-id='"+i+".4'>"+
					"<td><b>Página "+m+"</b></td></td></tr>");

							$('#folios-tabla tbody').append("<tr data-tt-id='"+i+"."+m+".4.1' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página de referencia : </b>"+value.listFolios.listPag[m-1].nroPagRef+"</td><td><a href='verasiento.php?transaccion="+value.transaccion+"&idImg="+value.listFolios.idImgFolio+"&tipo="+value.listFichas.tipo+"&totalpag="+value.nroTotalPag+"&refpag="+value.listFolios.listPag[m-1].nroPagRef+"&pagina="+value.listFolios.listPag[m-1].pagina+"' target='_blank'>VER FOLIO</a></td></tr>"+
							"<tr data-tt-id='"+i+"."+m+".4.2' data-tt-parent-id='"+i+"."+m+".4'>"+
							"<td><b>Página : </b>"+value.listFolios.listPag[m-1].pagina+"</td><td></td></tr>");
					}
					}
					
					
									}
				  	$('body').append("<script src='../../js/jquery.treetable.js'></script>"+
  						"<script>$('#folios').treetable({expandable:true});</script>");
			}
		}
		});

			}	
	});
}
function listarOficinas(){
var url ="../../controlador/sunarp_controlador.php";
var funcion ="listarOficinas";

$.ajax({
	url:url,
	type:'post',
	dataType:'json',
	data:{funcion:funcion},
	beforeSend:function(){
		$('#loading').css('display','block');
	},
	success: function(resp){
			$('#loading').css('display','none');
			$('#tabla').remove();


			console.log(resp);
			var cont=0;
				$('#oficinas').append("<table id='tabla' class='table table-bordered table-condensed table-hover table-sm'>"+
						"<thead>"+
							"<tr style='background-color: #414852;color: #fff;font-weight: bold;'>"+
								"<th class='text-center' style='width: 2%;'>Item</th>"+
								"<th class='text-center' style='width: 10%;'>Código de la zona</th>"+
								"<th style='width: 10%;'>Código de la oficina</th>"+
								"<th class='text-center'style='width: 15%;'>Descripción</th>"+
							"</tr>"+
					    "</thead>"+
					    "<tbody>");
		$.each(resp.row, function(i, value) {  			
$('#oficinas tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.codZona+"</td>"+
					"<td class='text-center' >"+value.codOficina+"</td>"+
					"<td class='text-center' >"+value.descripcion+"</td></tr></tbody></table>");			    
				cont++;		
	});
		$('#oficinas tbody tr').eq(0).remove();

}
});
}


function getDetalleRPV(){
	
	var url ="../../controlador/sunarp_controlador.php";
	
	var zona = $('#oficina option:selected').attr('data-zona');
	var oficina = $('#oficina').val();
	var placa = $('#placa').val();


	if(oficina==""){
		alert("Ingrese una oficina");
		return false;
	}

	if(placa==""){
		alert("Ingrese una placa");
		$('#placa').focus();
		return false;
	}

	var funcion ="VerDetalleRPV";
		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,zona:zona,oficina:oficina,placa:placa},
		beforeSend:function(){
			$('#loading').css('display','block');
		},
		success:function(resp){
			console.log(resp);
			$('#loading').css('display','none');
			$('#tabla').remove();
			$('#propietarios tbody tr').remove();
			var cont=1;
			var cont2=1;

				$('#rpv').append("<table id='tabla' class='table table-bordered table-condensed table-hover table-sm'>"+
						"<thead>"+
							"<tr style='background-color: #414852;color: #fff;font-weight: bold;'>"+
								"<th class='text-center' style='width: 2%;'>Item</th>"+
								"<th class='text-center' style='width: 5%;'>Placa</th>"+
								"<th style='width: 12%;'>Serie</th>"+
								"<th class='text-center'style='width: 15%;'>Vin</th>"+
								"<th style='width: 12%;'>Nro de motor</th>"+
								"<th style='width: 12%;'>Color</th>"+
								"<th class='text-center' style='width: 12%;'>Marca</th>"+
								"<th class='text-center' style='width: 12%;'>Modelo</th>"+
								"<th class='text-center' style='width: 12%;'>Estado</th>"+
								"<th class='text-center' style='width: 12%;'>Sede</th>"+
								"<th class='text-center' style='width: 12%;'>Propietarios</th>"+
							"</tr>"+
					    "</thead>"+
					    "<tbody>");
		$.each(resp, function(i, value) {
			if(value.error!=undefined){
				$('#rpv tbody').append("<td colspan='11'>"+value.error+"</td></tr></tbody></table>");
			}else{
if(value.placa!=" "){
$('#rpv tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.placa+"</td>"+
					"<td class='text-center' >"+value.serie+"</td>"+
					"<td class='text-center' >"+value.vin+"</td>"+
					"<td class='text-center' >"+value.nro_motor+"</td>"+
					"<td class='text-center' >"+value.color+"</td>"+
					"<td class='text-center' >"+value.marca+"</td>"+
					"<td class='text-center' >"+value.modelo+"</td>"+
					"<td class='text-center' >"+value.estado+"</td>"+
					"<td class='text-center' >"+value.sede+"</td>"+
					"<td class='text-center' ><a href='#' data-toggle='modal' data-target='#propietarios-modal'>Ver</a></td></tr></tbody></table>");
				    
				cont++;
				}else{
					$('#rpv tbody').append("<td colspan='11'><b>Error: </b>Número de placa incorrecto por favor corregir.</td></tr></tbody></table>");
				}

			}
   					
				if(value.cantidadprop>1){
$.each(value.propietarios.nombre,function(m,n){
					$('#propietarios tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont2+"</th>"+
					"<td class='text-center' >"+n+"</td></tr>");
					cont2++;
				});
				}
				else{
$.each(value.propietarios,function(m,n){
					$('#propietarios tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont2+"</th>"+
					"<td class='text-center' >"+n+"</td></tr>");
					cont2++;
				});
				}


		});

			}	
	});


}


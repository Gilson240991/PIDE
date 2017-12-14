function getFuentesAno(){
	
	var url ="../../controlador/mef_controlador.php";
	var ano = $('#ano').val();
	if(ano==""){
		alert("Ingrese un código");
		$('#ano').focus();
		return false;
	}
	var funcion ="getFuentesAno";
		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,ano:ano},
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
								"<th class='text-center' style='width: 5%;'>Código</th>"+
								"<th style='width: 12%;'>Departamento</th>"+
								"<th class='text-center'style='width: 15%;'>Provincia</th>"+
								"<th style='width: 12%;'>Distrito</th>"+
								"<th style='width: 12%;'>Centro Poblado</th>"+
								"<th class='text-center' style='width: 12%;'>Ubigeo</th>"+
							"</tr>"+
					    "</thead>"+
					    "<tbody>");
		$.each(resp.rows, function(i, value) {
   				$.each(value.Fuente, function(m,valor){
   					
   				})
       			
		});

			}	
	});


}
function getpiplocalizacion(){
	var url ="../../controlador/mef_controlador.php";
	var codigo = $('#codigo').val();
	if(codigo==""){
		alert("Ingrese un código");
		$('#codigo').focus();
		return false;
	}
	var funcion ="GetPipLocalizacion";
		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,codigo:codigo},
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
								"<th class='text-center' style='width: 5%;'>Código</th>"+
								"<th style='width: 12%;'>Departamento</th>"+
								"<th class='text-center'style='width: 15%;'>Provincia</th>"+
								"<th style='width: 12%;'>Distrito</th>"+
								"<th style='width: 12%;'>Centro Poblado</th>"+
								"<th class='text-center' style='width: 12%;'>Ubigeo</th>"+
							"</tr>"+
					    "</thead>"+
					    "<tbody>");

			$.each(resp, function(key,value){
				if(value.Codigo!=null){
$('#t tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.Codigo+"</td>"+
					"<td class='text-center' >"+value.Departamento+"</td>"+
					"<td class='text-center' >"+value.Provincia+"</td>"+
					"<td class='text-center' >"+value.Distrito+"</td>"+
					"<td class='text-center' >"+value.CentroPoblado+"</td>"+
					"<td >"+value.CentroPoblado+"</td></tr></tbody></table>");
				    
				cont++;
				}else{
					$('#t tbody').append("<td colspan='7'>No existen resultados para este código</td></tr></tbody></table>");
				}

			});	

			}	
	});
}

function getpip(){

	var url ="../../controlador/mef_controlador.php";
	var codigo = $('#codigo').val();

	if(codigo==""){
		alert("Ingrese un código");
		$('#codigo').focus();
		return false;
	}
	var funcion ="GetPIP";
		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,codigo:codigo},
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
								"<th class='text-center' style='width: 5%;'>Código</th>"+
								"<th style='width: 40%;'>Nombre</th>"+
								"<th class='text-center'style='width: 8%;'>Fecha de Registro</th>"+
								"<th style='width: 8%;'>Función</th>"+
								"<th style='width: 8%;'>Programa</th>"+
								"<th class='text-center' style='width: 5%;'>Ver</th>"+
							"</tr>"+
					    "</thead>"+
					    "<tbody>");

			$.each(resp, function(key,value){
				if(value.Codigo!=null){
$('#t tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.Codigo+"</td>"+
					"<td class='text-center' >"+value.Nombre+"</td>"+
					"<td class='text-center' >"+value.FechaRegistro+"</td>"+
					"<td class='text-center' >"+value.Funcion+"</td>"+
					"<td class='text-center' >"+value.Programa+"</td>"+
					"<td ><a href='' data-toggle='modal' data-target='.detallepip'>Ver detalle</a>"+
				    "</td></tr></tbody></table>");
				cont++;
				}else{
					$('#t tbody').append("<td colspan='7'>No existen resultados para este código</td></tr></tbody></tabla>");
				}

	
				

				$('#detallepip #Codigo').html(value.Codigo);
				$('#detallepip #Nombre').html(value.Nombre);
				$('#detallepip #FechaRegistro').html(value.FechaRegistro);
				$('#detallepip #TipoCadenaFunc').html(value.TipoCadenaFunc);
				$('#detallepip #FuncionCodigo').html(value.FuncionCodigo);
				$('#detallepip #ProgramaCodigo').html(value.ProgramaCodigo);
				$('#detallepip #SubprogramaCodigo').html(value.SubprogramaCodigo);
				$('#detallepip #Funcion').html(value.Funcion);
				$('#detallepip #Programa').html(value.Programa);
				$('#detallepip #Subprograma').html(value.Subprograma);
				$('#detallepip #UnidadFormuladora').html(value.UnidadFormuladora);
				$('#detallepip #UnidadFormuladoraCodigo').html(value.UnidadFormuladoraCodigo);
				$('#detallepip #NivelGobierno').html(value.NivelGobierno);
				$('#detallepip #Sector').html(value.Sector);
				$('#detallepip #SectorCodigo').html(value.SectorCodigo);
				$('#detallepip #Pliego').html(value.Pliego);
				$('#detallepip #PliegoCodigo').html(value.PliegoCodigo);
				$('#detallepip #Evaluadora').html(value.Evaluadora);
				$('#detallepip #EvaluadoraCodigo').html(value.EvaluadoraCodigo);
				$('#detallepip #Ejecutora').html(value.Ejecutora);
				$('#detallepip #EjecutoraCodigo').html(value.EjecutoraCodigo);
				$('#detallepip #Situacion').html(value.Situacion);
				$('#detallepip #UltimoEstudio').html(value.UltimoEstudio);
				$('#detallepip #EstadoUltimoEstudio').html(value.EstadoUltimoEstudio);
				$('#detallepip #Beneficiario').html(value.Beneficiario);
				$('#detallepip #ConglomeradoCodigo').html(value.ConglomeradoCodigo);
				$('#detallepip #FuenteFinanciamiento').html(value.FuenteFinanciamiento);
				$('#detallepip #MontoAlternativa').html(value.MontoAlternativa);
				$('#detallepip #MontoReformulado').html(value.MontoReformulado);
				$('#detallepip #MontoF15').html(value.MontoF15);
				$('#detallepip #MontoF16').html(value.MontoF16);
				$('#detallepip #FlagExpedienteTecnico').html(value.FlagExpedienteTecnico);
				$('#detallepip #AñoViabilidad').html(value.AñoViabilidad);
				$('#detallepip #FechaViabilidad').html(value.FechaViabilidad);

			});	

			}	
	});

}

function soloNum(e) {
var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
}
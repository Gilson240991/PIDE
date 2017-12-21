function getconsultaegresadotitulos(){
	var url ="../../controlador/minedu_controlador.php";
	
	var dni = $('#dni').val();

	if(dni==""){
		alert("Ingrese el número de D.N.I.");
		$('#dni').focus();
		return false;
	}

var funcion ="consulta_grados_y_titulos";

		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,dni:dni},
		beforeSend:function(){
			$('#loading').css('display','block');
		},
		success: function(data){
			console.log(data);
			$('#loading').css('display','none');

			$.each(data.rows,function(i,value){
					
				if(value.MENSAJE!=""){
					$('#tabla').remove();
						$('#t').append("<div class='alert alert-danger'>"+
  "<strong>Atención! </strong> "+value.MENSAJE+
"</div>");
				}else{
			$('#tabla').remove();
			$('.alert').remove();
			var cont=1;

				$('#t').append("<table id='tabla' class='table table-bordered table-condensed table-hover table-sm' style='margin-top: 10px;'>"+
						"<thead>"+
							"<tr style='background-color: #414852;color: #fff;font-weight: bold;'>"+
								"<th>Item</th>"+
								"<th>Nombre Completo</th>"+
								"<th>Tipo documento</th>"+
								"<th>Nº documento</th>"+
								"<th>Sede</th>"+
								"<th>Nivel</th>"+
								"<th>Nombre del Título</th>"+
								"<th>Nº Título</th>"+
								"<th>Fecha Título</th>"+
							    "</tr>"+
					    "</thead>"+
					    "<tbody>");
		$.each(value.DATA, function(i, item) {
   			
   					
   					$('#t tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+item.APEPAT+" "+item.APEMAT+" "+item.NOMBRES+"</td>"+
					"<td class='text-center' >"+item.DOCU_TIP+"</td>"+
					"<td class='text-center' >"+item.DOCU_NUM+"</td>"+
					"<td class='text-center' >"+item.NOMBRE_IE+"</td>"+
					"<td class='text-center' >"+item.NIVEL+"</td>"+
					"<td class='text-center' >"+item.NOMBRE_TITU+"</td>"+
					"<td class='text-center' >"+item.NUM_TITU+"</td>"+
				    "<td class='text-center' >"+item.TITU_FEC+"</td></tr></tbody></table>");
   			
       			cont++;
		});
				}

			});

		}
	});
}
function buscardatospordni(){
	var url ="../../controlador/reniec_controlador.php";
	
	var dni = $('#dni').val();

	if(dni==""){
		alert("Ingrese el número de D.N..");
		$('#dni').focus();
		return false;
	}

	if(dni.length<8){
		alert("Ingresa una cantidad válida que contenga 8 números");
		$('#dni').focus();
		return false;
	}
	var funcion ="obtener_datos_personales";

	$.ajax({
	 url:url,
	 type:'post',
	 dataType:'json',
	 data:{dni:dni,funcion:funcion},
	 beforeSend:function(){
	 	$('#loading').css('display','block');
	 },
	 success:function(resp){
	 	console.log(resp);
		$('#loading').css('display','none');
		$.each(resp.datos,function(i,item){
		if(item=="DNE"){
			alert("DNI no encontrado en RENIEC");
			$('#dni').val("");
			$('#dni').focus();
			limpiar();
		}else if(item=="CAYO"){
			alert("Servicio Web Reniec Inaccesible");		
		}else{
		if(item[0]="0000"){
				$('#paterno').val(item[1]);
					if (item[2] != "")
                        {
                           $('#materno').val(item[2]);
                        }
                    else
                        {
                            $('#materno').val(item[3]);
                        }
	            $('#nombres').val(item[4]);
				$('#documento').val(item[14]);
				$('#direccion').val(item[11]);
				$('#departamento').val(item[8]);
				$('#provincia').val(item[9]);
				$('#distrito').val(item[10]);
				if(item[12]==1){
					$sexo = "MASCULINO";	
				}else if(item[12]==2){
					$sexo ="FEMENINO";
				}
				$('#sexo').val($sexo);
				$('#nacimiento').val(item[13].substring(6,8)+"/"+item[13].substring(4,6)+"/"+item[13].substring(0,4));

			}else{
					alert("DNI no encontrado en RENIEC");
					limpiar();
			}
		}
	
			


		});
	 }
	});


}

function limpiar(){
	$('#sexo').val("");
	$('#nacimiento').val("");
	$('#nombres').val("");
	$('#documento').val("");
	$('#direccion').val("");
	$('#departamento').val("");
	$('#provincia').val("");
	$('#distrito').val("");
	$('#paterno').val("");
	$('#materno').val("");
}

function buscardatospornombresyapellidos(){
	var url ="../../controlador/reniec_controlador.php";
	
	var paterno = $('#paterno').val();
	var materno = $('#materno').val();
	var nombres = $('#nombres').val();


	if(paterno==""){
		alert("Ingrese el Apellido Paterno");
		$('#paterno').focus();
		return false;
	}
	if(materno==""){
		alert("Ingrese el Apellido Materno");
		$('#materno').focus();
		return false;
	}
	if(nombres==""){
		alert("Ingrese los Nombres");
		$('#nombres').focus();
		return false;
	}

	var funcion ="obtener_datos_personales_por_nombres_apellidos";

	$.ajax({
	 url:url,
	 type:'post',
	 dataType:'json',
	 data:{paterno:paterno,materno:materno,nombres:nombres,funcion:funcion},
	 beforeSend:function(){
	 	$('#loading').css('display','block');
	 },
	 success:function(resp){
	 		console.log(resp);
	 		$('#loading').css('display','none');
	 }
	});
}
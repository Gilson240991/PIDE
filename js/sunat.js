function buscar_informacion(){
var url ="../../controlador/sunat_controlador.php";
	
	var ruc = $('#ruc').val();

	if(ruc==""){
		alert("Ingrese el número de R.U.C.");
		$('#ruc').focus();
		return false;
	}

	if(ruc.length<11){
		alert("Ingresa una cantidad válida que contenga 11 números");
		$('#ruc').focus();
		return false;
	}
	var funcion ="datos_personales";

		$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:{funcion:funcion,ruc:ruc},
		beforeSend:function(){
			$('#loading').css('display','block');
		},
		success: function(data){
			console.log(data);
			$('#loading').css('display','none');
			limpiar();
			$.each(data.principal, function(i, value) {
				if(value.ddp_numruc==null){
						alert('Este Nº de R.U.C. es invalido, por favor corregir');
						$('#ruc').val("");
						$('#ruc').focus();
						limpiar();
						return false;
				}
				$('#ubigeo').val(value.ddp_ubigeo);
				$('#departamento').val(value.desc_dep);
				$('#provincia').val(value.desc_prov);
				$('#distrito').val(value.desc_dist);
				$('#economica').val(value.desc_ciiu);
				$('#estadocont').val(value.desc_estado);
				$('#fech_act').val(value.ddp_fecact);
				$('#fech_alta').val(value.ddp_fecalt);
				$('#fech_baja').val(value.ddp_fecbaj);
				$('#tipo_persona').val(value.desc_identi);
				$('#libreta').val(value.ddp_lllttt);
				$('#razon').val(value.ddp_nombre);
				$('#via').val(value.ddp_nomvia);
				$('#num').val(value.ddp_numer1);
				$('#interior').val(value.ddp_inter1);
				$('#zona').val(value.ddp_nomzon);
				$('#ref_ubi').val(value.ddp_refer1);
				$('#cond_dom').val(value.ddp_flag22);
				$('#des_cond_dom').val(value.desc_flag22);
				$('#dependencia').val(value.desc_numreg);
				$('#numruc').val(value.ddp_numruc);
				$('#tipo_via').val(value.desc_tipvia);
				$('#des_tip_zona').val(value.desc_tipzona);
				$('#tip_contribuyente').val(value.desc_tpoemp);
				$('#cod_secuencia').val(value.ddp_secuen);
				$('#estado_activo').val(value.esActivo);
				$('#estado_habido').val(value.esHabido);
			
					
			});

			$.each(data.secundario, function(i, value) {
				$('#dds_califi').val(value.dds_califi);
				$('#dds_comext').val(value.dds_comext);
				$('#desc_comext').val(value.desc_comext);
				$('#dds_consti').val(value.dds_consti);
				$('#dds_contab').val(value.dds_contab);
				$('#desc_contab').val(value.desc_contab);
				$('#dds_docide').val(value.dds_docide);
				$('#desc_docide').val(value.desc_docide);
				$('#dds_nrodoc').val(value.dds_nrodoc);
				$('#dds_domici').val(value.dds_domici);
				$('#desc_domici').val(value.desc_domici);
				$('#dds_fecact').val(value.dds_fecact);
				$('#desc_factur').val(value.desc_factur);
				$('#dds_fecnac').val(value.dds_fecnac);
				$('#dds_asient').val(value.dds_asient);
				$('#dds_ficha').val(value.dds_ficha);
				$('#dds_nfolio').val(value.dds_nfolio);
				$('#dds_inicio').val(value.dds_inicio);
				$('#dds_licenc').val(value.dds_licenc);
				$('#dds_nacion').val(value.dds_nacion);
				$('#dds_nomcom').val(value.dds_nomcom);
				$('#dds_numruc').val(value.dds_numruc);
				$('#dds_orient').val(value.dds_orient);
				$('#desc_orient').val(value.desc_orient);
				$('#dds_paispa').val(value.dds_paispa);
				$('#dds_pasapo').val(value.dds_pasapo);
				$('#dds_patron').val(value.dds_patron);
				$('#dds_sexo').val(value.dds_sexo);
				$('#desc_sexo').val(value.desc_sexo);
				$('#dds_telef1').val(value.dds_telef1);
				$('#dds_telef2').val(value.dds_telef2);
				$('#dds_telef3').val(value.dds_telef3);
				$('#dds_numfax').val(value.dds_numfax);


			});

			$.each(data.adicional1, function(i, value) {
				$('#cod_ciiu2').val(value.cod_ciiu2);
				$('#des_ciiu2').val(value.des_ciiu2);
				$('#cod_ciiu3').val(value.cod_ciiu3);
				$('#des_ciiu3').val(value.des_ciiu3);
				$('#cod_correo1').val(value.cod_correo1);
				$('#cod_correo2').val(value.cod_correo2);
				$('#num_telef1').val(value.num_telef1);
				$('#cod_depar1').val(value.cod_depar1);
				$('#des_depar1').val(value.des_depar1);
				$('#num_telef2').val(value.num_telef2);

				$('#cod_depar2').val(value.cod_depar2);
				$('#des_depar2').val(value.des_depar2);
				$('#num_telef3').val(value.num_telef3);
				$('#cod_depar3').val(value.cod_depar3);
				$('#des_depar3').val(value.des_depar3);
				$('#num_telef4').val(value.num_telef4);
				$('#cod_depar4').val(value.cod_depar4);
				$('#des_depar4').val(value.des_depar4);

				$('#num_fax').val(value.num_fax);
				$('#cod_depar5').val(value.cod_depar5);
				$('#des_depar5').val(value.des_depar5);
				$('#des_asiento').val(value.des_asiento);
				$('#des_parreg').val(value.des_parreg);
				$('#des_refnot').val(value.des_refnot);
				$('#ind_conleg').val(value.ind_conleg);
				$('#des_conleg').val(value.des_conleg);
				$('#ind_correo1').val(value.ind_correo1);
				$('#fec_confir1').val(value.fec_confir1);
				$('#ind_correo2').val(value.ind_correo2);
				$('#fec_confir2').val(value.fec_confir2);
				$('#ind_proind').val(value.ind_proind);
				$('#des_proind').val(value.des_proind);
				$('#num_kilom').val(value.num_kilom);

				$('#num_manza').val(value.num_manza);
				$('#num_depar').val(value.num_depar);

			});

			$.each(data.adicional2.getDatosT362Return, function(i, value) {
				$('#desc_numreg').val(value.desc_numreg);
				$('#t362_fecact').val(value.t362_fecact);
				$('#t362_fecbaj').val(value.t362_fecbaj);
				$('#t362_indice').val(value.t362_indice);
				$('#t362_nombre').val(value.t362_nombre);
				$('#t362_numreg').val(value.t362_numreg);
				$('#t362_numruc').val(value.t362_numruc);
				$('#t362_userna').val(value.t362_userna);
			});

			$.each(data.domicilio, function(i, value) {
				$('#direccion_legal').val(value);

			});

			$('#tabla').remove();
			var cont=1;

				if(data.est_anexos_cantidad>0){

				$('.alert').remove();

				$('#t').append("<table id='tabla' class='table table-bordered table-condensed table-hover table-sm'>"+
						"<thead>"+
							"<tr style='background-color: #414852;color: #fff;font-weight: bold;'>"+
							    "<th class='text-center' style='width: 2%;'>Item</th>"+
								"<th class='text-center' style='width: 5%;'>Departamento</th>"+
								"<th class='text-center' style='width: 5%;'>Provincia</th>"+
								"<th class='text-center' style='width: 7%;'>Distrito</th>"+
								"<th style='width: 9%;'>Tipo de establecimiento</th>"+
								"<th class='text-center' style='width: 12%;'>Nombre</th>"+
								"<th class='text-center' style='width: 20%;'>Dirección</th>"+
								"<th class='text-center' style='width: 5%;'>Detalle</th>"+

							"</tr>"+
					    "</thead>"+
					    "<tbody>");


			$.each(data.est_anexos.getEstablecimientosAnexosReturn, function(i, value) {
				$('#t tbody').append("<tr>"+
					"<th class='text-center scope'>"+cont+"</th>"+
					"<td class='text-center' >"+value.desc_dep+"</td>"+
					"<td class='text-center' >"+value.desc_prov+"</td>"+
					"<td class='text-center' >"+value.desc_dist+"</td>"+
					"<td class='text-center' >"+value.desc_tipest+"</td>"+
					"<td class='text-center' >"+value.spr_nombre+"</td>"+
					"<td class='text-center' >"+value.direccion+"</td>"+
					"<td class='text-center' ><a  href='' data-toggle='modal' data-target='#modal"+cont+"'><i class='fa fa-ellipsis-v' aria-hidden='true'></i>"+
  "</a></td></tr>");

	$('#modales').append("<div class='modal fade' id='modal"+cont+"' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>"+
   "<div class='modal-dialog modal-lg'>"+
    "<div class='modal-content'>"+
    "<div class='modal-header'>"+
       "<h5 class='modal-title' id='exampleModalLabel'>Detalle del establecimiento de anexo</h5>"+
        "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>"+
         "<span aria-hidden='true'>&times;</span>"+
       "</button>"+
     "</div>"+
     "<div class modal-body style='padding:10px;'>"+
     "<div class='row well'>"+
			"<div class='col-sm-6 '>"+
				"<div class='row form-group'>"+
					"<div class='col-sm-4'>"+
						"<label class='col-form-label' for=''>Código de ubigeo </label>"+
					"</div>"+
					"<div class='col-sm-8'>"+
						"<input disabled type='text' class='form-control' value='"+value.spr_ubigeo+"'>"+
					"</div>"+
				"</div>"+
			
			"<div class='row form-group'>"+
				"<div class='col-sm-4'>"+
					"<label class='col-form-label' for=''>Código de departamento </label>"+
				"</div>"+
				"<div class='col-sm-8'>"+
					"<input disabled type='text' class='form-control' value='"+value.cod_dep+"'>"+
				"</div>"+
			"</div>"+

		"<div class='row form-group'>"+
			"<div class='col-sm-4'>"+
				"<label class='col-form-label' for=''>Descripción departamento </label>"+
			"</div>"+
			"<div class='col-sm-8'>"+
				"<input disabled type='text' class='form-control' value='"+value.desc_dep+"'>"+
			"</div>"+
		"</div>"+

	"<div class='row form-group'>"+
		"<div class='col-sm-4'>"+
			"<label class='col-form-label' for=''>Código de distrito </label>"+
		"</div>"+
		"<div class='col-sm-8'>"+
			"<input disabled type='text' class='form-control' value='"+value.cod_dist+"'>"+
		"</div>"+
	"</div>"+
	
"<div class='row form-group'>"+
	"<div class='col-sm-4'>"+
		"<label class='col-form-label' for=''>Descripción distrito </label>"+
	"</div>"+
	"<div class='col-sm-8'>"+
		"<input disabled type='text' class='form-control' value='"+value.desc_dist+"' >"+
	"</div>"+
"</div>"+

"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
	"<label class='col-form-label' for=''>Código de Provincia </label>"+
"</div>"+
"<div class='col-sm-8'>"+
	"<input disabled type='text' class='form-control' value='"+value.cod_prov+"'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
	"<label class='col-form-label' for=''>Descripción provincia </label>"+
"</div>"+
"<div class='col-sm-8'>"+
	"<input disabled type='text' class='form-control' value='"+value.desc_prov+"' >"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
	"<label class='col-form-label' for=''>Listado de establecimientos anexos </label>"+
"</div>"+
"<div class='col-sm-8'>"+
	"<input disabled type='text' class='form-control' value='"+value.spr_numruc+"'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
	"<label class='col-form-label' for=''>Código del establecimiento </label>"+
"</div>"+
"<div class='col-sm-8'>"+
	"<input disabled type='text' class='form-control' value='"+value.spr_correl+"' id='des_depar1'>"+
"</div>"+
"</div>"+

"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Nombre de la vía </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.spr_nomvia+"'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Numero/Kilometro/Manzana </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.spr_numer1+"' id='cod_depar2'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Interior/Dpto/lote </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.spr_inter1+"' id='des_depar2'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Nombre de la zona </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.spr_nomzon+"' id='num_telef3'>"+
"</div>"+
"</div>"+

"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Referencia de la ubicación </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.spr_refer1+"' id='cod_depar3'>"+
"</div>"+
"</div>"+


"</div>"+
"<div class='col-sm-6'>"+

"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Nombre del establecimiento </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.spr_nombre+"' id='des_depar3'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Código de tipo de establecimiento </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.spr_tipest+"' id='num_telef4'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Descripción de tipo de establecimiento </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.desc_tipest+"' id='cod_depar4'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Numero de licencia municipal </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.spr_licenc+"' id='des_depar4'>"+
"</div>"+
"</div>"+

"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Tipo de vía </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.spr_tipvia+"' id='num_fax'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Descripción de tipo de vía </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.desc_tipvia+"' id='cod_depar5'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Tipo de zona </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.spr_tipzon+"' id='des_depar5'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Descripción de tipo de zona </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.desc_tipzon+"' id='des_asiento'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Fecha y hora de actualización </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.spr_fecact+"' id='des_parreg'>"+
"</div>"+
"</div>"+
"<div class='row form-group'>"+
"<div class='col-sm-4'>"+
"<label class='col-form-label' for=''>Dirección </label>"+
"</div>"+
"<div class='col-sm-8'>"+
"<input disabled type='text' class='form-control' value='"+value.direccion+"' id='des_refnot'>"+
"</div>"+
"</div>"+

"</div>"+
"</div></div>"+
    "</div>"+
  "</div>"+
"</div>");  
cont++;	


			});
}else{
	$('#tabla').remove();
		$('.alert').remove();

$('#t').append("<div class='alert alert-success'>"+
  "<strong>Atención!</strong> No cuenta con anexos este R.U.C."+
"</div>");
				}

	
	$('.uj_well').remove();


if(data.representantes_cantidad>0){
	$('#alerta_representante').remove();
	$.each(data.representantes.getRepLegalesReturn, function(i, value) {

		$('#tabla-tabs-4').append(
"<div class='uj_well' id='ros-tabs-4'>"+
	"<div class='row-card'>"+
	"<div class='form-group row uj_margin' style='margin-top: 8px;'>"+
		"<div class='col-sm-3'><label for=' class='col-form-label'><b>Descripción de documento</b> </label></div>"+
		"<div class='col-sm-9'><p>"+value.desc_docide+"</p></div>"+
	"</div>"+
	"<div class='form-group row uj_margin' style='margin-top: 8px;'>"+
		"<div class='col-sm-3'><label for=' class='col-form-label'><b>Cargo</b> </label></div>"+
		"<div class='col-sm-9'><p>"+value.rso_cargoo+"</p></div>"+
	"</div>"+
	"<div class='form-group row uj_margin' style='margin-top: 8px;'>"+
		"<div class='col-sm-3'><label for=' class='col-form-label'><b>Fecha y hora de actualización</b> </label></div>"+
		"<div class='col-sm-9'><p>"+value.rso_fecact+"</p></div>"+
	"</div>"+
	"<div class='form-group row uj_margin' style='margin-top: 8px;'>"+
		"<div class='col-sm-3'><label for=' class='col-form-label'><b>Fecha de nacimiento</b> </label></div>"+
		"<div class='col-sm-9'><p>"+value.rso_fecnac+"</p></div>"+
	"</div>"+
	"<div class='form-group row uj_margin' style='margin-top: 8px;'>"+
		"<div class='col-sm-3'><label for=' class='col-form-label'><b>Nombre del representante</b> </label></div>"+
		"<div class='col-sm-9'><p>"+value.rso_nombre+"</p></div>"+
	"</div>"+
	"<div class='form-group row uj_margin' style='margin-top: 8px;'>"+
		"<div class='col-sm-3'><label for=' class='col-form-label'><b>Número de documento</b> </label></div>"+
		"<div class='col-sm-9'><p>"+value.rso_nrodoc+"</p></div>"+
	"</div>"+
	"<div class='form-group row uj_margin' style='margin-top: 8px;'>"+
		"<div class='col-sm-3'><label for=' class='col-form-label'><b>Número de RUC</b> </label></div>"+
		"<div class='col-sm-9'><p>"+value.rso_numruc+"</p></div>"+
	"</div>"+
	"<div class='form-group row uj_margin' style='margin-top: 8px;'>"+
		"<div class='col-sm-3'><label for=' class='col-form-label'><b>Fecha desde la que ocupa el cargo</b> </label></div>"+
		"<div class='col-sm-9'><p>"+value.rso_vdesde+"</p></div>"+
	"</div>"+
	"</div>"+
"</div>");
	});

	}else{
		$('.uj_well').remove();
		$('#alerta_representante').remove();

$('#tabla-tabs-4').append("<div id='alerta_representante'><div class='alert alert-success'>"+
  "<strong>Atención!</strong> No cuenta con representantes legales este Nº de  R.U.C."+
"</div></div>");
	}		
		}



});
	}

	function limpiar(){
				$('#direccion_legal').val();
				$('#ubigeo').val("");
				$('#departamento').val("");
				$('#provincia').val("");
				$('#distrito').val("");
				$('#economica').val("");
				$('#estadocont').val("");
				$('#fech_act').val("");
				$('#fech_alta').val("");
				$('#fech_baja').val("");
				$('#tipo_persona').val("");
				$('#libreta').val("");
				$('#razon').val("");
				$('#via').val("");
				$('#num').val("");
				$('#interior').val("");
				$('#zona').val("");
				$('#ref_ubi').val("");
				$('#cond_dom').val("");
				$('#des_cond_dom').val("");
				$('#dependencia').val("");
				$('#numruc').val("");
				$('#tipo_via').val("");
				$('#des_tip_zona').val("");
				$('#tip_contribuyente').val("");
				$('#cod_secuencia').val("");
				$('#estado_activo').val("");
				$('#estado_habido').val("");
			
				$('#dds_califi').val("");
				$('#dds_comext').val("");
				$('#desc_comext').val("");
				$('#dds_consti').val("");
				$('#dds_contab').val("");
				$('#desc_contab').val("");
				$('#dds_docide').val("");
				$('#desc_docide').val("");
				$('#dds_nrodoc').val("");
				$('#dds_domici').val("");
				$('#desc_domici').val("");
				$('#dds_fecact').val("");
				$('#desc_factur').val("");
				$('#dds_fecnac').val("");
				$('#dds_asient').val("");
				$('#dds_ficha').val("");
				$('#dds_nfolio').val("");
				$('#dds_inicio').val("");
				$('#dds_licenc').val("");
				$('#dds_nacion').val("");
				$('#dds_nomcom').val("");
				$('#dds_numruc').val("");
				$('#dds_orient').val("");
				$('#desc_orient').val("");
				$('#dds_paispa').val("");
				$('#dds_pasapo').val("");
				$('#dds_patron').val("");
				$('#dds_sexo').val("");
				$('#desc_sexo').val("");
				$('#dds_telef1').val("");
				$('#dds_telef2').val("");
				$('#dds_telef3').val("");
				$('#dds_numfax').val("");

				$('#cod_ciiu2').val("");
				$('#des_ciiu2').val("");
				$('#cod_ciiu3').val("");
				$('#des_ciiu3').val("");
				$('#cod_correo1').val("");
				$('#cod_correo2').val("");
				$('#num_telef1').val("");
				$('#cod_depar1').val("");
				$('#des_depar1').val("");
				$('#num_telef2').val("");

				$('#cod_depar2').val("");
				$('#des_depar2').val("");
				$('#num_telef3').val("");
				$('#cod_depar3').val("");
				$('#des_depar3').val("");
				$('#num_telef4').val("");
				$('#cod_depar4').val("");
				$('#des_depar4').val("");

				$('#num_fax').val("");
				$('#cod_depar5').val("");
				$('#des_depar5').val("");
				$('#des_asiento').val("");
				$('#des_parreg').val("");
				$('#des_refnot').val("");
				$('#ind_conleg').val("");
				$('#des_conleg').val("");
				$('#ind_correo1').val("");
				$('#fec_confir1').val("");
				$('#ind_correo2').val("");
				$('#fec_confir2').val("");
				$('#ind_proind').val("");
				$('#des_proind').val("");
				$('#num_kilom').val("");

				$('#num_manza').val("");
				$('#num_depar').val("");
		        $('#desc_numreg').val("");
				$('#t362_fecact').val("");
				$('#t362_fecbaj').val("");
				$('#t362_indice').val("");
				$('#t362_nombre').val("");
				$('#t362_numreg').val("");
				$('#t362_numruc').val("");
				$('#t362_userna').val("");

				$('#desc_numreg').val("");
				$('#t362_fecact').val("");
				$('#t362_fecbaj').val("");
				$('#t362_indice').val("");
				$('#t362_nombre').val("");
				$('#t362_numreg').val("");
				$('#t362_numruc').val("");
				$('#t362_userna').val("");
	}
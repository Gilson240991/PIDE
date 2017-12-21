<?php include_once '../assets/nav-lateral.php';
?>
<style>
	#loading{
		display: none;
	}
</style>
  <link rel="stylesheet" href="https//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href=""><b>SUNAT</b></a>
			</li>
			<li class="breadcrumb-item active"><b><?php echo strtoupper("Datos Informativos del Contribuyente");?></b></li>
		</ol>
		<hr>
		<form action="" class="form-horizontal">
			<div class="form-group row" style="margin-top: 10px;">
				<div class="col-sm-1">
					<label  for="" class="col-form-label">Nº de R.U.C.</label>
				</div>
				<div class="col-sm-2">
					<input  type="text" id ='ruc' class="form-control" onKeyPress="return soloNum(event)" maxlength="11" >
				</div>
				<div class="col-sm-1">
					<button type="button" class="btn btn-primary" onclick="buscar_informacion()"><i class="fa fa-search"></i> Buscar</button>
				</div>
				<div id="loading">
					<img src="../../img/loading.gif" style='width:38px;' alt="">
				</div>
			</div>
		</form>
		<hr><br>
		<div class="cabecera">
	<h5>Dirección legal del contribuyente</h5>
</div>
<div class="row form-group well">
	<div class="col-sm-2">
		<label class="col-form-label" for="">Dirección legal </label>
	</div>
	<div class="col-sm-10">
		<input disabled type="text" class="form-control" value="" id='direccion_legal'>
	</div>
</div>
		<div class="cabecera">
			<h5>Datos Principales del Contribuyente</h5>
		</div>
		<div class="row well">
			<div class="col-sm-6 ">
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="col-form-label" for="">Código de ubigeo </label>
					</div>
					<div class="col-sm-8">
						<input disabled type="text" class="form-control" value="" id="ubigeo">
					</div>
				</div>
			
			<div class="row form-group">
				<div class="col-sm-4">
					<label class="col-form-label" for="">Descripción de departamento </label>
				</div>
				<div class="col-sm-8">
					<input disabled type="text" class="form-control" value="" id='departamento'>
				</div>
			</div>
		
		<div class="row form-group">
			<div class="col-sm-4">
				<label class="col-form-label" for="">Descripción de provincia </label>
			</div>
			<div class="col-sm-8">
				<input disabled type="text" class="form-control" value="" id='provincia'>
			</div>
		</div>
	
	<div class="row form-group">
		<div class="col-sm-4">
			<label class="col-form-label" for="">Descripción de distrito </label>
		</div>
		<div class="col-sm-8">
			<input disabled type="text" class="form-control" value="" id='distrito'>
		</div>
	</div>
	
	
	<!--div class="row form-group">
		<div class="col-sm-4">
					<label class="col-form-label" for="">Código de actividad económica </label>
		</div>
		<div class="col-sm-8">
					<label class="col-form-label" for=""></label>
		</div>
</div-->
<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Descripción de actividad económica </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id='economica'>
	</div>
</div>
<!--div class="row form-group">
	<div class="col-sm-4">
				<label class="col-form-label" for="">Estado del contribuyente </label>
	</div>
	<div class="col-sm-8">
				<label class="col-form-label" for="">01</label>
	</div>
</div-->
<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Descripción del estado del contribuyente </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id='estadocont'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Fecha y hora de actualización </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id='fech_act'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Fecha de alta </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id='fech_alta'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Fecha de baja </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id='fech_baja'>
</div>
</div>
<!--div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Tipo de persona </label>
	</div>
	<div class="col-sm-8">
		<label class="col-form-label" for="">857</label>
	</div>
</div-->
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de tipo de persona </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='tipo_persona'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Libreta tributaria </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='libreta'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Nombre o Razón Social </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='razon'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Nombre de la vía </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='via'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='num'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Interior </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='interior'>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Nombre de la zona </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='zona'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Referencia de ubicación </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='ref_ubi'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Condición del domicilio </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='cond_dom'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de la condición del domicilio </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='des_cond_dom'>
</div>
</div>
<!--div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Código de dependencia </label>
	</div>
	<div class="col-sm-8">
		<label class="col-form-label" for="">-</label>
	</div>
</div-->
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de la dependencia </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='dependencia'>
</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número de R.U.C. </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='numruc'>
</div>
</div>
<!--div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Código de tipo de vía </label>
	</div>
	<div class="col-sm-8">
		<label class="col-form-label" for="">154</label>
	</div>
</div-->
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de tipo de vía </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='tipo_via'>
</div>
</div>
<!--div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Código de tipo de zona </label>
	</div>
	<div class="col-sm-8">
		<label class="col-form-label" for="">-</label>
	</div>
</div-->
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de tipo de zona </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='des_tip_zona'>
</div>
</div>
<!--div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Tipo de contribuyente </label>
	</div>
	<div class="col-sm-8">
		<label class="col-form-label" for="">39</label>
	</div>
</div-->
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de contribuyente </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='tip_contribuyente'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Código de secuencia </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='cod_secuencia'>
</div>
</div>
<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Estado Activo </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id='estado_activo'>
	</div>
</div>
<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Estado Habido </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id='estado_habido'>
	</div>
</div>
</div>
</div>


<!--tabs-->

<section id="tabs-personales">
	<div id="tabs" >
		<ul class="tabs">
			<li><a href="#tabs-1">DATOS SECUNDARIOS</a></li>
			<li><a href="#tabs-2">DATOS ADICIONALES</a></li>
			<li><a href="#tabs-3">ANEXOS</a></li>
			<li><a href="#tabs-4">OTROS DATOS</a></li>
		</ul>
		<div>
			<div id="tabs-1">
				<div class="row well">
			<div class="col-sm-6 ">
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="col-form-label" for="">Calificación de la conducta del contribuyente </label>
					</div>
					<div class="col-sm-8">
						<input disabled type="text" class="form-control" value="" id='dds_califi'>
					</div>
				</div>
				
			<div class="row form-group">
				<div class="col-sm-4">
					<label class="col-form-label" for="">Marca de actividad comercio exterior </label>
				</div>
				<div class="col-sm-8">
					<input disabled type="text" class="form-control" value="" id='dds_comext'>
				</div>
			</div>
		
		<div class="row form-group">
			<div class="col-sm-4">
				<label class="col-form-label" for="">Descripción de comercio exterior </label>
			</div>
			<div class="col-sm-8">
				<input disabled type="text" class="form-control" value="" id='desc_comext'>
			</div>
		</div>

	<div class="row form-group">
		<div class="col-sm-4">
			<label class="col-form-label" for="">Fecha de constitución </label>
		</div>
		<div class="col-sm-8">
			<input disabled type="text" class="form-control" value="" id='dds_consti'>
		</div>
	</div>
	
	
<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Tipo de contabilidad </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id='dds_contab'>
	</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Descripción de tipo de contabilidad </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id='desc_contab'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Tipo de documento de identidad </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id='dds_docide'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Descripción de tipo de documento </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id="desc_docide">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Número de documento de identidad </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id="dds_nrodoc">
</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Condición de domiciliado </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='dds_domici'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de condición de domiciliado </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='desc_domici'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Tipo de facturación </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='dds_fecact'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de tipo de facturación </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="desc_factur">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Fecha de nacimiento </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_fecnac">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número de asiento inscripción RRPP </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_asient">
</div>
</div>
</div>
<div class="col-sm-6">
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Tomo o ficha de RRPP </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_ficha">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número de folios en RRPP </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id='dds_nfolio'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Fecha de inicio de actividades </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_inicio">
</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número de licencia municipal </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_licenc">
</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Nacionalidad </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_nacion">
</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Nombre comercial </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_nomcom">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número de RUC </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_numruc">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Origen de la entidad </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_orient">
</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción del origen de la entidada </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="desc_orient">
</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">País que emitió el pasaporte </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_paispa">
</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número de pasaporte </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_pasapo">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Carnet patronal </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="dds_patron">
</div>
</div>
<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Sexo </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id="dds_sexo">
	</div>
</div>
<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Descripción del Sexo </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id="desc_sexo">
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Número de teléfono </label>
	</div>
	<div class="col-sm-8">
		<input disabled class="form-control" type="text" id="dds_telef1">
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Número de teléfono </label>
	</div>
	<div class="col-sm-8">
		<input disabled class="form-control" type="text" id="dds_telef2">
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Número de teléfono </label>
	</div>
	<div class="col-sm-8">
		<input disabled class="form-control" type="text" id="dds_telef3">
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Número de FAX </label>
	</div>
	<div class="col-sm-8">
		<input disabled class="form-control" type="text" id="dds_numfax">
	</div>
</div>
</div>
</div>
			</div>

			<div id="tabs-2">
				<div class="row well">
			<div class="col-sm-6 ">
				<div class="row form-group">
					<div class="col-sm-4">
						<label class="col-form-label" for="">Código de actividad económica secundaria </label>
					</div>
					<div class="col-sm-8">
						<input disabled type="text" class="form-control" value="" id="cod_ciiu2">
					</div>
				</div>
			
			<div class="row form-group">
				<div class="col-sm-4">
					<label class="col-form-label" for="">Descripción de actividad económica </label>
				</div>
				<div class="col-sm-8">
					<input disabled type="text" class="form-control" value="" id="des_ciiu2">
				</div>
			</div>

		<div class="row form-group">
			<div class="col-sm-4">
				<label class="col-form-label" for="">Código de actividad económica secundaria </label>
			</div>
			<div class="col-sm-8">
				<input disabled type="text" class="form-control" value="" id="cod_ciiu3">
			</div>
		</div>

	<div class="row form-group">
		<div class="col-sm-4">
			<label class="col-form-label" for="">Descripción de actividad económica </label>
		</div>
		<div class="col-sm-8">
			<input disabled type="text" class="form-control" value="" id="des_ciiu3">
		</div>
	</div>
	
<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Correo electrónico </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id="cod_correo1">
	</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Correo electrónico </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id='cod_correo2'>
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Número de teléfono </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id="num_telef1">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Código de departamento </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id="cod_depar1">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
	<label class="col-form-label" for="">Descripción de departamento </label>
</div>
<div class="col-sm-8">
	<input disabled type="text" class="form-control" value="" id="des_depar1">
</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número de teléfono </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="num_telef2">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Código de departamento </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="cod_depar2">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de departamento </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="des_depar2">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número de teléfono </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="num_telef3">
</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Código de departamento </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="cod_depar3">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de departamento </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="des_depar3">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número de teléfono </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="num_telef4">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Código de departamento </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="cod_depar4">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de departamento </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="des_depar4">
</div>
</div>

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número de teléfono fax </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="num_fax">
</div>
</div>

</div>
<div class="col-sm-6">

<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Código de departamento </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="cod_depar5">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de departamento </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="des_depar5">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Número de asiento en los RRPP </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="des_asiento">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Partida registral </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="des_parreg">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Referencia de la notificación </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="des_refnot">
</div>
</div>
<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Condición legal del domicilio </label>
	</div>
	<div class="col-sm-8">
		<input disabled class="form-control" type="text" id="ind_conleg">
	</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Descripción de condición legal a domicilio </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="des_conleg">
</div>
</div>
<div class="row form-group">
<div class="col-sm-4">
<label class="col-form-label" for="">Indicador de correo </label>
</div>
<div class="col-sm-8">
<input disabled type="text" class="form-control" value="" id="ind_correo1">
</div>
</div>
<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Fecha de confirmación de correo </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id="fec_confir1">
	</div>
</div>
<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Indicador de correo </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id="ind_correo2">
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Fecha de confirmación de correo </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id="fec_confir2">
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Código de tipo de representación </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id="ind_proind">
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Descripción de tipo de representación </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id="des_proind">
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Kilometro </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id="num_kilom">
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Manzana </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id="num_manza">
	</div>
</div>

<div class="row form-group">
	<div class="col-sm-4">
		<label class="col-form-label" for="">Departamento </label>
	</div>
	<div class="col-sm-8">
		<input disabled type="text" class="form-control" value="" id="num_depar">
	</div>
</div>

</div>
</div>
<br>
<br>

<div class="row well">
	<div class="col-sm-6">
		<div class="row form-group">
			<div class="col-sm-4">
				<label class="col-form-label" for="">Descripción Oficina RRPP </label>
			</div>
			<div class="col-sm-8">
				<input disabled type="text" class="form-control" value="" id="desc_numreg">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-4">
				<label class="col-form-label" for="">Fecha y Hora de actualización </label>
			</div>
			
			<div class="col-sm-8">
				<input disabled type="text" class="form-control" value="" id="t362_fecac">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-4">
				<label class="col-form-label" for="">Fecha Baja </label>
			</div>
			<div class="col-sm-8">
				<input disabled type="text" class="form-control" value="" id="t362_fecbaj">
			</div>
		</div>

			<div class="row form-group">
			<div class="col-sm-4">
				<label class="col-form-label" for="">Número de índice </label>
			</div>
			<div class="col-sm-8">
				<input disabled type="text" class="form-control" value="" id="t362_indice">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-4">
				<label class="col-form-label" for="">Nombre de la empresa </label>
			</div>
			<div class="col-sm-8">
				<input disabled type="text" class="form-control" value="" id="t362_nombre">
			</div>
		</div>
		
		
	</div>
	<div class="col-sm-6">
		
		<div class="row form-group">
			<div class="col-sm-4">
				<label class="col-form-label" for="">Número de registro </label>
			</div>
			<div class="col-sm-8">
				<input disabled type="text" class="form-control" value="" id="t362_numreg">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-4">
				<label class="col-form-label" for="">Número de RUC </label>
			</div>
			<div class="col-sm-8">
				<input disabled type="text" class="form-control" value="" id="t362_numruc">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-sm-4">
				<label class="col-form-label" for="">Nombre del usuario </label>
			</div>
			<div class="col-sm-8">
				<input disabled type="text" class="form-control" value="" id="t362_userna">
			</div>
		</div>
	</div>
</div>


			</div>

<div id="tabs-3">
	<div class="form-group row" style="margin-top: 8px;">
		<div class="col-sm-12">
			<div id="t">
				
			</div>
		</div>
	</div>

	<div id="modales">
		
	</div>
</div>

<div id="tabs-4">
	<div class="form-group" style="margin-top: 8px;">
		<div id="tabla-tabs-4" >
			
	
		</div>
	</div>
	</div>
	

</div>
</div>
</section>
</div>
<script type="text/javascript" src="../../js/sunat.js"></script>
<?php include_once '../assets/footer.php'; ?>
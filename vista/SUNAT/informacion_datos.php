<?php include_once '../assets/nav-lateral.php';
?>
<link rel="stylesheet" href="../../css/estilos_tabs.css">
<link rel="stylesheet" href="../../css/jquery-ui.css">

<style>
	#loading{
		display: none;
	}
</style>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href=""><b>SUNAT</b></a>
			</li>
			<li class="breadcrumb-item active"><b>Datos Informativos del Contribuyente</b></li>
		</ol>
		<hr>
		<form action="" class="form-horizontal">
			<div class="form-group row" style="margin-top: 10px;">
				<div class="col-sm-1">
					<label for="" class="col-form-label">Nº de R.U.C.</label>
				</div>
				<div class="col-sm-2">
					<input type="text" id ='ruc' class="form-control" onKeyPress="return soloNum(event)" maxlength="11">
				</div>
				<div class="col-sm-1">
					<button type="button" class="btn btn-primary" onclick="buscar_informacion()"><i class="fa fa-search"></i> Buscar</button>
				</div>
				<div id="loading">
					<img src="../../img/loading.gif" style='width: 38px;' alt="">
				</div>
			</div>
		</form>
		<div class="cabecera">
			<h5>Datos Principales del Contribuyente</h5>
		</div>
		<div class="row well">
			<div class="col-sm-6 ">
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Código de ubigeo :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">150122</label>
					</div>
				</div>
				<!--div class="row form-group">
					<div class="col-sm-4">
						<label for="">Código de departamento :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">01</label>
					</div>
				</div-->
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Descripción de departamento :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">LIMA</label>
					</div>
				</div>
				<!--div class="row form-group">
					<div class="col-sm-4">
						<label for="">Código de provincia :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">08</label>
					</div>
				</div-->
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Descripción de provincia :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">LIMA</label>
					</div>
				</div>
				<!--div class="row form-group">
					<div class="col-sm-4">
						<label for="">Código de distrito :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">05</label>
					</div>
				</div-->
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Descripción de distrito :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">LIMA</label>
					</div>
				</div>
				
				
				<!--div class="row form-group">
					<div class="col-sm-4">
						<label for="">Código de actividad económica :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for=""></label>
					</div>
				</div-->
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Descripción de actividad económica :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for=""></label>
					</div>
				</div>
				<!--div class="row form-group">
					<div class="col-sm-4">
						<label for="">Estado del contribuyente :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">01</label>
					</div>
				</div-->
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Descripción del estado del contribuyente :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">ACTIVO</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Fecha y hora de actualización :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">10/05/2014</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Fecha de alta :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">10/05/2014</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Fecha de baja :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">10/05/2014</label>
					</div>
				</div>
				<!--div class="row form-group">
					<div class="col-sm-4">
						<label for="">Tipo de persona :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">857</label>
					</div>
				</div-->
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Descripción de tipo de persona :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">PERSONA JURIDICA</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Libreta tributaria :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">-</label>
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Nombre o Razón Social :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">MUNICIPALIDAD DE LIMA</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Nombre de la vía :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">BUENOS AIRES</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Número :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">125</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Interior :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">-</label>
					</div>
				</div>
				
			</div>
			<div class="col-sm-6">
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Nombre de la zona :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">dd</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Referencia de ubicación :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">dd</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Condición del domicilio :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">4</label>
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Descripción de la condición del domicilio :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">asd</label>
					</div>
				</div>
				<!--div class="row form-group">
					<div class="col-sm-4">
						<label for="">Código de dependencia :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">-</label>
					</div>
				</div-->
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Descripción de la dependencia :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">asd</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Condición del domicilio :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">-</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Número de R.U.C. :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">10084437978</label>
					</div>
				</div>
				<!--div class="row form-group">
					<div class="col-sm-4">
						<label for="">Código de tipo de vía :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">154</label>
					</div>
				</div-->
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Descripción de tipo de vía :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">AVENIDA</label>
					</div>
				</div>
				<!--div class="row form-group">
					<div class="col-sm-4">
						<label for="">Código de tipo de zona :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">-</label>
					</div>
				</div-->
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Descripción de tipo de zona :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">-</label>
					</div>
				</div>
				<!--div class="row form-group">
					<div class="col-sm-4">
						<label for="">Tipo de contribuyente :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">39</label>
					</div>
				</div-->
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Descripción de contribuyente :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">SOCIEDAD ANONIMA CERRADA</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Código de secuencia :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">15</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Estado Activo :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">FALSE</label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-4">
						<label for="">Estado Habido :</label>
					</div>
					<div class="col-sm-8 resultados">
						<label for="">TRUE</label>
					</div>
				</div>
			</div>
		</div>
<!-- tabs-->
      <ul class=tabs>
            
            <li>
                
                <input type=radio name=tabs id=tab1 checked>
                <label for=tab1>Tab1</label>
                <div id=tab-content1 class=tab-content>
                    
                    <p>
                        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!
                        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!
                        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!
                    </p>
                    
                </div>
                
            </li>
            
            <li>
                
                <input type=radio name=tabs id=tab2 checked>
                <label for=tab2>Tab2</label>
                <div id=tab-content2 class=tab-content>
                    
                    <p>
                        In faucibus ullamcorper vulputate. Fusce massa ex, 
                        posuere sit amet felis eu, ullamcorper pharetra nulla. 
                        Morbi fringilla arcu accumsan, consequat sem vitae, 
                        congue risus. Ut sit amet lobortis leo. Aenean erat 
                        lectus, egestas vel rutrum eu, mattis vel est. In nec 
                        nulla non turpis ornare mollis eu sit amet nulla. 
                        Aliquam leo tortor, dictum in facilisis eu, viverra a 
                        magna. Sed viverra euismod diam sed luctus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quo deserunt esse vitae id, incidunt sapiente velit odit et. Sit rem quasi blanditiis quos ipsum, nam distinctio nisi, quisquam in!
                    </p>
                    
                </div>
                
            </li>
            
        </ul>

</div>
<script type="text/javascript" src="../../js/sunat.js"></script>

<?php include_once '../assets/footer.php'; ?>


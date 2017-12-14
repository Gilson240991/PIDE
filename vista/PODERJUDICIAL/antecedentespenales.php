<?php include_once '../assets/nav-lateral.php'; ?>
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
				<a href="#">PODER JUDICIAL</a>
			</li>
			<li class="breadcrumb-item active">Consultar Anteccedentes Penales</li>
		</ol>
		<h1>Consultar Anteccedentes Penales</h1>
		<hr>
		<div>
			<form action="" class="form-horizontal">
				<input type="hidden" class="form-control" id="motivo" value="Por proceso judicial en el Poder Judicial">
				<input type="hidden" class="form-control" id="entidad" value="00001-2015-0-0901-JR-PE-01">
				<input type="hidden" class="form-control" id="rucentidad" value="20131380951">
				<input type="hidden" id="ippublica" value="200.48.214.20">
				<input type="hidden" class="form-control" id="nombrepc" value="MUNICIPALIDAD">
				<input type="hidden" class="form-control" id="ip" value="<?php 	echo  $_SERVER['REMOTE_ADDR'] ?>">
				<input type="hidden" class="form-control" id="nombreusuario" value="MUNICIPALIDAD">
				<input type="hidden" class="form-control" id="mac" value="78-2B-CB-B7-FC-F3">
				<div class="row" style="margin-top: 10px;">
					<div class="col-sm-2">
						<label for="" class="control-label">Apellido Paterno</label>
					</div>
					<div class="col-sm-2">
						<label for="" class="control-label">Apellido Materno</label>
					</div>
					<div class="col-sm-2">
						<label for="" class="control-label">Primer Nombre</label>
					</div>
					<div class="col-sm-2">
						<label for="" class="control-label">Segundo Nombre</label>
					</div>
					
					
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="text" class="form-control" id="paterno"  onKeyPress="return soloLetras(event)">
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="materno"  onKeyPress="return soloLetras(event)">
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="nombre1"  onKeyPress="return soloLetras(event)">
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="nombre2"  onKeyPress="return soloLetras(event)">
					</div>
					
					<div class="col-sm-2">
						<button class="btn btn-primary" type="button" onclick="getanteccedentespenales()"><i class="fa fa-search"></i> Buscar</button>
					</div>
					<div class="col-sm-1">
					<div id="loading">
						<img src="../../img/loading.gif" style='width: 38px;' alt="">
					</div>
					</div>

				</div>

				<div class="row">
					<div class="col-sm-2">
						<label for="" class="control-label">Tercer Nombre</label>
					</div>
					<div class="col-sm-2">
						<label for="" class="control-label">Número de DNI del consultado</label>
					</div>
				
				</div>

				<div class="row">
				<div class="col-sm-2">
						<input type="text" class="form-control" id="nombre3" style='text-transform:uppercase;'  onKeyPress="return soloLetras(event)">
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="dni" onKeyPress="return soloNum(event)" maxlength="8">
					</div>
					<div class="col-sm-2">
						<input type="hidden" id="dniconsult" class="form-control" value="<?php  echo $datos['Dni'];	 ?>">
					</div>
				</div>
				
				
			</form>
			<div class="form-group row">
				<div class="col-sm-12">
					<div id="t">
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<script type="text/javascript" src="../../js/poderjudicial.js"></script>
<?php include_once '../assets/footer.php'; ?>
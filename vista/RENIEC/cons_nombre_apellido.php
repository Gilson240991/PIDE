<?php include_once '../assets/nav-lateral.php';
?>
<style>
	#loading{
		display: none;
	}
</style>
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
		<div class="row">
			<div class="col-sm-8">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href=""><b>RENIEC</b></a>
					</li>
					<li class="breadcrumb-item active"><b>CONSULTAR DATOS POR NOMBRES Y APELLIDOS</b></li>
				</ol>
			</div>
			<div class="col-sm-4">
				<?php //include 'horario_atencion_reniec.php' ?>
			</div>
		</div>
		<hr>
		<form action="" class="form-horizontal">
			<div class="form-group row" style="margin-top: 10px;">
				<div class="col-sm-1">
					<label for="" class="col-form-label">A. Paterno</label>
				</div>
				<div class="col-sm-2">
					<input type="text" id ='paterno' class="form-control" onKeyPress="return soloLetras(event)">
				</div>
				<div class="col-sm-1">
					<label for="" class="col-form-label">A. Materno</label>
				</div>
				<div class="col-sm-2">
					<input type="text" id ='materno' class="form-control" onKeyPress="return soloLetras(event)">
				</div>
				<div class="col-sm-1">
					<label for="" class="col-form-label">Nombres</label>
				</div>
				<div class="col-sm-2">
					<input type="text" id ='nombres' class="form-control" onKeyPress="return soloLetras(event)">
				</div>

				<div class="col-sm-1">
					<button type="button" class="btn btn-primary" onclick="buscardatospornombresyapellidos()"><i class="fa fa-search"></i> Buscar</button>
				</div>
				<div class="col-sm-1">
					<div id="loading">
						<img src="../../img/loading.gif" style='width: 38px;' alt="">
					</div>
				</div>
				
			</div>
		</form>
		<br>
		<div class="cabecera">
			<h5>Datos personales</h5>
		</div>
		<div class="row form-group well">
			<div class="col-sm-2">
				<label class="col-form-label" for="">Apellido Paterno </label>
			</div>
			<div class="col-sm-3">
				<input disabled type="text" class="form-control" value="" id='paterno'>
			</div>
			<div class="col-sm-2">
				<label class="col-form-label" for="">Departamento</label>
			</div>
			<div class="col-sm-3">
				<input disabled type="text" class="form-control" value="" id='departamento'>
			</div>
			
			
		</div>
		<div class="row form-group well">
			<div class="col-sm-2">
				<label class="col-form-label" for="">Apellido Materno </label>
			</div>
			<div class="col-sm-3">
				<input disabled type="text" class="form-control" value="" id='materno'>
			</div>
			<div class="col-sm-2">
				<label class="col-form-label" for="">Provincia</label>
			</div>
			<div class="col-sm-3">
				<input disabled type="text" class="form-control" value="" id='provincia'>
			</div>
			
			
		</div>
		<div class="row form-group well">
			<div class="col-sm-2">
				<label class="col-form-label" for="">Nombres </label>
			</div>
			<div class="col-sm-3">
				<input disabled type="text" class="form-control" value="" id='nombres'>
			</div>
			<div class="col-sm-2">
				<label class="col-form-label" for="">Distrito</label>
			</div>
			<div class="col-sm-3">
				<input disabled type="text" class="form-control" value="" id='distrito'>
			</div>
			
			
		</div>

		<div class="row form-group well">
			<div class="col-sm-2">
				<label class="col-form-label" for="">D.N.I. </label>
			</div>
			<div class="col-sm-3">
				<input disabled type="text" class="form-control" value="" id='documento'>
			</div>
			<div class="col-sm-2">
				<label class="col-form-label" for="">Sexo </label>
			</div>
			<div class="col-sm-3">
				<input disabled type="text" class="form-control" value="" id='sexo'>
			</div>
			
			
			
		</div>
		<div class="row form-group well">
			<div class="col-sm-2">
				<label class="col-form-label" for="">Direción </label>
			</div>
			<div class="col-sm-3">
				<input disabled type="text" class="form-control" value="" id='direccion'>
			</div>
			<div class="col-sm-2">
				<label class="col-form-label" for="">Fecha de nacimiento </label>
			</div>
			<div class="col-sm-3">
				<input disabled type="text" class="form-control" value="" id='nacimiento'>
			</div>
			
		</div>
		
	</div>
</div>
<script type="text/javascript" src="../../js/reniec.js"></script>
<?php include_once '../assets/footer.php'; ?>
<?php include_once '../assets/nav-lateral.php';
?>
<style>
	#detallepip tr th{
		background-color: #343A40;
		color: #fff;
		font-weight: bold;
	}
	#loading{
		display: none;
	}
</style>
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- <Breadcrumbs-->
		<div class="row">
			<div class="col-sm-8">
				<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#"><b>SUNARP</b></a>
			</li>
			<li class="breadcrumb-item active"><b>CONSULTAR POR RAZÓN SOCIAL</b></li>
		</ol>
			</div>
			<div class="col-sm-4">
				<?php include 'horario_atencion.php' ?>
			</div>
		</div>
			
		
		<hr>
		<form action="">
			<div class="form-group row" style="margin-top: 10px;">
				<div class="col-sm-1">
					<label for="" class="col-form-label">Razón Social</label>
				</div>
				<div class="col-sm-2">
					<input type="text" id ='razon' class="form-control">
				</div>
				<div class="col-sm-1">
					<button type="button" class="btn btn-primary" onclick="buscarRazonSocial()"><i class="fa fa-search"></i> Buscar</button>
				</div>
				<div id="loading">
					<img src="../../img/loading.gif" style='width: 38px;' alt="">
				</div>
			</div>
		</form>
		<div class="form-group row" style='margin-top: 10px' >
			<div class="col-sm-12">
				<div id="t">
					
				</div>
			</div>
		</div>

	</div>
</div>
<script type="text/javascript" src="../../js/sunarp.js"></script>

<?php include_once '../assets/footer.php'; ?>
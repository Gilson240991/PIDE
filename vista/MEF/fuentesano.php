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
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">MEF</a>
			</li>
			<li class="breadcrumb-item active">Fuentes por Año</li>
		</ol>
		<h1>Obtener PIP</h1>
		<hr>
		<form action="">
			<div class="form-group row" style="margin-top: 10px;">
				<div class="col-sm-1">
					<label for="" class="control-label">Año</label>
				</div>
				<div class="col-sm-2">
					<input type="text" id ='ano' class="form-control" onKeyPress="return soloNum(event)">
				</div>
				<div class="col-sm-1">
					<button type="button" class="btn btn-primary" onclick="getFuentesAno()"><i class="fa fa-search"></i> Buscar</button>
				</div>
				<div id="loading">
					<img src="../../img/loading.gif" style='width: 38px;' alt="">
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
<?php include_once '../assets/footer.php'; ?>
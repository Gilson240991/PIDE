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
				<a href="#">INPE</a>
			</li>
			<li class="breadcrumb-item active">Consultar antecedentes judiciales</li>
		</ol>
		<h1>Consultar antecedentes judiciales</h1>
		<hr>
		<div>
			<form action="" class="form-horizontal">
				<div class="form-group row" style="margin-top: 10px;">
					
					<div class="col-sm-1">
						<label for="" class="control-label">Apellido Paterno</label>
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="paterno">
					</div>
					<div class="col-sm-1">
						<button type="button" class="btn btn-primary" onclick="getantecedentes()"><i class="fa fa-search"></i> Buscar</button>
					</div>
					<div id="loading">
						<img src="../../img/loading.gif" style='width: 38px;' alt="">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-1">
						<label for="" class="control-label">Apellido Materno</label>
					</div>
					<div class="col-sm-2">						<input type="text" class="form-control" id="materno">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-1">
					<label for="" class="control-label">Nombre</label>
				</div>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="nombre">
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
<script type="text/javascript" src="../../js/inpe.js"></script>
<?php include_once '../assets/footer.php'; ?>
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
				<a href="#">MIGRACIONES</a>
			</li>
			<li class="breadcrumb-item active">Consultar Carnet de Extranjería</li>
		</ol>
		<hr>
		<div>
			<form action="" class="form-horizontal">
				<input type="hidden" id="institucion" value="PCM">
				<input type="hidden" id="mac"  value="54:52:00:0A:85:FE">
				<input type="hidden" id="ip"  value="200.48.76.68">
				<input type="hidden" id="tipodocumento" value="CE">
				
				<div class="form-group row" style="margin-top: 10px;">
					<div class="col-sm-2">
						<label for="" class="control-label">Número de documento</label>
					</div>
					<div class="col-sm-2">
						<input type="text" id="documento" class="form-control">
					</div>
					<div class="col-sm-1">
						<button type="button" class="btn btn-primary" onclick="getconsultardocumento()"><i class="fa fa-search"></i> Buscar</button>
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
	<script type="text/javascript" src="../../js/migraciones.js"></script>
	<?php include_once '../assets/footer.php'; ?>
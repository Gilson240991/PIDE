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
				<a href=""><b>MINEDU</b></a>
			</li>
			<li class="breadcrumb-item active"><b><?php echo strtoupper("CONSULTA DE GRADOS Y TÍTULOS DE EGRESADOS DE INSTITUTOS TECNOLÓGICOS Y PEDAGÓGICOS"); ?></b></li>
		</ol>
		<hr>
		<form action="" class="form-horizontal">
				
				<div class="row" style="margin-top: 10px;">
					<div class="col-sm-1">
						<label for="" class="col-form-label">Nº D.N.I.</label>
					</div>
				
					<div class="col-sm-2">
						<input type="text" class="form-control" id="dni"  onKeyPress="return soloNum(event)" maxlength="8">
					</div>
					
					<div class="col-sm-2">
						<button class="btn btn-primary btn-block" type="button" onclick="getconsultaegresadotitulos()"><i class="fa fa-search"></i> Buscar</button>
					</div>
					<div class="col-sm-1">
					<div id="loading">
						<img src="../../img/loading.gif" style='width: 38px;' alt="">
					</div>
					</div>

				</div>				
				
			</form>
			<div class="form-group row" style="margin-top: 10px;">
				<div class="col-sm-12">
					<div id="t">
						
					</div>
				</div>
			</div>
	</div>
</div>
<script type="text/javascript" src="../../js/minedu.js"></script>
<?php include_once '../assets/footer.php'; ?>
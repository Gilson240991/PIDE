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
				<a href=""><b>SUNARP</b></a>
			</li>
			<li class="breadcrumb-item active"><b>CONSULTAR NAVE, AERONAVE</b></li>
		</ol>
		<hr>
		<form action="" class="form-horizontal">
			<div class="form-group row" style="margin-top: 10px;">
				<div class="col-sm-1">
					<label for="" class="col-form-label">Nº Matrícula</label>
				</div>
				<div class="col-sm-2">
					<input type="text" id ='matricula' class="form-control">
				</div>
				<div class="col-sm-1">
					<button type="button" class="btn btn-primary" onclick="buscaraeronave()"><i class="fa fa-search"></i> Buscar</button>
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
<!-- MODAL para lsitar propietarios-->
<div class="modal fade" id='folios-modal' tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Folios</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
    </div>
    <div class="modal-body">
      <table class="table table-bordered table-condensed table-hover" id="propietarios">
        <thead>
          <tr style="background-color: #414852;color: #fff;font-weight: bold;">
            <th>Item</th>
            <th>Folio</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
    </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<script type="text/javascript" src="../../js/sunarp.js"></script>

<?php include_once '../assets/footer.php'; ?>
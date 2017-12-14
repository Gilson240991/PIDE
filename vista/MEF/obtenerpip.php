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
			<li class="breadcrumb-item"><a href="#">PIP</a></li>
			<li class="breadcrumb-item active">Obetener PIP</li>
		</ol>
		<h1>Obtener PIP</h1>
		<hr>
		<form action="">
			<div class="form-group row" style="margin-top: 10px;">
				<div class="col-sm-1">
					<label for="" class="control-label">Código</label>
				</div>
				<div class="col-sm-2">
					<input type="text" id ='codigo' class="form-control" onKeyPress="return soloNum(event)">
				</div>
				<div class="col-sm-1">
					<button type="button" class="btn btn-primary" onclick="getpip()"><i class="fa fa-search"></i> Buscar</button>
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
		<!-- Large modal -->
		<div class="modal fade detallepip" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Detalle PIP</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
							<table class="table table-bordered table-sm" id="detallepip">
								<tr>
									<th>Código</th>
									<td><p id="Codigo"></p></td>
								</tr>
								<tr>
									<th>Nombre</th>
									<td><p id="Nombre"></p></td>
								</tr>
								<tr>
									<th>Fecha Registro</th>
									<td><p id="FechaRegistro"></p></td>
								</tr>
								<tr>
									<th>Tipo Cadena Función</th>
									<td><p id="TipoCadenaFunc"></p></td>
								</tr>
								<tr>
									<th>Función Código</th>
									<td><p id="FuncionCodigo"></p></td>
								</tr>
								<tr>
									<th>Programa Código</th>
									<td><p id="ProgramaCodigo"></p></td>
								</tr>
								<tr>
									<th>Subprograma Código</th>
									<td><p id="SubprogramaCodigo"></p></td>
								</tr>
								<tr>
									<th>Función</th>
									<td><p id="Funcion"></p></td>
								</tr>
								<tr>
									<th>Programa</th>
									<td><p id="Programa"></p></td>
								</tr>
								<tr>
									<th>Subprograma</th>
									<td><p id="Subprograma"></p></td>
								</tr>
								<tr>
									<th>Unidad Formuladora</th>
									<td><p id="UnidadFormuladora"></p></td>
								</tr>
								<tr>
									<th>Unidad Formuladora Código</th>
									<td><p id="UnidadFormuladoraCodigo"></p></td>
								</tr>
								<tr>
									<th>Nivel Gobierno</th>
									<td><p id="NivelGobierno"></p></td>
								</tr>
								<tr>
									<th>Sector</th>
									<td><p id="Sector"></p></td>
								</tr>
								<tr>
									<th>Sector Código</th>
									<td><p id="SectorCodigo"></p></td>
								</tr>
								<tr>
									<th>Pliego</th>
									<td><p id="Pliego"></p></td>
								</tr>
								<tr>
									<th>Pliego Código</th>
									<td><p id="PliegoCodigo"></p></td>
								</tr>
								<tr>
									<th>Evaluadora</th>
									<td><p id="Evaluadora"></p></td>
								</tr>
								<tr>
									<th>Evaluadora Código</th>
									<td><p id="EvaluadoraCodigo"></p></td>
								</tr>
								
								<tr>
									<th>Ejecutora</th>
									<td><p id="Ejecutora"></p></td>
								</tr>
								<tr>
									<th>Ejecutora Código</th>
									<td><p id="EjecutoraCodigo"></p></td>
								</tr>
								<tr>
									<th>Situación</th>
									<td><p id="Situacion"></p></td>
								</tr>
								<tr>
									<th>Ultimo Estudio</th>
									<td><p id="UltimoEstudio"></p></td>
								</tr>
								<tr>
									<th>Estado Último Estudio</th>
									<td><p id="EstadoUltimoEstudio"></p></td>
								</tr>
								<tr>
									<th>Beneficiario</th>
									<td><p id="Beneficiario"></p></td>
								</tr>
								<tr>
									<th>Conglomerado Código</th>
									<td><p id="ConglomeradoCodigo"></p></td>
								</tr>
								<tr>
									<th>Fuente Financiamiento</th>
									<td><p id="FuenteFinanciamiento"></p></td>
								</tr>
								<tr>
									<th>Monto Alternativa</th>
									<td><p id="MontoAlternativa"></p></td>
								</tr>
								<tr>
									<th>Monto Reformulado</th>
									<td><p id="MontoReformulado"></p></td>
								</tr>
								<tr>
									<th>MontoF15</th>
									<td><p id="MontoF15"></p></td>
								</tr>
								<tr>
									<th>MontoF16</th>
									<td><p id="MontoF16"></p></td>
								</tr>
								<tr>
									<th>Flag Expediente Técnico</th>
									<td><p id="FlagExpedienteTecnico"></p></td>
								</tr>

								<tr>
									<th>Año Viabilidad</th>
									<td><p id="AñoViabilidad"></p></td>
								</tr>

								<tr>
									<th>Fecha Viabilidad</th>
									<td><p id="FechaViabilidad"></p></td>
								</tr>
							</table>
				
				
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once '../assets/footer.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../../css/bootstrap.css">
		<link rel="stylesheet" href="../../css/estilos.css">
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="../../js/estilos.js"></script>
		<script src="../../js/admin/usuario.js"></script>
		<title>	</title>
	</head>
	<body>
		<div class="contenedor-general">
			<div class="shadow">
				<div class="col-sm-5"></div>
				<div class="col-sm-2" style="margin-top: 250px;">
					<img src="../../img/load.gif" alt="" width="100%;">
				</div>
			</div>
			<div class="container">
				<div class="col-sm-4"></div>
				<div class="col-sm-4 top">
					<div class="panel panel-default">
						<div class="panel-heading">
							Municipalidad Metropolitana de Lima
						</div>
						<div class="panel-body">
							<div class="alert alert-danger alert-dismissable" style="display: none;">
								<button href="#" type="button" class="close" data-dismiss="alert" aria-label="close">x</button>
								<strong>Error! </strong><span id="eror"></span>
							</div>
							<div class="form">
								<div class="form-group">
									<input type="text" id='usuario' placeholder="usuario" name="un" class="form-control" />
								</div>
								<div class="form-group">
									<input type="password" id='pass' placeholder="password" name="pw" class="form-control" />
								</div>
								<button class="btn btn-primary" onclick="validarAccesoSisacse()"> INGRESAR </button>
								<!--div class="text-center">
									<a href="#"> <p>¿Has olvidado tu contraseña? </p></a>
								</div-->
								
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		
		
		
	</body>
</html>
<?php   
session_start();
include_once '../../modelo/sisacse_model.php';
$sisacse = new sisacse_model();
if(isset($_SESSION['key'])){
    $key = $_SESSION['key'];
}else{
    header('Location:../Login/');
}

                
     
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistema de Interoperabilidad de Servicios</title>
  <!-- Bootstrap core CSS-->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">




  <!-- Custom fonts for this template-->
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../css/_styles.css" media="screen">
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<?php   

      $grupo=$sisacse->RolesUsuario($key);

      $datos = $sisacse->DatosUsuario($key);

      $informacion = $datos['Nombre']." ".$datos['Paterno']." ".$datos['Materno'];
     

 ?>
  <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><img src="../../img/muni.png" alt=""></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <form id="tree-seleccionar">
       <div id="content" class="general-style1">
    <?php  
    $datos2 = $sisacse->listarmenuporUsuarios($key);
    $sisacse->createTreeView($datos2,0); ?>


      </div>

    </form>


      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
       
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i><?php   echo $informacion ?></a>
        </li>
      </ul>
    </div>
  </nav>

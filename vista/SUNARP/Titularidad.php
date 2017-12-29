<?php include_once '../assets/nav-lateral.php'; ?>
<style>
  #form-juridico{
    display: none;
  }
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
    
    <div class="row">
      <div class="col-sm-8">
        <ol class="breadcrumb">
      <li class="breadcrumb-item">
<a href="#"><b>SUNARP</b></a>
      </li>
      <li class="breadcrumb-item active"><b>CONSULTAR TITULARIDAD</b></li>
    </ol>
      </div>
      <div class="col-sm-4">
        <?php include 'horario_atencion.php' ?>
      </div>
    </div>
    <hr>
    <form action="" class="form-horizontal">
      <div class="form-group row" style="margin-top: 10px;">
        <div class="col-sm-1">
          <label for="" class="col-form-label">Tipo de participante</label>
        </div>
        <div class="col-sm-2">
          <select name="" class="form-control" id="condicion" onChange="cambiardeformulario()">
            <option value="">- Seleccionar -</option>
            <option value="N">Natural</option>
            <option value="J">Jurídico</option>
          </select>
        </div>
        <div class="col-sm-2">
          <button class="btn btn-primary" type="button" data-condicion='' id='buscartitularidad' onclick="titularidad()"><i class="fa fa-search"></i> Buscar</button>
        </div>
          <div class="col-sm-1">

          <div id="loading">
          <img src="../../img/loading.gif" style='width: 38px;' alt="">
        </div>
        </div>
      </div>
      <div id="form-natural">
        <div class="form-group row">
          <div class="col-sm-1">
            <label for="" class="col-form-label">Apellido Paterno</label>
          </div>
          <div class="col-sm-2">
            <input type="text"  id='paterno' class="form-control" >
          </div>
       
          <div class="col-sm-1">
            <label for="" class="col-form-label">Apellido Materno</label>
          </div>
          <div class="col-sm-2">
            <input type="text" id='materno' class="form-control" >
          </div>
        
          <div class="col-sm-1">
            <label for="" class="col-form-label">Nombres</label>
          </div>
          <div class="col-sm-2">
            <input type="text" id='nombres' class="form-control" >
          </div>
        </div>
      </div>
      <div id="form-juridico">
        <div class="form-group row">
          <div class="col-sm-1">
            <label for="" class="col-form-label">Razón Social</label>
          </div>
          <div class="col-sm-3">
            <input type="text" id='razon' class="form-control">
          </div>
        </div>
      </div>
      
    </form>
    <div class="form-group row">
      <div class="col-sm-12">
        <div id="titularidad">
      
        </div>
      </div>
      
    </div>

      <div class="form-group row">
      <div class="col-sm-12">
        <div id="titularidad-juridico">
      
        </div>
      </div>
      
    </div>
  
  </div>
</div>
<script type="text/javascript" src="../../js/sunarp.js"></script>
<?php include_once '../assets/footer.php'; ?>
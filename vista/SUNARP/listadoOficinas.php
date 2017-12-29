<?php include_once '../assets/nav-lateral.php'; ?>
<style>
  
  #loading{
    display: none;
  }

</style>
<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
            <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#"><b>SUNARP</b></a>
      </li>
      <li class="breadcrumb-item active"><b>LISTA DE OFICINAS</b></li>
    </ol>
      </div>
      <div class="col-sm-4">
        <?php include 'horario_atencion.php' ?>
      </div>
    </div>

    <hr>
    <div class="form-group row">
      <div class="col-sm-2">
      <button type="button" class="btn btn-primary" onclick="listarOficinas()">Listar oficinas</button>

      </div>
      <div class="col-sm-1">
        <div id="loading">
          <img src="../../img/loading.gif" style='width: 38px;' alt="">
        </div>
      </div>
      </div>

    <div class="form-group row" style='margin-top: 10px'>
      <div class="col-sm-5">
        <div id="oficinas">
      
        </div>
      </div>
      
    </div>

  </div>
</div>
<script type="text/javascript" src="../../js/sunarp.js"></script>
<?php include_once '../assets/footer.php'; ?>
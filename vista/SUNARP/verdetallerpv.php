<?php include_once '../assets/nav-lateral.php'; ?>
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
        <a href="#"><b>SUNARP</b></a>
      </li>
      <li class="breadcrumb-item active"><b>CONSULTAR RPV</b></li>
    </ol>
    <hr>
    <form action="" class="form-horizontal">
      <div class="form-group row" style="margin-top: 10px;">
        <div class="col-sm-1">
          <label for="" class="col-form-label">Oficina</label>
        </div>
        <div class="col-sm-2">
          <select name="" id="oficina" class="form-control">
            <option value="">-Seleccionar-</option>
            <option data-zona='01' value="01">LIMA</option>
            <option data-zona='01' value="02">CALLAO</option>
            <option data-zona='01' value="03">HUARAL</option>
            <option data-zona='01' value="04">HUACHO</option>
            <option data-zona='01' value="05">CAÑETE</option>
            <option data-zona='01' value="06">BARRANCA</option>
            <option data-zona='02' value="01">HUANCAYO</option>
            <option data-zona='02' value="02">HUANUCO</option>
            <option data-zona='02' value="04">PASCO</option>
            <option data-zona='02' value="05">SATIPO</option>
            <option data-zona='02' value="06">LA MERCED</option>
            <option data-zona='02' value="07">TARMA</option>
            <option data-zona='02' value="08">TINGO MARIA</option>
            <option data-zona='02' value="09">HUANCAVELICA</option>
            <option data-zona='03' value="01">AREQUIPA</option>
            <option data-zona='03' value="02">CAMANA</option>
            <option data-zona='03' value="03">CASTILLA - APLAO</option>
            <option data-zona='03' value="04">ISLAY - MOLLENDO</option>
            <option data-zona='04' value="01">HUARAZ</option>
            <option data-zona='04' value="02">CASMA</option>
            <option data-zona='04' value="03">CHIMBOTE</option>
            <option data-zona='05' value="01">PIURA</option>
            <option data-zona='05' value="02">SULLANA</option>
            <option data-zona='05' value="03">TUMBES</option>
            <option data-zona='06' value="01">CUSCO</option>
            <option data-zona='06' value="02">ABANCAY</option>
            <option data-zona='06' value="03">MADRE DE DIOS</option>
            <option data-zona='06' value="04">QUILLABAMBA</option>
            <option data-zona='06' value="05">SICUANI</option>
            <option data-zona='06' value="06">ESPINAR</option>
            <option data-zona='06' value="07">ANDAHUAYLAS</option>
            <option data-zona='07' value="01">TACNA</option>
            <option data-zona='07' value="02">ILO</option>
            <option data-zona='07' value="03">JULIACA</option>
            <option data-zona='07' value="04">MOQUEGUA</option>
            <option data-zona='07' value="05">PUNO</option>
            <option data-zona='08' value="01">TRUJILLO</option>
            <option data-zona='08' value="02">CHEPEN</option>
            <option data-zona='08' value="03">HUAMACHUCO</option>
            <option data-zona='08' value="04">OTUZCO</option>
            <option data-zona='08' value="05">SAN PEDRO</option>
            <option data-zona='09' value="01">MAYNAS</option>
            <option data-zona='10' value="01">ICA</option>
            <option data-zona='10' value="02">CHINCHA</option>
            <option data-zona='10' value="03">PISCO</option>
            <option data-zona='10' value="04">NAZCA</option>
            <option data-zona='11' value="01">CHICLAYO</option>
            <option data-zona='11' value="02">CAJAMARCA</option>
            <option data-zona='11' value="03">JAEN</option>
            <option data-zona='11' value="04">BAGUA</option>
            <option data-zona='11' value="05">CHACHAPOYAS</option>
            <option data-zona='11' value="06">CHOTA</option>
            <option data-zona='12' value="01">MOYOBAMBA</option>
            <option data-zona='12' value="02">TARAPOTO</option>
            <option data-zona='12' value="03">JUANJUI</option>
            <option data-zona='12' value="04">YURIMAGUAS</option>
            <option data-zona='13' value="01">PUCALLPA</option>
            <option data-zona='14' value="01">AYACUCHO</option>
            <option data-zona='14' value="02">HUANTA</option>
          </select>
        </div>
        <div class="col-sm-2">
          <button type="button" class="btn btn-primary" onclick="getDetalleRPV()"><i class="fa fa-search"></i> Buscar</button>
        </div>
        <div id="loading">
          <img src="../../img/loading.gif" style='width: 38px;' alt="">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-1">
          <label for="" class="col-form-label">Nº de Placa</label>
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="placa">
        </div>
      </div>
      
    </form>

    <div class="form-group row" style='margin-top: 10px'>
      <div class="col-sm-12">
        <div id="rpv">
          
        </div>
      </div>
    </div>

    
  </div>
</div>
<!-- MODAL para lsitar propietarios-->
<div class="modal fade" id='propietarios-modal' tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Propietarios</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
    </div>
    <div class="modal-body">
      <table class="table table-bordered table-condensed table-hover" id="propietarios">
        <thead>
          <tr style="background-color: #414852;color: #fff;font-weight: bold;">
            <th>Item</th>
            <th>Nombre</th>
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
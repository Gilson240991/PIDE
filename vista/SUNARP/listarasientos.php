<?php include_once '../assets/nav-lateral.php';
include_once '../../modelo/sunarp_model.php';
$o = new sunarp_model();
$oficinas = $o->listarOficinas();


 ?>
<link rel="stylesheet" href="../../css/jquery.treetable.css">
<link rel="stylesheet" href="../../css/jquery.treetable.theme.default.css">
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
        <a href="#"><b>SUNARP</b></a>
      </li>
      <li class="breadcrumb-item active"><b>CONSULTAR ASIENTOS</b></li>
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
            <?php  

              unset($oficinas[0]);
            foreach($oficinas as $key=>$oficinas):
               
             ?>
              <option data-zona="<?php echo $oficinas['codZona'] ?>" value="<?php echo $oficinas['codOficina'] ?>"><?php  echo $oficinas['descripcion'] ?></option>
           
            <?php  endforeach; ?>
          </select>
        </div>
          <div class="col-sm-1">
          <label for="" class="col-form-label">Partida</label>
        </div>
        <div class="col-sm-2">
          <input type="text" id='partida' class="form-control" onKeyPress="return soloNum(event)">
        </div>
          <div class="col-sm-1">
          <label for="" class="col-form-label">Registro</label>
        </div>
        <div class="col-sm-2">
          <input type="text" id='registro' class="form-control" onKeyPress="return soloNum(event)">
        </div>

        <div class="col-sm-2">
          <button class="btn btn-primary" type='button' onclick="listarAsientos();"><i class="fa fa-search"></i> Buscar</button>
        </div>
        <div class="col-sm-1">
          <div id="loading">
          <img src="../../img/loading.gif" style='width: 38px;' alt="">
        </div>
        </div>
      </div>
    
    </form>
    <div class="form-group row">
      <div class="col-sm-12">
        <div id="asientos-master">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- asientos-->
<div class="modal fade" id='asientos-modal' tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Asientos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body container">
        <div id="asientos-tabla">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
      </div>
      </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      
      <!-- fichas-->
      
      <div class="modal fade" id='fichas-modal' tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Fichas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <div id="fichas-tabla">
                
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
            </div>
            </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!--folios-->
            
            <div class="modal fade" id='folios-modal' tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Folios</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                  </div>
                  <div class="modal-body">
                    <div id="folios-tabla">
                      
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                  </div>
                  </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
                  <script type="text/javascript" src="../../js/sunarp.js"></script>

                  <?php include_once '../assets/footer.php'; ?>
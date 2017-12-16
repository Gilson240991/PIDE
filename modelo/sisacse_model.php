<?php
//session_start();
Class sisacse_model{
		
	public function ValidarAcceso($credenciales){
			$servicio="http://172.20.4.18/WACSE/mmlService.svc?wsdl";
			$client = new SoapClient($servicio);

			$result = $client->ValidarAcceso($credenciales);
			$resultado = $result->ValidarAccesoResult;
			return $resultado;
		
	}
	public function DatosUsuario($key){
			$servicio="http://172.20.4.18/WACSE/mmlService.svc?wsdl";
			$client = new SoapClient($servicio);
			$codigo['codigo']=$key;
			$result = $client->DatosUsuario($codigo);
			
			$datos['id']=$result->DatosUsuarioResult->USUCOD;	
			$datos['Nombre']=$result->DatosUsuarioResult->USUNOM;
			$datos['Paterno']=$result->DatosUsuarioResult->USUAPEPAT;
			$datos['Materno']=$result->DatosUsuarioResult->USUAPEMAT;
			$datos['Dni']=$result->DatosUsuarioResult->USUDNI;


			return $datos;
	}

	public function RolesUsuario($key){
		    $servicio="http://172.20.4.18/WACSE/mmlService.svc?wsdl";
			$client = new SoapClient($servicio);
			$codigo['codigo']=$key;
			$result = $client->RolesUsuario($codigo);
			return $result->RolesUsuarioResult->Rol->ROLNOM;
	}

		public function listarmenuporUsuarios($key){
			$servicio="http://172.20.4.18/WACSE/mmlService.svc?wsdl";
			$client = new SoapClient($servicio);
			$codigo['codigo']=$key;
			$result = $client->OpcionesMenu($codigo);
			$i= 0;
			
			foreach ($result->OpcionesMenuResult->Menu as $row) {
				$arrayCategories[$row->MENCOD] = array("id"=>$row->MENCOD,"MENPADCOD" => $row->MENPADCOD, "MENNOM" =>$row->MENNOM,"MENRUT"=>$row->MENRUT,"MENPADFLG"=>$row->MENPADFLG,"MENSIG"=>$row->MENSIG);
				$i++;
			}

			return $arrayCategories;
	}

    public function createTreeView($array, $currentParent, $currLevel = 0, $prevLevel = -1) {
        $o = new sisacse_model();
        $cont2 =1;
        foreach ($array as $categoryId => $category) {

       

            if ($currentParent == $category['MENPADCOD']) {
            	if($category['MENPADCOD']==0){
            		if($category['MENPADFLG']==1){
						if ($currLevel > $prevLevel) {

                    echo "<ul class='tree navbar-nav navbar-sidenav' id='exampleAccordion'>";
                
               		 }
					}
            	}else{
    				
			if ($currLevel > $prevLevel) {
if($category['MENPADFLG']==1){
 echo '<ul class="sidenav-second-level collapse" id="'.$category['MENPADCOD'].'">';
}else{
	 echo '<ul class="sidenav-third-level collapse" id="'.$category['MENPADCOD'].'">';
}

                   
                    
						                
                }
            	}
                

                if ($currLevel == $prevLevel) {
                    echo "</li>";
                }

               
                	if($category['MENPADFLG']==1){
                		if($category['MENPADCOD']==0){
                			 echo '<li  class="nav-item" data-toggle="tooltip" data-placement="right" title="'.strtoupper(utf8_decode($category['MENNOM'])).'"><a  class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#'.$categoryId.'" data-parent="#exampleAccordion"><i class="fa fa-folder" aria-hidden="true"></i> <span class="nav-link-text">'.strtoupper(utf8_decode($category['MENNOM'])).'</span></a>';
                		}else{
                			echo '<li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#'.$categoryId.'" ><i class="fa fa-folder" aria-hidden="true"></i> '.strtoupper(utf8_decode($category['MENNOM'])).'</a>';
                			
                		}


                	
                
                }else{
                	
                			echo '<li><a href="'.$category['MENRUT'].'">'.$category['MENNOM'].'</a></li>';
                		
                	
                }

               

                if ($currLevel > $prevLevel) {
                    $prevLevel = $currLevel;
                }

                $currLevel++;

                $o->createTreeView($array, $categoryId, $currLevel, $prevLevel);

                $currLevel--;
            }

        }

        if ($currLevel == $prevLevel)
            echo " </li></ul> ";
    }


    

}
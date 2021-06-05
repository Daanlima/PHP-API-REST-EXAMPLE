<?php
include '../../control/CarroControl.php';
 
// $data = file_get_contents('php://input');
// $obj =  json_decode($data);

    

if(!empty($_REQUEST['placacarro']) && !empty($_REQUEST['marcacarro']) && !empty($_REQUEST['modelocarro']) && !empty($_REQUEST['anocarro']) && !empty($_REQUEST['quilometragem']) && !empty($_REQUEST['usuario_id'])){

    $placacarro = $_REQUEST['placacarro'];
    $marcacarro = $_REQUEST['marcacarro'];
    $modelocarro = $_REQUEST['modelocarro'];
    $anocarro = $_REQUEST['anocarro'];
    $quilometragem = $_REQUEST['quilometragem'];
    $usuario_id = $_REQUEST['usuario_id'];

    $obj = new Carro();
    $obj->setAll($placacarro, $marcacarro, $modelocarro, $anocarro, $quilometragem, $usuario_id);

    $obj = $obj->insert($obj);

    header('Location:listar.php');

}


/*if(!empty($data)){	
$usuario = new UsuarioControl();
$usuario->insert($obj);
header('Location:listar.php');
}*/





?>
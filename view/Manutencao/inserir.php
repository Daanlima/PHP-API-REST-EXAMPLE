<?php
include '../../control/ManutencaoControl.php';
 
// $data = file_get_contents('php://input');
// $obj =  json_decode($data);

    

 if(!empty($_REQUEST['ulttrocapneu']) && !empty($_REQUEST['ulttrocaoleo']) && !empty($_REQUEST['ultrevisao']) && !empty($_REQUEST['ultcalibragem']) && !empty($_REQUEST['carro_id'])){

    $ulttrocapneu = $_REQUEST['ulttrocapneu'];
    $ulttrocaoleo = $_REQUEST['ulttrocaoleo'];
    $ultrevisao = $_REQUEST['ultrevisao'];
    $ultcalibragem = $_REQUEST['ultcalibragem'];
    $carro_id = $_REQUEST['carro_id'];

    $obj = new Manutencao();
    $obj->setAll($ulttrocapneu, $ulttrocaoleo, $ultrevisao, $ultcalibragem, $carro_id);

    $obj = $obj->insert($obj);

    header('Location:listar.php');

}


/*if(!empty($data)){	
$usuario = new UsuarioControl();
$usuario->insert($obj);
header('Location:listar.php');
}*/





?>
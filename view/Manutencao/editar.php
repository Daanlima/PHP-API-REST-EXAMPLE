<?php
include '../../control/ManutencaoControl.php';
 
//$data = file_get_contents('php://input');
//$obj =  json_decode($data);
//echo $obj->titulo;

//$id = $obj->id;

if(!empty($_REQUEST['idmanutencao']) && !empty($_REQUEST['ulttrocapneu']) && !empty($_REQUEST['ulttrocaoleo']) && !empty($_REQUEST['ultrevisao']) && !empty($_REQUEST['ultcalibragem']) && !empty($_REQUEST['carro_id'])){

    $id = $_REQUEST['idmanutencao'];
    $ulttrocapneu = $_REQUEST['ulttrocapneu'];
    $ulttrocaoleo = $_REQUEST['ulttrocaoleo'];
    $ultrevisao = $_REQUEST['ultrevisao'];
    $ultcalibragem = $_REQUEST['ultcalibragem'];
    $carro_id = $_REQUEST['carro_id'];

    $obj = new Manutencao();
    $obj->setAll($ulttrocapneu, $ulttrocaoleo, $ultrevisao, $ultcalibragem, $carro_id);

    $obj = $obj->update($obj, $id);

    header('Location:listar.php');

}


/*if(!empty($data)){	
 $parceiro = new CarroControl();
 $parceiro->update($obj , $id);
 header('Location:listar.php');
}*/







?>
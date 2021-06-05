<?php
include '../../control/ServicoControl.php';
 
//$data = file_get_contents('php://input');
//$obj =  json_decode($data);

//$id = $obj->id;

if(!empty($_REQUEST['idservico'])){

	$id = $_REQUEST['idservico'];

    if(!empty($id)){	

    $servico = new ServicoControl();
    $servico->delete($id);
    header('Location:listar.php');

    }
}







?>
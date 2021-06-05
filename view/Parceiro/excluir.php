<?php
include '../../control/ParceiroControl.php';
 
//$data = file_get_contents('php://input');
//$obj =  json_decode($data);

//$id = $obj->id;

if(!empty($_REQUEST['idparceiro'])){

	$id = $_REQUEST['idparceiro'];

    if(!empty($id)){	

    $parceiro = new ParceiroControl();
    $parceiro->delete($id);
    header('Location:listar.php');

    }
}







?>
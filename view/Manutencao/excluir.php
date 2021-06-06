<?php
include '../../control/ManutencaoControl.php';
 
//$data = file_get_contents('php://input');
//$obj =  json_decode($data);
//echo $obj->titulo;


//$id = $obj->id;

if(!empty($_REQUEST['idmanutencao'])){

	$id = $_REQUEST['idmanutencao'];

    if(!empty($id)){	

    $manutencao = new ManutencaoControl();
    $manutencao->delete($id);
    header('Location:listar.php');

    }
}








?>
<?php
include '../../control/CarroControl.php';
 
//$data = file_get_contents('php://input');
//$obj =  json_decode($data);
//echo $obj->titulo;


//$id = $obj->id;

if(!empty($_REQUEST['idcarro'])){

	$id = $_REQUEST['idcarro'];

    if(!empty($id)){	

    $usuario = new CarroControl();
    $usuario->delete($id);
    header('Location:listar.php');

    }
}








?>
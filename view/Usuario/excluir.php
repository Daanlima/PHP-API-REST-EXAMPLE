<?php
include '../../control/UsuarioControl.php';
 
//$data = file_get_contents('php://input');
//$obj =  json_decode($data);

//$id = $obj->id;

if(!empty($_REQUEST['id'])){

	$id = $_REQUEST['id'];

    if(!empty($id)){	

    $usuario = new UsuarioControl();
    $usuario->delete($id);
    header('Location:listar.php');

    }
}








?>
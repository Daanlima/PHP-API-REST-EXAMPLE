<?php
include '../../control/UsuarioControl.php';

header('Content-Type: application/json');

$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

if(!empty($data)){	
	$usuario = new UsuarioControl();
	$usuario->find($obj,$id);

}

/*
$search = $usuario->find($id);
echo json_encode($search);
*/

?>
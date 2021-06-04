<?php
include '../../control/UsuarioControl.php';
$usuario = new UsuarioControl();

header('Content-Type: application/json');

$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

var_dump($id);
var_dump($obj);

foreach($usuario->find($obj,$id) as $valor){
	echo json_encode($valor);
}

/*
$search = $usuario->find($id);
echo json_encode($search);
*/

?>
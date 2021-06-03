<?php
include '../../control/UsuarioControl.php';
$usuario = new UsuarioControl();

header('Content-Type: application/json');

foreach($usuario->findAll() as $valor){
	echo json_encode($valor);
}


?>
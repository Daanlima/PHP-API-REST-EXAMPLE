<?php
include '../../control/UsuarioControl.php';
$usuario = new UsuarioControl();

header('Content-Type: application/json');


if(!empty($id)){	
	$search = $usuario->find($id);
	echo json_encode($search);
}
?>
<?php
include '../../control/UsuarioControl.php';
$usuario = new UsuarioControl();

if(!empty($_REQUEST['id'])){

	$id = $_REQUEST['id'];

	header('Content-Type: application/json');

	if(!empty($id)){	
		$search = $usuario->find($id);
		echo json_encode($search);
	}

}

?>
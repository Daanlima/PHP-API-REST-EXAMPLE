<?php
include '../../control/UsuarioControl.php';
$usuario = new UsuarioControl();

if(!empty($_REQUEST['email'])){

	$email = $_REQUEST['email'];

	header('Content-Type: application/json');

	if(!empty($findbyemail)){	
		$findbyemail = $usuario->find($email);
		echo json_encode($findbyemail);
	}

}

?>
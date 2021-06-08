<?php
include '../../control/UsuarioControl.php';
$usuario = new UsuarioControl();

if(!empty($_REQUEST['email'])){

	$email = $_REQUEST['email'];

	header('Content-Type: application/json');

	if(!empty($email)){	
		$findbyemail = $usuario->findByEmail($email);
		echo json_encode($findbyemail);
	}

}

?>
<?php
include '../../control/ParceiroControl.php';
$parceiro = new ParceiroControl();

if(!empty($_REQUEST['idparceiro'])){

	$id = $_REQUEST['idparceiro'];

	header('Content-Type: application/json');

	if(!empty($id)){	
		$search = $parceiro->find($id);
		echo json_encode($search);
	}

}

?>
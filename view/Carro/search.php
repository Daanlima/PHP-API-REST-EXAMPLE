<?php
include '../../control/CarroControl.php';
$carro = new CarroControl();

if(!empty($_REQUEST['idcarro'])){

	$id = $_REQUEST['idcarro'];

	header('Content-Type: application/json');

	if(!empty($id)){	
		$search = $carro->find($id);
		echo json_encode($search);
	}

}

?>
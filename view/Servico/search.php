<?php
include '../../control/ServicoControl.php';
$servico = new ServicoControl();

if(!empty($_REQUEST['idservico'])){

	$id = $_REQUEST['idservico'];

	header('Content-Type: application/json');

	if(!empty($id)){	
		$search = $servico->find($id);
		echo json_encode($search);
	}

}

?>
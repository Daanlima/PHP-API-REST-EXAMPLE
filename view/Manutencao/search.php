<?php
include '../../control/ManutencaoControl.php';
$manutencao = new ManutencaoControl();

if(!empty($_REQUEST['idmanutencao'])){

	$id = $_REQUEST['idmanutencao'];

	header('Content-Type: application/json');

	if(!empty($id)){	
		$search = $manutencao->find($id);
		echo json_encode($search);
	}

}

?>
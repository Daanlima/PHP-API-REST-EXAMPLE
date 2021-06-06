<?php
include '../../control/ManutencaoControl.php';
$manutencao = new ManutencaoControl();

header('Content-Type: application/json');

foreach($manutencao->findAll() as $valor){
	echo json_encode($valor);
}


?>
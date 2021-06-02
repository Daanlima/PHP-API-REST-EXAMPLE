<?php
include '../../control/ParceiroControl.php';
$parceiro = new ParceiroControl();

header('Content-Type: application/json');

foreach($parceiro->findAll() as $valor){
	echo json_encode($valor);
}


?>
<?php
include '../../control/CarroControl.php';
$parceiro = new CarroControl();

header('Content-Type: application/json');

foreach($parceiro->findAll() as $valor){
	echo json_encode($valor);
}


?>
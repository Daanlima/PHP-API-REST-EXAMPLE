<?php
include '../../control/ServicoControl.php';
$servico = new ServicoControl();

header('Content-Type: application/json');

foreach($servico->findAll() as $valor){
	echo json_encode($valor);
}

?>
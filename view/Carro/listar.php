<?php
include '../../control/CarroControl.php';
$conteudoControl = new ConteudoControl();

header('Content-Type: application/json');

foreach($conteudoControl->findAll() as $valor){
	echo json_encode($valor);
}


?>
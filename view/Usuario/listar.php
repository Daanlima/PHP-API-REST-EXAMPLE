<?php
include '../../control/UsuarioControl.php';
$conteudoControl = new ConteudoControl();

header('Content-Type: application/json');

foreach($conteudoControl->findAll() as $valor){
	echo json_encode($valor);
}


?>
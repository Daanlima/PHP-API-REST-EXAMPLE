<?php
include '../../control/UsuarioControl.php';
$usuario = new UsuarioControl();

header('Content-Type: application/json');

/*foreach($usuario->findAll() as $valor){
	echo json_encode($valor);
}*/

json_decode('{idCarro":"1","PlacaCarro":"ABC-1234","MarcaCarro":"Fiat","ModeloCarro":"Ford Ka","AnoCarro":"2018","Quilometragem":"14000","usuario_id":"1}');

?>
<?php
include '../../control/UsuarioControl.php';
$usuario = new UsuarioControl();

header('Content-Type: application/json');

/*foreach($usuario->find($id) as $valor){
	echo json_encode($valor);
}*/

$search = $usuario->find($id);
echo json_encode($search);



?>
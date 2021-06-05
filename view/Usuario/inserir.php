<?php
include '../../control/UsuarioControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);



if(!empty($data)){	
 $usuario = new UsuarioControl();
 $usuario->insert($obj);
 header('Location:listar.php');
}







?>
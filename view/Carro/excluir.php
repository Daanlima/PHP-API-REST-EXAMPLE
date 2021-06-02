<?php
include '../../control/CarroControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;


if(!empty($data)){	
 $parceiro = new CarroControl();
 $parceiro->delete($obj,$id);
 header('Location:listar.php');
}







?>
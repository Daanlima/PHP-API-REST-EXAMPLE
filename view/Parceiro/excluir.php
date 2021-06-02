<?php
include '../../control/ParceiroControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;


if(!empty($data)){	
 $parceiro = new ParceiroControl();
 $parceiro->delete($obj,$id);
 header('Location:listar.php');
}







?>
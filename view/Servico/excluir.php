<?php
include '../../control/ServicoControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;


if(!empty($data)){	
 $servico = new ServicoControl();
 $servico->delete($obj,$id);
 header('Location:listar.php');
}







?>
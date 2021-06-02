<?php
include '../../control/ParceiroControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;



if(!empty($data)){	
 $parceiro = new ParceiroControl();
 $parceiro->insert($obj);
 header('Location:listar.php');
}







?>
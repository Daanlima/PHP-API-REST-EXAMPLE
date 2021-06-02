<?php
include '../../control/ServicoControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;



if(!empty($data)){	
 $servico = new ServicoControl();
 $servico->insert($obj);
 header('Location:listar.php');
}





?>
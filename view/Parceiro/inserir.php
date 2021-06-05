<?php
include '../../control/ParceiroControl.php';
 
// $data = file_get_contents('php://input');
// $obj =  json_decode($data);


if(!empty($_REQUEST['idparceiro']) && !empty($_REQUEST['nome']) && !empty($_REQUEST['cnpj']) && !empty($_REQUEST['cep'])){

    $id = $_REQUEST['idparceiro'];
    $nome = $_REQUEST['nome'];
    $cnpj = $_REQUEST['cnpj'];
    $cep = $_REQUEST['cep'];

    $obj = new Parceiro();
    $obj->setAll($nome, $cnpj, $cep);

    $obj = $obj->insert($obj);

    header('Location:listar.php');

}


/*if(!empty($data)){	
 $parceiro = new ParceiroControl();
 $parceiro->insert($obj);
 header('Location:listar.php');
}*/


?>
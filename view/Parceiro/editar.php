<?php
include '../../control/ParceiroControl.php';
 
//$data = file_get_contents('php://input');
//$obj =  json_decode($data);

//$id = $obj->id;


if(!empty($_REQUEST['idparceiro']) && !empty($_REQUEST['nome']) && !empty($_REQUEST['cnpj']) && !empty($_REQUEST['cep'])){

    $id = $_REQUEST['idparceiro'];
    $nome = $_REQUEST['nome'];
    $cnpj = $_REQUEST['cnpj'];
    $cep = $_REQUEST['cep'];

    $obj = new Parceiro();
    $obj->setAll($nome, $cnpj, $cep);

    $obj = $obj->update($obj, $id);

    header('Location:listar.php');

}


/*if(!empty($data)){	
 $usuario = new UsuarioControl();
 $usuario->update($obj , $id);
 header('Location:listar.php');
}*/



?>
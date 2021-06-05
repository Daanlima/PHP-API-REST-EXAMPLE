<?php
include '../../control/ServicoControl.php';
 
//$data = file_get_contents('php://input');
//$obj =  json_decode($data);

//$id = $obj->id;


if(!empty($_REQUEST['idservico']) && !empty($_REQUEST['nomeservico']) && !empty($_REQUEST['valor']) && !empty($_REQUEST['parceiro_id'])){

    $idservico = $_REQUEST['idservico'];
    $nomeservico = $_REQUEST['nomeservico'];
    $valor = $_REQUEST['valor'];
    $parceiro_id = $_REQUEST['parceiro_id'];

    $obj = new Servico();
    $obj->setAll($nomeservico, $valor, $parceiro_id);

    $obj = $obj->update($obj, $id);

    header('Location:listar.php');

}



/*if(!empty($data)){	
 $usuario = new UsuarioControl();
 $usuario->update($obj , $id);
 header('Location:listar.php');
}*/





?>
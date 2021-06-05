<?php
include '../../control/UsuarioControl.php';
 
//$data = file_get_contents('php://input');
//$obj =  json_decode($data);

//$id = $obj->id;

if(!empty($_REQUEST['id']) && !empty($_REQUEST['nome']) && !empty($_REQUEST['email']) && !empty($_REQUEST['xp']) && !empty($_REQUEST['cep'])){

    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $xp = $_REQUEST['xp'];
    $cep = $_REQUEST['cep'];

    $obj = new Usuario();
    $obj->setAll($nome, $email, $xp, $cep);

    $obj = $obj->update($obj, $id);

    header('Location:listar.php');

}

echo "erro, algo vazio"


/*if(!empty($data)){	
 $usuario = new UsuarioControl();
 $usuario->update($obj , $id);
 header('Location:listar.php');
}*/









?>
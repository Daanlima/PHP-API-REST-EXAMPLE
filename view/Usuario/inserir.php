<?php
include '../../control/UsuarioControl.php';
 
// $data = file_get_contents('php://input');
// $obj =  json_decode($data);

    

    if(!empty($_REQUEST['nome']) && !empty($_REQUEST['email']) && !empty($_REQUEST['xp']) && !empty($_REQUEST['cep'])){

        $nome = $_REQUEST['nome'];
        $email = $_REQUEST['email'];
        $xp = $_REQUEST['xp'];
        $cep = $_REQUEST['cep'];

        $obj = new Usuario();
        $obj->setAll($nome, $email, $xp, $cep);

        $obj = $obj->insert($obj);

        header('Location:listar.php');

}




if(!empty($data)){	
 $usuario = new UsuarioControl();
 $usuario->insert($obj);
 header('Location:listar.php');
}







?>
<?php
include '../../model/Usuario.php';

class UsuarioControl{
	function insert($obj){
		$usuario = new Usuario();
		return $usuario->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$usuario = new Usuario();
		return $usuario->update($obj,$id);
	}

	function delete($id){
		$usuario = new Usuario();
		return $usuario->delete($id);
	}

	function find($id){
		$usuario = new Usuario();
		return $usuario->find($id);
	}

	function findByEmail($email){
		$usuario = new Usuario();
		return $usuario->findByEmail($email);
	}

	function findAll(){
		$usuario = new Usuario();
		return $usuario->findAll();
	}
}

?>
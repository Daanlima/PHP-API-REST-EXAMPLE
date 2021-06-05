<?php
include '../../model/Parceiro.php';

class ParceiroControl{
	function insert($obj){
		$parceiro = new Parceiro();
		//echo $obj->titulo;
		return $parceiro->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$parceiro = new Parceiro();
		return $parceiro->update($obj,$id);
	}

	function delete($id){
		$parceiro = new Parceiro();
		return $parceiro->delete($id);
	}

	function find($id){
		$parceiro = new Parceiro();
		return $parceiro->find($id);
	}

	function findAll(){
		$parceiro = new Parceiro();
		return $parceiro->findAll();
	}
}

?>
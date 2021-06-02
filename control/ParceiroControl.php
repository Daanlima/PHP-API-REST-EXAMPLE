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

	function delete($obj,$id){
		$parceiro = new Parceiro();
		return $parceiro->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$parceiro = new Parceiro();
		return $parceiro->findAll();
	}
}

?>
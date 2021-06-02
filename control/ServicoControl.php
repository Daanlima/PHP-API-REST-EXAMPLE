<?php
include '../../model/Servico.php';

class ServicoControl{
	function insert($obj){
		$servico = new Servico();
		//echo $obj->titulo;
		return $servico->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$servico = new Servico();
		return $servico->update($obj,$id);
	}

	function delete($obj,$id){
		$servico = new Servico();
		return $servico->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$servico = new Servico();
		return $servico->findAll();
	}
}

?>
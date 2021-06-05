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

	function delete($id){
		$servico = new Servico();
		return $servico->delete($id);
	}

	function find($id = null){
		$servico = new Servico();
		return $servico->find($id);
	}

	function findAll(){
		$servico = new Servico();
		return $servico->findAll();
	}
}

?>
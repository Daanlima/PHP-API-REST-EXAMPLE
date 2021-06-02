<?php
include '../../model/Servico.php';

class ServicoControl{
	function insert($obj){
		$service = new Servico();
		//echo $obj->titulo;
		return $service->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$service = new Servico();
		return $service->update($obj,$id);
	}

	function delete($obj,$id){
		$service = new Servico();
		return $service->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$service = new Servico();
		return $service->findAll();
	}
}

?>
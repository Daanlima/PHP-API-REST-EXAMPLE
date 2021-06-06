<?php
include '../../model/Manutencao.php';

class ManutencaoControl{
	function insert($obj){
		$manutencao = new Manutencao();
		return $manutencao->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$manutencao = new Manutencao();
		return $manutencao->update($obj,$id);
	}

	function delete($id){
		$manutencao = new Manutencao();
		return $manutencao->delete($id);
	}

	function find($id){
		$manutencao = new Manutencao();
		return $manutencao->find($id);
	}

	function findAll(){
		$manutencao = new Manutencao();
		return $manutencao->findAll();
	}
}

?>
<?php
include '../../model/Carro.php';

class CarroControl{
	function insert($obj){
		$carro = new Carro();
		return $carro->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$carro = new Carro();
		return $carro->update($obj,$id);
	}

	function delete($id){
		$carro = new Carro();
		return $carro->delete($id);
	}

	function find($id){
		$carro = new Carro();
		return $carro->find($id);
	}

	function findAll(){
		$carro = new Carro();
		return $carro->findAll();
	}
}

?>
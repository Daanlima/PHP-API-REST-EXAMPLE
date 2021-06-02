<?php
include '../../model/Carro.php';

class CarroControl{
	function insert($obj){
		$carro = new Carro();
		//echo $obj->titulo;
		return $carro->insert($obj);
		header('Location:listar.php');
	}

	function update($obj,$id){
		$carro = new Carro();
		return $carro->update($obj,$id);
	}

	function delete($obj,$id){
		$carro = new Carro();
		return $carro->delete($obj,$id);
	}

	function find($id = null){

	}

	function findAll(){
		$carro = new Carro();
		return $carro->findAll();
	}
}

?>
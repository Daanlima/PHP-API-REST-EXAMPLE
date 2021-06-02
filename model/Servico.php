<?php
include '../../conexao/Conexao.php';

class Servico extends Conexao{
	private $NomeServico;
    private $Valor;
    private $parceiro_id ;

    function getNomeServico() {
        return $this->NomeServico;
    }

    function getValor() {
        return $this->Valor;
    }

    function getParceiro_id() {
        return $this->parceiro_id;
    }

    function setNomeServico($NomeServico) {
        $this->NomeServico = $NomeServico;
    }

    function setValor($setValor) {
        $this->setValor = $setValor;
    }

    function setParceiro_id($parceiro_id) {
        $this->cep = $parceiro_id;
    }

    public function insert($obj){
    	$sql = "INSERT INTO servicoparceiro(NomeServico,Valor,parceiro_id) VALUES (:NomeServico,:Valor,:parceiro_id)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('NomeServico',  $obj->NomeServico);
        $consulta->bindValue('Valor' , $obj->Valor);
        $consulta->bindValue('parceiro_id' , $obj->parceiro_id);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE servicoparceiro SET NomeServico = :NomeServico,Valor = :Valor, parceiro_id = :parceiro_id WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('NomeServico', $obj->NomeServico);
		$consulta->bindValue('Valor' , $obj->Valor);
		$consulta->bindValue('parceiro_id', $obj->parceiro_id);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM servicoparceiro WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){

	}

	public function findAll(){
		$sql = "SELECT * FROM servicoparceiro";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>
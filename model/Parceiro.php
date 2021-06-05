<?php
include '../../conexao/Conexao.php';

class Parceiro extends Conexao{
	private $idarceiro;
	private $nome;
    private $cnpj;
    private $cep;

    function getNome() {
        return $this->nome;
    }

    function getCNPJ() {
        return $this->cnpj;
    }

    function getCEP() {
        return $this->cep;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCNPJ($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setCEP($cep) {
        $this->cep = $cep;
    }

	function setAll($nome, $cnpj, $cep) {
        $this->getNome($nome);
        $this->getCNPJ($cnpj);
        $this->setCEP($cep);
    }


    public function insert($obj){
    	$sql = "INSERT INTO parceiro(nome,cnpj,cep) VALUES (:nome,:cnpj,:cep)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('cnpj' , $obj->cnpj);
        $consulta->bindValue('cep' , $obj->cep);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE parceiro SET nome = :nome,cnpj = :cnpj, cep = :cep WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome', $obj->nome);
		$consulta->bindValue('cnpj' , $obj->cnpj);
		$consulta->bindValue('cep', $obj->cep);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($id = null){
		$sql =  "DELETE FROM parceiro WHERE idparceiro = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
		$arraylist = [];
		$sql = "SELECT * FROM parceiro WHERE idparceiro = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
		//return $consulta->fetchAll();

        while ($record = $consulta->fetchAll()) {
            array_push($arraylist, $record);
        }
        return $arraylist;
	}

	public function findAll(){
		$arraylist = [];

		$sql = "SELECT * FROM parceiro";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		//return $consulta->fetchAll();

        while ($record = $consulta->fetchAll()) {
            array_push($arraylist, $record);
        }
        return $arraylist;

	}

}

?>
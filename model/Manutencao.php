<?php
include '../../conexao/Conexao.php';

class Manutencao extends Conexao{
	private $idmanutencao;
	private $ulttrocapneu;
    private $ulttrocaoleo;
    private $ultrevisao;
    private $ultcalibragem;
    private $carro_id ;

    function getUlttrocapneu() {
        return $this->ulttrocapneu;
    }

    function getUlttrocaoleo() {
        return $this->ulttrocaoleo;
    }

    function getUltrevisao() {
        return $this->ultrevisao;
    }

    function getUltcalibragem() {
        return $this->ultcalibragem;
    }

    function getCarro_id() {
        return $this->carro_id;
    }

    function setUlttrocapneu($ulttrocapneu) {
        $this->ulttrocapneu = $ulttrocapneu;
    }

    function setUlttrocaoleo($ulttrocaoleo) {
        $this->ulttrocaoleo = $ulttrocaoleo;
    }

    function setUltrevisao($ultrevisao) {
        $this->ultrevisao = $ultrevisao;
    }

    function setUltcalibragem($ultcalibragem) {
        $this->ultcalibragem = $ultcalibragem;
    }

    function setCarro_id($carro_id) {
        $this->carro_id = $carro_id;
    }

    function setAll($ulttrocapneu, $ulttrocaoleo, $ultrevisao, $ultcalibragem, $carro_id) {
        $this->setUlttrocapneu($ulttrocapneu);
        $this->setUlttrocaoleo($ulttrocaoleo);
        $this->setUltrevisao($ultrevisao);
        $this->setUltcalibragem($ultcalibragem);
        $this->setCarro_id($carro_id);
    }

    public function insert($obj){
    	$sql = "INSERT INTO manutencao(ulttrocapneu,ulttrocaoleo,ultrevisao,ultcalibragem,carro_id) VALUES (:ulttrocapneu,:ulttrocaoleo,:ultrevisao,:ultcalibragem,:carro_id)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('ulttrocapneu',  $obj->ulttrocapneu);
        $consulta->bindValue('ulttrocaoleo', $obj->ulttrocaoleo);
        $consulta->bindValue('ultrevisao' , $obj->ultrevisao);
        $consulta->bindValue('ultcalibragem' , $obj->ultcalibragem);
        $consulta->bindValue('carro_id' , $obj->carro_id);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE manutencao SET ulttrocapneu = :ulttrocapneu, ulttrocaoleo = :ulttrocaoleo, ultrevisao = :ultrevisao, ultcalibragem = :ultcalibragem, carro_id = :carro_id WHERE idmanutencao = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('ulttrocapneu',  $obj->ulttrocapneu);
        $consulta->bindValue('ulttrocaoleo', $obj->ulttrocaoleo);
        $consulta->bindValue('ultrevisao' , $obj->ultrevisao);
        $consulta->bindValue('ultcalibragem' , $obj->ultcalibragem);
        $consulta->bindValue('carro_id' , $obj->carro_id);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($id = null){
		$sql =  "DELETE FROM manutencao WHERE idmanutencao = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $arraylist = [];
		$sql = "SELECT * FROM manutencao WHERE idmanutencao = :id";
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

		$sql = "SELECT * FROM manutencao";
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
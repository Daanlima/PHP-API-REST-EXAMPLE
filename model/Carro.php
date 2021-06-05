<?php
include '../../conexao/Conexao.php';

class Carro extends Conexao{
	private $idCarro;
	private $PlacaCarro;
    private $MarcaCarro;
    private $ModeloCarro;
    private $AnoCarro;
    private $Quilometragem;
    private $usuario_id ;

    function getPlacaCarro() {
        return $this->PlacaCarro;
    }

    function getMarcaCarro() {
        return $this->MarcaCarro;
    }

    function getModeloCarro() {
        return $this->ModeloCarro;
    }

    function getAnoCarro() {
        return $this->AnoCarro;
    }

    function getQuilometragem() {
        return $this->Quilometragem;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function setPlacaCarro($PlacaCarro) {
        $this->PlacaCarro = $PlacaCarro;
    }

    function setModeloCarro($ModeloCarro) {
        $this->ModeloCarro = $ModeloCarro;
    }

    function setAnoCarro($AnoCarro) {
        $this->AnoCarro = $AnoCarro;
    }

    function setQuilometragem($Quilometragem) {
        $this->Quilometragem = $Quilometragem;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setAll($PlacaCarro, $ModeloCarro, $AnoCarro, $Quilometragem, $usuario_id) {
        $this->setPlacaCarro($PlacaCarro);
        $this->setModeloCarro($ModeloCarro);
        $this->setAnoCarro($AnoCarro);
        $this->setQuilometragem($Quilometragem);
        $this->setUsuario_id($usuario_id);
    }

    public function insert($obj){
    	$sql = "INSERT INTO carro(placacarro,marcacarro,modelocarro,anocarro,quilometragem,usuario_id ) VALUES (:PlacaCarro,:MarcaCarro,:ModeloCarro,:AnoCarro,:Quilometragem, :usuario_id)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('PlacaCarro',  $obj->PlacaCarro);
        $consulta->bindValue('MarcaCarro', $obj->MarcaCarro);
        $consulta->bindValue('ModeloCarro' , $obj->ModeloCarro);
        $consulta->bindValue('AnoCarro' , $obj->AnoCarro);
        $consulta->bindValue('Quilometragem' , $obj->Quilometragem);
        $consulta->bindValue('usuario_id' , $obj->usuario_id);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE carro SET placaCarro = :PlacaCarro, marcacarro = :MarcaCarro, modelocarro = :ModeloCarro, anocarro = :AnoCarro, quilometragem = :Quilometragem, usuario_id = :usuario_id WHERE idCarro = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('PlacaCarro', $obj->PlacaCarro);
		$consulta->bindValue('MarcaCarro', $obj->MarcaCarro);
		$consulta->bindValue('ModeloCarro' , $obj->ModeloCarro);
		$consulta->bindValue('AnoCarro', $obj->AnoCarro);
		$consulta->bindValue('Quilometragem', $obj->Quilometragem);
		$consulta->bindValue('usuario_id', $obj->usuario_id);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($id = null){
		$sql =  "DELETE FROM carro WHERE idcarro = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){
        $arraylist = [];
		$sql = "SELECT * FROM carro WHERE idcarro = :id";
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

		$sql = "SELECT * FROM carro";
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
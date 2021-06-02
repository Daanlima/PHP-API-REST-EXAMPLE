<?php
include '../../conexao/Conexao.php';

class Conteudo extends Conexao{
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

    public function insert($obj){
    	$sql = "INSERT INTO carro(PlacaCarro,MarcaCarro,ModeloCarro,AnoCarro,Quilometragem,usuario_id ) VALUES (:PlacaCarro,:MarcaCarro,:ModeloCarro,:AnoCarro,:Quilometragem, :usuario_id)";
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
		$sql = "UPDATE carro SET PlacaCarro = :PlacaCarro, MarcaCarro = :MarcaCarro, ModeloCarro = :ModeloCarro, AnoCarro = :AnoCarro, Quilometragem = :Quilometragem, usuario_id = :usuario_id WHERE idCarro = :id ";
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

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM carro WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){

	}

	public function findAll(){
		$sql = "SELECT * FROM carro";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>
<?php
include '../../conexao/Conexao.php';

class Conteudo extends Conexao{
	private $nome;
    private $email;
    private $xp;
    private $cep;

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getXP() {
        return $this->xp;
    }

    function getCEP() {
        return $this->cep;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setXP($xp) {
        $this->xp = $xp;
    }

    function setCEP($cep) {
        $this->cep = $cep;
    }

    public function insert($obj){
    	$sql = "INSERT INTO usuario(nome,email,xp,cep) VALUES (:nome,:email,:xp,:cep)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('xp' , $obj->xp);
        $consulta->bindValue('cep' , $obj->cep);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE usuario SET nome = :nome, email = :email,xp = :xp, cep = :cep WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome', $obj->nome);
		$consulta->bindValue('email', $obj->email);
		$consulta->bindValue('xp' , $obj->xp);
		$consulta->bindValue('cep', $obj->cep);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM usuario WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){

	}

	public function findAll(){
		$sql = "SELECT * FROM usuario";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>
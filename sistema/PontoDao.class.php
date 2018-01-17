<?php

	include "DBManager.class.php";
	include "IDao.interface.php";

  class PontoDao extends DBManager implements IDao {
   
    //insere no banco
    public function inserir($objeto){
		$db = new DBManager();
		$db->dbConectar();
  		$db->dbSQL("INSERT INTO pontos (nome, ddd, telefone, endereco, cidade, estado,  email, site) 
      values ('".$objeto->getNome()."', '".$objeto->getDdd()."', '".$objeto->getTelefone()."', '".$objeto->getEndereco()."', '".$objeto->getCidade()."', '".$objeto->getEstado()."', '".$objeto->getEmail()."', '".$objeto->getSite()."')");
  		$db->dbDesconectar();
    }

    
    //altera no banco
    public function alterar($objeto){
		$db = new DBManager();
  		$db->dbConectar();
		$atualizar = $db->dbExecutar("UPDATE pontos SET nome = '".$objeto->getNome()."', ddd =  '".$objeto->getDdd()."',  telefone = '".$objeto->getTelefone()."', endereco = '".$objeto->getEndereco()."', cidade = '".$objeto->getCidade()."', estado = '".$objeto->getEstado()."',  email = '".$objeto->getEmail()."', site = '".$objeto->getSite()."' WHERE id = ".$objeto->getId()." ");
		$db->dbDesconectar();
	}
    
    //exclui 1 registro
     function excluir($id){
      	$db = new DBManager();
  		$db->dbConectar();
  		$excluir = $db->dbExecutar("DELETE from pontos WHERE id = $id");
  		$db->dbDesconectar();
    }
    
    //lista todos registros da tabela
    public function listar(){
      $db = new DBManager();
  		$db->dbConectar();
  		$listar = $db->dbExecutar("SELECT id, nome, ddd, telefone, endereco, cidade, estado, email, site from pontos ORDER BY id");
  		while($vetor = $db->dbTupla($listar))
  			$lista[] = $vetor;
  		$db->dbDesconectar();
		if (empty($lista)){
			return false;
		}else {return $lista;}
    }

    //lista dados de '1' registro
  	function listarSelecionado($id) {
  		$db = new DBManager();
  		$db->dbConectar();
  		$vetor = $db->dbTuplaSimples("SELECT nome, ddd, telefone, endereco, cidade, estado, email, site from pontos WHERE id = $id");
 		$db->dbDesconectar(); 
		//return $vetor;
	    $ponto = new Pontos($vetor["nome"], $vetor["ddd"], $vetor["telefone"], $vetor["endereco"], $vetor["cidade"], $vetor["estado"], $vetor["email"], $vetor["site"]);
  		return $ponto;
  	}
		
  
  }
?>

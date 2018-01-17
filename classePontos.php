<?php

class Ponto {
	
	protected $nome;
	protected $ddd;
	protected $telefone;
	protected $endereco;
	protected $cidade;
	protected $estado;
	protected $email;
	protected $site;
	protected $id;
	
	function __construct($nome="", $ddd="", $telefone="", $endereco="", $cidade="", $estado="", $email="", $site="", $id=""){
		
     	 $this->nome = $nome;
		 $this->ddd = $ddd;
		 $this->telefone = $telefone;
		 $this->endereco = $endereco;
		 $this->cidade = $cidade;
		 $this->estado = $estado;
		 $this->email = $email;
		 $this->site = $site;
		 $this->id = $id;
	}
	
	function getId(){
			return $this->id;
	}
	function setId($id){
		$this->id = $id;
	}
	
	function getNome(){
			return $this->nome;
	}
	function setNome($nome){
		$this->nome = $nome;
	}
	
  	function getDdd(){
			return $this->ddd;
	}
	function setDdd($ddd){
		$this->ddd = $ddd;
	}
	
	function getTelefone(){
			return $this->telefone;
	}
	function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	
	function getEndereco(){
			return $this->endereco;
	}
	function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	
	function getCidade(){
			return $this->cidade;
	}
	function setCidade($cidade){
		$this->cidade = $cidade;
	}
	
	function getEstado(){
			return $this->estado;
	}
	function setEstado($estado){
		$this->estado = $estado;
	}
	
   function getEmail(){
			return $this->email;
	}
	function setEmail($email){
		$this->email = $email;
	}
	
	function getSite(){
			return $this->site;
	}
	
	function setSite($site){
		$this->site = $site;
	}
	
   /* ação do objeto para listar todos pontos de venda do banco de dados ~~~ */
	
     function listar(){	
		
		$db = mysql_connect("","",""); //conecta com o banco
		$dado = mysql_select_db("sorvetemeltoni",$db);

  		$listar = mysql_query("SELECT id, nome, ddd, telefone, endereco, cidade, estado, email, site from pontos ORDER BY nome"); // seleciona os dados da tabela
  		
		while($vetor = mysql_fetch_array($listar)) //cria uma matriz com o dados selecionados do banco
			$lista[] = $vetor;
		
		mysql_close($db); //fecha conexão com o banco
	
		if (empty($lista)){
			return false;
		}else {return $lista;}
		
    }

}
	

?>

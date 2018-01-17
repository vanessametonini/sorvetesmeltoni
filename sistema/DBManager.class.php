<?php

class DBManager {

	public function dbConectar() {
		global $DBConn, $SQLConn;
		$login = "";
		$senha = "";
		$banco = "";
		$servidor = "";
		
		//verifica se a conexao existe
		if (!($SQLConn = MySQL_Connect($servidor, $login, $senha)))
			 echo "Acesso ao servidor não disponível";
			 
		$DBConn = mysql_select_db($banco); //seleciona o banco
		
		if(!($DBConn)) //verifica se o banco selecionado existe
			echo "Acesso ao banco de dados não disponível";
	}

	public function dbDesconectar() {
		global $SQLConn;
		MySQL_Close( $SQLConn ); //fecha conexao com o banco
	}

	public function dbExecutar( $consulta ) { // usada para alterar, listar e excluir 
		global $DBStmt;
		if (!empty( $DBStmt )) //verifica se a consulta existe
			echo "Erro ao executar consulta";
		if (!($DBStmt = MySQL_Query("$consulta")))//verifica se a consulta esta correta
			echo "Erro de SQL (MySQL_Query)".$consulta;
	}

	public function dbEncerrar() {
		global $DBStmt;
		if (!(mysql_free_result ( $DBStmt ))) //  libera memoria usada na consulta. 
			echo "Erro ao encerrar consulta";
		$DBStmt = false;
	}

	public function dbSQL( $consulta ) { //retorna ou executa uma consulta
		global $DBStmt;
		if (!($DBStmt = MySQL_Query( $consulta )))
			echo "Erro de SQL (MySQL_Query)".$consulta ;
		$sucesso = $DBStmt;
		$DBStmt = false;
		return $sucesso;
	}

	public function dbTupla() {
		global $DBStmt;
		return mysql_fetch_array( $DBStmt ); // Retorna uma matriz que corresponde a linha buscada
	}

	public function dbTuplaSimples( $consulta ) { // executa uma query e retorna como matriz
		$this->dbExecutar( $consulta ); //realiza a consulta
		$tupla = $this->dbTupla(); //transforma em matriz
		$this->dbEncerrar(); // libera a memoria
		return $tupla; // retorna a matriz criada pela consulta 
	}

}

?>

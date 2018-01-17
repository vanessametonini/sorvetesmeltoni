<?php 
	include "config.php";
	$login = $_SESSION['login_session'];
	$senha = $_SESSION['senha_session'];
	$sql = mysql_query ("SELECT * FROM login_senha where login = '$login' AND senha = '$senha'");
	
	while ($login = mysql_fetch_array($sql)) {
		$nomeUsuario = $login['nome'];
	}
?>
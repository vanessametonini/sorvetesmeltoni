<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Untitled</title>
</head>

<body>
<?php 

	include "config.php";
	
	//pega os dados do formulario

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	//conexao com o banco
	
	$sql = mysql_query("SELECT * FROM login_senha where login = '$login' AND senha = '$senha'");
	
	// verifica se existe um login e senha no banco 
	
	if (mysql_num_rows($sql) == 1){
		$_SESSION['login_session'] = $login;
		$_SESSION['senha_session'] = $senha;
		header('location:index.php');
	}else {
		unset($_SESSION['login_session']);
		unset($_SESSION['senha_session']);
		header('location: ../restrito.php');
	}

?>


</body>
</html>

<?php
// Verifica a existencia das variaveis de login e senha
	
	if(!isset($_SESSION['login_session']) AND !isset($_SESSION['senha_session'])){
	
		header('location: ../index.php');
		
		exit;
	}
	
	?>
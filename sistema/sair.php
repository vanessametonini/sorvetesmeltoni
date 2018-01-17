<?php
		session_start();
		
		// destroi a sessao
		
		unset($_SESSION['login_session']);
		unset($_SESSION['senha_session']);
		header('location: ../index.php');

?>
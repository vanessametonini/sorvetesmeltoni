<?php
	// conecta com o banco de dados
	
	$db = mysql_connect("mysql.grupow.com.br","sorvtmysql","kdf94hf78tmg");
	$dado = mysql_select_db("sorvetemeltoni",$db);
 ?>
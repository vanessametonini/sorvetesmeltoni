<?php

	if ($_POST){
		//pega as variaveis
		$r_nome = $_POST['nome'];
		$r_telefone = $_POST['telefone'];
		$r_email = $_POST['email'];
		$r_msg = $_POST['mensagem'];
		
		// Verifica se os campos necessários foram preechidos
		if($r_nome == "") {
		$msgErro = "Preencha seu nome!";
		} elseif ($r_email == "") {
		$msgErro = "Preencha o e-mail!";
		} elseif ($r_msg == "") {
		$msgErro = "Preencha a mensagem!";
		} else {
			
			//pega as variaveis
			$r_nome = $_POST['nome'];
			$r_telefone = $_POST['telefone'];
			$r_email = $_POST['email'];
			$r_msg = $_POST['mensagem'];
	
			$emailpadrao = "sorvetesmeltoni@hotmail.com";
			
			//Solicita as variáveis para o envio de email
			$recipient = $emailpadrao;
			$subject = "Contato através do site - Meltoni";
			
			// Variáveis enviadas
			$mailheaders = "From: <Contato Site>"."\r\n";
			$mailheaders .= "Reply-To: <$r_email>"."\r\n";
			$mailheaders .="Bcc: <ivartonini@hotmail.com>\n"; //use essa area para CCO
			$mailheaders .= "Content-type: text/html; charset=iso-8859-1\r\n";
			
			//Corpo da mensagem
			$msg = "<strong>Contato através do site - Meltoni:</strong><br><br>";
			$msg .= "<strong>Nome:</strong> $r_nome<br>";
			$msg .= "<strong>Email do remetente:</strong> $r_email<br>";
			$msg .= "<strong>Telefone do remetente:</strong> $r_telefone<br>";
			$msg .= "<strong>Mensagem:</strong><br> $r_msg<br>";
			
			//Envia email
			mail ($recipient, $subject,$msg, $mailheaders);
			
			//ini_set ($recipient, $subject,$msg, $mailheaders);
			
			$msgErro =  "Seu e-mail foi enviado com sucesso!";
		
	  }
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<?php  $nomePagina = "Contato"; ?>
<?php require_once "_cabecalho.php" ?>
 <script src="componentes/js/contato.js"></script>
	
</head>

<body>

	<?php require_once "_topo.php" ?>
			
			<div class="centro">
                <div class="subMenu" id="empresa">
                </div>
                <div class="conteudoInternas" id="contato">
                	<h1>Contato</h1>
                        <form action="contato.php" method="post" onSubmit="">
                            <fieldset>
                            	<legend>Preencha o formulário abaixo para entrar em contato conosco por e-mail</legend>
                                <table cellpadding="0" cellspacing="0" border="0" align="center">
                                <?php if ($_POST){
									echo "<tr><td colspan='2' align='center'><div class='erro' align='center'>$msgErro</div></td></tr>";
                                }?>
                                <tr>
                                    <td><label for="nome"><b>*</b>Nome:</label></td>
                                    <td><input type="Text" value="<?php echo $r_nome;?>" name="nome" id="nome" maxlength="80"></td>
                                </tr>
                                <tr>
                                    <td><label for="telefone">Telefone:</label></td>
                                    <td><input type="Text" value="<?php echo $r_telefone; ?>" name="telefone" id="telefone" onKeyPress="return numbersonly(this, event)" maxlength="11"></td>
                                </tr>
                                <tr>
                                    <td><label for="email"><b>*</b>E-mail:</label></td>
                                    <td><input type="Text" value="<?php echo $r_email; ?>" name="email" onBlur="ValidaEmail(true);" id="email" maxlength="30"></td>
                                </tr>
                                <tr>
                                    <td><label for="mensagem"><b>*</b>Mensagem:</label></td>
                                    <td><textarea name="mensagem" id="mensagem"><?php $r_msg; ?></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><p><b>*</b>Campos obrigatórios.</p></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" value="Enviar" name="enviar" class="botao">
                                     
                                    </td>
                                </tr>
                                </table>
                            </fieldset>
                        </form>
                        <br clear="all">
                        <br><br>
                        
                        <address class="contato">
                            <strong>E-mail:</strong> <a href="mailto:sorvetesmeltoni@hotmail.com">sorvetesmeltoni@hotmail.com</a> <br>
                            <strong>Telefone:</strong> (53) 3242.2964 <br>
                            <strong>Fax:</strong> (53) 3242.2964<br>
                            <strong>Endereço:</strong> Rua Venâncio Aires 62 direita, centro. <br>
                            <strong>CEP:</strong> 96400-460, Bagé - RS. <br>
                        </address>
                </div>
                <div class="rodapeInternas" id="empresa"></div>

            </div>
			
		<?php require_once "_rodape.php" ?>

</body>
</html>

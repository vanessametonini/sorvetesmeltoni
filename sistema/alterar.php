<?php
	session_start();
	
	include "verificacao.php";	
	
	require_once "pontosClasses.php" ;
	
 	$id = $_GET['id'];
	$pontoDao = new PontoDao();
	$detalhePonto = $pontoDao->listarSelecionado($id); 
	
	$nomePonto = $detalhePonto->getNome();
	$dddPonto = $detalhePonto->getDdd();
	$telefonePonto = $detalhePonto->getTelefone();
	$enderecoPonto = $detalhePonto->getEndereco();
    $cidadePonto = $detalhePonto->getCidade();
	$estadoPonto = $detalhePonto->getEstado();
	$emailPonto = $email = $detalhePonto->getEmail();
	$sitePonto = $site = $detalhePonto->getSite();

	if ($_POST){
			
      $nomePonto = $_POST["nome"]; 
      $dddPonto = $_POST["ddd"];
      $telefonePonto = $_POST["telefone"];
	  $enderecoPonto = $_POST["endereco"];
      $cidadePonto = $_POST["cidade"];
	  $estadoPonto = $_POST["estado"];
	  $emailPonto = $_POST["email"];
	  $sitePonto = $_POST["site"];
	  
	  // Verifica se os campos necessários foram preechidos
	  if($nomePonto == "") {
	  	$msg = "Preencha seu nome!";
	  }elseif ($dddPonto == "") {
	  	$msg = "Preencha o DDD!";
	  } elseif ($telefonePonto == "") {
	  	$msg = "Preencha o telefone!";
	  } elseif ($cidadePonto == "") {
	  	$msg = "Preencha a cidade!";
	  } elseif ($estadoPonto == "0") {
	  	$msg = "Preencha o estado!";
	  } 
	  
	  else {
			try { //tenta alteracao no banco
				
				$ponto = new Pontos($nomePonto, $dddPonto, $telefonePonto, $enderecoPonto, $cidadePonto, $estadoPonto, $emailPonto, $sitePonto, $id);
				$pontoDao = new PontoDao();
				$pontoDao->alterar($ponto);
				$msg = "Dados atualizados com sucesso!";
				/*
				$ponto = new Pontos($_POST["nome"], $_POST["ddd"], $_POST["telefone"], $_POST["endereco"], $_POST["cidade"], $_POST["estado"], $_POST["email"], $_POST["site"]);
				$pontoDao = new PontoDao();
				$pontoDao->inserir($ponto);
				$msg = "Cadastrado com sucesso!";
				
				$atualizar = new Eventos($_POST["mes"], $_POST["dia"], $_POST["hora"], $_POST["assunto"], $_POST["ano"]);
				$atualiza = $atualizar->atualizaDados($_GET["id"]);	
				
				$ponto = new Pontos($nomePonto, $dddPonto, $telefonePonto, $enderecoPonto, $cidadePonto, $estadoPonto, $emailPonto, $sitePonto);
				$pontoDao = new PontoDao($ponto);
				$atualiza = $pontoDao->alterar($id);
				$msg = "Dados atualizados com sucesso!";*/
		
			} 
			
			catch(Exception $e) {
				$msg ="Erro ao atualizar os dados, tente novamente ou entre em contato com o administrador do sistema!";
			}
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-BR" lang="pt-BR">

<head>
	<?php require_once "_cabecalho.php" ?>
</head>

<body>
<?php include "consultas.php"; ?>

<div class="tudo">

	<?php require_once "_topo.php" ?>
	
			<div class="centro">
				<div class="titulos">
					<h1>Pontos de Venda</h1>
				</div>
				<div class="formulario" align="center">
					<form action="alterar.php?id=<?php echo $id?>" method="post">
						<fieldset>
							<legend>Preencha o formulário abaixo para fazer um novo registro</legend>
							<table cellpadding="0" cellspacing="0" border="0">
								<?php
                                  if ($_POST && isset($msg)){
                                    echo "<tr><td colspan='4'><div class='erro' align='center'>$msg</div></td></tr>";
                                  }
                                ?>
								<tr>
									<td colspan="1"><label for="nomeponto"><b>*</b>Nome:</label></td>
									<td colspan="3"><input type="Text" name="nome" id="nomeponto" class="inputGrande" maxlength="80" value="<?php if($_POST){echo $nomePonto;}else{echo $nomePonto;} ?>"></td>
								</tr>
								<tr>
									<td colspan="1"><label for="dddponto"><b>*</b>Telefone:</label></td>
									<td colspan="3"><input type="Text" name="ddd" id="dddponto" class="ddd" maxlength="3" value="<?php if($_POST){echo $dddPonto;}else{echo $dddPonto;} ?>"> <input type="Text" name="telefone" id="telefoneponto" class="telefone" maxlength="8" value="<?php if($_POST){echo $telefonePonto;}else{echo $telefonePonto;} ?>"></td>
								</tr>
								<tr>
									<td colspan="1"><label for="enderecoponto">Endere&ccedil;o:</label></td>
									<td colspan="3"><textarea name="endereco" id="enderecoponto"><?php if($_POST){echo $enderecoPonto;}else{echo $enderecoPonto;} ?></textarea></td>
								</tr>
								<tr>
									<td colspan="4"><p>Rua, Número, Sala, Bairro, CEP</p></td>
								</tr>
								<tr>
									<td><label for="cidadeponto"><b>*</b>Cidade:</label></td>
									<td class="cidade"><input type="Text" name="cidade" id="cidadeponto" maxlength="50" value="<?php if($_POST){echo $cidadePonto;}else{echo $cidadePonto;} ?>"></td>
									<td class="estado"><label for="estado"><b>*</b>Estado:</label></td>
									<td>
										<select id="estadoponto" name="estado" class="estado">
                                        	<option <?php if($estadoPonto == "0"){echo "selected='selected'";}else{ if($_POST && $estadoPonto == "0"){echo "selected='selected'";}} ?> value="0">selecione um estado</option>
                                            <option <?php if($estadoPonto == "RS"){echo "selected='selected'";}else{ if($_POST && $estadoPonto == "RS"){echo "selected='selected'";}} ?>>RS</option>
                                            <option <?php if($estadoPonto == "SC"){echo "selected='selected'";}else{ if($_POST && $estadoPonto == "SC"){echo "selected='selected'";}} ?>>SC</option>
                                            <option <?php if($estadoPonto == "PR"){echo "selected='selected'";}else{ if($_POST && $estadoPonto == "PR"){echo "selected='selected'";}} ?>>PR</option>
                                            <option <?php if($estadoPonto == "Uruguai"){echo "selected='selected'";}else{ if($_POST && $estadoPonto == "Uruguai"){echo "selected='selected'";}} ?>>Uruguai</option>
                                            <option <?php if($estadoPonto == "Paraguai"){echo "selected='selected'";}else{ if($_POST && $estadoPonto == "Paraguai"){echo "selected='selected'";}} ?>>Paraguai</option>
										</select>
									</td>
								</tr>
								<tr>
									<td colspan="1"><label for="emailponto">E-mail:</label></td>
									<td colspan="3"><input type="Text" name="email" id="emailponto" class="inputGrande" maxlength="30" value="<?php if($_POST){echo $emailPonto;}else{echo $emailPonto;} ?>"></td>
								</tr>
								<tr>
									<td colspan="1"><label for="siteponto">Site:</label></td>
									<td colspan="3"><input type="Text" name="site" id="siteponto" class="inputGrande" maxlength="30" value="<?php if($_POST){echo $sitePonto;}else{echo $sitePonto;} ?>"></td>
								</tr>
								<tr>
									<td colspan="4"><p><b>*</b>Campos obrigatórios.</p></td>
								</tr>
								<tr>
									<td colspan="4">
										<div class="botoes">
											<a href="pontosLista.php" target="_self"><img src="design/imagens/botoes/voltar.jpg" title="voltar" border="0"></a>
											<input type="image" name="enviar" src="design/imagens/botoes/enviar.jpg">
										</div>
									</td>
								</tr>
							</table>
							
						</fieldset>
					</form>
					
				</div>
				
			</div>
			
		</div>
		
    </div>
</div>

</body>
</html>




<?php
	session_start();
	
	include "verificacao.php";	
	include "config.php";	//conexao com o banco
	
	if ($_POST){
		
		$nomeBanner = $_POST['nome'];
		$imagem = $_FILES['imagem'];
		
		if($nomeBanner == "") {
			$msg = "Preencha um nome para o banner!";
		}
		elseif (empty($_FILES["imagem"])){
			$msg = "Escolha uma imagem!";
		}
		
		else {
			
			$arquivo = isset($_FILES["imagem"]) ? $_FILES["imagem"] : FALSE; // Prepara a variável caso o formulário tenha sido postado
			
			$configIMG = array();
			$configIMG["tamanho"] = 1000000;// Tamano máximo da imagem, em bytes
			$configIMG["largura"] = 659;// Largura Máxima, em pixels
			$configIMG["altura"] = 269;// Altura Máxima, em pixels
			$configIMG["diretorio"] = "./arquivos/banners/"; // Diretório onde a imagem será salva
			
			// Gera um nome para a imagem e verifica se já não existe, caso exista, gera outro nome e assim sucessivamente...
			function nome($extensao){
				global $configIMG;
				$temp = substr(md5(uniqid(time())), 0, 10);// Gera um nome único para a imagem
				$imagem_nome = $temp . "." . $extensao;
				
				if(file_exists($configIMG["diretorio"] . $imagem_nome)){// Verifica se o arquivo já existe, caso positivo, chama essa função novamente
				$imagem_nome = nome($extensao);
			}
			return $imagem_nome;
		}
		
		// Verifica o mime-type do arquivo para ver se é de imagem.
		if($arquivo){ 
			$erro = array();  
		
			if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $arquivo["type"])){
				$erro[] = "Arquivo em formato inválido! A imagem deve ser jpg, jpeg, bmp, gif ou png. Envie outro arquivo";
			}
			else{
				if($arquivo["size"] > $configIMG["tamanho"]){// Verifica tamanho do arquivo
					$erro[] = "Arquivo em tamanho muito grande! A imagem deve ser de no máximo " . $configIMG["tamanho"] . " bytes. Envie outro arquivo";
				}
			}
		
			$tamanhos = getimagesize($arquivo["tmp_name"]);  // Para verificar as dimensões da imagem
		
			if($tamanhos[0] > $configIMG["largura"]) {// Verifica largura
				$erro[] = "Largura da imagem não deve ultrapassar " . $configIMG["largura"] . " pixels";
			}
		
			if($tamanhos[1] > $configIMG["altura"]){  // Verifica altura
				$erro[] = "Altura da imagem não deve ultrapassar " . $configIMG["altura"] . " pixels";
			}
		}

		if(!sizeof($erro)){
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);   // Pega extensão do arquivo, o indice 1 do array conterá a extensão
		
			$imagem_nome = nome($ext[1]); // pasa o nome único para a imagem
			$imagem_dir = $configIMG["diretorio"] . $imagem_nome;  // Caminho de onde a imagem ficará
			move_uploaded_file($arquivo["tmp_name"], $imagem_dir);// Faz o upload da imagem
			copy($arquivo, $configIMG[diretorio]);	
			$sql = mysql_query ("INSERT INTO banners(nome, imagem) VALUES ('$nomeBanner','$imagem_nome')");// Incluimos o nome da imagem no banco de dados MySQL
			
			$msg = "Imagem enviada com Sucesso!";
			echo $msg; // Exibimos a mensagem de concluido com sucesso!
		}
		else{
			$msg = "Oops, algo errado aconteceu, contate o administrador do site.";
			echo $msg;
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
					<h1>Banners</h1>
				</div>
				<div class="formulario" align="center">
					<form action="formBanners.php" method="post" enctype="multipart/form-data">
						<fieldset>
							<legend>Preencha o formulário abaixo para enviar um novo banner</legend>
                            <br /><br />
							<table cellpadding="0" cellspacing="0" border="0">
                            	<?php
                                  if ($_POST && isset($msg)){
                                    echo "<tr><td colspan='4'><div class='erro' align='center'>$msg</div></td></tr>";
                                  }
                                ?>
								<tr>
									<td><label for="nome"><b>*</b>Nome:</label></td>
									<td><input type="Text" name="nome" id="nome" class="inputGrande" maxlength="80" value="<?php if (isset($nomeBanner)){echo $nomeBanner;} ?>"></td>
								</tr>
                                <tr>
									<td><label for="imagem"><b>*</b>Imagem:</label></td>
									<td><input type="file" name="imagem" id="imagem"> (659x269 pixels. Até 1Mb)</td>
								</tr>
							
								<tr>
									<td colspan="2">
										<div class="botoes">
											<a href="banners.php" target="_self"><img src="design/imagens/botoes/voltar.jpg" title="voltar" border="0"></a>
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
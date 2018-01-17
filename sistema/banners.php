<?php
	session_start();
	
	include "verificacao.php";
	include "config.php";
	
	
	// exclui a linha 
	if (isset ($_GET['excluir'])){	
		 $id = $_GET['excluir'];
		$excluir = mysql_query("DELETE from banners WHERE id = $id");
	}
	
	//seleciona todos resultados da tabela
	$result = mysql_query("SELECT id, nome, imagem FROM banners order by nome");

	$num_linhas = mysql_num_rows($result);
	
	mysql_close($db);

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
					<h2><a href="formBanners.php" target="_self"><strong>+</strong> Adicionar novo</a></h2>
					<div class="busca">
						<input type="Text" name="busca" class="busca" value="Buscar"><input type="Image" src="design/imagens/botoes/busca.jpg" name="buscar" class="img">
					</div>
				</div>
				<div class="listagem">
					<h2>REGISTROS</h2>
					<br>
                    <?php
					
						if($num_linhas == 0){
                   			echo "<strong>Sem registros</strong>";
						}
						else {
							echo "<table cellpadding='0' cellspacing='0' border='0'>";
							echo "<tr class='header'><th>Nome</th><th width='20%'>Visualizar Banner</th><th class='noBorda' width='15%' style='padding-left:22px;'>Excluir</th></tr>";
									
							$y = 0;
							
							while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
								if( $y % 2 != 0 ){echo "<tr class='corSim'><td>";}
								else {echo "<tr><td>";}
								echo $row["nome"];
								echo "</td>";
								echo "<td ><a href='arquivos/banners/";
								echo $row["imagem"];
								echo "'target='_blank' title='clique para ver a imagem' rel='lytebox[banners]'><img src='design/imagens/icones/imagem.png' style='margin-left:40px;'></a></td>";								
								echo "<td class='noBorda'><a href='banners.php?excluir=";
								echo $row["id"];
								echo "'><img src='design/imagens/icones/excluir.png' style='margin-left:25px;'></a></tr>";	
								
								$y = $y + 1;							
							}
							
							echo "</table>";
						}
                   ?>
					
				</div>
				
			</div>
			
		</div>
		
    </div>
</div>

</body>
</html>




<?php
	session_start();
	
	include "verificacao.php";
	
	include "pontosClasses.php";
	
	$pontoDao = new PontoDao();
	$listagem = $pontoDao->listar();
	
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
					<h2><a href="formPonto.php" target="_self"><strong>+</strong> Adicionar novo</a></h2>
					<div class="busca">
						<input type="Text" name="busca" class="busca" value="Buscar"><input type="Image" src="design/imagens/botoes/busca.jpg" name="buscar" class="img">
					</div>
				</div>
				<div class="listagem">
					<h2>REGISTROS</h2>
					<br>
                    <?php 
						if ($listagem == false) { 
							echo "<strong>Sem registros</strong>";
						}
					
						else {
							echo "<table cellpadding='0' cellspacing='0' border='0'>";
							echo "<tr class='header'><th>Nome</th><th>Cidade</th><th class='noBorda'>Telefone</th></tr >";
							
							for($i=0; $i < count($listagem); $i++) { 
							 
								if( $i % 2 != 0 ){echo "<tr class='corSim'>";}
								else {echo "<tr>";}
								
								echo "<td><a href='pontoDetalhe.php?id="; echo $listagem[$i]['id']; echo"'>"; echo $listagem[$i]['nome']; echo "</a></td>" ;
								echo "<td>"; echo $listagem[$i]['cidade']; echo "&nbsp;-&nbsp;"; echo $listagem[$i]['estado']; echo "</td>";		
								echo "<td class='noBorda'>("; echo $listagem[$i]['ddd']; echo ")"; echo "&nbsp;"; echo $listagem[$i]['telefone']; echo "</td>";			
								echo "</tr>";		
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




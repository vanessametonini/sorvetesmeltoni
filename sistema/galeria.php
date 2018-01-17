<?php
	session_start();
	
	include "verificacao.php";
	
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
					<h1>Galeria de fotos </h1>
					<h2><a href="formGaleria.php" target="_self"><strong>+</strong> Adicionar novo</a></h2>
					<div class="busca">
						<input type="Text" name="busca" class="busca" value="Buscar"><input type="Image" src="design/imagens/botoes/busca.jpg" name="buscar" class="img">
					</div>
				</div>
				<div class="listagem">
					<h2>REGISTROS</h2>
					<br>
					<table cellpadding="0" cellspacing="0" border="0">
						<tr class="header">
							<th>Nome</th>
                            <th>Categoria</th>
                            <th class="noBorda">Excluir</th>
						</tr>
					
						<tr >
							<td>
								Producao	
							</td>
                            <td>
								Meltoni	
							</td>
							<td class="noBorda">
								Excluir
							</td>
							
						</tr>
						
					</table>
				</div>
				
			</div>
			
		</div>
		
    </div>
</div>

</body>
</html>




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
					<h1>Produtos</h1>
				</div>
				<div class="detalhe">
					<h2>Pote um litro Meltoni</h2>
                    <br clear="all" />
                    <div id="detalheRegistro">
                    	<h3>Tipo</h3>
                        Sorvete
                        
                    	<h3>SABORES:</h3> 
                       	Morango, chocolate, creme, limao, doce de leite.
                        <br />
                         
                        <h3>Peso:</h3>
                        1000ml
                        <br />
                        
                        <h3>Foto:</h3>
                        <img src="" /> ver maior, excluir
                        <br />
                         
                         <h3>Lançamento na home: </h3>
                         Sim
                         <br />
                      
                    </div>
                    <div class="controles">
                        <div class="botoes">
                            <a href="pontosLista.php" target="_self"><img src="design/imagens/botoes/voltar.jpg" title="Voltar" border="0"></a>
                            <a href="pontosLista.php" target="_self"><img src="design/imagens/botoes/excluir.jpg" title="Excluir registro" border="0"></a>
                            <a href="pontosLista.php" target="_self"><img src="design/imagens/botoes/alterar.jpg" title="Alterar registro" border="0"></a>
                        </div>
                    </div>
				</div>
				
			</div>
			
		</div>
		
    </div>
</div>

</body>
</html>




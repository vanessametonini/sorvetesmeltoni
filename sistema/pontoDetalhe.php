<?php
	session_start();
	
	include "verificacao.php";
	
	include "pontosClasses.php";
	$id = $_GET['id'];
	$pontoDao = new PontoDao();
	$detalhePonto = $pontoDao->listarSelecionado($id); 
	
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
        
    	<div class="detalhe">
    		<h2><?php echo $detalhePonto->getNome(); ?></h2>
    		<br clear="all" />
    		
            <div id="detalheRegistro">
				(<?php echo $detalhePonto->getDdd(); ?>) <?php echo $detalhePonto->getTelefone(); ?>
    			<br />
    			
				<?php 
                	$endereco = $detalhePonto->getEndereco();
                
					if ($endereco > "0") {
						echo "<h3>ENDEREÇO:</h3> $endereco <br>";
					}
					
					echo $detalhePonto->getCidade(); echo "&nbsp;-&nbsp;"; echo $detalhePonto->getEstado() ;
					echo "<br />";
					
					$email = $detalhePonto->getEmail();
					
					if ($email > "0"){
						echo "<h3>E-MAIL:</h3><a href='mailto:$email'> $email </a> <br />" ;
					}
					
					$site = $detalhePonto->getSite();
					
					if ($site > "0"){
						echo"<h3>SITE:</h3><a href='http://$site' target='_blank'>$site</a>";
					}
					
				?>
            </div>
            
            <div class="controles">
                <div class="botoes">
                    <a href="pontosLista.php" target="_self"><img src="design/imagens/botoes/voltar.jpg" title="Voltar" border="0"></a>
                    <a href="#" target="_self" onclick="apagarPonto(<?php echo $id?>);"><img src="design/imagens/botoes/excluir.jpg" title="Excluir registro" border="0"></a>
                    <a href="alterar.php?id=<?php echo $id?>" target="_self"><img src="design/imagens/botoes/alterar.jpg" title="Alterar registro" border="0"></a>
                </div>
            </div>
        </div>
    
    </div>

</div>

</body>
</html>




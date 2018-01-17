<?php
	session_start();
	
	include "verificacao.php";
	
	include "pontosClasses.php";

	$id = $_GET['id'];
	$pontoDao = new PontoDao();
	$exclui = $pontoDao->excluir($id); 
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
    		<h2>Excluido com Sucesso!</h2>
    	
            </div>
            
            <div class="controles">
                <div class="botoes">
                    <a href="pontosLista.php" target="_self"><img src="design/imagens/botoes/voltar.jpg" title="Voltar" border="0"></a>
                </div>
            </div>
        </div>
    
    </div>

</div>

</body>
</html>






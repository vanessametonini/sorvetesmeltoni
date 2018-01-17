<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<?php  $nomePagina = "Pontos de venda"; ?>
<?php require_once "_cabecalho.php" ?>
	
</head>

<body>

	<?php require_once "_topo.php" ?>
			
			<div class="centro">
                 <?php include "_subMenu_empresa.php"; ?>
                <div class="conteudoInternas" id="empresa">
                	<h1>Pontos de venda</h1>
                    <p> <img src="design/imagens/imagens/pontos-venda.jpg" border="0"> 
                        Confira qual é o ponto de venda mais próximo de sua casa:
                       
                        <ul class="pontosVenda">
                            <li><a href="detalhePontos.php" title="">Bagé</a></li>
                            <li><a href="detalhePontos.php" title="">Pinheiro Machado</a></li>
                            <li><a href="detalhePontos.php" title="">Candiota</a></li>
                            <li><a href="detalhePontos.php" title="">Aceguá</a></li>
                            <li><a href="detalhePontos.php" title="">Hulha Negra</a></li>
                            <li><a href="detalhePontos.php" title="">Dom Pedrito</a></li>
                            <li><a href="detalhePontos.php" title="">Santana do Livramento</a></li>
                        </ul>			
                        <br clear="all">
                    </p>
                </div>
                <div class="rodapeInternas" id="empresa"></div>

            </div>
			
		<?php require_once "_rodape.php" ?>

</body>
</html>

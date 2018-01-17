<?php

	include "classePontos.php";
	
	$listar = new Ponto();
	$listagem = $listar->listar();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<?php  $nomePagina = "Pontos de venda Meltoni"; ?>
<?php require_once "_cabecalho.php" ?>
	
</head>

<body>

	<?php require_once "_topo.php" ?>
			
			<div class="centro">
                <?php include "_subMenu_empresa.php"; ?>
                <div class="conteudoInternas" id="empresa">
                	<h1>Pontos de venda</h1>
                    <p> 
                    	 <strong>Confira qual é o ponto de venda mais próximo de sua casa:</strong><br>
                        <ul class="listaPontosVenda">
                        
							<?php 
                                if ($listagem == false) { 
                                    echo "<strong>Nenhum ponto de venda disponível no momento.</strong>";
                                }
                            
                                else {
                                   
                                    for($i=0; $i < count($listagem); $i++) { 
	
                                      	echo "<li>";
											echo "<h3>"; echo $listagem[$i]['nome']; echo"</h3><br clear='all'>";
											
											if (!empty($listagem[$i]['endereco'])){
												echo "<strong>Endereço:</strong><p>"; echo $listagem[$i]['endereco']; echo"</p>";
											}
											echo "<strong>Cidade:</strong><p>"; echo $listagem[$i]['cidade']; echo "&nbsp;-&nbsp;"; echo $listagem[$i]['estado']; echo"</p>";
											/*echo "<strong>Telefone:</strong><p>"; echo "("; echo $listagem[$i]['ddd']; echo ")&nbsp;"; echo $listagem[$i]['telefone']; echo"</p><br>";*/
											
											if (!empty($listagem[$i]['email'])){
												echo "<strong>E-mail:</strong><p>"; echo "<a href='mailto:'"; echo $listagem[$i]['email']; echo "'>"; echo $listagem[$i]['email']; echo "</a></p><br>";
											}
											if (!empty($listagem[$i]['site'])){
												echo "<strong>Site:</strong><p>"; echo "<a href='http://'"; echo $listagem[$i]['site']; echo "' target='_blank'>"; echo $listagem[$i]['site']; echo "</a></p><br>";
											}
                                      	echo "</li>";
                                    } 
                                    
                                } 
								
								
                            ?>
                           
                        </ul>
                        <br clear="all">
                    </p>
                </div>
                <div class="rodapeInternas" id="empresa"></div>

            </div>
			
		<?php require_once "_rodape.php" ?>

</body>
</html>

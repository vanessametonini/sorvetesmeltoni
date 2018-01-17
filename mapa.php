<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<?php  $nomePagina = "Mapa do site"; ?>
<?php require_once "_cabecalho.php" ?>
	
</head>

<body>

	<?php require_once "_topo.php" ?>
			
			<div class="centro">
                <div class="subMenu" id="produtos">  </div>
                
                <div class="conteudoInternas" id="mapa">
                	<h1>Mapa do site</h1>
                  
                     <div class="esquerda">
                    	<ul>
                        	<li>
                            	<h2>Empresa</h2>
								<ul class="listaMapa">
                                	<li><a href="empresa.php" target="_self" title="História">História</a></li>
                                    <li><a href="lojas.php" target="_self" title="Lojas">Lojas</a></li>
                                    <li><a href="pontos.php" target="_self" title="Pontos de venda">Pontos de venda</a></li>
                                    <li><a href="fotos.php" target="_self" title="Galeria de fotos">Galeria de fotos</a></li>
                                </ul>
                                <br clear="all">
                             </li>
                             <li>
                             	<h2>Produtos</h2>
								<ul class="listaMapa">
                                	<li><a href="produtos.php" target="_self" title="Sorvetes">Sorvetes</a></li>
                                    <li><a href="picoles.php" target="_self" title="Picolés">Picolés</a></li>
                                    <li><a href="sorvelandia.php" target="_self" title="Sorvelândia">Sorvelândia</a></li>
                                 </ul>
                             </li>
                        </ul>
                                    
                                    
                    </div>
                    <div class="direita">
                    		<ul>
                        	<li>
                            	<h2>Informações</h2>
								<ul class="listaMapa">
                                	<li><a href="informacoes.php" target="_self" title="Eventos e notícias">Eventos e notícias</a></li>
                                    <li><a href="curiosidades.php" target="_self" title="Curiosidades">Curiosidades</a></li>
                                    <li><a href="cuidados.php" target="_self" title="Cuidados com o sorvete">Cuidados com o sorvete</a></li>
                                </ul>
                                  <br clear="all">
                             </li>
                            <li class="linkado"><h2><a href="contato.php" target="_self" title="Contato">Contato</a></h2></li>
                            <li class="linkado"><h2><a href="restrito.php" target="_self" title="Extranet">Extranet</a></h2></li>
                        </ul>
                   		
                    </div>
                    
                     <br clear="all">
                </div>
                <div class="rodapeInternas" id="produtos"> </div>
            </div>
			
		<?php require_once "_rodape.php" ?>

</body>
</html>

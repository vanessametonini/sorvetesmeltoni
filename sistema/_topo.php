<div class="principal">
	
		<div class="esquerda">
		
    		<div class="logo">
				<a href="index.php" title="Sorvetes Meltoni" target="_self"><img src="design/imagens/logo.png" title="Logotipo Sorvetes Meltoni" border="0"></a>
			</div>
			
			<div class="menu">
				<ul>
					<li><a href="banners.php" title="Banners" target="_self">BANNERS</a></li>
					<li><a href="pontosLista.php" title="Pontos de venda" target="_self">PONTOS DE VENDA</a></li>
					<li><a href="galeria.php" title="Galeria de fotos" target="_self">GALERIA DE FOTOS</a></li>
					<li><a href="produtos.php" title="Produtos" target="_self">PRODUTOS</a></li>
					<li><a href="noticias.php" title="Notícias" target="_self">NOT&Iacute;CIAS</a></li>
					<li><a href="agenda.php" title="Agenda" target="_self">AGENDA</a></li>
				</ul>
			</div>
		</div>
		
		<div class="direita">
			<?php
				$hora = getdate();
				if ($hora['minutes'] < 10){
					$hora['minutes'] = "0".$hora['minutes'];
				}
			?>
			<div class="menuTopo">
				<ul>
					<li><a href="http://www.sorvetesmeltoni.com.br" title="Sorvetes Meltoni" target="_blank"><h2><img src="design/imagens/icones/versite.png" title="Ver site" border="0">VER SITE<img src="design/imagens/backgrounds/separador.gif" title="" border="0" class="separador"></h2></a></li>
					<li><h2><img src="design/imagens/icones/usuario.png" title="" border="0"><?php echo $nomeUsuario ?><img src="design/imagens/backgrounds/separador.gif" title="" border="0" class="separador"></h2></li>
					<li><h2><img src="design/imagens/icones/horas.png" title="" border="0"><?php echo ($hora['hours']) .":". ($hora['minutes']);?><img src="design/imagens/backgrounds/separador.gif" title="" border="0" class="separador"></h2></li>
					<li><a href="sair.php" title="" target="_self"><h2><img src="design/imagens/icones/sair.png" title="Sair" border="0">SAIR<img src="design/imagens/backgrounds/sepa.jpg" title="" border="0"></h2></a></li>
				</ul>
			</div>
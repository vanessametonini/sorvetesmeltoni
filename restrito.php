<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<?php  $nomePagina = "Acesso restrito"; ?>
<?php require_once "_cabecalho.php" ?>

  <script src="componentes/js/restrito.js"></script>
	
</head>

<body>

	<?php require_once "_topo.php" ?>
			
			<div class="centro">
                <div class="subMenu" id="informacoes">  </div>
                <div class="conteudoInternas" id="restrito">
                	<h1>Extranet</h1>
                    <br>
                    <form action="sistema/logar.php" method="post">
                        <fieldset>
                            <label for="login">Usuário:</label><input type="text" name="login" id="login" style="width:140px" maxlength="10" class="campos">
                            <label for="senha">Senha:</label><input type="password" name="senha" id="senha" style="width:140px" maxlength="6" class="campos">
                            <br><br>
                             <input type="submit" value="Entrar" name="enviar" class="entrar">
                        </fieldset>
                    </form>
                    <br clear="all">
                </div>
                <div class="rodapeInternas" id="informacoes"></div>

            </div>
			
		<?php require_once "_rodape.php" ?>

</body>
</html>

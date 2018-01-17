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
				<div class="formulario" align="center">
					<form action="formPonto.php" method="post">
						<fieldset>
							<legend>Preencha o formulário abaixo para inserir um novo produto</legend>
                            <br /><br />
							<table cellpadding="0" cellspacing="0" border="0">
								<tr>
									<td><label for="nome"><b>*</b>Nome do produto:</label></td>
									<td><input type="Text" name="nome" id="nome" class="inputGrande" maxlength="80"></td>
								</tr>
                                <tr>
									<td><label for="sabor"><b>*</b>Sabores:</label></td>
									<td><input type="Text" name="sabor" id="sabor" class="inputGrande" maxlength="80"></td>
								</tr>  
                                 <tr>
									<td><label for="peso"><b>*</b>Peso:</label></td>
									<td><input type="Text" name="peso" id="peso" class="inputGrande" maxlength="80"></td>
								</tr>
                                <tr>
									<td><label for="imagemGrande"><b>*</b>Imagem Grande:</label></td>
									<td><input type="file" name="imagemGrande" id="imagemGrande" class="" maxlength="80"></td>
								</tr>
                                <tr>
									<td><label for="imagemPequena"><b>*</b>Imagem Pequena:</label></td>
									<td><input type="file" name="imagemPequena" id="imagemPequena" class="" maxlength="80"></td>
								</tr>
                                 <tr>
									<td><label for="lancamento">Lançamento:</label></td>
									<td>Sim <input type="radio" name="lancamento" id="lancamento" /> Não <input type="radio" name="lancamento" /></td>
								</tr>
                                  <tr>
									<td><label for="categoria"><b>*</b>Categoria:</label></td>
									<td>
                                    	<select name="categoria" id="categoria">
                                        	<option selected="selected">Sorvete</option>
                                            <option>Picolé</option>
                                            <option>Sorvelândia</option>
                                        </select>
                                    </td>
								</tr>
							
								<tr>
									<td colspan="2">
										<div class="botoes">
											<a href="banners.php" target="_self"><img src="design/imagens/botoes/voltar.jpg" title="voltar" border="0"></a>
											<input type="image" name="enviar" src="design/imagens/botoes/enviar.jpg">
										</div>
									</td>
								</tr>
							</table>
							
						</fieldset>
					</form>
					
				</div>
				
			</div>
			
		</div>
		
    </div>
</div>

</body>
</html>




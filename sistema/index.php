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
				<div class="bemvindo">
					<div>
						Bem-vindo!<br>
						<?php echo $nomeUsuario ?>
						
					</div>
					<div class="tit">
						Ao Sistema Administrativo do site <br>
						Sorvetes Meltoni
					</div>
					
				</div>
			</div>
			
		</div>
		
    </div>
</div>

</body>
</html>




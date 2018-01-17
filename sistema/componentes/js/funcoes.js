// Vanessa Me Tonini


	function apagarPonto(id) {
		if (window.confirm('Tem certeza que deseja apagar este Ponto de Venda?')) {
			window.location.href = 'excluir.php?id='+id
		}
		else {}
	}

